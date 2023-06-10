@extends('layouts.treasury-master')

@section('content')

    <div class="content-wrapper">
    <table class="table">
        <caption>List of Tenants</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Avatar</th>
                <th scope="col">Fullname</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Email Address</th>
                <th scope="col">Tenant Type</th>
                <th scope="col">Stall Number</th>
                <th scope="col">Action</th>
                <th scope="col">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-light btn-rounded" data-mdb-toggle="modal" data-mdb-target="#dailybillModal">Daily</button>
                        <button type="button" class="btn btn-outline-light btn-rounded" data-mdb-toggle="modal" data-mdb-target="#monthlybillModal">Monthly</button>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="/img/cma-admin1.png" style="width: 30px; height: 30px" class="rounded-circle"></td>
                <td>Kim Taehyung</td>
                <td>09123456789</td>
                <td>kth@gmail.com</td>
                <td>Monthly</td>
                <td>FGS-1</td>
                <td>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#billModal">Bill</button>
                        <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#viewModal">View</button>
                        <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#archiveModal">Archive</button>
                    </div>
                </td>
                
            </tr>
        </tbody>
    </table>

    <!-- daily Modal -->
    <div class="modal fade" id="dailybillModal" tabindex="-1" aria-labelledby="dailybillLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Bill Daily Tenant</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3 form-outline">
                    <input class="form-control" id="month" name="month" readonly/>
                    <label class="form-label" for="typeText">Month</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="billdate" name="billdate" readonly/>
                    <label class="form-label" for="typeText">Bill Date</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="billingperiod" name="billingperiod" class="form-control" readonly/>
                    <label class="form-label" for="form16">Billing Period</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="duedate" name="duedate" class="form-control" readonly/>
                    <label class="form-label" for="form16">Due Date</label>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-dark btn-rounded" id="billall">Bill</button>
            </div>
          </div>
        </div>
    </div>

    <!-- monthly Modal -->
    <div class="modal fade" id="monthlybillModal" tabindex="-1" aria-labelledby="monthlybillLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Bill Monthly Tenant</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3 form-outline">
                    <input class="form-control" id="month" name="month" readonly/>
                    <label class="form-label" for="typeText">Month</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="billdate" name="billdate" readonly/>
                    <label class="form-label" for="typeText">Bill Date</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="billingperiod" name="billingperiod" class="form-control" readonly/>
                    <label class="form-label" for="form16">Billing Period</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="duedate" name="duedate" class="form-control" readonly/>
                    <label class="form-label" for="form16">Due Date</label>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-dark btn-rounded" id="billall">Bill</button>
            </div>
          </div>
        </div>
    </div>

    <!-- Bill a Tenant -->
    <div class="modal fade" id="billModal" tabindex="-1" aria-labelledby="billLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bill</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3 form-outline">
                    <input class="form-control" id="billno" name="billno" readonly/>
                    <label class="form-label" for="typeText">Bill No.</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="fullname" name="fullname" readonly/>
                    <label class="form-label" for="typeText">Fullname</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="email" name="email" readonly/>
                    <label class="form-label" for="typeText">Email Address</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="contact" name="contact" readonly/>
                    <label class="form-label" for="typeText">Contact</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="month" name="month" readonly/>
                    <label class="form-label" for="typeText">Month</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="billdate" name="billdate" readonly/>
                    <label class="form-label" for="typeText">Bill Date</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="billingperiod" name="billingperiod" class="form-control" readonly/>
                    <label class="form-label" for="form16">Billing Period</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="duedate" name="duedate" class="form-control" readonly/>
                    <label class="form-label" for="form16">Due Date</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="bal" name="bal" class="form-control" readonly/>
                    <label class="form-label" for="form16">Outstanding Balance</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="bal" name="bal" class="form-control" readonly/>
                    <label class="form-label" for="form16">Total Amount</label>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-dark btn-rounded" id="bill">Bill</button>
            </div>
          </div>
        </div>
    </div>

    <!-- view tenant Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tenant's Info</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3 d-flex flex-column align-items-center">
                    <img src="/img/cma-admin1.png" class="photo2b2">
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="fullname" name="fullname" readonly/>
                    <label class="form-label" for="typeText">Fullname</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="contact" name="contact" readonly/>
                    <label class="form-label" for="typeText">Contact No.</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="email" name="email" readonly/>
                    <label class="form-label" for="typeText">Email Address</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="tenanttype" name="tenanttype" class="form-control" readonly/>
                    <label class="form-label" for="form16">Tenant Type</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="stallname" name="stallname" class="form-control" readonly/>
                    <label class="form-label" for="form16">Stall Name</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="rentalfeetype" name="rentalfeetype" class="form-control" readonly/>
                    <label class="form-label" for="form16">Rental Fee Type</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="stallnum" name="stallnum" class="form-control" readonly/>
                    <label class="form-label" for="form16">Stall No.</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="fee" name="fee" class="form-control" readonly/>
                    <label class="form-label" for="form16">Total Stall Fee</label>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
                {{--<button type="button" class="btn btn-dark btn-rounded" id="edit">Edit</button>
                <button type="submit" class="btn btn-outline-dark btn-rounded" id="update" disabled>Update</button>--}}
            </div>
          </div>
        </div>
      </div>

    <!-- archive tenant Modal -->
    <div class="modal fade" id="archiveModal" tabindex="-1" aria-labelledby="archiveModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Archiving a Tenant</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <h4>Do you really want to archive this tenant?</h4>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-dark btn-rounded">Okay</button>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection