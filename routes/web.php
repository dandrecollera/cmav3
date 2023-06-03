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


Route::get('/login', function () {
    return view('login');
});
Route::get('/admin-sidenav', function () {
    return view('layouts.admin-sidenav');
});

//GUEST/PUBLIC

Route::get('/', function () {
    return view('publicview.home');
});
Route::get('/about', function () {
    return view('publicview.about');
});
Route::get('/availablestalls', function () {
    return view('publicview.availablestalls');
});
Route::get('/apply', function () {
    return view('publicview.apply');
});

//ADMIN

    //dashboard
    Route::get('/admin-dashboard', function () {
        return view('admin.admin-dashboard');
    });
    //applicants
    Route::get('/listofapplicants', function () {
        return view('admin.applicants.listofapplicants');
    });

    //area
    Route::get('/area-add', function () {
        return view('admin.area.area-add');
    });
    Route::get('/area-view', function () {
        return view('admin.area.area-view');
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
    Route::get('/requirement', function () {
        return view('admin.homepage.requirement');
    });
    Route::get('/about-edit', function () {
        return view('admin.homepage.about-edit');
    });

    //sections
    Route::get('/sections-add', function () {
        return view('admin.sections.sections-add');
    });
    Route::get('/sections-view', function () {
        return view('admin.sections.sections-view');
    });

    //stalls
    Route::get('/stalls-add', function () {
        return view('admin.stalls.stalls-add');
    });
    Route::get('/stalls-view', function () {
        return view('admin.stalls.stalls-view');
    });

    //tenants
    Route::get('/rent', function () {
        return view('admin.tenants.rent');
    });
    Route::get('/listoftenants', function () {
        return view('admin.tenants.listoftenants');
    });


    //lost and found
    Route::get('/lostandfound', function () {
        return view('admin.lostandfound');
    });

//TENANT

    //transaction
    Route::get('/bill-notice', function () {
        return view('tenant.transaction.bill-notice');
    });
    Route::get('/payment-history', function () {
        return view('tenant.transaction.payment-history');
    });

