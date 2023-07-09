<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    public function flooradd(Request $request)
    {
        $floornum = $request->input('floornum');
        $floordesc = $request->input('floordesc');

        // save data to database
        $floor = new Floor;
        $floor->floornum = $floornum;
        $floor->floordesc = $floordesc;
        $floor->save();

        // redirect to a success page
        return redirect('/floor-add')->with('success', 'Floor added successfully!');
    }

    public function floorview()
    {
        $floor = DB::table('floors')->select('id','floornum','floordesc')->get();
        return view('admin.floors.floor-view', compact('floor'));
    }
}
