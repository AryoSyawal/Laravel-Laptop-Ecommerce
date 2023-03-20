@extends('layouts.app', ['page' => __('Lenovo'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="w-100">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Create Product') }}</h5>
                </div>
                <form method="POST" action="{{url('produk/update/'.$maman->id)}}" autocomplete="off" class="w-100" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body w-100">
                        <div class="form-group">
                            <label for="">Item</label>
                            <select name="item_id" class="form-select mb-3 custom-select bg-dark bg-gradient border-0">
                                @foreach ($item as $data)
                                    <option value="{{$data->id}}" class="border-0">{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Codename</label>
                            <input type="text" class="form-control" name="codename" value="{{$maman->codename}}">
                        </div>
                        <div class="form-group">
                            <label for="">Type</label>
                            <input type="text" class="form-control" name="type" value="{{$maman->type}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Image (Must Not be Greater Than 2MB)</label>
                            <input class="form-control" type="file" id="formFile" name="image" required>
                          </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price" value="{{$maman->price}}">
                        </div>
                        <div class="form-group">
                            <label for="">Stock Avaiable</label>
                            <input type="number" class="form-control" name="stock" value="{{$maman->stock}}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">Save</button>
                    </div>
                </form>
            </div>
    </div>
@endsection
