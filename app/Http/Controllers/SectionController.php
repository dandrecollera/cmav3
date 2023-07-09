<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use App\Models\Section;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function sectionadd(Request $request)
    {

        $floors = Floor::all();
        
        $sections = new Section;
        $sections->floornum = $floornum;
        $sections->section = $sections;
        $sections->save();

        // redirect to a success page
        return redirect('/sections-add')->with('success', 'Section added successfully!');
    }
}
