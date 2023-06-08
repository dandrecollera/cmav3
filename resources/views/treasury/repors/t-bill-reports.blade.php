@extends('layouts.treasury-master')

@section('content')
    
    <table class="table">
        <caption>Statement of Account</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Month</td>
                <th scope="col">Bill No.</th>
                <th scope="col">Bill Date</th>
                <th scope="col">Billing Period</th>
                <th scope="col">Due Date</th>
                <th scope="col">Outstanding Balance</th>
                <th scope="col">Amount to be Paid</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>May</td>
                <td>00000001</td>
                <td>05/15/2023</td>
                <td>05/01/2023 - 05/30/2023</td>
                <td>05/30/2023</td>
                <td>1000.00</td>
                <td><b>2000.00</b></td>
                <td>Unpaid</td>
                <td><div class="btn-group" role="group">
                    <button type="button" class="btn btn-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#viewModal">Status</button>
                  </div></td>
            </tr>
        </tbody>
    </table>

    <script src="js/mdb.min.js"></script>
@endsection