<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/7a249ebf7f.js" crossorigin="anonymous"></script>

<script src="js/mdb.min.js"></script>
<link rel="stylesheet" href="/css/mdb.min.css">

</head>
<body>

    <form class="was-validated">
        <div class="container p-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <h3>Applicant's Information</h3>
                            </div>

                            <div class="mb-3 form-outline">
                                <input class="form-control" id="fullname" name="fullname" readonly/>
                                <label class="form-label" for="typeText">Applicant No.</label>
                            </div>

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
                                <input class="form-control is-valid" id="fullname" name="fullname" required/>
                                <label class="form-label" for="typeText">Email Address</label>
                            </div>

                            <div class="mb-3 form-outline">
                                <input id="contactnum" name="contactnum" class="form-control is-valid" data-mdb-showcounter="true" maxlength="11" required />
                                <label class="form-label" for="form16">Contact No.</label>
                                <div class="form-helper mt-1"></div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="form16">Upload Picture (2x2)</label>
                                <input type="file" class="form-control" id="image" required/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="form16">Upload all Requirements(in PDF form)</label>
                                <input type="file" class="form-control" id="req" required/>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-dark btn-rounded" data-mdb-target="#submitModal" data-mdb-toggle="modal" data-mdb-dismiss="modal">
                                    Submit
                                  </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="modal fade" id="submitModal" aria-hidden="true" aria-labelledby="submitModalToggleLabel22" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel22">Schedule</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Kindly check your email.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark btn-rounded" data-mdb-dismiss="modal">Okay</button>
            </div>
          </div>
        </div>
      </div>

    <script src="js/mdb.min.js"></script>
</body>
</html>