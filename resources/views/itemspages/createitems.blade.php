@extends('layouts.app', ['page' => __('Lenovo'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="w-100">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Create Product') }}</h5>
                </div>
                <form method="POST" action="{{route('storeitem')}}" autocomplete="off" class="w-100">
                    @csrf
                    <div class="card-body w-100">
                            @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Weight</label>
                            <input type="text" class="form-control" name="weight">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">Save</button>
                    </div>
                </form>
            </div>
    </div>
@endsection
