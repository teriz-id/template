<?php

namespace Zebua\Teriz\Controller;

use Zebua\Teriz\App\Model;
use Zebua\Teriz\App\View;

class HomeController
{
    public function index(): void
    {
        $this->home();
    }

    public function home(): void
    {
        $model['user'] = Model::teriz('authModel')->checkUser('terzebua@gmail.com');
        echo View::teriz('Home.index', $model);
    }

    public function welcome(): void
    {
        $model['model'] = 'Model';
        echo View::teriz('welcome', $model);
    }
}
