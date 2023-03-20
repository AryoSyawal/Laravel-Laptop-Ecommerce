@extends('layouts.app', ['page' => __('Lenovo'), 'pageSlug' => 'items'])

@section('content')
<div class="w-25 h-50">
  <a href="{{route('createitem')}}"><button class="btn w-100 h-100">Add Data +</button></a>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Items Table</h4>
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
                  Weight
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($datas as $item)
              <tr>
                <td>
                  {{$item -> id}}
                </td>
                <td>
                  {{$item -> name}}
                </td>
                <td>
                 {{$item -> weight}}
                </td>
                <td class="text-center d-flex ">
                  <a href="item/update/{{$item->id}}" class="w-25 h-25"><button class="btn w-100 h-100">EDIT</button></a>
                  <p class="mx-1">|</p>
                  <form action="item/delete/{{$item->id}}" method="POST" class="w-25 h-25">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn w-100 h-25">DEL</button>
                  </form>
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
