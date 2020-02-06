<form action="" method="POST">
    @csrf
    <div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Tên sản phẩm</label>
                <input type="text" class="form-control" id="inputName" placeholder="Tên sản phẩm..." value="{{old('pro_name',isset($category->pro_name) ? $category->pro_name : '')}}" name="pro_name">
                @if($errors->has('pro_name'))
                    <div class="error-txt">{{ $errors->first('pro_name') }}</div>
                @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Địa chỉ</label>
                <textarea name="pro_address" id=""  class="form-control" cols="30" rows="2" placeholder="Mô tả chi tiết địa chỉ" ></textarea>
            @if($errors->has('pro_address'))
                <div class="error-txt">{{ $errors->first('pro_address') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Giờ hoạt động</label>
            <input type="text" class="form-control" id="inputName" placeholder="07:00 - 23:30" value="{{old('pro_timeOpen',isset($category->pro_timeOpen) ? $category->pro_timeOpen : '')}}" name="pro_timeOpen">
            @if($errors->has('pro_timeOpen'))
                <div class="error-txt">{{ $errors->first('pro_timeOpen') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Giá sản phẩm</label>
            <input type="text" class="form-control" id="inputName" placeholder="18.000 - 50.000" value="{{old('pro_price',isset($category->pro_price) ? $category->pro_price : '')}}" name="pro_price">
            @if($errors->has('pro_price'))
                <div class="error-txt">{{ $errors->first('pro_price') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Từ khóa sản phẩm (SEO)</label>
            <input type="text" class="form-control" id="inputName" placeholder="Tên tiêu đề..." value="{{old('pro_keyword_seo',isset($category->pro_keyword_seo) ? $category->pro_keyword_seo : '')}}" name="pro_keyword_seo">
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Miêu tả ngắn gọn</label>
            <input type="text" class="form-control" id="inputName" placeholder="Miêu tả ngắn gọn..." value="{{old('c_desc_seo',isset($category->c_desc_seo) ? $category->c_desc_seo : '')}}" name="c_desc_seo">
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >% khuyến mãi</label>
            <input type="text" class="form-control" id="inputName"  value="0" name="pro_sale">
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label for="inputState">Thể loại sản phẩm</label>
            <select id="inputState" class="form-control" name="pro_category_id">
                <option value="">--Chọn thể loại sản phẩm--</option>
                @if(isset($categories))
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->c_name}}</option>
                        @endforeach
                @endif
            </select>
            @if($errors->has('pro_category_id'))
                <div class="error-txt">{{ $errors->first('pro_category_id') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputState">Loại ẩm thực</label>
            <select id="inputState" class="form-control" name="pro_typeCook_id">
                <option value="">--Chọn loại ẩm thực--</option>
                @if(isset($typeCooks))
                    @foreach($typeCooks as $typeCook)
                        <option value="{{$typeCook->id}}">{{$typeCook->tc_name}}</option>
                    @endforeach
                @endif
            </select>
            @if($errors->has('pro_typeCook_id'))
                <div class="error-txt">{{ $errors->first('pro_typeCook_id') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputState">Loại sản phẩm</label>
            <select id="inputState" class="form-control" name="pro_typeProduct_id">
                <option value="">--Chọn loại sản phẩm--</option>
                @if(isset($typeProducts))
                    @foreach($typeProducts as $typeProduct)
                        <option value="{{$typeProduct->id}}">{{$typeProduct->tp_name}}</option>
                    @endforeach
                @endif
            </select>
            @if($errors->has('pro_typeProduct_id'))
                <div class="error-txt">{{ $errors->first('pro_typeProduct_id') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputState">Khu vực</label>
            <select id="inputState" class="form-control" name="pro_area_id">
                <option value="">--Chọn khu vực--</option>
                @if(isset($areas))
                    @foreach($areas as $area)
                        <option value="{{$area->id}}">{{$area->ar_name}}</option>
                    @endforeach
                @endif
            </select>
            @if($errors->has('pro_area_id'))
                <div class="error-txt">{{ $errors->first('pro_area_id') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Ảnh mô tả</label>
            <input type="file" class="form-control" id="inputName" name="pro_avatar">
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Trạng thái</label>
            <div class="d-flex align-items-center">
                <div class="form-check">
                    <label class="form-check-label" for="defaultCheck1">
                        <input class="form-check-input" type="checkbox" name="pro_hot" id="defaultCheck1">
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
