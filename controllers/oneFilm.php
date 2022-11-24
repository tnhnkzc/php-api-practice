<?php
require 'config.php';
require 'views/oneFilm.view.php';

$url = "http://www.omdbapi.com/?i=tt1302011&apikey={$apiKey}";
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$return = curl_exec($ch);
//openweather API
//https://api.openweathermap.org/data/2.5/weather?q=Paris&appid=efd928dc4bf2f2d05b26b94bb0758fa7

$jsonReturn = json_decode($return);

dd($_SERVER);
