<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use App\Models\Section;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function floorselect(Request $request)
    {
        $floor = DB::table('floors')
        ->select('id','floornum')
        ->get();
    
    return view('admin.sections.sections-add', compact('floor'));
    }

    public function sectionadd(Request $request)
    {
        
        $floornum = $request->input('floornum');
        $sectionName = $request->input('section');

        $section = new Section;
        $section->floornum = $floornum;
        $section->section = $sectionName;
        $section->save();

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
