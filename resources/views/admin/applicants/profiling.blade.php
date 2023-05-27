<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profiling</title>

    <link rel="stylesheet" href="css/mdb.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    {{--dito na rin yung sa pag generate ng contract??---}}

    <form class="was-validated">
        <div class="container mt-5 p-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <h3>Profiling</h3>
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
                                <input id="contactnum" name="contactnum" class="form-control is-valid" data-mdb-showcounter="true" maxlength="11" required />
                                <label class="form-label" for="form16">Contact No.</label>
                                <div class="form-helper mt-1"></div>
                            </div>

                            <div class="mb-3">
                                <input type="file" class="form-control" id="image" required/>
                            </div>

                            <div class="mb-3">
                                <button type="button" class="btn btn-outline-dark btn-rounded">Generate</button>
                                <button type="button" class="btn btn-dark btn-rounded">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="js/mdb.min.js"></script>
</body>
</html>