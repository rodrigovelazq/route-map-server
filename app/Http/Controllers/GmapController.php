<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GmapController extends Controller
{
    public function getRoute(Request $request){
        $origin = new \stdClass();
        foreach ($request->get('origin') as $key => $value)
        {
            $origin->$key = $value;
        }
        $destination = new \stdClass();
        foreach ($request->get('destination') as $key => $value)
        {
            $destination->$key = $value;
        }
        \Log::info('>>>>>>>>>>>>>>>>>>>>>>>>>>');
        \Log::info(env('GOOGLE_API_KEY'));
        $url = 'https://maps.googleapis.com/maps/api/directions/json?origin='.$origin->lat.'%2C'.$origin->lng.'&destination='.$destination->lat.'%2C'.$destination->lng.'&key='.env('GOOGLE_API_KEY');
        $response = Http::get($url);
        return $response;
    }
}
