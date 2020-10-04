<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvincesController extends Controller
{
    public function getAll()
    {
        $provinces = Province::all();
        return response()->json(['data' => $provinces, 'success' => 1], 200);
    }

    public function get($province_id)
    {
        $province = Province::find($province_id);
        return response()->json(['data' => $province, 'success' => 1], 200);
    }
}
