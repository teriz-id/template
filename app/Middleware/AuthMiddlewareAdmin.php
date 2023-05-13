<?php

namespace Zebua\Teriz\Middleware;

use User;

class AuthMiddlewareAdmin implements Middleware
{
    function before(): void
    {
        if (!isset($_SESSION['app_sess_id']) || User::profile()['role'] !== 'admin') {
            header('location: ' . baseurl . '/user/dashboard');
            exit();
        }
    }
}
