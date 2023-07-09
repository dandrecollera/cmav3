@extends('layouts.admin-master')

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
    <div class="container mt-5 p-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                    <form action="/addfloor" method="POST">
                    @csrf
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show alert-sm" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close bg-transparent border-0" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" class="text-success">&times;</span>
                        </button>
                        </div>
                    @endif
                        <div class="mb-3 form-outline">
                            <input type="text" id="floornum" name ="floornum" class="form-control"/>
                            <label class="form-label" for="floornum">Floor Number</label>
                        </div>
                        <div class="mb-3 form-outline">
                            <input type="text" id="floordesc" name ="floordesc" class="form-control"/>
                            <label class="form-label" for="floordesc">Description</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark btn-rounded">Save</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
</div>
@endsection