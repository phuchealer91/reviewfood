@extends('layouts.masterFrontend')
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
                                <a href="{{route('add.shopping.cart',$productInStoreDetail->id)}}" class="btn btn-danger"><i class="fa fa-plus-circle"></i> Mua ngay</a>
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

