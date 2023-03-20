@extends('layout/mainlp')

@section('content')
    <!-- product -->
    <div class="product-content product-wrap clearfix product-deatil">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="product-image">
                    <div id="myCarousel-2" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel-2" data-slide-to="0" class=""></li>
                            <li data-target="#myCarousel-2" data-slide-to="1" class="active"></li>
                            <li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <!-- Slide 1 -->
                            <div class="item active">
                                <img src="{{$data->image}}" style="width: 700px; height:400px;" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                        <a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                <h2 class="name">
                    {{$data->codename}}
                    <br>
                    <span class="fa fa-2x"><h5>{{$data->stock}} On Stocks</h5></span>                </h2>
                <hr />
                <h3 class="price-container">
                    Rp.{{$data->price}}
                    <small>*Tax included</small>
                </h3>
                <div class="certified">
                    <p style="margin-top: 30px">
                        {{$data->type}}
                    </p>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <a href="javascript:void(0);" class="btn btn-success btn-lg" style="margin-top: 30px;">Add to cart</a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product -->
</div>


@endsection