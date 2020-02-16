@extends('layouts.masterFrontend')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="/public/css/header.css">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/sidebar-product.css">
    <link rel="stylesheet" href="/public/css/customlayout.css">
    <link rel="stylesheet" href="/public/css/product-site.css">
    <link rel="stylesheet" href="/public/css/owlCustom.css">-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
@endsection
@section('content')
        <!-- Product - item -->
        @include('frontend.components.slider')
        <div class="product-site">
            <div class="container product-site-main-top">
                <nav class="product-site-main-top__nav">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <div class="nav-tabs-content">
                            <div class="nav-tabs-content__avt">
                                <span> <img src="/public/Image/icon-now.png" alt="" width="35px" height="auto"></span>
                            </div>
                            <div class="nav-tabs-content__txt">
                                <span> Giao tận nơi</span>
                            </div>
                        </div>

{{--                        @if(isset($typeProducts))--}}
{{--                            @foreach($typeProducts as $typeProduct)--}}
{{--                                <a class="nav-item nav-link product-type" href="{{route('get.list.store',[$typeProduct->tp_slug,$typeProduct->id])}}"--}}
{{--                                   role="tab" aria-selected="true" data-type-product="{{$typeProduct->id}}">{{$typeProduct->tp_name}}</a>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
{{--                        @if(isset($typeProducts))--}}

{{--                        @endif--}}
                        <ul class="nav nav-tabs">
                            @foreach($typeProducts as $count => $typeProduct)
                                <li class="nav-item">
                                    <a class="nav-link {{$count==0?'active' : ''}}" id="home-tab" data-toggle="tab" href="#nav-{{$typeProduct->id}}" role="tab" aria-controls="home" aria-selected="true">
                                    {{$typeProduct->tp_name}} <!-- tý css lại -->
                                    </a>

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container product-site-main-bottom">
                <div class="tab-content" >
                @foreach($typeProducts as $count => $type)
                        <div class="tab-pane fade show {{$count==0?'active':''}} " id="nav-{{$type->id}}"  aria-labelledby="home-tab">
                            <div class="row no-gutters ">
{{--                                slider--}}
                            @if(($type->get_store) != NULL)
                                @foreach($type->get_store as $key => $val)
                                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="tab-content-item">
                                                        <div class="tab-content-item-avt">
                                                            <a href="{{route('get.detail.store',[$val->st_slug,$val->id])}}"><img src="{{pare_url_file($val->st_avatar)}}" alt=""></a>
                                                        </div>
                                                        <div class="tab-content-item-txt">
                                                            <a href="{{route('get.detail.store',[$val->st_slug,$val->id])}}">
                                                                <h3 class="tab-content-item-txt__title">{{$val->st_name}}</h3>
                                                                <span
                                                                    class="tab-content-item-txt__detail">{{$val->st_address}}</span>
                                                            </a>
                                                        </div>
                                                        <div class="tab-content-item-sale">
                                                            <div class="tab-content-item-sale__new">
                                                                <i class="fa fa-tag"></i>
                                                                <span>Cả ngày - Giảm {{$val->st_sale}}</span>
                                                            </div>
                                                            <div class="tab-content-item-sale__detail">
                                                                Xem thêm 5 ưu đãi khác.....
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                @endforeach
                            @else
                            không có cửa hàng
                            @endif

                            </div>
{{--                            {{$type->get_store()->links()}}--}}
                        </div>
                    @endforeach
                </div>


{{--                        <div class="tab-pane fade show" role="tabpanel" aria-labelledby="nav-tab">--}}
{{--                            <div class="row no-gutters">--}}
{{--                                                                                <h3>{{$typeProduct->tp_name}}</h3>--}}
{{--                                @include('frontend.pages.store.index')--}}
{{--                                @if(isset($vals))--}}
{{--                                    @foreach($stores as $store)--}}
{{--                                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">--}}
{{--                                            <div class="tab-content-item">--}}
{{--                                                <div class="tab-content-item-avt">--}}
{{--                                                    <a href=""><img src="{{pare_url_file($store->st_avatar)}}" alt=""></a>--}}
{{--                                                </div>--}}
{{--                                                <div class="tab-content-item-txt">--}}
{{--                                                    <a href="">--}}
{{--                                                        <h3 class="tab-content-item-txt__title">{{$store->st_name}}</h3>--}}
{{--                                                        <span--}}
{{--                                                            class="tab-content-item-txt__detail">{{$store->st_address}}</span>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="tab-content-item-sale">--}}
{{--                                                    <div class="tab-content-item-sale__new">--}}
{{--                                                        <i class="fa fa-tag"></i>--}}
{{--                                                        <span>Cả ngày - Giảm {{$store->st_sale}}</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="tab-content-item-sale__detail">--}}
{{--                                                        Xem thêm 5 ưu đãi khác.....--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                @endif--}}

{{--                            </div>--}}
{{--                        </div>--}}


{{--                    <div class="tab-pane fade show active" id="nav-deal" role="tabpanel" aria-labelledby="nav-deal-tab">--}}
{{--                        <div class="row no-gutters">--}}
{{--                            @for($i=0;$i<2;$i++)--}}
{{--                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">--}}
{{--                                @include('frontend.components.store_item')--}}
{{--                            </div>--}}
{{--                                @endfor--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">--}}
{{--                        <div class="row no-gutters">--}}
{{--                            @for($i=0;$i<8;$i++)--}}
{{--                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">--}}
{{--                                @include('frontend.components.store_item')--}}
{{--                            </div>--}}
{{--                            @endfor--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tab-pane fade" id="nav-food" role="tabpanel" aria-labelledby="nav-food-tab">...</div>--}}
{{--                    <div class="tab-pane fade" id="nav-drink" role="tabpanel" aria-labelledby="nav-drink-tab">...</div>--}}
{{--                    <div class="tab-pane fade" id="nav-vege" role="tabpanel" aria-labelledby="nav-vege-tab">...</div>--}}
{{--                    <div class="tab-pane fade" id="nav-cakes" role="tabpanel" aria-labelledby="nav-cakes-tab">...</div>--}}
{{--                    <div class="tab-pane fade" id="nav-dessert" role="tabpanel" aria-labelledby="nav-dessert-tab">...--}}
{{--                    </div>--}}
                </div>
            </div>
{{--        </div>--}}
        <!-- Product - item - sale -->
        <div class="product-site">
            <div class="container product-site-main-top-sale">
                <nav class="product-site-main-top-sale__nav">
                    <div class="nav-tabs">
                        <div class="nav-tabs-content">
                            <div class="nav-tabs-content__avt">
                                <span> <img src="/public/Image/icon-t.png" alt="" width="35px" height="auto"></span>
                            </div>
                            <div class="nav-tabs-content__txt">
                                <span> Đặt bàn ưu đãi</span>
                            </div>
                        </div>
                        <div class="nav-tabs-category">
                            <div class="form-group">
                                <select class="form-control">
                                    @if(isset($typeCooks))
                                        @foreach($typeCooks as $typeCook)
                                            <option>{{$typeCook->tc_name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Nổi bật</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                </nav>
            </div>
            <div class="container product-site-main-bottom">
                <div class="tab-content" id="nav-tabContent">
                    <div class="row no-gutters">
                        @if(isset($storeSales))
                            @foreach($storeSales as $storeSale)
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="tab-content-item">
                                <div class="tab-content-item-avt">
                                    <a href="{{route('get.detail.store',[$storeSale->st_slug,$storeSale->id])}}"><img src="{{pare_url_file($storeSale->st_avatar)}}" alt=""></a>
                                </div>
                                <div class="tab-content-item-txt">
                                    <a href="{{route('get.detail.store',[$storeSale->st_slug,$storeSale->id])}}">
                                        <h3 class="tab-content-item-txt__title">{{$storeSale->st_name}}</h3>
                                        <span
                                            class="tab-content-item-txt__detail">{{$storeSale->st_address}}</span>
                                    </a>
                                </div>
                                <div class="tab-content-item-sale">
                                    <div class="tab-content-item-sale__new">
                                        <i class="fa fa-tag"></i>
                                        <span>Cả ngày - Giảm {{$storeSale->st_sale}}%</span>
                                    </div>
                                    <div class="tab-content-item-sale__detail">
                                        Xem thêm 5 ưu đãi khác.....
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Kham pha  -->
        <div class="container" style="padding: 0;">
            <div id="wrapper-main">
                <aside id="wrapper-main-sidebar">
                    <div class="wrapper-main-sidebar-brand">
                        <div class="wrapper-main-sidebar-brand__img" style="text-align: center; margin: 10px;">
                            <img style="background: red; border-radius: 5px;" src="/public/Image/icon-f.png" alt=""
                                 width="35px">
                        </div>
                    </div>
                    <ul class="sidebar-nav nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <li class="active sidebar-nav__item">
                            <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                               role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home"></i>Ở
                                đâu</a>
                        </li>
                        <li class="sidebar-nav__item">
                            <a class="nav-link" id="v-pills-live-tab" data-toggle="pill" href="#v-pills-live" role="tab"
                               aria-controls="v-pills-live" aria-selected="true"><i class="fa fa-plug"></i>Nổi bật</a>
                        </li>
                        <li class="sidebar-nav__item">
                            <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                               role="tab" aria-controls="v-pills-home" aria-selected="true"><i
                                    class="fa fa-cutlery"></i>Ăn gì</a>
                        </li>

                    </ul>
                </aside>
                <div id="navbar-wrapper">
                    <nav class=" navbar-inverse">
                        <div class="container-fluid" style="padding-right: 0;">
                            <div class="navbar-header">
                                <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                     aria-labelledby="v-pills-home-tab">
                                    <div class="product-site" style="margin: 10px 0;">
                                        <div class="container product-site-main-top-sticky">
                                            <nav class="product-site-main-top__nav">
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-itemNew-tab"
                                                       data-toggle="tab" href="#nav-itemNew" role="tab"
                                                       aria-controls="nav-itemNew" aria-selected="true">Mới nhất</a>
                                                    <a class="nav-item nav-link" id="nav-live-tab" data-toggle="tab"
                                                       href="#nav-live" role="tab" aria-controls="nav-live"
                                                       aria-selected="false">Tất cả</a>
                                                    <a class="nav-item nav-link" id="nav-food-tab" data-toggle="tab"
                                                       href="#nav-food" role="tab" aria-controls="nav-food"
                                                       aria-selected="false">Food</a>
                                                    <a class="nav-item nav-link" id="nav-drink-tab" data-toggle="tab"
                                                       href="#nav-drink" role="tab" aria-controls="nav-drink"
                                                       aria-selected="false">Drink</a>
                                                    <a class="nav-item nav-link" id="nav-vege-tab" data-toggle="tab"
                                                       href="#nav-vege" role="tab" aria-controls="nav-vege"
                                                       aria-selected="false">Vege</a>
                                                    <a class="nav-item nav-link" id="nav-cakes-tab" data-toggle="tab"
                                                       href="#nav-cakes" role="tab" aria-controls="nav-cakes"
                                                       aria-selected="false">Cakes</a>
                                                    <a class="nav-item nav-link" id="nav-dessert-tab" data-toggle="tab"
                                                       href="#nav-dessert" role="tab" aria-controls="nav-dessert"
                                                       aria-selected="false">Dessert</a>
                                                    <div class="nav-tabs-discover">
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                @if(isset($typeQualitys))
                                                                    @foreach($typeQualitys as $typeQuality)
                                                                        <option>{{$typeQuality->tq_name}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                @if(isset($typeCooks))
                                                                    @foreach($typeCooks as $typeCook)
                                                                        <option>{{$typeCook->tc_name}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option>Nổi bật</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nav>
                                        </div>
                                        <div class="container product-site-main-bottom">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-itemNew" role="tabpanel"
                                                     aria-labelledby="nav-itemNew-tab">
                                                    <div class="row no-gutters">
                                                        @for($i=0;$i<8;$i++)
                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                            @include('frontend.components.store_item')
                                                        </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-all" role="tabpanel"
                                                     aria-labelledby="nav-all-tab">
                                                    <div class="row no-gutters">
                                                        @for($i=0;$i<8;$i++)
                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                            @include('frontend.components.store_item')
                                                        </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-food" role="tabpanel"
                                                     aria-labelledby="nav-food-tab">...
                                                </div>
                                                <div class="tab-pane fade" id="nav-drink" role="tabpanel"
                                                     aria-labelledby="nav-drink-tab">...
                                                </div>
                                                <div class="tab-pane fade" id="nav-vege" role="tabpanel"
                                                     aria-labelledby="nav-vege-tab">...
                                                </div>
                                                <div class="tab-pane fade" id="nav-cakes" role="tabpanel"
                                                     aria-labelledby="nav-cakes-tab">...
                                                </div>
                                                <div class="tab-pane fade" id="nav-dessert" role="tabpanel"
                                                     aria-labelledby="nav-dessert-tab">...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-live" role="tabpanel"
                                     aria-labelledby="v-pills-live-tab">
                                    <div class="product-site" style="margin: 10px 0;">
                                        <div class="container product-site-main-top-sticky">
                                            <nav class="product-site-main-top__nav">
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-itemNew-tab"
                                                       data-toggle="tab" href="#nav-itemNew" role="tab"
                                                       aria-controls="nav-itemNew" aria-selected="true">Mới nhất</a>
                                                    <a class="nav-item nav-link" id="nav-live-tab" data-toggle="tab"
                                                       href="#nav-live" role="tab" aria-controls="nav-live"
                                                       aria-selected="false">Tất cả</a>
                                                    <a class="nav-item nav-link" id="nav-food-tab" data-toggle="tab"
                                                       href="#nav-food" role="tab" aria-controls="nav-food"
                                                       aria-selected="false">Food</a>
                                                    <a class="nav-item nav-link" id="nav-drink-tab" data-toggle="tab"
                                                       href="#nav-drink" role="tab" aria-controls="nav-drink"
                                                       aria-selected="false">Drink</a>
                                                    <a class="nav-item nav-link" id="nav-vege-tab" data-toggle="tab"
                                                       href="#nav-vege" role="tab" aria-controls="nav-vege"
                                                       aria-selected="false">Vege</a>
                                                    <div class="nav-tabs-discover">
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                @if(isset($typeCooks))
                                                                    @foreach($typeCooks as $typeCook)
                                                                        <option>{{$typeCook->tc_name}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option>Nổi bật</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option>Nổi bật</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nav>
                                        </div>
                                        @if(isset($storeHot))
                                        <div class="container product-site-main-bottom">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-itemNew" role="tabpanel"
                                                     aria-labelledby="nav-itemNew-tab">
                                                    <div class="row no-gutters">
                                                        @foreach($storeHot as $hot)
                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                            <div class="tab-content-item">
                                                                <div class="tab-content-item-avt">
                                                                    <a href=""><img src="{{pare_url_file($hot->st_avatar)}}" alt=""></a>
                                                                </div>
                                                                <div class="tab-content-item-txt">
                                                                    <a href="">
                                                                        <h3 class="tab-content-item-txt__title">{{$hot->st_name}}</h3>
                                                                        <span
                                                                            class="tab-content-item-txt__detail">{{$hot->st_address}}</span>
                                                                    </a>
                                                                </div>
                                                                <div class="tab-content-item-sale">
                                                                    <div class="tab-content-item-sale__new">
                                                                        <i class="fa fa-tag"></i>
                                                                        <span>Cả ngày - Giảm {{$hot->st_sale}}</span>
                                                                    </div>
                                                                    <div class="tab-content-item-sale__detail">
                                                                        {{$hot->st_desc_seo}}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                            @endforeach
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-all" role="tabpanel"
                                                     aria-labelledby="nav-all-tab">
                                                    <div class="row no-gutters">
                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                            @include('frontend.components.store_item')
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-food" role="tabpanel"
                                                     aria-labelledby="nav-food-tab">...
                                                </div>
                                                <div class="tab-pane fade" id="nav-drink" role="tabpanel"
                                                     aria-labelledby="nav-drink-tab">...
                                                </div>
                                                <div class="tab-pane fade" id="nav-vege" role="tabpanel"
                                                     aria-labelledby="nav-vege-tab">...
                                                </div>
                                            </div>
                                        </div>
                                            @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>

                </div>

                <!-- <section id="content-wrapper">

                </section> -->
            </div>
        </div>

@endsection
@section('script')
    <script type="text/javascript">
        // $(document).on('click','.pagination a',function (e) {
        //     e.preventDefault();
        //     // console.log($(this).attr('href'));
        //     var page = $(this).attr('href').split('page=')[1];
        //     getStores(page);
        // });
        // function getStores(page) {
        //     $.ajax({
        //     url: '/stores/?page='+page
        //     }).done(
        //         function (data) {
        //
        //         }
        //     )
        // }
        // $('.owl-carousels').owlCarousel({
        //     loop:true,
        //     margin:10,
        //     nav:true,
        //     responsive:{
        //         0:{
        //             items:1
        //         },
        //         600:{
        //             items:3
        //         },
        //         1000:{
        //             items:5
        //         }
        //     }
        // })
    </script>
{{--    <script type="text/javascript">--}}
{{--        const GET_STORE_URL = "{!! route('get.list.store_by_id') !!}";--}}
{{--    </script>--}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen-sprite.png">
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
@endsection
