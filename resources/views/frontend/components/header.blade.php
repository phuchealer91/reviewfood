<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <ul class="row-nav">
                    <li class="list"><a class="list__item list__item--bg" href="{{route('get.home')}}">Khám Phá</a></li>
                    <li class="list"><a class="list__item" href="#">Đặt Bàn</a></li>
                    <li class="list"><a class="list__item" href="#">Đặt Giao Hàng</a></li>
                    <li class="list"><a class="list__item" href="#">Đi Chợ</a></li>
                    <li class="list"><a class="list__item" href="#">Làm Đẹp</a></li>
                    <li class="list"><a class="list__item" href="#">NewPos</a></li>
                    <li class="list"><a class="list__item" href="#">Giảm Giá</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- header-bottom -->
<div class="header-bottom">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-12 col-md-8 ">
                <div class="category-list">
                    <ul class="category-list-main">
                        <li class="logo-box">
                            <img src="/public/Image/foody-vn.png" alt="" class="logo">
                        </li>

                        <li class="category-list-main-local">
                            <select class="js-select2" style="width: 100px">
                                <option value="">--Khu Vực--</option>
                                @if(isset($areas))
                                    @foreach($areas as $area)
                                        <option>{{$area->ar_name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </li>
                        <li class="category-list-main-food">
                            <select class="js-select2" style="width: 100px">
                                <option value="">--Loại sản phẩm--</option>
                                @if(isset($categories))
                                    @foreach($categories as $category)
                                        <option>{{$category->c_name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </li>
                        <li class="category-list-main-search">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search this blog">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary input-group-append--px" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li class="category-list-main-small">
                            <div class="form-group">
                                <select class="form-control fast--px" id="sel1" name="sellist1">
                                    <option>Thức ăn</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </li>
                        <li class="category-list-main-small">
                            <div class="form-group">
                                <select class="form-control fast--px" id="sel1" name="sellist1">
                                    <option>App</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="category-list-main-login">
                    <ul class="category-list-main-login__user">
                        @if(Auth::Check())
                            <li class="mr-2">Xin chào: <span style="color: #333333; font-weight: bold">{{\Auth::user()->name}}</span></li>
                            <li class="user-list"><a href="">
                                    <div class="dropdown show dropleft">
                                        <a  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-user-circle" style="color: #333333;"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Thông tin cá nhân</a>
                                            <a class="dropdown-item" href="#">Chưa nghĩ ra</a>
                                            <a class="dropdown-item" href="{{route('post.logout.user')}}">Thoát</a>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @else
                        <li class="user-list">
                            <a class=" btn btn-dark " href="{{route('get.register')}}">
                               Đăng ký
                            </a>
{{--                            <button type="button" class="btn btn-primary js-modal-register" >--}}
{{--                                Đăng ký--}}
{{--                            </button>--}}
{{--                            <div class="modal fade" id="myModalRegister">--}}
{{--                                <div class="modal-dialog modal-lg">--}}
{{--                                    <div class="modal-content">--}}
{{--                                        <!-- Modal Header -->--}}
{{--                                        <div class="modal-header">--}}
{{--                                            <h4 class="modal-title">Đăng ký thành viên</h4>--}}
{{--                                            <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                                        </div>--}}
{{--                                        <!-- Modal body -->--}}
{{--                                        <div class="modal-body">--}}
{{--                                            <form action="" method="POST" id="form-register">--}}
{{--                                                @csrf--}}
{{--                                                <div class="form-group my-0" style="text-align: left">--}}
{{--                                                    <label for="email">Name:</label>--}}
{{--                                                    <input type="text" name="name" class="form-control" placeholder="Enter name">--}}
{{--                                                    <span class="error-form" style="color: red"></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group my-0" style="text-align: left">--}}
{{--                                                    <label for="email">Email address:</label>--}}
{{--                                                    <input type="email" name="email" class="form-control" placeholder="Enter email">--}}
{{--                                                    <span class="error-form" style="color: red"></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group my-0" style="text-align: left">--}}
{{--                                                    <label for="pwd">Password:</label>--}}
{{--                                                    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">--}}
{{--                                                    <span class="error-form" style="color: red"></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group my-0" style="text-align: left">--}}
{{--                                                    <label for="phone">Phone:</label>--}}
{{--                                                    <input type="text" name="phone" class="form-control" placeholder="Enter phone" id="phone">--}}
{{--                                                    <span class="error-form" style="color: red"></span>--}}
{{--                                                </div>--}}
{{--                                                <button type="submit" class="btn btn-primary js-btn-login">Đăng ký</button>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                        <li class="user-list">
                            <a class=" btn btn-dark " href="{{route('get.login')}}">
                                Đăng Nhập
                            </a>
{{--                            <button type="button" class="btn btn-primary js-modal-login" >--}}
{{--                                Đăng nhập--}}
{{--                            </button>--}}
{{--                            <div class="modal fade" id="myModalLogin">--}}
{{--                                <div class="modal-dialog modal-lg">--}}
{{--                                    <div class="modal-content">--}}
{{--                                        <!-- Modal Header -->--}}
{{--                                        <div class="modal-header">--}}
{{--                                            <h4 class="modal-title">Đăng nhập</h4>--}}
{{--                                            <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                                        </div>--}}
{{--                                        <!-- Modal body -->--}}
{{--                                        <div class="modal-body">--}}
{{--                                            @if(Session::has('thongbao'))--}}
{{--                                                <div class="alert-box success">--}}
{{--                                                    <h2>{{Session::get('thongbao') }}</h2>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                            <form action="" method="POST" id="form-login">--}}
{{--                                                @csrf--}}
{{--                                                <div class="form-group my-0" style="text-align: left">--}}
{{--                                                    <label for="email">Email address:</label>--}}
{{--                                                    <input type="email" name="email" class="form-control" placeholder="Enter email">--}}
{{--                                                    @if($errors->has('email'))--}}
{{--                                                        <div class="error-txt">{{ $errors->first('email')}}</div>--}}
{{--                                                    @endif--}}
{{--                                                    <span class="error-form" style="color: red"></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group my-0" style="text-align: left">--}}
{{--                                                    <label for="pwd">Password:</label>--}}
{{--                                                    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">--}}
{{--                                                    @if($errors->has('password'))--}}
{{--                                                        <div class="error-txt">{{ $errors->first('password')}}</div>--}}
{{--                                                    @endif--}}
{{--                                                    <span class="error-form" style="color: #ff1312"></span>--}}
{{--                                                </div>--}}
{{--                                                <button type="submit" class="btn btn-primary js-btn-logins">Submit</button>--}}
{{--                                            </form>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </li>
                        @endif
                            <li class="user-list"><a href=""><i class="fa fa-bell" style="color: #333333"></i></a></li>
                            <li class="user-list header__cart">
                                <div class="header__cart-wrap">
                                    <i class="header__cart-icon fa fa-shopping-cart"></i>
                                    <span class="header__cart-notice">{{\Cart::count()}}</span>
                                    <!-- No cart header__cart-list--no-cart -->
                                    <div class="header__cart-list {{(\Cart::count() == 0 ? 'header__cart-list--no-cart' : '')}}">
                                        <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                        <img src="{{asset('frontend/image/no-cart.png')}}" alt="" class="header__cart-list-no-cart-img">
                                        <span class="header__cart-list-msg">Chưa có sản phẩm</span>
                                        <ul class="header__cart-list-item">
                                            <!-- cart item -->
                                            @if(isset($listProducts))
                                                @foreach($listProducts as $listProduct)
                                            <li class="header__cart-item">
                                                <img src="{{pare_url_file($listProduct->options->avatar)}}" alt="" class="header__cart-item-img">
                                                <div class="header__cart-item-info">
                                                    <div class="header__cart-item-head">
                                                        <h5 class="header__cart-item-name">{{$listProduct->name}}</h5>
                                                        <div class="header__cart-item-price-wrap">
                                                            <span class="header__cart-item-price">{{number_format($listProduct->price,0,',','.')}} VND</span>
                                                            <span class="header__cart-item-multiply">x</span>
                                                            <span class="header__cart-item-qnt">{{$listProduct->qty}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="header__cart-item-body">
                                                        <span class="header__cart-item-desc">
                                                            Sale: {{$listProduct->options->sale}}%
                                                        </span>
                                                        <span class="header__cart-item-remove"><a href="{{route('delete.shopping.cart',$listProduct->rowId)}}">Xóa</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                            @endif
                                        </ul>
                                        @if(\Cart::count() > 0)
                                        <a href="{{route('get.list.shopping.cart')}}" class="header__cart-view-cart btn btn-primary">Xem Giỏ Hàng</a>
                                        @endif
                                    </div>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- </ul> -->

        <!-- </div> -->
    </div>
</div>

