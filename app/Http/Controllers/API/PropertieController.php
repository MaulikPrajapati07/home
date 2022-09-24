<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\propertie, property_detail, property_masters, property_payment_details, property_reviews, cities;
use App\Models\property_room, bookings, college_distances, coupan_properties, coupan_transaction;
use App\Models\property_amenitie, users, subscription_plans, property_food_amenities, property_short_list;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;




class PropertieController extends Controller
{
    public function login(Request $request)
    {
    }
    public function find($id = null)
    {
        return $id ? propertie::find($id) : propertie::all();
    }


    public function index()
    {

        $result  = DB::table('property_details')
            //->distinct()
            // ->join('property_details','property_details.property_id', '=', 'properties.id')
            ->select('property_details.owner_name as pd', 'properties.property_name as pp')
            ->join('properties', 'properties.id', '=', 'property_details.property_id')
            ->where('property_details.id', "16")
            ->get();
        //dd($result);
        return $result;
    }

    public function food()
    {

        $result  = DB::table('property_food_amenities')
            //->distinct()
            // ->join('property_details','property_details.property_id', '=', 'properties.id')
            ->select('property_food_amenities.food_preparation as food_pre', 'properties.property_name as name')
            ->join('properties', 'properties.id', '=', 'property_food_amenities.property_id')
            ->where('properties.property_name', "A1")
            ->get();
        //dd($result);
        return $result;
    }

    public function shortList()
    {
        $user = propertie::with('property_short_list')->first();
        $user = propertie::with('property_amenitie')->first();
        $user = propertie::with('property_detail')->first();
        $user = propertie::with('property_masters')->first();
        $user = propertie::with('property_room')->first();
        $user = propertie::with('property_payment_details')->first();
        $user = propertie::with('property_reviews')->first();
        $user = propertie::with('cities')->first();
        $user = propertie::with('bookings')->first();
        $user = propertie::with('college_distances')->first();
        $user = propertie::with('coupan_properties')->first();
        $user = propertie::with('coupan_transaction')->first();
        $user = propertie::with('property_photo')->first();
        $user = propertie::with('users')->first();
        $user = propertie::with('subscription_plans')->first();
        $user = propertie::with('property_food_amenities')->first();
        return $user;
        //dd ($user->toArray());
    }
}
