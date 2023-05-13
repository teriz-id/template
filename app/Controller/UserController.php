<?php

namespace Zebua\Teriz\Controller;

use User;
use Zebua\Teriz\App\View;

class UserController
{
    public function dashboard()
    {
        $model['model'] = null;
        echo View::teriz('User.dashboard', $model);
    }
    public function profile()
    {
        $model['user'] = User::profile();
        echo View::teriz('User.profile', $model);
    }
}
