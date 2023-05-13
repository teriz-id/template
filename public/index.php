<?php

ini_set('display_error', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

if (!session_id()) session_start();

if (version_compare(phpversion(), '8', '<')) die('PHP 8 is required to run this software. Please upgrade your PHP version.');

require_once __DIR__ . '../../app/core.php';
