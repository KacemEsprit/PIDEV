<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GeocodingService
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getCoordinates(string $adresse): ?array
    {
        $url = 'https://nominatim.openstreetmap.org/search?format=json&q=' . urlencode($adresse);
        $response = $this->httpClient->request('GET', $url);

        $data = $response->toArray();

        if (!empty($data)) {
            return [
                'latitude' => $data[0]['lat'],
                'longitude' => $data[0]['lon']
            ];
        }

        return null;
    }
}