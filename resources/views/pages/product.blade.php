@extends('layouts.app', ['page' => __('Lenovo'), 'pageSlug' => 'tables'])

@section('content')


<div class="w-25 h-50">
  <a href="{{route('createproduk')}}"><button class="btn w-100 h-100">Add Data +</button></a>
  <a href="{{route('exportproduk')}}" class="btn w-100 h-100 btn">Export</a>
  <button type="button" class="btn btn-primary w-100 h-100 btn" data-toggle="modal" data-target="#exampleModal">
    Import
  </button>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form enctype="multipart/form-data" action="">
      @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="file" name="file" id="file">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Product Table</h4>
          @if ($message = Session::get('create'))
          <div class="alert alert-primary" role="alert">
            <p>{{$message}}</p>
          </div>
          @elseif ($message = Session::get('delete'))
          <div class="alert alert-primary" role="alert">
            <p>{{$message}}</p>
          </div>
          @elseif ($message = Session::get('update'))
          <div class="alert alert-primary" role="alert">
            <p>{{$message}}</p>
          </div>
          
        @endif
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
                  Item ID
                </th>
                <th>
                  Codename
                </th>
                <th class="text-center">
                  Type
                </th>
                <th class="text-center">
                  Image
                </th>
                <th class="text-center">
                  Price
                </th>
                <th class="text-center">
                  Stock
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($index as $item)
              <tr>
                <td>
                  {{$item->id}}
                </td>
                <td>
                  {{$item->item->name}}
                </td>
                <td>
                  {{$item->codename}}
                </td>
                <td class="text-center">
                    {{$item->type}}
                </td>
                <td class="text-center">
                  <img src="{{asset($item->image)}}"  style="width:200px;" alt="">
              </td>
                <td class="text-center">
                  Rp.{{$item->price}}
                </td>
                <td class="text-center">
                  {{$item->stock}}
                </td>
                <td class="text-center">
                  <a href="produk/update/{{$item->id}}"><button class="btn w-100 h-100">EDIT</button></a>
                  <p>|</p>
                  <a href="produk/detail/{{$item->id}}"><button class="btn w-100 h-100">SHOW</button></a>
                  <p class="mx-1">|</p>
                  <form action="produk/delete/{{$item->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn w-100 h-100">DEL</button>
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
