<?php

namespace JumpFinance\Connect;

use GuzzleHttp\Client;
use JumpFinance\Exception\ConnectException;


class Authorization
{
    private static string $clientKey = '';
    private static string $api = "https://api.jump.finance/services/openapi/";
    private static string $connectError = "Client key is not set. Please call Authorization::boot() first";
    private static ?Client $client = null;

    public static function boot(string $clientKey)
    {
        self::$clientKey = $clientKey;
        self::$client = new Client();
    }

    private function options(array $data)
    {
        return [
            'headers' => [
                'Content-Type' => 'application/json',
                'Client-Key' => self::$clientKey,
            ],
            'json' => $data,
        ];
    }

    private function handleException($e)
    {
        if ($e instanceof \GuzzleHttp\Exception\RequestException) {
            $response = $e->getResponse();
            return $response->getBody()->getContents();
        } else {
            return $e->getMessage();
        }
    }


    private function request(string $method, string $apiMethod, array $data = [])
    {

        try {
            switch ($method) {
                case 'POST':
                    $response = self::$client->post(self::$api . $apiMethod, $this->options($data));
                    break;
                case 'GET':
                    $response = self::$client->get(self::$api . $apiMethod, $this->options($data));
                    break;
                case 'DEL':
                    $response = self::$client->delete(self::$api . $apiMethod, $this->options($data));
                    break;
                case 'PUT':
                    $response = self::$client->put(self::$api . $apiMethod, $this->options($data));
                    break;
                default:
                    throw new \InvalidArgumentException("Unsupported HTTP method: $method");
            }
            return $response->getBody()->getContents();
        } catch (\Exception $e) {
            return $this->handleException($e);
        }
    }

    protected function post(string $method, array $data = [])
    {
        return $this->request('POST', $method, $data);
    }

    protected function get(string $method, array $data = [])
    {
        return $this->request('GET', $method, $data);
    }

    protected function delete(string $method, array $data = [])
    {
        return $this->request('DEL', $method, $data);
    }

    protected function put(string $method, array $data = [])
    {
        return $this->request('PUT', $method, $data);
    }

    /**
     * Throws an exception if the client key is not set.
     *
     * @throws ConnectException When the client key is not set.
     */
    protected function checkClientKey()
    {
        if (!isset(self::$clientKey)) {
            throw new ConnectException(self::$connectError);
        }
    }
}