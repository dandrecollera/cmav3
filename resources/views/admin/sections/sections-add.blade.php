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
                        <div class="mb-3">
                            <label for="floornumber" class="form-label">Floor Number</label>
                            <select id="floornum" name="floornum" class="form-select">
                                <option selected="">Choose Floor</option>
                                {{--@foreach($floors as $id => $floornum)
                                    <option value="{{ $floornum }}">{{ $floornum }}</option>
                                @endforeach--}}
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