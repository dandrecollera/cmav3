<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/7a249ebf7f.js" crossorigin="anonymous"></script>

<script src="js/mdb.min.js"></script>
<link rel="stylesheet" href="/css/mdb.min.css">

</head>
<body>

<div class="d-flex justify-content-end p-3">
    <button style="margin-right: 10px;" type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#selectModal">
        Select Tenant
    </button>
    <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#addModal">
        Add Tenant
    </button>
</div>

    <!-- Add Item Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Tenant</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="was-validated">
                <div class="modal-body">
                    <div class="mb-3 form-outline">
                        <input class="form-control is-valid" id="fullname" name="fullname" required/>
                        <label class="form-label" for="typeText">Fullname</label>
                    </div>

                    <div class="mb-3 form-outline">
                        <textarea class="form-control is-valid" id="address" name="address" required rows="2"></textarea>
                        <label class="form-label" for="typeText">Address</label>
                    </div>

                    <div class="mb-3 form-outline">
                        <input class="form-control is-valid" type="date" id="birthday" name="birthday" required/>
                        <label class="form-label" for="typeText">Birthday</label>
                    </div>

                    <div class="mb-3 form-outline">
                        <input id="contactnum" name="contactnum" class="form-control is-valid" data-mdb-showcounter="true" maxlength="11" required />
                        <label class="form-label" for="form16">Contact No.</label>
                        <div class="form-helper mt-1"></div>
                    </div>

                    <div class="mb-3">
                        <input type="file" class="form-control" id="image" required/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-dark btn-rounded">Generate</button>
                    <button type="button" class="btn btn-outline-dark btn-rounded">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>

        <!-- Select Tenant Modal -->
        <div class="modal fade" id="selectModal" tabindex="-1" aria-labelledby="selectModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Select a Tenant</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-dark btn-rounded">Select</button>
                </div>
            </div>
            </div>
        </div>


        <div class="container-fluid" style="width: 2000px; margin-left: -300px">
            <div class="col-6 mx-auto">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="card">
                            <div class="card-body">
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
                                            <input class="form-control" type="text" id="birthday" name="birthday" readonly/>
                                            <label class="form-label" for="typeText">Contact</label>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="mb-3">
                                    <label for="inputFloor" class="form-label">Tenant Type</label>
                                    <select id="stalltypet" name="stalltypet" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>Regular</option>
                                        <option>Temporary</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-4" style="width: 2000px; margin-left: -300px">
            <div class="col-6 mx-auto">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h3>Stall</h3>
                                </div>
        
                                <div class="mb-3 form-outline">
                                    <input class="form-control" type="text" id="birthday" name="birthday"/>
                                    <label class="form-label" for="typeText">Stall Name</label>
                                </div>
        
                                <div class="mb-3">
                                    <label for="inputFloor" class="form-label">Rental Fee Type</label>
                                    <select id="stalltypet" name="stalltypet" class="form-select">
                                        <option selected>Choose...</option>
                                        <option value="Daily">Daily</option>
                                        <option value="Monthly">Monthly</option>
                                    </select>
                                </div>
        
                                <div class="mb-3 form-outline">
                                    <input class="form-control" type="text" id="birthday" name="birthday" readonly/>
                                    <label class="form-label" for="typeText">Stall Fee</label>
                                </div>
        
                                <div class="mb-3">
                                    <label for="inputFloor" class="form-label">Floor Number</label>
                                    <select id="floorNumberDropdown" name="floornumber" class="form-select">
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
                                    <label for="inputFloor" class="form-label">Section</label>
                                    <select id="stallNumberDropdown" name="stallnumber" class="form-select">
                                        <option value="">Select Stall Number</option>
                                    </select>
                                </div>
        
                                <div class="mb-3">
                                    <label for="inputFloor" class="form-label">Area</label>
                                    <select id="stallNumberDropdown" name="stallnumber" class="form-select">
                                        <option value="">Select Stall Number</option>
                                    </select>
                                </div>
        
                                <div class="mb-3">
                                    <label for="inputFloor" class="form-label">Stall Number</label>
                                    <select id="stallNumberDropdown" name="stallnumber" class="form-select">
                                        <option value="">Select Stall Number</option>
                                    </select>
                                </div>
        
                                <div class="text-center mb-3">
                                    <button type="button" class="btn btn-primary" name="selectButton" id="selectButton" style="font-size: 16px; padding: 10px 30px;">Select</button>
                                </div>
        
                                <div class="mb-3 form-outline">
                                    <input type="text" class="form-control" name="selectedStallTextboxt" id="selectedStallTextboxt" readonly>
                                    <label class="form-label" for="typeText">Selected Stall</label>
                                </div>
        
                                <div class="mb-3 form-outline">
                                    <input type="text" class="form-control" name="selectedStallTextboxt" id="selectedStallTextboxt" readonly>
                                    <label class="form-label" for="typeText">Total Stall Fee</label>
                                </div>
                                <div class="text-center mb-3">
                                    <button type="button" class="btn btn-primary" name="selectButton" id="selectButton" style="font-size: 16px; padding: 10px 30px;">Process</button>
                                    <button type="button" class="btn btn-primary" name="selectButton" id="selectButton" style="font-size: 16px; padding: 10px 30px;">Generate Contract</button>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    

    
    <script src="js/mdb.min.js"></script>
</body>
</html>