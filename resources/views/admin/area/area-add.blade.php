@extends('layouts.admin-master')

@section('content')



<div class="content-wrapper">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <select id="floornum" name="floornum" class="form-select">
                                    <option selected>Choose Floor</option>
                                    @foreach($area as $floor)
                                        <option value="{{ $floor->floornum }}">{{ $floor->floornum }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <select id="section" name="section" class="form-select">
                                    <option selected>Choose Section</option>
                                    @foreach($area as $section)
                                        <option value="{{ $section->section }}" data-floor="{{ $section->floornum }}">{{ $section->section }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 form-outline">
                                <input type="text" id="area" name ="area" class="form-control"/>
                                <label class="form-label" for="typeText">Area</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark btn-rounded">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#floornum').on('change', function() {
            var selectedFloor = $(this).val();
            $('#section option').hide();
            $('#section option[data-floor="' + selectedFloor + '"]').show();
            $('#section').val('').change();
        });
    });
</script>

@endsection