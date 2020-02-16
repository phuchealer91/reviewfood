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
{{--    <div class="wapper-detail">--}}
{{--        <div class="navbar-menu">--}}
{{--            <ul class="navbar-menu__top">--}}
{{--                <li class="nav-list-logo"><a href="" style="display: flex;" ><img src="/public/Image/ma-giam-gia-now-vn.png" alt="" width="84px" height="auto"></a></li >--}}
{{--                <li class="nav-list-select">--}}
{{--                    <div class="form-group">--}}
{{--                        <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                            <option>Hà Nội</option>--}}
{{--                            <option>TP Hồ Chí Minh</option>--}}
{{--                            <option>Cần Thơ</option>--}}
{{--                            <option>Sóc Trăng</option>--}}
{{--                            <option>Bạc Liêu</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-list" ><a href="" class="active">Đồ ăn</a></li>--}}
{{--                <li class="nav-list"><a href="">Đặt bàn</a></li>--}}
{{--                <li class="nav-list"><a href="">Thực phẩm</a></li>--}}
{{--                <li class="nav-list"><a href="">Rượu bia</a></li>--}}
{{--                <li class="nav-list"><a href="">Hoa</a></li>--}}
{{--                <li class="nav-list"><a href="">Sản phẩm</a></li>--}}
{{--                <li class="nav-list"><a href="">Thuốc</a></li>--}}
{{--            </ul>--}}
{{--            <a href="" id="openup">--}}
{{--                <img src="/public/Image/ma-giam-gia-now-vn.png" alt="" width="84px" height="auto">--}}
{{--            </a>--}}
{{--        </div>--}}
        <div class="product-detail">
            <div class="container">
                @if(isset($storeDetails))
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-6">
                        <div class="product-detail__img">
                            <img src="{{pare_url_file($storeDetails->st_avatar)}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="product-detail__main">
                            <div class="detail-path"><a href="{{route('get.home')}}">Home</a href="#"> &raquo; <a href="#">{{$localDetail->ar_name}}</a> &raquo; <a href="#">{{$storeDetails->st_name}}</a></div>
                            <div class="detail-branch"><span>{{isset($typeCookDetail->tc_name) ? $typeCookDetail->tc_name : ''}} -</span><a href="#"> Chi nhánh</a></div>
                            <div class="detail-content">
                                <h4 class="detail-content__txt">{{$storeDetails->st_name}}</h4>
                                <div class="detail-content__local">{{$storeDetails->st_address}}</div>
                                <div class="detail-content__start">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fas fa-star-half-alt"></i></span>
                                </div>
                                <div class="detail-content__rate"><a href="">Xem thêm lượt đánh giá từ Foody</a></div>
                                <div class="detail-content__open">
                                    <div class="open-status">
                                        <a href="#"> <span class="open-gr" title="Mở cửa"></span></a>
                                    </div>
                                    <span><i class="far fa-clock"></i> {{$storeDetails->st_timeOpen}}</span>
                                </div>
                                <div class="detail-content__cost">
                                    <span class="fas-price"><i class="fas fa-dollar-sign "></i>{{$storeDetails->st_price}}</span>
                                </div>

                                <div class="detail-content__service">
                                    <div class="service-line"></div>
                                    <ul class="service-main">
                                        <li class="service-list">PHÍ DỊCH VỤ <p><a href="" class="service-list__item">Miễn phí</a></p></li>
                                        <li class="service-list">DỊCH VỤ BỞI <p><a href="" class="service-list__item">NOW</a></p></li>
                                        <li class="service-list">CHUẨN BỊ <p><a href="" class="service-list__item service-list__item--bl">1O phút</a></p></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                    @endif
            </div>
        </div>
        <div class="menu-detail">
            <div class="container">
                <h4 class="menu-td">Thực Đơn</h4>
                <div class="menu-search">
                    <form action="" class="">
                        <label for="">Tìm kiếm sản phẩm</label>
                        <div class="input-group">
                            <input type="text" class="form-control mr-2">
                            <input type="button" class="btn btn-success" value="Tìm kiếm">
                        </div>
                    </form>
                </div>
                <div class="menu-detail-main">
                    @if($productInStoreDetails)
                        @foreach($productInStoreDetails as $productInStoreDetail)
                    <div class="menu-detail-main-list">
                        <div class="menu-detail__content">
                            <div class="menu-detail__content-img">
                                <img src="{{pare_url_file($productInStoreDetail->pro_avatar)}}" alt="">
                            </div>
                            <div class="menu-detail__content-txt">
                                <h5 class="menu-title">{{$productInStoreDetail->pro_name}}</h5>
                                @if($productInStoreDetail->pro_sale == 0)
                                <div class="menu-price">{{$productInStoreDetail->pro_price}} VND</div>
                                @else
                                <div class="menu-price">{{$productInStoreDetail->pro_price}} VND</div>
                                <div class="menu-price-sale">{{$productInStoreDetail->pro_sale}}%</div>
                                @endif
                            </div>
                            <div class="menu-detail__content-btn">
                                <a href="" class="btn btn-danger"><i class="fa fa-plus-circle"></i> Mua ngay</a>
                            </div>
                        </div>
                    </div>
                        @endforeach
                        @endif
                </div>
            </div>
        </div>
{{--    </div>--}}
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
