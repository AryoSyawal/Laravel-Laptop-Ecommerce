@extends('layouts.app', ['page' => __('Lenovo'), 'pageSlug' => 'profile'])

@section('content')
{{-- <div class="row">
    <div class="w-100">
        <div class="card">
            <div class="card-header">
                <h5 class="title">{{$produk->codename}}'s Detail</h5>
            </div>
                <div class="card-body w-100">
                    <div class="form-group">
                        <label for="">Item</label>
                        <p>{{$produk->item->name}}</p>
                    </div>
                    <div class="form-group">
                        <label for="">Codename</label>
                        <p>{{$produk->codename}}</p>
                    </div>
                    <div class="form-group">
                        <label for="">Type</label>
                        <p>{{$produk->type}}</p>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <p>{{$produk->price}}</p>                    
                    </div>
                    <div class="form-group">
                        <label for="">Stock Avaiable</label>
                        <p>{{$produk->stock}}</p>                    
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/produk"><button type="submit" class="btn btn-fill btn-primary">Back</button></a>
                </div>
        </div>
</div> --}}
<div class="container-xl px-4 mt-4">
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile mb-2" src="{{asset($produk->image)}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">{{$produk->codename}}'s Details</div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Codename</label>
                            <p>{{$produk->codename}}</p>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Item Category</label>
                                <p>{{$produk->item->name}}</p>
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Specification</label>
                                <p>{{$produk->type}}</p>
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Price</label>
                            <p>Rp.{{$produk->price}}</p>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Stock</label>
                            <p>{{$produk->stock}}</p>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Availability</label>
                            @if ($produk->stock > 0)
                                <p>Avaiable</p>
                            @else
                                <p>Not Avaiable</p>
                            @endif
                        </div>
                        <a href="/produk"><button class="btn btn-primary" type="button">Back</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection
