@extends('layouts.admin-master')

@section('content')
  
  <div class="content-wrapper">
    <div class="container mt-5 p-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="floornumber" class="form-label">Floor Number</label>
                            <select id="floornum" name="floornum" class="form-select">
                                <option selected="Choose Floor">Choose Floor</option>
                                <option>Lower Ground Floor</option>
                                <option>Upper Ground Floor</option>
                                <option>2nd Floor</option>
                            </select>
                        </div>
                        <div class="mb-3 form-outline">
                            <input type="text" id="section" name ="section" class="form-control"/>
                            <label class="form-label" for="typeText">Section</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark btn-rounded">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
  </div>
@endsection