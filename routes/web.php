<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//GUEST/PUBLIC


//ADMIN


    //applicants
    Route::get('/profiling', function () {
        return view('admin.applicants.profiling');
    });
    Route::get('/listofapplicants', function () {
        return view('admin.applicants.listofapplicants');
    });

    //area
    Route::get('/area-add', function () {
        return view('admin.area.area-add');
    });

    //floors
    Route::get('/floor-add', function () {
        return view('admin.floors.floor-add');
    });
    Route::get('/floor-view', function () {
        return view('admin.floors.floor-view');
    });

    //homepage
    Route::get('/announcement', function () {
        return view('admin.homepage.announcement');
    });
    Route::get('/requirements', function () {
        return view('admin.homepage.requirements');
    });
    Route::get('/announcement', function () {
        return view('admin.homepage.announcement');
    });

    //sections
    Route::get('/sections-add', function () {
        return view('admin.sections.sections-add');
    });

    //stalls
    Route::get('/stalls-add', function () {
        return view('admin.stalls.stalls-add');
    });

    //tenants
    Route::get('/rent', function () {
        return view('admin.tenants.rent');
    });


    //lost and found
    Route::get('/lostandfound', function () {
        return view('admin.lostandfound');
    });

//TENANT