<?php

namespace App\Http\Controllers;

use App\Models\Regency;
use Illuminate\Http\Request;

class RegenciesController extends Controller
{
    public function getByProvince($province_id)
    {
        $regencies = Regency::where('province_id', $province_id)->get();
        return response()->json(['data' => $regencies, 'success' => 1], 200);
    }
}
