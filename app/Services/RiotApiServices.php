<?php

namespace App\Services;

use GuzzleHttp\Client;

class RiotApiService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('RIOT_API_KEY');  // Store the API key in .env
    }

    public function getSummonerData($summonerName)
    {
        $url = "https://na1.api.riotgames.com/lol/summoner/v4/summoners/by-name/{$summonerName}";

        $response = $this->client->request('GET', $url, [
            'headers' => [
                'X-Riot-Token' => $this->apiKey,
            ]
        ]);

        return json_decode($response->getBody(), true);
    }
}
