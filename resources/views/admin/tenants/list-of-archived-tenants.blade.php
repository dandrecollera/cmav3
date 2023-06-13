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
        <caption>List of Archived Tenants</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Fullname</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Email Address</th>
                <th scope="col">Tenant Type</th>
                <th scope="col">Stall Number</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
            <td><img src="/img/cma-admin1.png" style="width: 30px; height: 60px" class="rounded-circle"></td>
            <td>Kim Taehyung</td>
            <td>09123456789</td>
            <td>kth@gmail.com</td>
            <td>Monthly</td>
            <td>FGS-1</td>
            </tr>
        </tbody>
    </table>
@endsection