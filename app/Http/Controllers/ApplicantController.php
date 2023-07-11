<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function applicant(Request $request){
        //  gather all the inputs as $input
        $input = $request->input();

        // check if required forms has inputs
        if (empty($input['firstname']) || empty($input['lastname']) || empty($input['address']) || empty($input['birthday']) || empty($input['emailadd']) || empty($input['contactno']) ) {
            return redirect('/apply?err=1');
            die();
        }

        //  checks if image is more that 2mb
        $maxSize = 2 * 1024 * 1024;
        dd('test');
        if($request->hasFile('image')){
            $size = $request->file('image')->getSize();
            if($size > $maxSize){
                return redirect('/apply?err=4');
                die();
            }
        }

        // get the last id, if no data yet, set the id to 1, else increment the last id
        $lastnum = DB::table('applicant')->max('id');
        $newId = $lastnum ? $lastnum + 1  : 1;

        // saving image to storage
        $photo = 'blank.jpg';
        if($request->hasFile('image')){
            $destinationPath = 'public/applicantsImage';
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = $newId . '.' . $extension;
            $path = $request->file('image')->storeAs($destinationPath, $filename);
            $photo = $filename;
        }

        // saving file to storage
        $file = 'blank.pdf';
        if($request->hasFile('requirements')){
            $destinationPath = 'public/applicantsRequirments';
            $requirements = $request->file('requirements');
            $extension = $requirements->getClientOriginalExtension();
            $filename = $newId . '.' . $extension;
            $path = $request->file('requirements')->storeAs($destinationPath, $filename);
            $file = $filename;
        }

        DB::table('applicant')->insert([
            'firstname' => $request->input('firstname'),
            'middlename' => $request->input('middlename'),
            'lastname' => $request->input('lastname'),
            'address' => $request->input('address'),
            'birthday' => $request->input('birthday'),
            'emailadd' => $request->input('emailadd'),
            'contactno' => $request->input('contactno'),
            'image' => $photo,
            'requirements' => $file,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        // redirect to a success page
        return redirect('/apply');
    }


    public function applicantPage(Request $request)
    {
        $data = array();
        $data['errors'] = array(
            1 => ['Error: Username/Email and password combination OR Account does not exist.', 'danger'],
            2 => ['You are now logged out', 'primary'],
            3 => ['A new expenses has been saved.', 'primary'],
            4 => ['Error: Large image upload, must be 2mb below.', 'danger'],
            5 => ['Error: Access Denied.', 'danger'],
        );
        if(!empty($request->input('err'))) {
            $data['err'] = $request->input('err');
        }

        return view('publicview.apply', $data);
    }
}
