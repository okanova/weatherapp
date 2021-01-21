<?php


namespace App;

class Weather
{

    public string $endpoint;

    public $data;

    public function __construct($city)
    {
        $this->endpoint = env('WEATHER_API_SERVICE') . 'current?access_key=' . env('WEATHER_API_KEY') . '&query=' . $city;
        $this->data = $this->get();
    }

    public function get(){
        return json_decode(file_get_contents($this->endpoint));
    }

}