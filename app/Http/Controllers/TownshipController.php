<?php

namespace App\Http\Controllers;

use App\Models\Township;
use Illuminate\Http\Request;

class TownshipController extends Controller
{
    public function getTownships(Request $request)
    {
        $townships = Township::where('region_id', $request->region_id)->get();
        return response()->json($townships);
    }
}
