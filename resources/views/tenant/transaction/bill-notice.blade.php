@extends('layouts.tenant-master')

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
            <td>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-dark btn-rounded" data-mdb-toggle="modal"
                        data-mdb-target="#viewModal">PDF</button>
                    <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal"
                        data-mdb-target="#payModal">Payment</button>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<div class="modal fade" id="payModal" tabindex="-1" aria-labelledby="payModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 form-outline">
                    <input class="form-control" id="ornum" name="ornum" readonly />
                    <label class="form-label" for="typeText">OR No.</label>
                </div>
                <div class="mb-3 form-outline">
                    <input class="form-control" id="billnum" name="billnum" readonly />
                    <label class="form-label" for="typeText">Bill No.</label>
                </div>
                <div class="mb-3 form-outline">
                    <input class="form-control" id="month" name="month" readonly />
                    <label class="form-label" for="typeText">Month</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="billdate" name="billdate" readonly />
                    <label class="form-label" for="typeText">Bill Date</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="billingperiod" name="billingperiod" class="form-control" readonly />
                    <label class="form-label" for="form16">Billing Period</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="paymentdate" name="paymentdate" class="form-control" readonly />
                    <label class="form-label" for="form16">Payment Date</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="outstandingbal" name="outstandingbal" class="form-control" readonly />
                    <label class="form-label" for="form16">Outstanding Balance</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="amounttobepaid" name="amounttobepaid" class="form-control" readonly />
                    <label class="form-label" for="form16">Amount to be Paid</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="amount" name="amount" />
                    <label class="form-label" for="typeText">Amount</label>
                </div>

                <div class="mb-3">
                    <p1>Mode of Payment</p1>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentRadioDefault"
                            id="gcashRadioDefault1" />
                        <label class="form-check-label" for="flexRadioDefault1"> Gcash </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentRadioDefault"
                            id="cashRadioDefault2" />
                        <label class="form-check-label" for="flexRadioDefault2"> Cash </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="form16">Upload Proof</label>
                    <input type="file" class="form-control" id="image" required />
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="refnum" name="refnum" />
                    <label class="form-label" for="typeText">Reference Number</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection