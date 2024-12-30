<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

// routes/web.php

use App\Services\RiotApiService;

Route::get('/summoner/{summonerName}', function ($summonerName, RiotApiService $riotApi) {
    $summonerData = $riotApi->getSummonerData($summonerName);
    return view('summoner.stats', compact('summonerData'));
});
