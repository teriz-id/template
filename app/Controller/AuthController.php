<?php

namespace Zebua\Teriz\Controller;

use Zebua\Teriz\App\Model;
use Zebua\Teriz\App\View;

class AuthController
{
    public function index()
    {
        $this->login();
    }

    public function login()
    {
        echo View::teriz('Auth.login');
    }

    public function register()
    {
        echo View::teriz('Auth.register');
    }

    function ResetPassword()
    {
        echo View::teriz('Auth.reset-password');
    }

    public function verify($auth_key)
    {
        $model['verify'] = Model::teriz('authModel')->checkAuth($auth_key);
        echo View::teriz('Auth.verification-whatsapp', $model);
    }

    function validasiwhatsapp()
    {
        Model::teriz('authModel')->validasiWhatsapp($_POST);
    }

    function resendotpwhatsapp()
    {
        Model::teriz('authModel')->resendOTPWhatsapp($_POST);
    }

    function ubahnomor()
    {
        Model::teriz('authModel')->ubahNomor($_POST);
    }

    function checkResetPassword()
    {
        Model::teriz('authModel')->checkResetPassword($_POST);
    }

    function konfirmasiResetPassword()
    {
        Model::teriz('authModel')->konfirmasiResetPassword($_POST);
    }

    function simpanPassword()
    {
        Model::teriz('authModel')->simpanPassword($_POST);
    }

    function verifyMail()
    {
        Model::teriz('authModel')->verifyMail($_POST);
    }

    function newjoiner()
    {
        Model::teriz('authModel')->checkNewJoiner($_POST);
    }

    public function auth()
    {
        Model::teriz('authModel')->auth($_POST);
    }

    function GoogleLogin()
    {
        Model::teriz('authModel')->GoogleLogin();
    }

    function FacebookLogin()
    {
        Model::teriz('authModel')->FacebookLogin();
    }

    function logout()
    {
        session_destroy();
        setcookie('X-TZ-SESSION', '', -1, '/');
        if (isset($_SESSION['redirect']) && !empty($_SESSION['redirect'])) :
            header('location: ' . baseurl . $_SESSION['redirect']);
            unset($_SESSION['redirect']);
        else :
            header('location: /');
        endif;
    }
}
