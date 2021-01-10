<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function addCountry(Request $request){
        Country::create([
            'countryName' => $request->countryName,
            'population' => $request->population

        ]);

        return "Data Added Successfully";
    }
}
