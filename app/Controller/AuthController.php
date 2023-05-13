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
        View::render('Auth/login');
    }

    public function register()
    {
        View::render('Auth/register');
    }

    function ResetPassword()
    {
        View::render('Auth/reset-password');
    }

    public function verify($auth_key)
    {
        $model['verify'] = Model::render('authModel')->checkAuth($auth_key);
        View::render('Auth/verification-whatsapp', $model);
    }

    function validasiwhatsapp()
    {
        Model::render('authModel')->validasiWhatsapp($_POST);
    }

    function resendotpwhatsapp()
    {
        Model::render('authModel')->resendOTPWhatsapp($_POST);
    }

    function ubahnomor()
    {
        Model::render('authModel')->ubahNomor($_POST);
    }

    function checkResetPassword()
    {
        Model::render('authModel')->checkResetPassword($_POST);
    }

    function konfirmasiResetPassword()
    {
        Model::render('authModel')->konfirmasiResetPassword($_POST);
    }

    function simpanPassword()
    {
        Model::render('authModel')->simpanPassword($_POST);
    }

    function verifyMail()
    {
        Model::render('authModel')->verifyMail($_POST);
    }

    function newjoiner()
    {
        Model::render('authModel')->checkNewJoiner($_POST);
    }

    public function auth()
    {
        Model::render('authModel')->auth($_POST);
    }

    function GoogleLogin()
    {
        Model::render('authModel')->GoogleLogin();
    }

    function FacebookLogin()
    {
        Model::render('authModel')->FacebookLogin();
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
