@extends('layouts.admin-master')

@section('content')

<div class="content-wrapper">
    <table class="table">
        <caption>Requirements</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Requirements</th>
                <th scope="col">Notes</th>
                <th scope="col">Actions</th>
                <th scope="col">
                    <button type="button" class="btn btn-outline-light btn-rounded" data-mdb-toggle="modal" data-mdb-target="#addModal">
                        Add Requirement
                    </button>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>BRGY ID</td>
                <td>Must be Antipolo resident</td>
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
              <h5 class="modal-title" id="exampleModalLabel">Add a Requirement</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 form-outline">
                    <input type="text" id="requirements" name="requirements" class="form-control"/>
                    <label class="form-label" for="form12">Requirement</label>
                </div>
                <div class="mb-3 form-outline">
                    <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                    <label class="form-label" for="description">Notes</label>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
              <button type="button" class="btn btn-dark btn-rounded">Upload</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Edit Item Modal -->
      <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit a Requirement</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 form-outline">
                    <input type="text" id="requirements" name="requirements" class="form-control"/>
                    <label class="form-label" for="form12">Requirement</label>
                </div>
                <div class="mb-3 form-outline">
                    <textarea class="form-control" id="notes" name="notes" rows="2"></textarea>
                    <label class="form-label" for="description">Notes</label>
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