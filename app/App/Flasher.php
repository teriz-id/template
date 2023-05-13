<?php

class Flasher
{

    public static function setMessage($pesan = null, $aksi = null, $type = null)
    {

        $_SESSION['msg'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'type'  => $type
        ];
    }

    public static function Message()
    {
        if (isset($_SESSION['msg'])) {

            // echo '<div class="alert alert-' . $_SESSION['msg']['type'] . ' alert-dismissible fade show" role="alert">
            //         <strong>' . $_SESSION['msg']['pesan'] . '</strong> ' . $_SESSION['msg']['aksi'] . '
            //       </div>';
            echo '<div class="alert alert-' . $_SESSION['msg']['type'] . ' alert-dismissible fade show" role="alert">
                    ' . $_SESSION['msg']['pesan'] . ' ' . $_SESSION['msg']['aksi'] . '
                  </div>';

            unset($_SESSION['msg']);
        }
    }

    public static function ErrorLogin()
    {
        if (isset($_SESSION['msg'])) {
?>
            <div class="toast show w-100 mb-10" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-primary text-light">
                    <i class="fa-solid fa-circle-info text-light fs-2 me-3"><span class="path1"></span><span class="path2"></span></i>
                    <strong class="me-auto"><?= Lang::bhs('Terjadi Kesalahan') ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <?= $_SESSION['msg']['pesan'] ?>
                </div>
            </div>
<?php
            unset($_SESSION['msg']);
        }
    }
}
