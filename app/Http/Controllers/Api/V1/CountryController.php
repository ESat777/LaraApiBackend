<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CountryController extends Controller
{
   
    public function index() {
        return  Country::all();
    }
    public function show($id) {
        return  Country::find($id);
    }
   
  
    public function store(Request $request)
    {
        $newCountry = Country::create([
            'title' => $request->title,
            'season_weather' => $request->season_weather,
        ]);
        if($newCountry){
            return response()->json(["status" => 200]);
        }
    }
   
  
    public function update(Request $request, $id)
    {
        $country = Country::find($id);
        $country->title = $request->title;
        $country->season_weather = $request->season_weather;

        if($country -> save()){
            return response()->json(["status" => 200]);
        }
    }
   
   

    public function destroy($id){
        return (Country::destroy($id) == 1) ? 
            response()->json(['success' => 'success'], 204) : 
            response()->json(['error' => 'delete not successful'], 500);
    }
}