<?php

namespace Zebua\Teriz\Middleware;

class AuthMiddleware implements Middleware
{
    function before(): void
    {
        if (!isset($_SESSION['app_sess_id'])) {
            header('location: ' . baseurl . '/user/login');
            exit();
        }
    }
}
