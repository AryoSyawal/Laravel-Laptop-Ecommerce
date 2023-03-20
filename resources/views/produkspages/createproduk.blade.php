@extends('layouts.app', ['page' => __('Lenovo'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="w-100">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Create Product') }}</h5>
                </div>
                <form method="POST" action="{{route('storeproduk')}}" autocomplete="off" class="w-100" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body w-100">
                            @csrf
                        <div class="form-group">
                            <label for="">Item</label>
                            <select name="item_id" class="form-select mb-3 custom-select bg-dark bg-gradient border-0">
                                @foreach ($data as $item)
                                    <option hidden class="border-0">Item Type</option>
                                    <option value="{{$item->id}}" class="border-0">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Codename</label>
                            <input type="text" class="form-control" name="codename">
                        </div>
                        <div class="form-group">
                            <label for="">Type</label>
                            <input type="text" class="form-control" name="type">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Image (Must Not be Greater Than 2MB)</label>
                            <input class="form-control" type="file" id="formFile" name="image" >
                          </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price">
                        </div>
                        <div class="form-group">
                            <label for="">Stock Avaiable</label>
                            <input type="number" class="form-control" name="stock">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">Save</button>
                    </div>
                </form>
            </div>
    </div>
@endsection
