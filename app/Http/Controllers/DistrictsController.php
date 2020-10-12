<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictsController extends Controller
{
    public function getByRegency($regency_id)
    {
        $districts = District::where('regency_id', $regency_id)->get();
        return response()->json(['data' => $districts, 'success' => 1], 200);
    }
}
