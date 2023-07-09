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
Route::get('/tenant-sidenav', function () {
    return view('layouts.tenant-sidenav');
});
Route::get('/treasury-sidenav', function () {
    return view('layouts.treasury-sidenav');
});

//GUEST/PUBLIC

Route::get('/home', function () {
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



//ADMIN -------------------------------------------------------------------------------------------

    //dashboard
    Route::get('/admin-dashboard', function () {
        return view('admin.admin-dashboard');
    });
    //applicants
    Route::get('/listofapplicants', function () {
        return view('admin.applicants.listofapplicants');
    });
    Route::get('/listofapproved', function () {
        return view('admin.applicants.listofapproved');
    });

    //area
    Route::get('/area-add', function () {
        return view('admin.area.area-add');
    });
    Route::get('/area-view', function () {
        return view('admin.area.area-view');
    });

    //floors
    Route::get('/floor-add', function () {return view('admin.floors.floor-add');});
    Route::post('/addfloor', [App\Http\Controllers\FloorController::class, 'flooradd'])->name('flooradd');
    Route::get('/floor-view', [App\Http\Controllers\FloorController::class, 'floorview'])->name('floorview');

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
    Route::post('/addsection', [App\Http\Controllers\SectionController::class, 'sectionadd'])->name('sectionadd');
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
    Route::get('/list-of-archived-tenants', function () {
        return view('admin.tenants.list-of-archived-tenants');
    });
    Route::get('/listoftenants', function () {
        return view('admin.tenants.listoftenants');
    });
    Route::get('/rent', function () {
        return view('admin.tenants.rent');
    });
    Route::get('/reports', function () {
        return view('admin.tenants.reports');
    });
    


    //admin-account-settings
    Route::get('/admin-account-settings', function () {
        return view('admin.admin-account-settings');
    });

    //admin dashboard
    Route::get('/admin-dashboard', function () {
        return view('admin.admin-dashboard');
    });

    //lost and found
    Route::get('/lostandfound', function () {
        return view('admin.lostandfound');
    });


//TENANT -------------------------------------------------------------------------------------------

    //about
    Route::get('/cma-staff', function () {
        return view('tenant.about.cma-staff');
    });

    //transaction
    Route::get('/bill-notice', function () {
        return view('tenant.transaction.bill-notice');
    });
    Route::get('/payment-history', function () {
        return view('tenant.transaction.payment-history');
    });

    //lost adn found
    Route::get('/tenant-lostandfound', function () {
        return view('tenant.tenant-lostandfound');
    });

    //tenant account settings
    Route::get('/tenant-account-settings', function () {
        return view('tenant.tenant-account-settings');
    });

    //tenant dashboard
    Route::get('/tenant-dashboard', function () {
        return view('tenant.tenant-dashboard');
    });

    //tenant report
    Route::get('/tenant-report', function () {
        return view('tenant.tenant-report');
    });



//TREASURY

    //listoftenants
    Route::get('/t-listoftenants', function () {
        return view('treasury.t-listoftenants');
    });

    //reports
    Route::get('/payment-reports', function () {
        return view('treasury.repors.payment-reports');
    });
    Route::get('/bill-reports', function () {
        return view('treasury.repors.bill-reports');
    });

    //treasury account settings
    Route::get('/treasury-account-settings', function () {
        return view('treasury.treasury-account-settings');
    });

    //treasury dashboard
    Route::get('/treasury-dashboard', function () {
        return view('treasury.treasury-dashboard');
    });

