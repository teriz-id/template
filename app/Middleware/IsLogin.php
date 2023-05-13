<?php

namespace Zebua\Teriz\Middleware;

class IsLogin implements Middleware
{
    function before(): void
    {
        if (isset($_SESSION['app_sess_id'])) {
            header('location: /' . baseurl . '/user/dashboard');
            exit();
        }
    }
}
