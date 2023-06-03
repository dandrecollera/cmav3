@extends('layouts.admin-master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Section View</title>

    <link rel="stylesheet" href="css/mdb.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
@section('content')
    <table class="table">
        <caption>Section</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Floor</th>
                <th scope="col">Section</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Lower Ground Floor</td>
                <td>Rice</td>
            </tr>
            <tr>
                <td>Upper Ground Floor</td>
                <td>Concuts</td>
            </tr>
            <tr>
                <td>2nd Floor</td>
                <td>Mercury</td>
            </tr>
        </tbody>
    </table>

    <script src="js/mdb.min.js"></script>
</body>
</html>
@endsection