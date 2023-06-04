<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment History</title>

    <link rel="stylesheet" href="css/mdb.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    
    <table class="table">
        <caption>Payment History</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Month</td>
                <th scope="col">OR No.</th>
                <th scope="col">Bill No.</th>
                <th scope="col">Billing Date</th>
                <th scope="col">Payment Date</th>
                <th scope="col">Mode of Payment</th>
                <th scope="col">Reference No.</th>
                <th scope="col">Outstanding Balance</th>
                <th scope="col">Amount Paid</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                <th scope="col">Search</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>May</td>
                <td>0000001</td>
                <td>00000001</td>
                <td>05/15/2023</td>
                <td>05/25/2023</td>
                <td>GCASH</td>
                <td>0000 000 000001</td>
                <td>0.00</td>
                <td>2000.00</td>
                <td><span class="badge badge-success rounded-pill d-inline">PAID</span></td>
                <td>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-dark btn-rounded">PDF</button>
                        <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#viewModal">View</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>June</td>
                <td>0000003</td>
                <td>00000003</td>
                <td>06/15/2023</td>
                <td>06/25/2023</td>
                <td>CASH</td>
                <td>0000 000 000003</td>
                <td>0.00</td>
                <td>1000.00</td>
                <td><span class="badge badge-primary rounded-pill d-inline">PENDING</span></td>
                <td>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-dark btn-rounded">PDF</button>
                        <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#viewModal">View</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">View</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 d-flex justify-content-center">
                    <img src="/img/cma-admin1.png" style="width: 150px; height: 150px">
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="ornum" name="ornum" readonly/>
                    <label class="form-label" for="typeText">OR No.</label>
                </div>
                <div class="mb-3 form-outline">
                    <input class="form-control" id="billnum" name="billnum" readonly/>
                    <label class="form-label" for="typeText">Bill No.</label>
                </div>
                <div class="mb-3 form-outline">
                    <input class="form-control" id="month" name="month" readonly/>
                    <label class="form-label" for="typeText">Month</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="billdate" name="billdate" readonly/>
                    <label class="form-label" for="typeText">Bill Date</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="billingperiod" name="billingperiod" class="form-control" readonly/>
                    <label class="form-label" for="form16">Billing Period</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="paymentdate" name="paymentdate" class="form-control" readonly/>
                    <label class="form-label" for="form16">Payment Date</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="outstandingbal" name="outstandingbal" class="form-control" readonly/>
                    <label class="form-label" for="form16">Outstanding Balance</label>
                </div>

                <div class="mb-3 form-outline">
                    <input id="amounttobepaid" name="amounttobepaid" class="form-control" readonly/>
                    <label class="form-label" for="form16">Amount to be Paid</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="mop" name="mop" readonly/>
                    <label class="form-label" for="typeText">Mode of Payment</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="amount" name="amount" readonly/>
                    <label class="form-label" for="typeText">Amount Paid</label>
                </div>

                <div class="mb-3 form-outline">
                    <input class="form-control" id="refnum" name="refnum" readonly/>
                    <label class="form-label" for="typeText">Reference Number</label>
                </div>

                <div class="mb-3">
                    <label for="inputFloorDes" class="form-label">Status</label>
                    <select id="section" name="section" class="form-select">
                        <option selected>-- Status --</option>
                        <option>Paid</option>
                        <option>Kulang</option>
                    </select>
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