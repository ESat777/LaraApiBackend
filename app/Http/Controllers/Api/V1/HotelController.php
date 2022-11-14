<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
 use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class  HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::with('country')->get();
        return $hotels;
    }
    public function show($id) {
        return  Hotel::find($id);
    }
 
    public function store(Request $request)
    {
        $Hotel =  Hotel::create([
            'hotel_title' => $request->hotel_title,
            'days' => $request->days,
            'price' => $request->price->price(),
            'country_id' => $request->country_id,    
        ]);
        if($Hotel){
            return response()->json(["status" => 200]);
        }
    }

    public function update(Request $request, $id)
    {
        $Hotel = Hotel::find($id);
        $Hotel->fill($request->all());
        $Hotel->hotel_title = $request->input('hotel_title');
        $Hotel->days = $request->days;
        $Hotel->price = $request->price;
        $Hotel->country_id = $request->country_id;
        
        if($Hotel -> save()){
            return response()->json(["status" => 200]);
        }
    }
    
    

    public function destroy($id)
    {   
        return ( Hotel::destroy($id) == 1) 
        ? response()->json(['success' => 'success'], 204) 
        : response()->json(['error' => 'delete not successful'], 500);
    }
}