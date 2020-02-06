<form action="" method="POST">
    @csrf
    <div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Tên cửa hàng</label>
                <input type="text" class="form-control" id="inputName" placeholder="Tên cửa hàng..." value="{{old('st_name',isset($category->st_name) ? $category->st_name : '')}}" name="st_name">
                @if($errors->has('st_name'))
                    <div class="error-txt">{{ $errors->first('st_name') }}</div>
                @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Địa chỉ</label>
                <textarea name="st_address" id=""  class="form-control" cols="30" rows="2" placeholder="Mô tả chi tiết địa chỉ" ></textarea>
            @if($errors->has('st_address'))
                <div class="error-txt">{{ $errors->first('st_address') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Giờ hoạt động</label>
            <input type="text" class="form-control" id="inputName" placeholder="07:00 - 23:30" value="{{old('st_timeOpen',isset($category->st_timeOpen) ? $category->st_timeOpen : '')}}" name="st_timeOpen">
            @if($errors->has('st_timeOpen'))
                <div class="error-txt">{{ $errors->first('st_timeOpen') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Giá trung bình của các sản phẩm</label>
            <input type="text" class="form-control" id="inputName" placeholder="18.000 - 50.000" value="{{old('st_price',isset($category->st_price) ? $category->st_price : '')}}" name="st_price">
            @if($errors->has('st_price'))
                <div class="error-txt">{{ $errors->first('st_price') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Số điện thoại</label>
            <input type="text" class="form-control" id="inputName"  value="0" name="st_phone">
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Từ khóa sản phẩm (SEO)</label>
            <input type="text" class="form-control" id="inputName" placeholder="Tên tiêu đề..." value="{{old('st_keyword_seo',isset($category->st_keyword_seo) ? $category->st_keyword_seo : '')}}" name="st_keyword_seo">
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Miêu tả ngắn gọn</label>
            <input type="text" class="form-control" id="inputName" placeholder="Miêu tả ngắn gọn..." value="{{old('st_desc_seo',isset($category->st_desc_seo) ? $category->st_desc_seo : '')}}" name="st_desc_seo">
        </div>

    </div>
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label for="inputState">Thể loại sản phẩm</label>
            <select id="inputState" class="form-control" name="st_category_id">
                <option value="">--Chọn thể loại sản phẩm--</option>
                @if(isset($categories))
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->c_name}}</option>
                        @endforeach
                @endif
            </select>
            @if($errors->has('st_category_id'))
                <div class="error-txt">{{ $errors->first('st_category_id') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputState">Loại ẩm thực</label>
            <select id="inputState" class="form-control" name="st_typeCook_id">
                <option value="">--Chọn loại ẩm thực--</option>
                @if(isset($typeCooks))
                    @foreach($typeCooks as $typeCook)
                        <option value="{{$typeCook->id}}">{{$typeCook->tc_name}}</option>
                    @endforeach
                @endif
            </select>
            @if($errors->has('st_typeCook_id'))
                <div class="error-txt">{{ $errors->first('st_typeCook_id') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputState">Loại sản phẩm</label>
            <select id="inputState" class="form-control" name="st_typeProduct_id">
                <option value="">--Chọn loại sản phẩm--</option>
                @if(isset($typeProducts))
                    @foreach($typeProducts as $typeProduct)
                        <option value="{{$typeProduct->id}}">{{$typeProduct->tp_name}}</option>
                    @endforeach
                @endif
            </select>
            @if($errors->has('st_typeProduct_id'))
                <div class="error-txt">{{ $errors->first('st_typeProduct_id') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputState">Khu vực</label>
            <select id="inputState" class="form-control" name="st_area_id">
                <option value="">--Chọn khu vực--</option>
                @if(isset($areas))
                    @foreach($areas as $area)
                        <option value="{{$area->id}}">{{$area->ar_name}}</option>
                    @endforeach
                @endif
            </select>
            @if($errors->has('st_area_id'))
                <div class="error-txt">{{ $errors->first('st_area_id') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputState">Hình thức cửa hàng</label>
            <select id="inputState" class="form-control" name="st_typeQuality_id">
                <option value="">--Chọn hình thức--</option>
                @if(isset($typeQualitys))
                    @foreach($typeQualitys as $typeQuality)
                        <option value="{{$typeQuality->id}}">{{$typeQuality->tq_name}}</option>
                    @endforeach
                @endif
            </select>
            @if($errors->has('st_typeQuality_id'))
                <div class="error-txt">{{ $errors->first('st_typeQuality_id') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Ảnh mô tả</label>
            <input type="file" class="form-control" id="inputName" name="st_avatar">
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Trạng thái</label>
            <div class="d-flex align-items-center">
                <div class="form-check">
                    <label class="form-check-label" for="defaultCheck1">
                        <input class="form-check-input" type="checkbox" name="st_hot" id="defaultCheck1">
                        Nổi bật
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group ">
                <button type="submit" class="btn btn-success" name=submit"">Lưu thông tin</button>
        </div>
    </div>
    </div>

</form>