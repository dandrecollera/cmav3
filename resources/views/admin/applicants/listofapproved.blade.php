@extends('layouts.admin-master')

@section('content')
<table class="table">
    <caption>List of Applicants</caption>
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Applicant No.</th>
            <th scope="col">Avatar</th>
            <th scope="col">Fullname</th>
            <th scope="col">Birthday</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Email Address</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>0001</td>
            <td><img src="/img/cma-admin1.png" style="width: 30px; height: 30px" class="rounded-circle"></td>
            <td>Kim Taehyung</td>
            <td>12/30/1995</td>
            <td>09123456789</td>
            <td>kth@gmail.com</td>
            <td>
                <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal"
                    data-mdb-target="#viewModal">View</button>
            </td>

        </tr>
    </tbody>
</table>

<!-- view Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Applicant's Info</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 d-flex flex-column align-items-center">
                    <img src="/img/cma-admin1.png" class="photo2b2">
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="fullname" name="fullname" readonly />
                    <label class="form-label" for="typeText">Applicant No.</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="fullname" name="fullname" readonly />
                    <label class="form-label" for="typeText">Fullname</label>
                </div>

                <div class="mb-3 form-outline">
                    <textarea class="form-control" id="address" name="address" rows="2" readonly></textarea>
                    <label class="form-label" for="typeText">Address</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" type="text" id="birthday" name="birthday" readonly />
                    <label class="form-label" for="typeText">Birthday</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="contactnum" name="contactnum" class="form-control" readonly />
                    <label class="form-label" for="form16">Contact No.</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="contactnum" name="contactnum" class="form-control" readonly />
                    <label class="form-label" for="form16">Email Address</label>
                </div>

                <div class="mb-3">
                    <p1>pdf ng requirements</p1>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@endsection