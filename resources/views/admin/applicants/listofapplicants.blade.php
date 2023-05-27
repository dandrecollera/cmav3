<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Applicants</title>

    <link rel="stylesheet" href="css/mdb.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    {{--list of approved applicants--}}

    <table class="table">
        <caption>List of Applicants</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Avatar</th>
                <th scope="col">Fullname</th>
                <th scope="col">Birthday</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>IMG SRC</td>
                <td>Kim Taehyung</td>
                <td>12/30/1995</td>
                <td>09123456789</td>
                <td>
                    <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#viewModal">View</button>
                </td>
                
            </tr>
        </tbody>
    </table>

    <!-- Add Item Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Applicant's Info</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <p1>IMAGE DITO</p1>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="fullname" name="fullname"/>
                    <label class="form-label" for="typeText">Fullname</label>
                </div>

                <div class="mb-3 form-outline">
                    <textarea class="form-control" id="address" name="address" rows="2"></textarea>
                    <label class="form-label" for="typeText">Address</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" type="date" id="birthday" name="birthday"/>
                    <label class="form-label" for="typeText">Birthday</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="contactnum" name="contactnum" class="form-control" maxlength="11"/>
                    <label class="form-label" for="form16">Contact No.</label>
                </div>

                <div class="mb-3">
                    <p1>button para sa makita contract???</p1>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
              <button type="button" class="btn btn-dark btn-rounded">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    <script src="js/mdb.min.js"></script>
</body>
</html>