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
                    <td><img src="{{ asset('storage/applicantsImage/' . $app->image) }}"
                            class="img-fluid rounded-circle" style="object-fit: cover; height: 75px;"></td>
                    <td>{{ $app->firstname . ' ' . $app->lastname }}</td>
                    <td>{{ $app->contactno }}</td>
                    <td>{{ $app->emailadd }}</td>
                    <td>
                        <button type="button" class="btn btn-outline-dark btn-rounded dm-view" data-mdb-toggle="modal"
                            data-mdb-target="#viewModal" data-appid="{{ $app->id }}">View</button>
                        <a type="button" class="btn btn-outline-dark btn-rounded dm-approved" data-mdb-toggle="modal"
                            data-mdb-target="#approveModal" data-appid="{{ $app->id }}">Approve</a>
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
                    <iframe id="applicantinfo" src="/adminsection_add" width="100%" height="450px"
                        style="border:none"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark btn-rounded"
                        data-mdb-dismiss="modal">Close</button>
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
                <a href="" class="btn btn-dark btn-rounded btn-approve" id="confirmApprove">Confirm</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.dm-approved').on('click', function(){
            var sid = $(this).data("appid");
            $('#confirmApprove').prop('href', '/approve?id='+ sid);
        });
        $('.dm-view').on('click', function(){
            var sid = $(this).data("appid");
            $('#applicantinfo').attr('src', '/applicantinfo?id='+sid);
        })
    })
</script>

@endsection