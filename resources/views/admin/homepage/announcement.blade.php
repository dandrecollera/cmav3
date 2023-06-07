@extends('layouts.admin-master')

@section('content')

    <table class="table">
        <caption>Announcement</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Category</th>
                <th scope="col">Date</th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
                <th scope="col">
                    <button type="button" class="btn btn-outline-light btn-rounded" data-mdb-toggle="modal" data-mdb-target="#addModal">
                        Add Announcement
                    </button>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Holiday</td>
                <td>05/25/2023</td>
                <td>wdas</td>
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
              <h5 class="modal-title" id="exampleModalLabel">Add an Announcement</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 form-outline">
                  <input class="form-control" id="category" name="category"/>
                  <label class="form-label" for="Category">Category</label>
                </div>
                <div class="mb-3 form-outline">
                    <input type="date" id="date" name="date" class="form-control"/>
                    <label class="form-label" for="form12">Date</label>
                </div>
                <div class="mb-3 form-outline">
                    <textarea class="form-control" id="title" name="title" rows="3"></textarea>
                    <label class="form-label" for="description">Title</label>
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
              <h5 class="modal-title" id="editModalLabel">Edit Announcement</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 form-outline">
                  <input class="form-control" id="category" name="category"/>
                  <label class="form-label" for="Category">Category</label>
                </div>
                <div class="mb-3 form-outline">
                    <input type="date" id="date" name="date" class="form-control"/>
                    <label class="form-label" for="form12">Date</label>
                </div>
                <div class="mb-3 form-outline">
                    <textarea class="form-control" id="title" name="title" rows="3"></textarea>
                    <label class="form-label" for="description">Title</label>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
              <button type="button" class="btn btn-dark btn-rounded">Save changes</button>
            </div>
          </div>
        </div>
      </div>

@endsection