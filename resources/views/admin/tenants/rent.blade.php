@extends('layouts.admin-master')

@section('content')

<style>
    .content-wrapper {
        margin-left: 20%;
        transition: margin-left 0.5s ease;
    }
    
    .sidebar.close ~ .content-wrapper {
        margin-left: 80px;;
    }

    .table-header {
        position: sticky;
        top: 0;
        z-index: 1;
        background-color: #f8f9fa;
    }
    .table-body {
            max-height: 300px; /* Set a desired height for the scrollable body */
            overflow-y: auto;
        }
</style>

<div class="content-wrapper">
    <div class="d-flex justify-content-end mt-2">
        <button style="margin-right: 10px;" type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#selectModal">
            Select Tenant
        </button>
    </div>

    <!-- Select Tenant Modal -->
    <div class="modal fade" id="selectModal" tabindex="-1" aria-labelledby="selectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Select a Tenant</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-body">
                        <table class="table">
                            <thead class="table-header">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Kim Taehyung</td>
                                    <td>09123456789</td>
                                    <td>kth@gmail.com</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-dark btn-rounded">Select</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <h3>Tenant</h3>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3 form-outline">
                            <input class="form-control" id="fullname" name="fullname" readonly/>
                            <label class="form-label" for="typeText">Fullname</label>
                        </div>
                    </div>

                    <div class="col">
                        <div class="mb-3 form-outline">
                            <input class="form-control" type="text" id="contact" name="contact" readonly/>
                            <label class="form-label" for="typeText">Contact</label>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <select id="tenanttype" name="tenanttype" class="form-select">
                        <option selected>Tenant Type</option>
                        <option>Regular</option>
                        <option>Temporary</option>
                    </select>
                </div>
                <div class="mb-3">
                    <h3>Stall</h3>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" type="text" id="stallname" name="stallname"/>
                    <label class="form-label" for="typeText">Stall Name</label>
                </div>

                <div class="mb-3">
                    <select id="rentalfee" name="rentalfee" class="form-select">
                        <option selected>Rental Fee Type</option>
                        <option value="Daily">Daily</option>
                        <option value="Monthly">Monthly</option>
                    </select>
                </div>

                <div class="mb-3">
                    <select id="floornumber" name="floornumber" class="form-select">
                        <option value="">Select Floor Number</option>
                        {{--@if(isset($floors))
                        @foreach($floors as $floor)
                        <option value="{{ $floor->id }}">{{ $floor->floornumber }}</option>
                        @endforeach
                        @endif--}}
                        <option>Lower Ground Floor</option>
                        <option>Upper Ground Floor</option>
                        <option>2nd Floor</option>
                    </select>
                </div>

                <div class="mb-3">
                    <select id="section" name="section" class="form-select">
                        <option value="">Select Section</option>
                    </select>
                </div>

                <div class="mb-3">
                    <select id="area" name="area" class="form-select">
                        <option value="">Select Area</option>
                    </select>
                </div>

                <div class="mb-3">
                    <select id="stallnumber" name="stallnumber" class="form-select">
                        <option value="">Select Stall Number</option>
                    </select>
                </div>

                <div class="text-center mb-3">
                    <button type="button" class="btn btn-dark btn-rounded" name="selectButton" id="selectButton" style="font-size: 16px; padding: 10px 30px;">Select</button>
                </div>
            </div>

            <div class="col-12 col-md-6 mt-5">
                <div class="mb-3 form-outline">
                    <input type="text" class="form-control" name="selectedStall" id="selectedStall" readonly>
                    <label class="form-label" for="typeText">Selected Stall</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" type="text" id="stallfee" name="stallfee" readonly/>
                    <label class="form-label" for="typeText">Stall Fee</label>
                </div>

                <div class="mb-3 form-outline">
                    <input type="text" class="form-control" name="cusa" id="cusa" readonly>
                    <label class="form-label" for="typeText">Cusa</label>
                </div>

                <div class="mb-3 form-outline">
                    <input type="text" class="form-control" name="totalsf" id="totalsf" readonly>
                    <label class="form-label" for="typeText">Total Stall Fee</label>
                </div>
                <div class="text-center mb-3">
                    <button type="button" class="btn btn-dark btn-rounded" name="generateButton" id="generateButtonButton" style="font-size: 16px; padding: 10px 30px;">Generate Contract</button>
                    <button type="button" class="btn btn-dark btn-rounded" name="processButton" id="processButton" style="font-size: 16px; padding: 10px 30px;">Process</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/mdb.min.js"></script>
</body>
</html>
@endsection

