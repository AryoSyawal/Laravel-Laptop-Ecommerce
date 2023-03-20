@extends('layouts.app', ['page' => __('Lenovo'), 'pageSlug' => 'icons'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">User Table</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  ID
                </th>
                <th>
                  Name
                </th>
                <th>
                  Email
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              <tr class="align-center">
                <td class="align-center">
                  {{$item->id}}
                </td>
                <td class="align-center">
                  {{$item->name}}
                </td>
                <td class="align-center">
                  {{$item->email}}
                </td>
                <td class="text-center d-flex ">
                  <a href=""> DEL</a>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
