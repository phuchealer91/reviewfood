<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <ul class="row-nav">
                    <li class="list"><a class="list__item list__item--bg" href="#">Khám Phá</a></li>
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
            <div class="col-sm-12 col-md-9 ">
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
            <div class="col-sm-12 col-md-3">
                <div class="category-list-main-login">
                    <ul class="category-list-main-login__user">
                        <li class="user-list"><a class="user-list--txt" href="">Đăng nhập</a></li>
                        <li class="user-list"><a href=""><i class="fa fa-bell"></i></a></li>
                        <li class="user-list"><a href="">
                                <div class="dropdown show dropleft">
                                    <a  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-plus-circle"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="user-list"><a href=""><img src="/public/Image/vn.png" width="32px" height="32px" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- </ul> -->

        <!-- </div> -->
    </div>
</div>

