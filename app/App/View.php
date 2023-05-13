<?php

namespace Zebua\Teriz\App;

use Jenssegers\Blade\Blade;

class View
{
    private static $blade;

    public static function teriz(string $view, array $data = []): string
    {
        if (!isset(self::$blade)) {
            $views = ROOT . '/app/View';
            $cache = ROOT . '/public/cache';

            self::$blade = new Blade($views, $cache);
        }

        return self::$blade->make($view, $data)->render();
    }
}
