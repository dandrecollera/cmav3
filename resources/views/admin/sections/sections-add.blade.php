@extends('layouts.admin-master')

@section('content')
  
<div class="content-wrapper">
    <div class="container mt-5 p-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                    <form action="/addsection" method="post">
                    @csrf
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show alert-sm" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close bg-transparent border-0" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" class="text-success">&times;</span>
                        </button>
                        </div>
                    @endif
                        <div class="mb-3">
                            <select id="floornum" name="floornum" class="form-select">
                                <option selected="">Choose Floor</option>
                                @foreach($floor as $floors)
                                    <option value="{{ $floors->floornum }}">{{ $floors->floornum }}</option>
                                @endforeach
                            </select>  
                        </div>
                        <div class="mb-3 form-outline">
                            <input type="text" id="section" name ="section" class="form-control"/>
                            <label class="form-label" for="typeText">Section</label>
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