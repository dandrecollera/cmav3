@extends('layouts.treasury-master')

@section('content')

    <div class="content-wrapper">
        <div class="container p-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            <div class="mb-3 form-outline">
                                <input class="form-control" id="accname" name="accname" readonly/>
                                <label class="form-label" for="typeText">Account Name</label>
                            </div>

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
                                <button class="btn btn-dark btn-rounded">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection