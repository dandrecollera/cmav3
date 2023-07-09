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
        <caption>Floors</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Floor</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($floor))
                @foreach($floor as $floors)
                    <tr>
                        <td>{{ $floors->floornum }}</td>
                        <td>{{ $floors->floordesc }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection