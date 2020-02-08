<form action="" method="POST">
    @csrf
    <div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Tên sản phẩm</label>
                <input type="text" class="form-control" id="inputName" placeholder="Tên sản phẩm..." value="{{old('pro_name',isset($product->pro_name) ? $product->pro_name : '')}}" name="pro_name">
                @if($errors->has('pro_name'))
                    <div class="error-txt">{{ $errors->first('pro_name') }}</div>
                @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Giá sản phẩm</label>
            <input type="text" class="form-control" id="inputName" placeholder="18.000 - 50.000" value="{{old('pro_price',isset($product->pro_price) ? $product->pro_price : '')}}" name="pro_price">
            @if($errors->has('pro_price'))
                <div class="error-txt">{{ $errors->first('pro_price') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Từ khóa sản phẩm (SEO)</label>
            <input type="text" class="form-control" id="inputName" placeholder="Tên tiêu đề..." value="{{old('pro_keyword_seo',isset($product->pro_keyword_seo) ? $product->pro_keyword_seo : '')}}" name="pro_keyword_seo">
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Miêu tả ngắn gọn</label>
            <input type="text" class="form-control" id="inputName" placeholder="Miêu tả ngắn gọn..." value="{{old('c_desc_seo',isset($product->c_desc_seo) ? $product->c_desc_seo : '')}}" name="c_desc_seo">
        </div>

    </div>
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label for="inputName" class="col-form-label" >% khuyến mãi</label>
            <input type="number" class="form-control" id="inputName"  value="0" name="pro_sale">
        </div>
        <div class="form-group">
            <label for="inputState" class="col-form-label">Sản phẩm thuộc cửa hàng</label>
            <select id="js-select2" class="form-control" name="pro_typeStore_id">
                <option value="">-- Chọn cửa hàng --</option>
                @if(isset($stores))
                    @foreach($stores as $store)
                        <option value="{{$store->id}}">{{$store->st_name}}</option>
                        @endforeach
                @endif
            </select>
            @if($errors->has('pro_typeStore_id'))
                <div class="error-txt">{{ $errors->first('pro_typeStore_id') }}</div>
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
