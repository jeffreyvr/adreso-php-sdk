<?php

namespace Adreso;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use RuntimeException;

class Adreso
{
    private $httpClient;

    public function __construct(public string $baseUrl, public string $token)
    {
        $this->httpClient = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
                'Accept' => 'application/json',
            ]
        ]);
    }

    /**
     * Look up an address.
     *
     * @param string $country The addres country code. Currently only supports `nl`.
     * @param string $zipcode The address zipcode.
     * @param string $homeNumber The address home number.
     * @return array
     * @throws GuzzleException
     * @throws RuntimeException
     */
    public function addressLookup(string $country, string $zipcode, string $homeNumber): array
    {
        $country = strtolower($country);

        $response = $this->httpClient->get("address-lookup/{$country}", [
            'query' => [
                'zipcode' => $zipcode,
                'home_number' => $homeNumber,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
