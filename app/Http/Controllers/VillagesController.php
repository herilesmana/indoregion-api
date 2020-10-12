<?php

namespace App\Http\Controllers;

use App\Models\Village;
use Illuminate\Http\Request;

class VillagesController extends Controller
{
    public function getByDistrict($district_id)
    {
        $villages = Village::where('district_id', $district_id)->get();
        return response()->json(['data' => $villages, 'success' => 1], 200);
    }
}
