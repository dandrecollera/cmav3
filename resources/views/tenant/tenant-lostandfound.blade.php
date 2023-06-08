@extends('layouts.tenant-master')

@section('content')


    <style type="text/css">
        .photo2b2{
            max-width: 200px;
            min-height: 200px;
            object-fit:cover;
            border-radius: 10px;
        }
        .content-wrapper {
        margin-left: 20%;
        transition: margin-left 0.5s ease;
        }
      
        .sidebar.close ~ .content-wrapper {
        margin-left: 80px;;
        }
    </style>

    <div class="content-wrapper">
    <table class="table">
        <caption>Lost and Found Items</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Bag</td>
                <td>Taehyung merch</td>
                <td>05/24/2023</td>
                <td>Lost</td>
                <td><div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#viewModal">View</button>
                  </div></td>
            </tr>
        </tbody>
    </table>

      <!-- Add Item Modal -->
      <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Item</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <h5>Please go to the CMA Admin's Office if it is yours.</h5>
                </div>
                <div class="mb-3">
                    <img src="/img/cma-admin1.png" class="photo2b2">
                </div>
                <div class="mb-3 form-outline">
                    <input id="item" name="item" class="form-control" readonly/>
                    <label class="form-label" for="form12">Item Name</label>
                </div>
                <div class="mb-3 form-outline">
                    <textarea class="form-control" id="description" name="description" rows="4" readonly></textarea>
                    <label class="form-label" for="description">Description</label>
                </div>
                <div class="mb-3 form-outline">
                    <input id="date" name="date" class="form-control" readonly/>
                    <label class="form-label" for="form12">Date</label>
                </div>
                <div class="mb-3 form-outline">
                    <input id="date" name="date" class="form-control" readonly/>
                    <label for="inputFloorDes" class="form-label">Status</label>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection