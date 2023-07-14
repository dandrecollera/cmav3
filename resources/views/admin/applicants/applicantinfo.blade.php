@extends('layouts.modal-design')

@section('content')
<div class="mb-3 d-flex flex-column align-items-center">
    <img src="{{ asset('storage/applicantsImage/' . $app->image) }}" class="img-fluid rounded"
        style="object-fit: cover; height: 150px; width:150px;">
</div>

<div class="mb-3 form-outline">
    <input class="form-control" id="id" name="id" value="{{ $app->id }}" readonly />
    <label class="form-label" for="typeText">Applicant No.</label>
</div>

<div class="mb-3 form-outline">
    <input class="form-control" id="fullname" name="fullname" value="{{ $app->firstname . ' ' . $app->lastname }}"
        readonly />
    <label class="form-label" for="typeText">Fullname</label>
</div>

<div class="mb-3 form-outline">
    <textarea class="form-control" id="address" name="address" rows="2" readonly>{{ $app->address }}</textarea>
    <label class="form-label" for="typeText">Address</label>
</div>

<div class="mb-3 form-outline">
    <input class="form-control" type="text" id="birthday" name="birthday"
        value="{{ DateTime::createFromFormat('Y-m-d', $app->birthday)->format('F d, Y') }}" readonly />
    <label class="form-label" for="typeText">Birthday</label>
</div>

<div class="mb-3 form-outline">
    <input id="contactnum" name="contactnum" class="form-control" value="{{ $app->contactno }}" readonly />
    <label class="form-label" for="form16">Contact No.</label>
</div>

<div class="mb-3 form-outline">
    <input id="emailadd" name="emailadd" class="form-control" value="{{ $app->emailadd }}" readonly />
    <label class="form-label" for="form16">Email Address</label>
</div>

<div class="mb-3">
    <a href="{{ asset('storage/applicantsRequirments/' . $app->requirements) }}" target="_blank">View Requirement</a>
</div>

@endsection