@extends('layouts.tenant-master')

@section('content')


    <style type="text/css">
        .photo2b2{
            max-width: 200px;
            min-height: 200px;
            object-fit:cover;
            border-radius: 10px;
        }
    </style>

    <div class="content-wrapper">
    <table class="table">
        <caption>Lost and Found Items</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Bag</td>
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
                <h5 class="modal-title" id="exampleModalLabel">CMA</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <h5>Please go to the CMA Admin's Office if you think the item is yours and prepare valid IDs and proof.</h5>
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