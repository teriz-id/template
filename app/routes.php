<?php

require_once __DIR__ . '../../vendor/autoload.php';

use Zebua\Teriz\App\Router;
use Zebua\Teriz\Controller\{HomeController, AuthController, UserController};
use Zebua\Teriz\Middleware\{IsLogin, CheckLogin};

// Router::add('GET', '/contoh/([0-9a-zA-Z-_ ]*)', UndanganController::class, 'contoh');
// lading pages
Router::add('GET', '/', HomeController::class, 'index');
//user
Router::add('GET', '/user', AuthController::class, 'index');
Router::add('GET', '/user/login', AuthController::class, 'login', [IsLogin::class]);
Router::add('GET', '/user/login/google', AuthController::class, 'GoogleLogin', [IsLogin::class]);
Router::add('GET', '/user/login/facebook', AuthController::class, 'FacebookLogin', [IsLogin::class]);
Router::add('POST', '/user/login/auth', AuthController::class, 'auth');
// register
Router::add('GET', '/user/register', AuthController::class, 'register', [IsLogin::class]);
Router::add('POST', '/user/register/newjoiner', AuthController::class, 'newjoiner', [IsLogin::class]);
Router::add('GET', '/user/register/verification/([0-9a-zA-Z]*)', AuthController::class, 'verify');
Router::add('POST', '/user/register/validasiwhatsapp', AuthController::class, 'validasiwhatsapp');
Router::add('POST', '/user/register/resendotpwhatsapp', AuthController::class, 'resendotpwhatsapp');
Router::add('POST', '/user/register/ubahnomor', AuthController::class, 'ubahnomor');
// reset password
Router::add('GET', '/user/reset-password', AuthController::class, 'ResetPassword', [IsLogin::class]);
Router::add('POST', '/user/reset-password/check', AuthController::class, 'checkResetPassword', [IsLogin::class]);
Router::add('POST', '/user/reset-password/konfirmasi', AuthController::class, 'konfirmasiResetPassword', [IsLogin::class]);
Router::add('POST', '/user/reset-password/simpan', AuthController::class, 'simpanPassword', [IsLogin::class]);
// portal user
Router::add('GET', '/user/dashboard', UserController::class, 'dashboard', [CheckLogin::class]);
Router::add('GET', '/user/profile', UserController::class, 'profile', [CheckLogin::class]);
// logout
Router::add('GET', '/user/logout', AuthController::class, 'logout');

Router::run();
