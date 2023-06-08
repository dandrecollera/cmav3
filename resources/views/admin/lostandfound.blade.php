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
                <th scope="col">
                    <button type="button" class="btn btn-outline-light btn-rounded" data-mdb-toggle="modal" data-mdb-target="#addModal">
                        Add Item
                    </button>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Bag</td>
                <td>Taehyung merch</td>
                <td>05/24/2023</td>
                <td>Lost</td>
                <td><div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#editModal">Edit</button>
                    <button type="button" class="btn btn-outline-dark btn-rounded">Delete</button>
                  </div></td>
            </tr>
        </tbody>
    </table>

      <!-- Add Item Modal -->
      <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add an Item</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" />
                </div>
                <div class="mb-3 form-outline">
                    <input type="text" id="item" name="item" class="form-control"/>
                    <label class="form-label" for="form12">Item</label>
                </div>
                <div class="mb-3 form-outline">
                    <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                    <label class="form-label" for="description">Description</label>
                </div>
                <div class="mb-3 form-outline">
                    <input type="date" id="date" name="date" class="form-control"/>
                    <label class="form-label" for="form12">Date</label>
                </div>
                <div class="mb-3">
                    <label for="inputFloorDes" class="form-label">Status</label>
                    <select id="area" name="area" class="form-select">
                        <option selected>Status</option>
                        <option>Lost</option>
                        <option>Found</option>
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

      <!-- Edit Item Modal -->
      <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit an Item</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                  <img src="/img/cma-admin1.png" style="width: 150px; height: 150px">
                </div>
                <div class="mb-3 form-outline">
                    <input type="text" id="item" name="item" class="form-control" readonly/>
                    <label class="form-label" for="form12">Item</label>
                </div>
                <div class="mb-3 form-outline">
                    <textarea class="form-control" id="description" name="description" readonly rows="4"></textarea>
                    <label class="form-label" for="description">Description</label>
                </div>
                <div class="mb-3 form-outline">
                    <input type="date" id="date" name="date" class="form-control" readonly/>
                    <label class="form-label" for="form12">Date</label>
                </div>
                <div class="mb-3">
                    <label for="inputFloorDes" class="form-label">Status</label>
                    <select id="area" name="area" class="form-select">
                        <option selected>Status</option>
                        <option>Lost</option>
                        <option>Found</option>
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
  </div>
@endsection