<?php

class Lang
{
    private static $bahasa;
    private static $identitas;

    // public static function identitas()
    // {
    //     if ($_SERVER['HTTP_HOST'] == 'dev-qondangan.com' || 'localhost') :
    //         self::$identitas = json_decode(file_get_contents("https://ipinfo.io/?token=aaa85a1fc16aa3"));
    //         return self::$identitas;
    //     else :
    //         self::$identitas = json_decode(file_get_contents("https://ipinfo.io/{$_SERVER['REMOTE_ADDR']}?token=aaa85a1fc16aa3"));
    //         return self::$identitas;
    //     endif;
    // }

    public static function bhs($kode, $data = null)
    {
        // if not $kode
        if (!$kode) {
            return null;
        }

        if ($data) {
            foreach ($data as $var => $value) {
                ${$var} = $value;
            }
        }

        // load file bahasa
        if (!self::$bahasa) {
            if (isset($_COOKIE['lang'])) :
                self::$bahasa = require_once '../storage/languages/' . $_COOKIE['lang'] . '.php';
            else :
                if (isset($_COOKIE['lang'])) :
                    self::$bahasa = require_once '../storage/languages/' . $_COOKIE['lang'] . '.php';
                else :
                    self::$bahasa = require_once '../storage/languages/id.php';
                endif;
            endif;
        }

        // cek array apakah ada
        if (!array_key_exists($kode, self::$bahasa)) {
            return $kode;
        }

        return self::$bahasa[$kode];
    }
}
