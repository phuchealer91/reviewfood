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
                    <div class="col-sm-12 col-md-5">
                        <div class="product-detail__img">
                            <img src="{{pare_url_file($storeDetails->st_avatar)}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="product-detail__main">
                            <div class="detail-path"><a href="{{route('get.home')}}">Home</a href="#"> &raquo; <a href="#">{{$localDetail->ar_name}}</a> &raquo; <a href="#">{{$storeDetails->st_name}}</a></div>
                            <div class="detail-branch"><span>{{isset($typeCookDetail->tc_name) ? $typeCookDetail->tc_name : ''}} -</span><a href="#"> Chi nhánh</a></div>
                            <div class="detail-content">
                                <h4 class="detail-content__txt">{{$storeDetails->st_name}}</h4>
                                <div class="line-rating"></div>
                                <div class="detail-content__rating">
                                    <?php
                                    $totalSpace = 0;  $totalPosition = 0;  $totalServe = 0;  $totalQuality = 0;  $totalPrice = 0; $totalNumber = 0; $totalOnlyUser = 0;
                                    if (isset($storeDetails)) {
                                        if (($storeDetails->st_total_rating)) {
                                            $totalSpace = round($storeDetails->st_total_space/$storeDetails->st_total_rating, 1);
                                            $totalPosition = round($storeDetails->st_total_position/$storeDetails->st_total_rating, 1);
                                            $totalServe = round($storeDetails->st_total_serve/$storeDetails->st_total_rating, 1);
                                            $totalQuality = round($storeDetails->st_total_quality/$storeDetails->st_total_rating, 1);
                                            $totalPrice = round($storeDetails->st_total_price/$storeDetails->st_total_rating, 1);
                                            $totalNumber = round($storeDetails->st_total_number/(int)($storeDetails->st_total_rating * 5),1);
                                            $totalOnlyUser =  round($storeDetails->st_activeOpen/10,1); //đánh giá cá nhân show comment

                                        }
                                    }
                                    ?>
                                    <div class="rating-total">{{$totalNumber}}</div>
                                    <div class="rating-wrap">
                                        <ul class="rating-wrap-list">
                                            <li class="rating-wrap-list__item rating-space">{{$totalSpace}}<span>Không gian</span></li>
                                            <li class="rating-wrap-list__item rating-position">{{$totalPosition}}<span>Vị trí</span></li>
                                            <li class="rating-wrap-list__item rating-serve">{{$totalServe}}<span>Phục vụ</span></li>
                                            <li class="rating-wrap-list__item rating-quality">{{$totalQuality}}<span>Chất lượng</span></li>
                                            <li class="rating-wrap-list__item rating-price">{{$totalPrice}}<span>Giá cả</span></li>
                                        </ul>
                                    </div>
                                    <div class="rating-cmt">{{$storeDetails->st_total_rating}}<span>Bình luận</span></div>
                                </div>
                                <div class="line-rating"></div>
                                <div class="detail-content__local">{{$storeDetails->st_address}}</div>
                                <div class="detail-content__start">
                                    @for ($i = 1; $i <= 5 ; $i++)
                                    <span><i class="fa fa-star {{$i <= $totalNumber/2 ? 'active' : '' }}"></i></span>
                                    @endfor
                                </div>
                                <div class="detail-content__rate"><a href="#comment-dg">Xem thêm lượt đánh giá từ Foody</a></div>
                                <div class="detail-content__open">
                                    <div class="open-status">
                                        <a href="#"> <span class="open-gr" title="Mở cửa"></span></a>
                                    </div>
                                    <span><i class="far fa-clock"></i> {{$storeDetails->st_timeOpen}}</span>
                                </div>
                                <div class="detail-content__cost">
                                    <span class="fas-price"><i class="fas fa-dollar-sign "></i>{{$storeDetails->st_price}}</span>
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
<div class="rating-comment" id="comment-dg">
    <div class="container">
        <div class="rating-comment__form" style="position: relative;">
            <h3 class="rating-comment-dg" >Phần đánh giá</h3>
            <hr>
            <h6 style="color: #ff1312">(Hãy kéo thanh đánh giá cho từng phần, viết bình luận để đánh giá)</h6>
            <div class="rating-comment-list">
                <div id="first" class="rating-comment-item">
                    <label for="slider1" class="mr-3">Không gian</label>
                    <input type="range" id="js_space" name="slider1" min=0 max=10 value=0>
                    <div class="score" id="ratingSpace">0</div>
                </div>
                <div id="first" class="rating-comment-item">
                    <label for="slider2" class="mr-3">Vị trí</label>
                    <input type="range" id="js_position" name="slider2" min=0 max=10 value=0>
                    <div class="score" id="ratingPosition">0</div>
                </div>
                <div id="first" class="rating-comment-item">
                    <label for="slider3" class="mr-3">Phục vụ</label>
                    <input type="range" id="js_serve" name="slider3" min=0 max=10 value=0>
                    <div class="score" id="ratingServe">0</div>
                </div>
                <div id="first" class="rating-comment-item">
                    <label for="slider4" class="mr-3">Chất lượng</label>
                    <input type="range" id="js_quality" name="slider4" min=0 max=10 value=0>
                    <div class="score" id="ratingQuality">0</div>
                </div>
                <div id="first" class="rating-comment-item">
                    <label for="slider5" class="mr-3">Giá cả</label>
                    <input type="range" id="js_price" name="slider5" min=0 max=10 value=0>
                    <div class="score" id="ratingPrice">0</div>
                </div>
            </div>
            <div class="form-rating rating-comment-send">
                <textarea name="" id="ra_content" cols="30" rows="4" style="resize: none"></textarea>
                <a class=" btn btn-success js_rating_store" href="{{route('get.rating.store',$storeDetails->id)}}">Gửi đánh giá</a>
            </div>
            <span class="error-form"></span>
        </div>
        <div class="rating-comment-show" id="comment-show">
            <h5>Có <span style="color: #00972a;">{{$storeDetails->st_total_rating}}</span> đánh giá cho cừa hàng <span style="color: #00972a;">{{$storeDetails->st_name}}</span></h5>
            @if(isset($ratings))
                @foreach($ratings as $rating)
            <div class="rating-comment-content my-3">
                <h6 class="rating-comment-title"><span>{{substr($rating->getUserRating->name,0,1)}}</span>{{$rating->getUserRating->name}}</h6>
                <div class="rating-comment-txt d-flex">
                    <div class="detail-content__start mr-2">
                        @for ($i = 1; $i <= 5 ; $i++)
                            <span><i class="fa fa-star {{$i <= $totalOnlyUser ? 'active' : '' }}"></i></span>
                        @endfor
                    </div>
                    {{$rating->ra_content}}
                </div>
                <div class="rating-comment-date"><a href="" class="mr-3">Trả lời</a><span>{{date('d/m/Y H:i',strtotime($rating->created_at))}}</span></div>
            </div>
            <div class="line-rating"></div>
            @endforeach
            @endif
            {{$ratings->links()}}
        </div>
    </div>
