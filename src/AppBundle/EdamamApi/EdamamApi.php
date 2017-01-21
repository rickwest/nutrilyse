<?php

namespace AppBundle\EdamamApi;

use GuzzleHttp\Client;

class EdamamApi {

    /**@var \GuzzleHttp\Client **/
    private $client;

    public function __construct(Client $client) {
        $this->client = $client;
    }

    public function ingredientAnalysis($ingredient) {
        //prepare string for passing in GET request
        $urlEncodedIngredient = str_replace(' ', '%20', $ingredient);
        $response = $this->client->request('GET', 'https://api.edamam.com/api/nutrition-data?app_id='.ApiHelper::APP_ID.'&app_key='.ApiHelper::APP_KEY.'&ingr='.$urlEncodedIngredient);
        $analysis = utf8_encode($response->getBody()->getContents());
        return json_decode($analysis, true);
    }
}