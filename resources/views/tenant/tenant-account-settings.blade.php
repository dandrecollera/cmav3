@extends('layouts.tenant-master')

@section('content')



    <style type="text/css">
        .photo2b2{
            max-width: 200px;
            min-height: 200px;
            object-fit:cover;
            border-radius: 10px;
        }
    </style>

<div class="content-wrapper">
<div class="row p-4">
    <div class="col-6">
            <h5>Tenant Information</h5>
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
    <div class="col-6">
            <h5>Account</h5>
            <div class="mb-3 form-outline">
                <input class="form-control" id="email" name="email" readonly/>
                <label class="form-label" for="typeText">Email</label>
            </div>

            <div class="mb-3 form-outline">
                <input class="form-control" id="currentpass" name="currentpass" required/>
                <label class="form-label" for="typeText">Current Password</label>
            </div>

            <div class="mb-3 form-outline">
                <input class="form-control" id="newpass" name="newpass" required/>
                <label class="form-label" for="typeText">New Password</label>
            </div>

            <div class="mb-3 form-outline">
                <input id="typenewpass" name="typenewpass" class="form-control"required />
                <label class="form-label" for="form16">Type Again New Password</label>
            </div>

            <div class="mb-3">
                <button type="button" class="btn btn-outline-dark btn-rounded">Clear</button>
                <button type="submit" class="btn btn-dark btn-rounded">Update</button>
            </div>
    </div>
</div>
</div>


@endsection