</div>
{{--    </div>--}}
@endsection
@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $('input[type="range"]').on("change mousemove", function () {
                $(this).next().html($(this).val());
            });
            $('.js_rating_store').on('click', function (e) {
                e.preventDefault();
                let content = $('#ra_content').val();
                let numberSpace = $('#js_space').val();
                let numberPosition = $('#js_position').val();
                let numberServe = $('#js_serve').val();
                let numberQuality = $('#js_quality').val();
                let numberPrice = $('#js_price').val();
                let url = $(this).attr('href');
                if (content && numberSpace && numberPosition && numberServe && numberQuality && numberPrice) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            numberSpace: numberSpace,
                            numberPosition: numberPosition,
                            numberServe: numberServe,
                            numberQuality: numberQuality,
                            numberPrice: numberPrice,
                            r_content: content
                        }
                    }).done(function (result) {
                        if (result.code == 1) {
                            alert("Gửi đánh giá thành công!");
                            location.reload();
                        } else {
                            alert('Vui lòng đăng nhập trước khi gửi đánh giá');
                            location.reload();
                        }
                    })
                    // console.log(result);
                } else {
                    alert('Vui lòng điền đánh giá đầy đủ và đăng nhập để gửi đánh giá')
                }
            });
        });
    </script>
@endsection
