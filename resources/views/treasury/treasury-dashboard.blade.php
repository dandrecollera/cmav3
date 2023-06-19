@extends('layouts.treasury-master')

@section('content')
  
<div class="content-wrapper">
<h1 class="mx-3 mt-4">Dashboard</h1>
<div class="row container p-4">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body"><span class="small">Total Registered Tenants</span></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                <div class="small text-white"><i class="fas fa-angle-right">97</i> {{--
                    $dashboardInfo['totalRegisteredTenants']--}}</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body"><span class="small">Total Stalls</span></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                <div class="small text-white"><i class="fas fa-angle-right">13</i>
                    {{--$dashboardInfo['totalStalls']--}}</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body"><span class="small">Total Available Stalls</span></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                <div class="small text-white"><i class="fas fa-angle-right">1</i> {{--
                    $dashboardInfo['totalAvailableStalls']--}} </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body"><span class="small">Total Occupied Stalls</span></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                <div class="small text-white"><i class="fas fa-angle-right">12</i> {{--
                    $dashboardInfo['totalOccupiedStalls']--}}</div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body"><span class="small">Daily Sales</span></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                <div class="small text-white"><i class="fas fa-angle-right"></i> ₱ {{--
                    number_format((float)$dashboardInfo['dailySales'], 2, '.', '')--}}</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body"><span class="small">Monthy Sales</span></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                <div class="small text-white"><i class="fas fa-angle-right"></i> ₱ {{--
                    number_format((float)$dashboardInfo['monthlySales'], 2, '.', '')--}}</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body"><span class="small">Yearly Sales</span></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                {{--<a class="small text-white stretched-link" href="#">View Details</a>--}}
                <div class="small text-white"><i class="fas fa-angle-right"></i> ₱ {{--
                    number_format((float)$dashboardInfo['yearlySales'], 2, '.', '')--}}</div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection