<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Tenants</title>

    <link rel="stylesheet" href="css/mdb.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

    <table class="table">
        <caption>List of Tenants</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Avatar</th>
                <th scope="col">Fullname</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Email Address</th>
                <th scope="col">Tenant Type</th>
                <th scope="col">Stall Number</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="/img/cma-admin1.png" style="width: 30px; height: 30px" class="rounded-circle"></td>
                <td>Kim Taehyung</td>
                <td>09123456789</td>
                <td>kth@gmail.com</td>
                <td>Monthly</td>
                <td>FGS-1</td>
                <td>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#billModal">Bill</button>
                        <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#viewModal">View</button>
                        <button type="button" class="btn btn-outline-dark btn-rounded">Archive</button>
                    </div>
                </td>
                
            </tr>
        </tbody>
    </table>

    <!-- Add Item Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tenant's Info</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <p1>IMAGE DITO</p1>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="fullname" name="fullname" readonly/>
                    <label class="form-label" for="typeText">Fullname</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="contact" name="contact" readonly/>
                    <label class="form-label" for="typeText">Contact No.</label>
                </div>

                <div class="mb-3 form-outline">
                    <textarea class="form-control" id="address" name="address" rows="2" readonly></textarea>
                    <label class="form-label" for="typeText">Address</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" type="text" id="birthday" name="birthday" readonly/>
                    <label class="form-label" for="typeText">Birthday</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="emal" name="email" class="form-control" readonly/>
                    <label class="form-label" for="form16">Email Address</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="tenanttype" name="tenanttype" class="form-control" readonly/>
                    <label class="form-label" for="form16">Tenant Type</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="stallname" name="stallname" class="form-control" readonly/>
                    <label class="form-label" for="form16">Stall Name</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="tenanttype" name="tenanttype" class="form-control" readonly/>
                    <label class="form-label" for="form16">Rental Fee Type</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="stallnum" name="stallnum" class="form-control" readonly/>
                    <label class="form-label" for="form16">Stall No.</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="fee" name="fee" class="form-control" readonly/>
                    <label class="form-label" for="form16">Total Stall Fee</label>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-dark btn-rounded" id="edit">Edit</button>
                <button type="submit" class="btn btn-outline-dark btn-rounded" id="update" disabled>Update</button>
            </div>
          </div>
        </div>
      </div>

      <script>
        // Get the edit button element
        var editButton = document.getElementById("update");
                
        // Get the input elements
        var fullnameInput = document.getElementById("fullname");
        var dateofbirthInput = document.getElementById("birthday");
        var addressInput = document.getElementById("address");
        var contactInput = document.getElementById("contact");
        var emailaddInput = document.getElementById("email");
        var stalltypeInput = document.getElementById("tenanttype");
        var stallnameInput = document.getElementById("stallname");
        var paymentInput = document.getElementById("payment");
        var amountInput = document.getElementById("amount");
        var selectedInput = document.getElementById("selectedStallTextbox");
        var totalamountInput = document.getElementById("totalamount");
        var imageInput = document.getElementById("image");
        var saveButton = document.getElementById("update");
        // Add an event listener to the edit button
        editButton.addEventListener("click", function() {
          // Enable the input fields
          fullnameInput.removeAttribute("disabled");
          dateofbirthInput.removeAttribute("disabled");
          addressInput.removeAttribute("disabled");
          contactInput.removeAttribute("disabled");
          emailaddInput.removeAttribute("disabled");
          stalltypeInput.removeAttribute("disabled");
          stallnameInput.removeAttribute("disabled");
          paymentInput.removeAttribute("disabled");
          amountInput.removeAttribute("disabled");
          selectedInput.removeAttribute("disabled");
          totalamountInput.removeAttribute("disabled");
          imageInput.removeAttribute("disabled");
          saveButton.removeAttribute("disabled");
        });
        </script>

    <script src="js/mdb.min.js"></script>
</body>
</html>