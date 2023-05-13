<?php

namespace Zebua\Teriz\App;

class Model
{
    public static function teriz($model)
    {
        require __DIR__ . '../../Model/' . $model . '.php';

        return new $model;
    }
}
