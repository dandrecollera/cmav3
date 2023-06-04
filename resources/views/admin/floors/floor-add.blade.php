@extends('layouts.admin-master')

@section('content')

    <div class="container mt-5 p-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 form-outline">
                            <input type="text" id="floornum" name ="floornum" class="form-control"/>
                            <label class="form-label" for="typePhone">Floor Number</label>
                        </div>
                        <div class="mb-3 form-outline">
                            <input type="text" id="floordesc" name ="floordesc" class="form-control"/>
                            <label class="form-label" for="typeText">Description</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark btn-rounded">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

@endsection