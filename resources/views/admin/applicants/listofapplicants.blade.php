@extends('layouts.admin-master')

@section('content')

<div class="content-wrapper">
<div class="table-responsive">
<table class="table">
    <caption>List of Applicants</caption>
    <thead class="table-dark">
        <tr>
            <th scope="col">Applicant No.</th>
            <th scope="col">Image</th>
            <th scope="col">Fullname</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Email Address</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($apply))
                @foreach($apply as $app)
                    <tr>
                        <td>{{ $app->id }}</td>
                        <td><img src="{{ asset('storage/applicantsImage/' . $app->image) }}" class="rounded"></td>
                        <td>{{ $app->firstname . ' ' . $app->lastname }}</td>
                        <td>{{ $app->contactno }}</td>
                        <td>{{ $app->emailadd }}</td>
                        <td>
                            <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal"
                                data-mdb-target="#viewModal">View</button>
                            <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal"
                                data-mdb-target="#approveModal" data-appid="{{ $app->id }}">Approve</button>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tr>
    </tbody>
</table>
</div>

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
</div>

<!-- view Modal -->
<div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="approveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Applicant</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Do you really want to approve this applicant?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-dark btn-rounded btn-approve" id="confirmApprove">Confirm</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.btn-approve').on('click', function() {
    console.log('approve button clicked!');
    console.log( $(this).data("appid") );
    var iid = $(this).data("appid");
    console.log(iid);
    // Redirect to the approve route with the id parameter
    $('#confirmApprove').prop('href', '/approve?id='+ iid);
});
</script>

@endsection