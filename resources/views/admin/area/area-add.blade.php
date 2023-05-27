<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area Add</title>

    <link rel="stylesheet" href="css/mdb.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="inputFloorNum" class="form-label">Floor Number</label>
                            <select id="floornumber" name="floornumber" class="form-select">
                                <option selected>Choose Floor</option>
                                <option>Lower Ground Floor</option>
                                <option>Upper Ground Floor</option>
                                <option>2nd Floor</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputFloorDes" class="form-label">Section</label>
                            <select id="section" name="section" class="form-select">
                                <option selected>Choose Section</option>
                                <option>Rice</option>
                                <option>Coldcuts</option>
                                <option>Front Commercial</option>
                                <option>Groceries</option>
                            </select>
                        </div>
                        <div class="mb-3 form-outline">
                            <input type="text" id="area" name ="area" class="form-control"/>
                            <label class="form-label" for="typeText">Area</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark btn-rounded">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <script src="js/mdb.min.js"></script>
</body>
</html>