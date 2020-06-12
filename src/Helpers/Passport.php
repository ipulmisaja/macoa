<?php

namespace Ipulmisaja\Macoa\Helpers;

use GuzzleHttp\Client;

class Passport
{
    public function post(String $endpoint, array $params)
    {
        $guzzle = new Client;

        $response = $guzzle->post($endpoint, [
            'form_params' => $params
        ]);

        return json_decode((string) $response->getBody(), true);
    }

    public function get(String $endpoint, array $params)
    {
        $guzzle = new Client;

        $response = $guzzle->get($endpoint, [
            'headers' => $params
        ]);

        return json_decode((string) $response->getBody(), true);
    }
}