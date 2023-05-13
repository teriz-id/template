<?php

namespace Zebua\Teriz\Middleware;

use Zebua\Teriz\App\Database;

class CheckLoginTwo implements Middleware
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function checkUser($data)
    {
        $this->db->query("SELECT * FROM users WHERE MD5(email) =:email AND is_verify=:is_verify AND is_block=:is_block");
        $this->db->bind(':email', $data);
        $this->db->bind(':is_verify', 'Yes');
        $this->db->bind(':is_block', 'No');
        return $this->db->single();
    }

    function before(): void
    {
        if (!isset($_SESSION['app_sess_id'])) {
            if (isset($_COOKIE['X-TZ-SESSION'])) {
                if ($this->checkUser($_COOKIE['X-TZ-SESSION']) > 0) {
                    $row = $this->checkUser($_COOKIE['X-TZ-SESSION']);
                    $_SESSION['app_sess_id'] = $row['user_id'];
                    $_SESSION['nama'] = $row['nama'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['lang'] = $row['lang'];
                } else {
                    $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
                    setcookie('X-TZ-SESSION', null, -1, '/');
                    header('location: ' . baseurl . '/user/login');
                    exit();
                }
            } else {
                $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
                setcookie('X-TZ-SESSION', null, -1, '/');
                header('location: ' . baseurl . '/user/login');
                exit();
            }
        } else {
            if ($this->checkUser($_COOKIE['X-TZ-SESSION']) < 1) {
                $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
                setcookie('X-TZ-SESSION', '', -1, '/');
                unset($_SESSION['app_sess_id']);
                header('location: ' . baseurl . '/user/login');
            }
        }
    }
}
