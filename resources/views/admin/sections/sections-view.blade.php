@extends('layouts.admin-master')

@section('content')

  <div class="content-wrapper">
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
  </div>
@endsection