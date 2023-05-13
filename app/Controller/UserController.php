<?php

namespace Zebua\Teriz\Controller;

use Zebua\Teriz\App\Model;
use Zebua\Teriz\App\View;

class UserController
{
    public function dashboard()
    {
        $model['model'] = null;
        View::render('Template/admin/header', $model);
        View::render('Template/admin/menu', $model);
        View::render('User/dashboard', $model);
        View::render('Template/admin/footer', $model);
    }
    public function profile()
    {
        $model['model'] = null;
        View::render('Template/admin/header', $model);
        View::render('Template/admin/menu', $model);
        View::render('User/profile', $model);
        View::render('Template/admin/footer', $model);
    }
}
