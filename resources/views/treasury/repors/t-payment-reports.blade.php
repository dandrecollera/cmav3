@extends('layouts.treasury-master')

@section('content')

    <div class="content-wrapper">
    <table class="table">
        <caption>Payment History</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Month</td>
                <th scope="col">OR No.</th>
                <th scope="col">Bill No.</th>
                <th scope="col">Billing Date</th>
                <th scope="col">Payment Date</th>
                <th scope="col">Mode of Payment</th>
                <th scope="col">Reference No.</th>
                <th scope="col">Outstanding Balance</th>
                <th scope="col">Amount Paid</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                <th scope="col">Search</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>May</td>
                <td>0000001</td>
                <td>00000001</td>
                <td>05/15/2023</td>
                <td>05/25/2023</td>
                <td>GCASH</td>
                <td>0000 000 000001</td>
                <td>0.00</td>
                <td>2000.00</td>
                <td><span class="badge badge-success rounded-pill d-inline">PAID</span></td>
                <td><div class="btn-group" role="group">
                    <button type="button" class="btn btn-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#viewModal">PDF</button>
                  </div></td>
            </tr>
            <tr>
                <td>June</td>
                <td>0000003</td>
                <td>00000003</td>
                <td>06/15/2023</td>
                <td>06/25/2023</td>
                <td>CASH</td>
                <td>0000 000 000003</td>
                <td>0.00</td>
                <td>1000.00</td>
                <td><span class="badge badge-primary rounded-pill d-inline">PENDING</span></td>
                <td><div class="btn-group" role="group">
                    <button type="button" class="btn btn-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#viewModal">PDF</button>
                  </div></td>
            </tr>
        </tbody>
    </table>
    </div>

@endsection