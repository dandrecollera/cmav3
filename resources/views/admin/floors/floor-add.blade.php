@extends('layouts.admin-master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Floor Add</title>

    <link rel="stylesheet" href="css/mdb.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
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

<script src="js/mdb.min.js"></script>
</body>
</html>
@endsection