<?php

use Zebua\Teriz\App\Database;

class Conf
{
    public static $db;

    public static function web($config)
    {
        self::$db = new Database;
        self::$db->query("SELECT * FROM settings WHERE config=:config");
        self::$db->bind('config', $config);
        return self::$db->single()['val'];
    }

    public static function getMeta()
    {
        $meta = [
            'title' => self::web('title'),
            'description' => self::web('description'),
            'keywords' => self::web('keywords')
        ];

        if (isset($_SERVER['PATH_INFO'])) :
            if ($_SERVER['PATH_INFO'] == '/feature') :
                $meta = [
                    'title' => 'Feature',
                    'description' => 'Deskripsi',
                    'keywords' => 'Keywords'
                ];
            endif;
        endif;

        return $meta;
    }
}

class User
{

    public static $db;

    public static function profile()
    {
        self::$db = new Database;
        self::$db->query("SELECT * FROM users WHERE user_id = :user_id");
        self::$db->bind('user_id', (isset($_SESSION['app_sess_id']) ? $_SESSION['app_sess_id'] : null));
        self::$db->execute();
        if (self::$db->rowCount() > 0) :
            return self::$db->single();
        else :
            return false;
        endif;
    }

    public static function folder()
    {
        if (isset($_SESSION['undangan'])) {
            return $_SESSION['undangan'];
        } else {
            return 0;
        }
    }
}

class Greeting
{
    public static function message()
    {
        $hour = date("H");

        if ($hour >= 0 && $hour < 12) {
            return "Selamat Pagi!";
        } else if ($hour >= 12 && $hour < 18) {
            return "Selamat Siang!";
        } else if ($hour >= 18 && $hour < 20) {
            return "Selamat Sore!";
        } else {
            return "Selamat Malam!";
        }
    }
}
