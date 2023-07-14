@extends('layouts.admin-master')

@section('content')

  <div class="content-wrapper">
    <table class="table">
        <caption>Section</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Floor</th>
                <th scope="col">Section</th>
            </tr>
        </thead>
        <tbody>
          @if(isset($section))
          @foreach($section as $sect)
              <tr>
                  <td>{{ $sect->floornum }}</td>
                  <td>{{ $sect->section }}</td>
              </tr>
          @endforeach
      @endif
        </tbody>
    </table>
  </div>
@endsection