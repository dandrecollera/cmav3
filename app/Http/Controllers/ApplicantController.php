<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function applicant(Request $request)
    {
        $firstname = $request->input('firstname');
        $middlename = $request->input('middlename');
        $lastname = $request->input('lastname');
        $address = $request->input('address');
        $birthday = $request->input('birthday');
        $emailadd = $request->input('emailadd');
        $contactno = $request->input('contactno');
        $image = $request->input('image');
        $req = $request->input('req');

        // save data to database
        $apply = new Applicant;
        $apply->firstname = $firstname;
        $apply->middlename = $middlename;
        $apply->lastname = $lastname;
        $apply->address = $address;
        $apply->birthday = $birthday;
        $apply->emailadd = $emailadd;
        $apply->contactno = $contactno;

        $maxSize = 2 * 1024 * 1024;
        if($request->hasFile('image')){
            $size = $request->file('image')->getSize();
            if($size > $maxSize){
                return redirect('/apply');
                die();
            }
        }

        $apply->image = 'blank.jpg';
        if($request->hasFile('image')){
            $destinationPath = 'public/images';
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = $apply->firstname . '.' . $extension;
            $path = $request->file('image')->storeAs($destinationPath, $filename);
            $apply->image = $filename;
        }

        $apply->req = 'blank.pdf';
        if($request->hasFile('req')){
            $destinationPath = 'public/files';
            $requirements = $request->file('req');
            $extension = $req->getClientOriginalExtension();
            $filename = $apply->firstname . '.' . $extension;
            $path = $request->file('req')->storeAs($destinationPath, $filename);
            $apply->req = $filename;
        }

        $apply->save();

        // redirect to a success page
        return redirect('/apply')->with('success', 'Application submitted successfully!');
    }
}
