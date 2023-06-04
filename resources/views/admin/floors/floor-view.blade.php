@extends('layouts.admin-master')

@section('content')

    <table class="table">
        <caption>Floors</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Floor</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Lower Ground Floor</td>
                <td>Wet and Dry</td>
            </tr>
            <tr>
                <td>Upper Ground Floor</td>
                <td>Necessities</td>
            </tr>
            <tr>
                <td>2nd Floor</td>
                <td>Others</td>
            </tr>
        </tbody>
    </table>

@endsection