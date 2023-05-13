<?php

namespace Zebua\Teriz\App;

class WhatsappAPI
{
    private $apiUrl = "https://api-whatsapp.teriz.id/send-message";
    private $apiUrlBackup = "https://wapix.kitadigital.my.id/app/api/send-message";
    private $number;
    private $message;

    function __construct($number, $message)
    {
        $this->number = $number;
        $this->message = $message;
    }

    public function send()
    {
        $data = [
            'api_key' => '61VB6S5fvWCRZmXJeLc9s2426ro41l',
            'sender'  => '6285161117771',
            'number'  => $this->number,
            'message' => $this->message,
        ];
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $this->apiUrl,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($data),
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                )
            )
        );
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function backup()
    {
        $data = [
            'api_key' => '781e99ebd3b867486ae83e93a1332e55',
            'sender'  => '6285161117771',
            'number'  => $this->number,
            'message' => $this->message
        ];
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $this->apiUrlBackup,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($data)
            )
        );
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
}

// class WhatsappAPIBackup
// {
//     private $apiUrl = "https://wapix.kitadigital.my.id/app/api/send-message";
//     private $number;
//     private $message;

//     function __construct($number, $message)
//     {
//         $this->number = $number;
//         $this->message = $message;
//     }

//     public function send()
//     {
//         $data = [
//             'api_key' => '781e99ebd3b867486ae83e93a1332e55',
//             'sender'  => '6285161117771',
//             'number'  => $this->number,
//             'message' => $this->message
//         ];
//         $curl = curl_init();
//         curl_setopt_array(
//             $curl,
//             array(
//                 CURLOPT_URL => $this->apiUrl,
//                 CURLOPT_RETURNTRANSFER => true,
//                 CURLOPT_ENCODING => "",
//                 CURLOPT_MAXREDIRS => 10,
//                 CURLOPT_TIMEOUT => 0,
//                 CURLOPT_FOLLOWLOCATION => true,
//                 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//                 CURLOPT_CUSTOMREQUEST => "POST",
//                 CURLOPT_POSTFIELDS => json_encode($data)
//             )
//         );
//         $response = curl_exec($curl);
//         curl_close($curl);
//         return $response;
//     }
// }

// Contoh penggunaan:
// $wa = new WhatsappAPI("6281398888512", "Hello World");
// $response = $wa->send();
// echo $response;

// Cara penggunaan:
// $sender = new WhatsappAPIBackup('6281398888512', 'Pesan 1' . "\n" . 'Pesan 2');
// echo $sender->send();
