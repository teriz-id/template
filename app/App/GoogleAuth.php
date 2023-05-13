<?php

namespace Zebua\Teriz\App;

class GoogleAuth
{
    private $client_id;
    private $client_secret;
    private $redirect_uri;
    private $auth_url = "https://accounts.google.com/o/oauth2/auth";
    private $token_url = "https://accounts.google.com/o/oauth2/token";
    private $info_url = "https://www.googleapis.com/oauth2/v1/userinfo";

    public function __construct($client_id, $client_secret, $redirect_uri)
    {
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
        $this->redirect_uri = $redirect_uri;
    }

    public function getLoginUrl($state)
    {
        $params = array(
            "response_type" => "code",
            "client_id" => $this->client_id,
            "redirect_uri" => $this->redirect_uri,
            "scope" => "https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email",
            "state" => $state
        );
        return $this->auth_url . "?" . http_build_query($params);
    }

    public function getAccessToken($code)
    {
        $params = array(
            "code" => $code,
            "client_id" => $this->client_id,
            "client_secret" => $this->client_secret,
            "redirect_uri" => $this->redirect_uri,
            "grant_type" => "authorization_code"
        );
        $ch = curl_init($this->token_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response);
        return $response->access_token;
    }

    public function getUserInfo($access_token)
    {
        $params = array(
            "access_token" => $access_token
        );
        $url = $this->info_url . "?" . http_build_query($params);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response);
        return $response;
    }
}
