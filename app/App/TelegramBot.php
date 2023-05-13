<?php

namespace Zebua\Teriz\App;

class TelegramBot
{
    protected $token;
    protected $username;
    protected $message;
    protected $db;

    public function __construct($token, $username, $message)
    {
        $this->token = $token;
        $this->username = $username;
        $this->message = $message;
        // $this->db = new Database;
    }

    protected function getChatId()
    {
        $url = "https://api.telegram.org/bot" . $this->token . "/getUpdates";

        $options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
        ];

        $ch = curl_init();
        curl_setopt_array($ch, $options);
        $response = curl_exec($ch);
        curl_close($ch);

        $updates = json_decode($response, true);

        $chat_id = null;

        if (!empty($updates['result'])) {
            foreach ($updates['result'] as $update) {
                if (!empty($update['message']['from']['username']) && $update['message']['from']['username'] == $this->username) {
                    $chat_id = $update['message']['chat']['id'];
                    break;
                }
            }
        }

        return $chat_id;
    }

    public function getChatids()
    {
        // $this->db->query("SELECT * FROM settings WHERE val = :val");
        // $this->db->bind(':val', $this->getChatId());
        // $this->db->execute();
        // if ($this->db->rowCount() > 0) {
        //     return $this->db->single();
        // }else{
        //     $query = 'UPDATE users SET nama = :nama, hp = :hp, telegram = :telegram WHERE user_id = :user_id';
        //     $this->db->query($query);
        //     $this->db->bind(':nama', $data['nama']);
        //     $this->db->bind(':hp', $data['hp']);
        //     $this->db->bind(':telegram', $data['telegram']);
        //     $this->db->bind(':user_id', $_SESSION['app_sess_id']);
        //     $this->db->execute();
        //     return $this->db->rowCount();
        // }
    }

    public function sendMessage()
    {
        $chat_id = $this->getChatId();

        if ($chat_id) {
            $url = "https://api.telegram.org/bot" . $this->token . "/sendMessage";

            $options = [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => [
                    'chat_id' => $chat_id,
                    'text' => $this->message,
                ],
            ];

            $ch = curl_init();
            curl_setopt_array($ch, $options);
            curl_exec($ch);
            curl_close($ch);
        }
    }
}
