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
                    <button type="button" class="btn btn-outline-dark btn-rounded">PDF</button>
                    <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal"
                        data-mdb-target="#statusModal">Status</button>
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
                    <button type="button" class="btn btn-outline-dark btn-rounded">PDF</button>
                    <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal"
                        data-mdb-target="#statusModal">Status</button>
                  </div></td>
            </tr>
        </tbody>
    </table>
    </div>

    <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Status</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                  <img src="/img/cma-admin1.png" style="width: 150px; height: 150px">
                </div>
                <div class="mb-3 form-outline">
                    <input type="text" id="month" name="month" class="form-control" readonly/>
                    <label class="form-label" for="form12">Month</label>
                </div>
                <div class="mb-3 form-outline">
                    <input class="form-control" id="orno" name="orno" readonly>
                    <label class="form-label" for="description">OR No.</label>
                </div>
                <div class="mb-3 form-outline">
                    <input class="form-control" id="billno" name="billno" readonly>
                    <label class="form-label" for="description">Bill No.</label>
                </div>
                <div class="mb-3 form-outline">
                    <input type="text" id="billdate" name="billdate" class="form-control" readonly/>
                    <label class="form-label" for="form12">Bill Date</label>
                </div>
                <div class="mb-3 form-outline">
                    <input type="text" id="outstandingbal" name="outstandingbal" class="form-control" readonly/>
                    <label class="form-label" for="form12">Outstanding Balance</label>
                </div>
                <div class="mb-3 form-outline">
                    <input type="text" id="Amount Paid" name="Amount Paid" class="form-control" readonly/>
                    <label class="form-label" for="form12">Amount Paid</label>
                </div>
                <div class="mb-3">
                    <select id="status" name="status" class="form-select">
                        <option selected>Status</option>
                        <option>Paid</option>
                        <option>Shortage?</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
              <button type="button" class="btn btn-dark btn-rounded">Save changes</button>
            </div>
          </div>
        </div>
      </div>

@endsection