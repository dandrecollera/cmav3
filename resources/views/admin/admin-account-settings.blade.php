@extends('layouts.admin-master')
@section('content')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <div class="mb-3 form-outline">
                        <input class="form-control" id="accname" name="accname" readonly />
                        <label class="form-label" for="typeText">Account Name</label>
                    </div>

                    <div class="mb-3 form-outline">
                        <input class="form-control" id="email" name="email" readonly />
                        <label class="form-label" for="typeText">Email</label>
                    </div>

                    <div class="mb-3 form-outline">
                        <input class="form-control" id="currentpass" name="currentpass" required />
                        <label class="form-label" for="typeText">Current Password</label>
                    </div>

                    <div class="mb-3 form-outline">
                        <input class="form-control" id="newpass" name="newpass" required />
                        <label class="form-label" for="typeText">New Password</label>
                    </div>

                    <div class="mb-3 form-outline">
                        <input id="typenewpass" name="typenewpass" class="form-control" required />
                        <label class="form-label" for="form16">Type Again New Password</label>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-outline-dark btn-rounded" data-mdb-target="#registerModal"
                            data-mdb-toggle="modal" data-mdb-dismiss="modal">Register</button>
                        <button class="btn btn-dark btn-rounded">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registerModal" aria-hidden="true" aria-labelledby="registerModalToggleLabel22"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel22">Register</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="was-validated">
                <div class="modal-body">

                    <div class="mb-3 form-outline">
                        <input class="form-control" id="accname" name="accname" readonly />
                        <label class="form-label" for="typeText">Account Name</label>
                    </div>

                    <div class="mb-3 form-outline">
                        <input class="form-control" id="email" name="email" readonly />
                        <label class="form-label" for="typeText">Email</label>
                    </div>

                    <div class="mb-3 form-outline">
                        <input class="form-control is-valid" id="pass" name="pass" required />
                        <label class="form-label" for="typeText">Password</label>
                    </div>

                    <div class="mb-3">
                        <select id="role" name="role" class="form-select" required>
                            <option selected>-- Choose Role --</option>
                            <option>Admin</option>
                            <option>Tenant</option>
                            <option>Treasury</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark btn-rounded"
                        data-mdb-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark btn-rounded">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection