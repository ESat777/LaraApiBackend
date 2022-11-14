<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class  CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::with('hotel')->get();
        return $customers;
    }
    public function show($id) {
        return Customer::find($id);
    }
    public function store(Request $request)
    {
        $newCustomer =  Customer::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'hotel_id' => $request->hotel_id
                ]);
        if($newCustomer){
            return response()->json(["status" => 200]);
        }
    }
 
    public function update(Request $request, $id)
    {
        $customers = Customer::find($id);
        $customers->name = $request->name;
        $customers->surname = $request->surname;
        $customers->email = $request->email;
        $customers->phone = $request->phone;
        $customers->hotel_id = $request->hotel_id;
        if($customers -> save()){
            return response()->json(["status" => 200]);
        }
    }
 

    public function destroy($id)
    {
        return ( Customer::destroy($id) == 1) ?
            response()->json(['success' => 'success'], 204) :
            response()->json(['error' => 'delete not successful'], 500);
    }
}