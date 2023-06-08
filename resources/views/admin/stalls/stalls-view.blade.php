@extends('layouts.admin-master')

@section('content')
<style>
    .content-wrapper {
        margin-left: 20%;
        transition: margin-left 0.5s ease;
      }
      
      .sidebar.close ~ .content-wrapper {
        margin-left: 80px;;
      }
    </style>
  
  <div class="content-wrapper">
    <table class="table">
        <caption>Stalls</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Floor</th>
                <th scope="col">Section</th>
                <th scope="col">Area</th>
                <th scope="col">Stalls</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Lower Ground Floor</td>
                <td>Rice</td>
                <td>15.12</td>
                <td>FCS 1</td>
            </tr>
            <tr>
                <td>Upper Ground Floor</td>
                <td>Concuts</td>
                <td>15.12</td>
                <td>FGS 1</td>
            </tr>
            <tr>
                <td>2nd Floor</td>
                <td>Mercury</td>
                <td>15.12</td>
                <td>FDS 1</td>
            </tr>
        </tbody>
    </table>
  </div>
@endsection