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
    <div class="table-responsive">
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Report No. 000001</td>
                <td>05/25/2023</td>
                <td>Sira ang ilaw</td>
                <td>Lower Ground Floor</td>
                <td>FGS 1</td>
                <td>Pending</td>
                <td><button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-toggle="modal" data-mdb-target="#viewModal">View</button></td>
            </tr>
        </tbody>
    </table>
  </div>

    <!-- View Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">View Report</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 form-outline">
                    <input class="form-control" id="reportnum" name="reportnum" readonly/>
                    <label class="form-label" for="description">Report Number</label>
                </div>
                <div class="mb-3 form-outline">
                    <input id="date" name="date" class="form-control" readonly/>
                    <label class="form-label" for="form12">Date</label>
                </div>
                <div class="mb-3 form-outline">
                    <textarea class="form-control" id="concern" name="concern" rows="3" readonly></textarea>
                    <label class="form-label" for="description">Concern</label>
                </div>
                <div class="mb-3 form-outline">
                    <input class="form-control" id="floornum" name="floornum" readonly/>
                    <label class="form-label" for="description">Floor Number</label>
                </div>
                <div class="mb-3 form-outline">
                    <input class="form-control" id="stallnum" name="stallnum" readonly/>
                    <label class="form-label" for="description">Stall Number</label>
                </div>
                <div class="mb-3">
                    <label for="inputFloorDes" class="form-label">Status</label>
                    <select id="area" name="area" class="form-select">
                        <option selected>-- Status --</option>
                        <option>Tapos na (nalimutan ko english)</option>{{--kapag na click to parang maarchive na siya--}}
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
@endsection