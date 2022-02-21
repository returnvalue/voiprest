<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoipRestController extends Controller
{
    public function polyrestapi()
    {
        $url     = \request('urltofetch');
        $password     = \request('password');
        $guzzleclient = $this->setupguzzleclient($password);
        $response = $guzzleclient->request('GET', $url);

        return json_decode($response->getBody(), true);
    }
    
    public function setupguzzleclient($password)
    {
        return $guzzleclient = new \GuzzleHttp\Client([
            'timeout' => 60,
            'verify' => false,
            'auth' => ['Polycom', (string) $password]
        ]);
    }
}
