@extends('layouts.tenant-master')

@section('content')
<style>
    .content-wrapper {
        margin-left: 20%;
        transition: margin-left 0.5s ease;
      }
      
      .sidebar.close ~ .content-wrapper {
        margin-left: 70px;;
      }
    </style>

<div class="content-wrapper">
<div class="bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            height: 100vh">

    <h1 class="mx-3 mt-4">Dashboard</h1>
    <div class="row p-3">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-dark text-white mb-4">
                <div class="card-body">Announcements</div>
                <div class="card-footer d-flex align-items-center justify-content-between">

                    <div class="small text-white"><i class="fas fa-angle-right"></i> {{--
                        $dashboardInfo['totalRegisteredTenants']--}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection