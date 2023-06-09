@extends('layouts.tenant-master')

@section('content')

<div class="content-wrapper">
    <table class="table">
        <caption>List of Reports</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Report No.</td>
                <th scope="col">Date</th>
                <th scope="col">Concern</th>
                <th scope="col">Floor No.</th>
                <th scope="col">Stall No.</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
                <th scope="col">
                    <button type="button" class="btn btn-outline-light btn-rounded" data-mdb-toggle="modal" data-mdb-target="#addModal">
                        Add a Report
                    </button>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>05/25/2023</td>
                <td>Sira ang ilaw</td>
                <td>Lower Ground Floor</td>
                <td>FGS 1</td>
                <td>Pending</td>
                <td><div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-dark btn-rounded">Delete</button>
                  </div></td>
            </tr>
        </tbody>
    </table>

    <!-- Add Report Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add a Report</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                <div class="mb-3 form-outline">
                    <input type="date" id="date" name="date" class="form-control"/>
                    <label class="form-label" for="form12">Date</label>
                </div>
                <div class="mb-3 form-outline">
                    <textarea class="form-control" id="concern" name="concern" rows="3"></textarea>
                    <label class="form-label" for="description">Concern</label>
                </div>
                <div class="mb-3">
                    <label for="inputFloorDes" class="form-label">Floor Number</label>
                    <select id="area" name="area" class="form-select">
                        <option selected>-- Choose --</option>
                        <option>Lower Ground Floor</option>
                        <option>Upper Ground Floor</option>
                        <option>2nd Floor</option>
                    </select>
                </div>
                <div class="mb-3 form-outline">
                    <input class="form-control" id="stallnum" name="stallnum"/>
                    <label class="form-label" for="description">Stall Number</label>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-dismiss="modal">Close</button>
              <button type="button" class="btn btn-dark btn-rounded">Upload</button>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection