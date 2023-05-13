<?php

namespace Zebua\Teriz\App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class PHPMail
{
    public static $db;

    public static function setMessage($config)
    {
        self::$db = new Database;
        self::$db->query("SELECT * FROM settings WHERE config=:config");
        self::$db->bind('config', $config);
        return self::$db->single()['val'];
    }

    public static function checkUser($data)
    {
        self::$db = new Database;
        self::$db->query("SELECT * FROM users WHERE email=:email");
        self::$db->bind('email', $data);
        return self::$db->single();
    }

    public static function Message($subject, $body, $email)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = self::setMessage('host');
            $mail->SMTPAuth   = true;
            $mail->Username   = self::setMessage('username');
            $mail->Password   = self::setMessage('password');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = self::setMessage('port');

            //Recipients
            $mail->setFrom('noreplay@qondangan.com', 'noreplay-qondangan.com');
            $mail->addAddress($email, self::checkUser($email)['nama']);

            //Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $body;

            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
