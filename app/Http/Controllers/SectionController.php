<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function floorselect(Request $request)
    {
        $data = array();

        $data['floor'] = DB::table('floors')
        ->select('id','floornum')
        ->get();

    return view('admin.sections.sections-add', $data);
    }

    public function sectionadd(Request $request)
    {
        DB::table('sections')->insert([
            'floornum' => $request->input('floornum'),
            'section' => $request->input('section'),
        ]);

        // redirect to a success page
        return redirect('/sections-add')->with('success', 'Section added successfully!');
    }

    public function sectionview()
    {
        $data = array();

        $data['section'] = DB::table('sections')
            ->select('id','floornum','section')
            ->get();

        return view('admin.sections.sections-view', $data);
    }
}
