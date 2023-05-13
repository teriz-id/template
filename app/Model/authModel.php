<?php

use Zebua\Teriz\App\Database;
use Zebua\Teriz\App\FacebookAuth;
use Zebua\Teriz\App\GoogleAuth;
use Zebua\Teriz\App\TelegramBot;
use Zebua\Teriz\App\WhatsappAPI;

class authModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function checkUser($data)
    {
        $query = "SELECT * FROM users WHERE email = :email";
        $this->db->query($query);
        $this->db->bind(':email', $data);
        return $this->db->single();
    }

    public function checkHP($data)
    {
        $query = "SELECT * FROM users WHERE hp = :hp";
        $this->db->query($query);
        $this->db->bind(':hp', $data);
        return $this->db->single();
    }

    public function checkAuth($data)
    {
        $this->db->query("SELECT * FROM users WHERE auth_key=:auth_key");
        $this->db->bind(':auth_key', $data);
        $cek = $this->db->single();
        if ($cek > 0) {
            if ($cek['is_verify'] == 'Yes') {
                header('location: ' . baseurl . '/user/register');
                exit();
            }
            return $cek;
        } else {
            header('location: ' . baseurl . '/user/register');
            exit();
        }
    }

    function checkOtp($data)
    {
        $otp = $data['kode1'] . $data['kode2'] . $data['kode3'] . $data['kode4'] . $data['kode5'] . $data['kode6'];
        $this->db->query("SELECT * FROM users WHERE auth_key=:auth_key AND auth_otp=:auth_otp");
        $this->db->bind(':auth_key', $data['auth_key']);
        $this->db->bind(':auth_otp', $otp);
        return $this->db->single();
    }

    function validasiWhatsapp($data)
    {
        if ($this->checkOtp($data) > 0) {
            $validasi = $this->checkOtp($data);
            $current_time = date('Y-m-d H:i:s');
            $expiration_time = date('Y-m-d H:i:s', strtotime($validasi['exp_token_reset'] . ' +15 minutes'));
            if (strtotime($current_time) < strtotime($expiration_time)) {
                try {
                    $this->db->query("UPDATE users SET is_verify=:is_verify, auth_key=:auth_key, auth_otp=:auth_otp WHERE auth_key=:auth_keys");
                    $this->db->bind(':is_verify', 'Yes');
                    $this->db->bind(':auth_otp', null);
                    $this->db->bind(':auth_key', null);
                    $this->db->bind(':auth_keys', $data['auth_key']);
                    $this->db->execute();
                    header('Content-Type: application/json');
                    $response = array('status' => 'success', 'keterangan' => Lang::bhs('Whatsapp kamu berhasil di verifikasi.'), 'url' => baseurl . '/user/login');
                    echo json_encode($response);
                    exit();
                } catch (PDOException $e) {
                    header('Content-Type: application/json');
                    $qrcode = array('status' => 'failed', 'keterangan' => Lang::bhs('Gagal verifikasi akun.'));
                    echo json_encode($qrcode);
                }
            } else {
                header('Content-Type: application/json');
                $response = array('status' => 'kadaluarsa', 'keterangan' => 'Kode Verifikasi kamu telah kadaluarsa.', 'key' => $data['auth_key'], 'url' => baseurl . '/user/register/resendotpwhatsapp');
                echo json_encode($response);
                exit();
            }
        } else {
            header('Content-Type: application/json');
            $response = array('status' => 'failed', 'keterangan' => 'Kode OTP tidak valid.');
            echo json_encode($response);
            exit();
        }
    }

    function ubahNomor($data)
    {
        if ($this->checkAuth($data['auth_key']) > 0) {
            $nohp = preg_replace('/[^0-9]/', '', $data['whatsapp']);
            $hp = ltrim($nohp, '0');
            $whatsapp = $data['negara'] . $hp;
            $pola = '/^\d{10,14}$/';
            if (!preg_match($pola, $whatsapp)) {
                header('Content-Type: application/json');
                $response = array('status' => 'failed', 'keterangan' => Lang::bhs('Nomor Whatsapp tidak valid. '));
                echo json_encode($response);
                exit();
            }
            if ($this->checkHP($whatsapp) > 0) {
                header('Content-Type: application/json');
                $response = array('status' => 'failed', 'keterangan' => Lang::bhs('Nomor HP telah digunakan!'));
                echo json_encode($response);
                exit();
            }
            $otp = rand(100000, 999999);
            try {
                $sender = new WhatsappAPI($whatsapp, 'Kode Verifikasi Qondangan *' . $otp . '*' . "\n\n" . 'JANGAN berikan kode rahasia ini kepada siapapun, termasuk pihak yang mengaku dari Qondangan ' . "\n\n" . 'Kode kadaluarsa dalam 15 Menit' . "\n\n" . 'Hubungi Admin jika butuh bantuan');
                $timeout = 10;
                $start_time = time();
                while (time() - $start_time < $timeout) {
                    $respon = json_decode($sender->send());
                    if ($respon->status == true) {
                        $this->db->query("UPDATE users SET hp=:hp, exp_token_reset=:exp_token_reset, auth_otp=:auth_otp WHERE auth_key=:auth_key");
                        $this->db->bind(':hp', $whatsapp);
                        $this->db->bind(':exp_token_reset', date('Y-m-d H:i:s'));
                        $this->db->bind(':auth_otp', $otp);
                        $this->db->bind(':auth_key', $data['auth_key']);
                        $this->db->execute();
                        if ($this->db->rowCount() > 0) {
                            header('Content-Type: application/json');
                            $response = array('status' => 'success', 'keterangan' => Lang::bhs('Nomor handphone berhasil diubah dan mengirim ulang kode verifikasi.'), 'whatsapp' => substr($whatsapp, 0, 5) . '-' . substr($whatsapp, 5, 4) . '-' . substr($whatsapp, 9));
                            echo json_encode($response);
                            exit();
                        }
                    }
                    sleep(1);
                }
                header('Content-Type: application/json');
                $response = array('status' => 'error', 'keterangan' => 'Timeout: Periksa kembali nomor kamu.');
                echo json_encode($response);
            } catch (PDOException) {
                header('Content-Type: application/json');
                $response = array('status' => 'failed', 'keterangan' => Lang::bhs('Gagal mengubah nomor handphone!'));
                echo json_encode($response);
                exit();
            }
        } else {
            header('Content-Type: application/json');
            $response = array('status' => 'failed', 'keterangan' => 'Auth Key tidak ditemukan.');
            echo json_encode($response);
            exit();
        }
    }

    function resendOTPWhatsapp($data)
    {
        if ($this->checkAuth($data['key']) > 0) {
            $user = $this->checkAuth($data['key']);
            $otp = rand(100000, 999999);
            try {
                $sender = new WhatsappAPI($user['hp'], 'Kode Verifikasi Qondangan *' . $otp . '*' . "\n\n" . 'JANGAN berikan kode rahasia ini kepada siapapun, termasuk pihak yang mengaku dari Qondangan ' . "\n\n" . 'Kode kadaluarsa dalam 15 Menit' . "\n\n" . 'Hubungi Admin jika butuh bantuan');
                $timeout = 10;
                $start_time = time();
                while (time() - $start_time < $timeout) {
                    $respon = json_decode($sender->send());
                    if ($respon->status == true) {
                        $this->db->query("UPDATE users SET exp_token_reset=:exp_token_reset, auth_otp=:auth_otp WHERE auth_key=:auth_key");
                        $this->db->bind(':exp_token_reset', date('Y-m-d H:i:s'));
                        $this->db->bind(':auth_otp', $otp);
                        $this->db->bind(':auth_key', $data['key']);
                        $this->db->execute();
                        if ($this->db->rowCount() > 0) {
                            header('Content-Type: application/json');
                            $response = array('status' => 'success', 'keterangan' => Lang::bhs('Kode Verifikasi berhasil dikirim ulang.'));
                            echo json_encode($response);
                        }
                    }
                    sleep(1);
                }
                header('Content-Type: application/json');
                $response = array('status' => 'error', 'keterangan' => 'Timeout: API Whatsapp tidak merespon.');
                echo json_encode($response);
            } catch (PDOException) {
                header('Content-Type: application/json');
                $response = array('status' => 'failed', 'keterangan' => Lang::bhs('Gagal mengirim ulang kode verifikasi!'));
                echo json_encode($response);
                exit();
            }
        } else {
            header('Content-Type: application/json');
            $response = array('status' => 'failed', 'keterangan' => 'Auth Key tidak ditemukan.');
            echo json_encode($response);
            exit();
        }
    }

    public function auth($data)
    {
        if ($this->checkUser($data['email']) > 0) {
            $user = $this->checkUser($data['email']);
            if ($user['password'] == md5($data['password'])) {
                if ($user['is_verify'] == 'Yes') {
                    if ($user['is_block'] == 'No') {
                        $_SESSION['app_sess_id'] = $user['user_id'];
                        $_SESSION['nama'] = $user['nama'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['role'] = $user['role'];
                        $_SESSION['lang'] = $user['lang'];
                        setcookie("X-TZ-SESSION", MD5($user['email']), time() + (86400 * 30 * 30), '/');
                        unset($_SESSION['redirect']);
                        // $sender = new WhatsappAPI($user['hp'], 'Login History 1');
                        // $sender->send();
                        header('Content-Type: application/json');
                        $response = array('status' => 'success', 'keterangan' => $user['nama'], 'url' => baseurl . '/user/dashboard');
                        echo json_encode($response);
                        exit();
                    } else {
                        header('Content-Type: application/json');
                        $response = array('status' => 'terblokir', 'keterangan' => Lang::bhs('Akun kamu terblokir, hubungi admin untuk mengaktifkan kembali.'), 'url' => 'https://wa.me/6285161117771');
                        echo json_encode($response);
                        exit();
                    }
                } else {
                    header('Content-Type: application/json');
                    $response = array('status' => 'verify whatsapp', 'keterangan' => Lang::bhs('Kamu belum verifikasi Whatsapp nih, verifikasi yuk.'), 'url' => baseurl . '/user/register/verification/' . $user['auth_key']);
                    echo json_encode($response);
                    exit();
                }
            } else {
                header('Content-Type: application/json');
                $response = array('status' => 'failed', 'keterangan' => 'Password tidak sesuai.');
                echo json_encode($response);
                exit();
            }
        } else {
            header('Content-Type: application/json');
            $response = array('status' => 'notfound', 'keterangan' => 'Email kamu tidak terdaftar.', 'url' => baseurl . '/user/register');
            echo json_encode($response);
            exit();
        }
    }

    public function GoogleLogin()
    {
        $google_auth = new GoogleAuth(Conf::web('google_client_id'), Conf::web('google_client_secret'), ($_SERVER['HTTP_HOST'] == 'localhost:8080' ? 'http:' : 'https:') . baseurl . Conf::web('google_redirect_uri'));

        if (isset($_GET["code"])) {
            $access_token = $google_auth->getAccessToken($_GET["code"]);
            $user_info = $google_auth->getUserInfo($access_token);
            if ($this->checkUser($user_info->email) > 0) {
                $user = $this->checkUser($user_info->email);
                if ($user['is_verify'] == 'No') {
                    Flasher::setMessage(Lang::bhs('Kamu belum verifikasi whatsapp kamu.') . ' <a href="/user/register/verification/' . $user['auth_key'] . '" class="link-primary">' . Lang::bhs('Verifikasi disini.') . '</a>', null, null);
                    header('location: ' . baseurl . '/user/login');
                    exit();
                }
                if ($user['is_block'] == 'Yes') {
                    Flasher::setMessage(Lang::bhs('Akun kamu terblokir, hubungi <a href="https://wa.me/6285161117771" target="_blank" class="link-primary">' . Lang::bhs('Admin') . '</a> untuk mengaktifkan kembali.'), null, null);
                    header('location: ' . baseurl . '/user/login');
                    exit();
                }
                try {
                    $this->db->query("UPDATE users SET avatar=:avatar WHERE email=:email");
                    $this->db->bind(':avatar', $user_info->picture);
                    $this->db->bind(':email', $user_info->email);
                    $this->db->execute();
                } catch (PDOException) {
                    header('Content-Type: application/json');
                    $qrcode = array('status' => 'failed', 'keterangan' => Lang::bhs('Gagal update profil.'));
                    echo json_encode($qrcode);
                }
            } else {
                Flasher::setMessage(Lang::bhs('Email google kamu tidak terdaftar!'), null, null);
                header('location: ' . baseurl . '/user/login');
                exit();
            }

            $_SESSION['app_sess_id'] = $user['user_id'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['lang'] = $user['lang'];
            setcookie("X-TZ-SESSION", MD5($user['email']), time() + (86400 * 30 * 30), '/');
            header('location: ' . baseurl . '/user/dashboard');
            unset($_SESSION['redirect']);
            exit();
        } else {
            $login_url = $google_auth->getLoginUrl("some_random_state");
            header("Location: " . $login_url);
            exit;
        }
    }

    function checkNewJoiner($data)
    {
        if ($this->checkUser($data['email']) > 0) {
            header('Content-Type: application/json');
            $response = array('status' => 'already', 'keterangan' => 'Email sudah terdaftar.', 'url' => baseurl . '/user/login');
            echo json_encode($response);
            exit();
        }
        $nohp = preg_replace('/[^0-9]/', '', $data['whatsapp']);
        $hp = ltrim($nohp, '0');
        $whatsapp = $data['negara'] . $hp;
        $pola = '/^\d{10,14}$/';
        if (!preg_match($pola, $whatsapp)) {
            header('Content-Type: application/json');
            $response = array('status' => 'failed', 'keterangan' => Lang::bhs('Nomor Whatsapp tidak valid. '));
            echo json_encode($response);
            exit();
        }
        if ($this->checkHP($whatsapp) > 0) {
            header('Content-Type: application/json');
            $response = array('status' => 'failed', 'keterangan' => Lang::bhs('Nomor HP telah digunakan!'));
            echo json_encode($response);
            exit();
        }
        if (strlen($data['password']) < 8) {
            header('Content-Type: application/json');
            $response = array('status' => 'failed', 'keterangan' => Lang::bhs('Password minimal 8 karakter atau lebih dengan kombinasi huruf, angka & simbol.'));
            echo json_encode($response);
            exit();
        }
        if ($data['password'] !== $data['confirm-password']) {
            header('Content-Type: application/json');
            $response = array('status' => 'failed', 'keterangan' => Lang::bhs('Kata sandi tidak sesuai!'));
            echo json_encode($response);
            exit();
        }

        $otp = rand(100000, 999999);
        $username = explode('@', $data['email']);
        $authkey = md5(time());
        try {
            $sender = new WhatsappAPI($whatsapp, 'Kode Verifikasi Qondangan *' . $otp . '*' . "\n\n" . 'JANGAN berikan kode rahasia ini kepada siapapun, termasuk pihak yang mengaku dari Qondangan ' . "\n\n" . 'Kode kadaluarsa dalam 15 Menit' . "\n\n" . 'Hubungi Admin jika butuh bantuan');
            $timeout = 10;
            $start_time = time();
            while (time() - $start_time < $timeout) {
                $respon = json_decode($sender->send());
                if ($respon->status == true) {
                    $this->db->query("INSERT INTO users SET nama=:nama, email=:email, hp=:hp, username=:username, password=:password, exp_token_reset=:exp_token_reset, auth_key=:auth_key, auth_otp=:auth_otp, lang=:lang");
                    $this->db->bind(':nama', $data['nama']);
                    $this->db->bind(':email', $data['email']);
                    $this->db->bind(':hp', $whatsapp);
                    $this->db->bind(':username', $username[0]);
                    $this->db->bind(':password', md5($data['password']));
                    $this->db->bind(':exp_token_reset', date('Y-m-d H:i:s'));
                    $this->db->bind(':auth_key', $authkey);
                    $this->db->bind(':auth_otp', $otp);
                    $this->db->bind(':lang', 'id');
                    $this->db->execute();
                    if ($this->db->rowCount() > 0) {
                        header('Content-Type: application/json');
                        $response = array('status' => 'success', 'keterangan' => Lang::bhs('Data user berhasil disimpan'), 'url' => baseurl . '/user/register/verification/' . $authkey);
                        echo json_encode($response);
                        exit();
                    }
                }
                sleep(1);
            }
            $tele = new TelegramBot('5873505936:AAF1SU3f2ap1wdrXgrRJkSkEhfgQNicPOsc', '799194688', 'error nih');
            $tele->sendMessage();
            header('Content-Type: application/json');
            $response = array('status' => 'error', 'keterangan' => 'Timeout: API Whatsapp tidak merespon.');
            echo json_encode($response);
        } catch (PDOException) {
            header('Content-Type: application/json');
            $response = array('status' => 'failed', 'keterangan' => Lang::bhs('Gagal menyimpan data user.'));
            echo json_encode($response);
            exit();
        }
    }

    public function FacebookLogin()
    {
        $facebook = new FacebookAuth('340973540875063', '015bba8a5d30c634693c9a025e3a4748', ($_SERVER['HTTP_HOST'] == 'localhost' ? 'http:' : 'https:') . baseurl . '/user/login/facebook');
        if (!empty($_GET['code'])) {
            $code = $_GET['code'];
            $access_token = $facebook->getAccessToken($code);
            $user = $facebook->getUser();

            if ($this->checkUser($user->email) > 0) {
                $user = $this->checkUser($user->email);
            } else {
                Flasher::setMessage(Lang::bhs('Email facebook kamu tidak terdaftar!'), null, null);
                header('location: ' . baseurl . '/user/login');
                exit();
            }

            $_SESSION['app_sess_id'] = $user['user_id'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['lang'] = $user['lang'];
            setcookie("X-TZ-SESSION", MD5($user['email']), time() + (86400 * 30 * 30), '/');
            if (isset($_SESSION['redirect']) && !empty($_SESSION['redirect'])) {
                header('location: ' . baseurl . $_SESSION['redirect']);
                unset($_SESSION['redirect']);
            } else {
                header('location: ' . baseurl . '/user/dashboard');
            }
            exit();
        } else {
            $login_url = $facebook->getLoginUrl();
            header('Location: ' . $login_url);
        }
    }

    function checkResetPassword($data)
    {
        if (empty($data['email'])) {
            header('Content-Type: application/json');
            $response = array('status' => 'failed', 'keterangan' => Lang::bhs('Email wajib diisi.'));
            echo json_encode($response);
            exit();
        }

        if ($this->checkUser($data['email']) > 0) {
            $otp = rand(100000, 999999);
            $authkey = md5(time());
            $user = $this->checkUser($data['email']);
            $sender = new WhatsappAPI($user['hp'], 'Kode Verifikasi Qondangan *' . $otp . '*' . "\n\n" . 'JANGAN berikan kode rahasia ini kepada siapapun, termasuk pihak yang mengaku dari Qondangan ' . "\n\n" . 'Kode kadaluarsa dalam 15 Menit' . "\n\n" . 'Hubungi Admin jika butuh bantuan');
            $timeout = 10;
            $start_time = time();
            while (time() - $start_time < $timeout) {
                $respon = json_decode($sender->send());
                if ($respon->status == true) {
                    $this->db->query("UPDATE users SET exp_token_reset=:exp_token_reset, auth_key=:auth_key, auth_otp=:auth_otp WHERE email=:email");
                    $this->db->bind(':exp_token_reset', date('Y-m-d H:i:s'));
                    $this->db->bind(':auth_key', $authkey);
                    $this->db->bind(':auth_otp', $otp);
                    $this->db->bind(':email', $data['email']);
                    $this->db->execute();
                    if ($this->db->rowCount() > 0) {
                        header('Content-Type: application/json');
                        $response = array('status' => 'success', 'keterangan' => Lang::bhs('Kode konfirmasi berhasil dikirim.'), 'data' => $this->dataHalamanVerifikasi($user['hp'], $authkey));
                        echo json_encode($response);
                        exit();
                    }
                }
                sleep(1);
            }
            $tele = new TelegramBot('5873505936:AAF1SU3f2ap1wdrXgrRJkSkEhfgQNicPOsc', '@terisz', 'error nih');
            $tele->sendMessage();
            header('Content-Type: application/json');
            $response = array('status' => 'error', 'keterangan' => 'Timeout: API Whatsapp tidak merespon.');
            echo json_encode($response);
        } else {
            header('Content-Type: application/json');
            $response = array('status' => 'failed', 'keterangan' => Lang::bhs('Email kamu tidak terdaftar.'));
            echo json_encode($response);
            exit();
        }
    }

    function dataHalamanVerifikasi($hp, $key)
    {
        return '
        <div class="py-10 pb-10">
            <form class="form w-100 mb-10" novalidate="novalidate" id="formKonfirmasi" action="' . baseurl . '/user/reset-password/konfirmasi" method="POST">
                <div class="text-center mb-10">
                    <img alt="Logo" class="theme-light-show mh-125px" src="' . baseurl . '/static/admin/media/svg/misc/smartphone-2.svg" />
                    <img alt="Logo" class="theme-dark-show mh-125px" src="' . baseurl . '/static/admin/media/svg/misc/smartphone-2-dark.svg" />
                </div>
                <div class="text-center mb-10">
                    <h1 class="text-dark mb-3">' . Lang::bhs('Konfirmasi bahwa ini kamu.') . '</h1>
                    <div class="text-muted fw-semibold fs-5 mb-5" >' . Lang::bhs('Kami telah mengirimkan kode konfirmasi Ke WhatsApp kamu.') . '</div>
                    <div class="fw-bold text-dark fs-3">
                        <div class="fw-bold text-dark fs-3">+' . substr_replace($hp, '******', 3, 6) . '</div> 
                    </div>
                </div>
                <div class=" mb-10">
                    <div class="text-muted fw-semibold text-start fs-6 mb-1 ms-1">' . Lang::bhs('Masukkan 6 digit OTP kamu.') . '</div>
                    <div class="d-flex flex-wrap flex-stack">
                        <input type="text" id="fokus" name="kode1" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                        <input type="text" name="kode2" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                        <input type="text" name="kode3" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                        <input type="text" name="kode4" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                        <input type="text" name="kode5" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                        <input type="text" name="kode6" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                    </div>
                </div>
                <input type="hidden" name="auth_key" value="' . $key . '">
                <div class="text-center">
                    <button class="btn btn-primary" type="submit" disabled>
                        <span class="indicator-label konfirmasi">' . Lang::bhs('Konfirmasi') . '</span>
                    </button>
                </div>
            </form>
        </div>';
    }

    function konfirmasiResetPassword($data)
    {
        if ($this->checkOtp($data) > 0) {
            $user = $this->checkOtp($data);
            header('Content-Type: application/json');
            $response = array('status' => 'success', 'keterangan' => 'Kode OTP valid.', 'data' => $this->halamanPasswordBaru($user['auth_key']));
            echo json_encode($response);
            exit();
        } else {
            header('Content-Type: application/json');
            $response = array('status' => 'failed', 'keterangan' => 'Kode OTP tidak valid.');
            echo json_encode($response);
            exit();
        }
    }

    function halamanPasswordBaru($data)
    {
        return '
        <form class="form w-100" novalidate="novalidate" id="formSetupPassword" action="' . baseurl . '/user/reset-password/simpan" method="POST">
            <div class="text-start mb-10">
                <h1 class="text-dark mb-3 fs-3x">' . Lang::bhs('Buat Password Baru') . '</h1>
                <div class="text-gray-400 fw-semibold fs-6">' . Lang::bhs('Masukkan dan konfirmasi kata sandi baru.') . '</div>
            </div>
            <div class="mb-10 fv-row" data-kt-password-meter="true">
                <div class="mb-1">
                    <div class="position-relative mb-3">
                        <input class="form-control form-control-lg form-control-solid" type="password" placeholder="' . Lang::bhs('Kata sandi') . '" name="password" autocomplete="off" />
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                            <i class="bi bi-eye-slash fs-2"></i>
                            <i class="bi bi-eye fs-2 d-none"></i>
                        </span>
                    </div>
                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                    </div>
                </div>
                <div class="text-muted">' . Lang::bhs('Password minimal 8 karakter atau lebih dengan kombinasi huruf, angka & simbol.') . '</div>
            </div>
            <div class="fv-row mb-10">
                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="' . Lang::bhs('Konfirmasi kata sandi') . '" name="confirm-password" autocomplete="off" />
            </div>
            <input type="hidden" name="auth_key" value="' . $data . '">
            <div class="d-flex flex-stack">
                <button class="btn btn-primary" type="submit">
                    <span class="indicator-label simpanpass">' . Lang::bhs('Simpan') . '</span>
                </button>
            </div>
        </form>';
    }

    function simpanPassword($data)
    {
        if (empty($data['password']) || empty($data['confirm-password'])) {
            header('Content-Type: application/json');
            $response = array('status' => 'failed', 'keterangan' => Lang::bhs('Kata sandi tidak boleh kosong!'));
            echo json_encode($response);
            exit();
        }
        if (strlen($data['password']) < 8) {
            header('Content-Type: application/json');
            $response = array('status' => 'failed', 'keterangan' => Lang::bhs('Password minimal 8 karakter atau lebih dengan kombinasi huruf, angka & simbol.'));
            echo json_encode($response);
            exit();
        }
        if ($data['password'] !== $data['confirm-password']) {
            header('Content-Type: application/json');
            $response = array('status' => 'failed', 'keterangan' => Lang::bhs('Kata sandi tidak sesuai!'));
            echo json_encode($response);
            exit();
        }

        $this->db->query("SELECT * FROM users WHERE auth_key=:auth_key");
        $this->db->bind(':auth_key', $data['auth_key']);
        $cek = $this->db->single();
        if ($cek > 0) {
            try {
                $this->db->query("UPDATE users SET password=:password WHERE auth_key=:auth_key");
                $this->db->bind(':password', md5($data['password']));
                $this->db->bind(':auth_key', $data['auth_key']);
                $this->db->execute();
                header('Content-Type: application/json');
                $response = array('status' => 'success', 'keterangan' => Lang::bhs('Password kamu berhasil diupdate.'), 'url' => baseurl . '/user/login');
                echo json_encode($response);
                exit();
            } catch (PDOException) {
                header('Content-Type: application/json');
                $response = array('status' => 'failed', 'keterangan' => 'Gagal mengubah kata sandi.');
                echo json_encode($response);
                exit();
            }
        }
        header('Content-Type: application/json');
        $response = array('status' => 'failed', 'keterangan' => 'User tidak ditemukan.');
        echo json_encode($response);
        exit();
    }
}
