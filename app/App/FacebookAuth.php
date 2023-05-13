<?php

namespace Zebua\Teriz\App;

class FacebookAuth
{
    private $client_id;
    private $client_secret;
    private $redirect_uri;
    private $access_token;
    private $user_id;

    public function __construct($client_id, $client_secret, $redirect_uri)
    {
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
        $this->redirect_uri = $redirect_uri;
    }

    public function getLoginUrl()
    {
        $params = array(
            'client_id' => $this->client_id,
            'redirect_uri' => $this->redirect_uri,
            'response_type' => 'code',
            'scope' => 'email'
        );
        return 'https://www.facebook.com/dialog/oauth?' . http_build_query($params);
    }

    public function getAccessToken($code)
    {
        $params = array(
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
            'redirect_uri' => $this->redirect_uri,
            'code' => $code
        );
        $url = 'https://graph.facebook.com/v12.0/oauth/access_token?' . http_build_query($params);
        $response = file_get_contents($url);
        $params = json_decode($response, true);
        $this->access_token = $params['access_token'];
        return $this->access_token;
    }

    public function getUser()
    {
        if ($this->access_token) {
            $url = 'https://graph.facebook.com/v12.0/me?fields=id,name,email&access_token=' . $this->access_token;
            $response = file_get_contents($url);
            $user = json_decode($response);
            $this->user_id = $user->id;
            return $user;
        }
        return null;
    }

    public function getUserId()
    {
        return $this->user_id;
    }
}
