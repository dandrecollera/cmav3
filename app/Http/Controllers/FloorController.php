<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    public function flooradd(Request $request)
    {

        DB::table('floors')->insert([
            'floornum' => $request->input('floornum'),
            'floordesc' => $request->input('floordesc'),
        ]);


        // redirect to a success page
        return redirect('/floor-add')->with('success', 'Floor added successfully!');
    }

    public function floorview()
    {
        $data = array();

        $data['floor'] = DB::table('floors')
            ->select('id','floornum','floordesc')
            ->get();

        return view('admin.floors.floor-view', $data);
    }
}
