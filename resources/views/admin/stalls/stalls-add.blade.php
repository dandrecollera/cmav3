@extends('layouts.admin-master')

@section('content')
  
  <div class="content-wrapper">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="inputFloorNum" class="form-label">Floor Number</label>
                            <select id="floornumber" name="floornumber" class="form-select">
                                <option selected>Choose Floor</option>
                                <option>Lower Ground Floor</option>
                                <option>Upper Ground Floor</option>
                                <option>2nd Floor</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputFloorDes" class="form-label">Section</label>
                            <select id="section" name="section" class="form-select">
                                <option selected>Choose Section</option>
                                <option>Rice</option>
                                <option>Coldcuts</option>
                                <option>Front Commercial</option>
                                <option>Groceries</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputFloorDes" class="form-label">Area</label>
                            <select id="area" name="area" class="form-select">
                                <option selected>Choose Area</option>
                                <option>16.20</option>
                                <option>15.75</option>
                                <option>16.43</option>
                            </select>
                        </div>
                        <div class="mb-3 form-outline">
                            <input type="text" id="stallnumber" name="stallnumber" class="form-control" placeholder="Code-Stall#"/>
                            <label class="form-label" for="form12">Stall Number</label>
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