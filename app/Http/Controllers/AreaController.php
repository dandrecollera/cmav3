<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function dropdown(Request $request)
    {

        $data = array();

        $data['area'] = DB::table('floors')
        ->leftjoin('sections', 'floors.floornum', '=', 'sections.floornum')
        ->select('sections.section', 'sections.floornum', 'floors.id')
        ->get();

        return view('admin.area.area-add', $data);
    }
}
