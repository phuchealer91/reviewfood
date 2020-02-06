<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pro_name'=>'required | unique:products,pro_name,'.$this->id,
            'pro_category_id'=>'required',
            'pro_area_id'=>'required',
            'pro_typeCook_id'=>'required',
            'pro_typeProduct_id'=>'required',
            'pro_price' => 'required',
            'pro_address' => 'required',
            'pro_timeOpen' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'pro_name.required'=>'Tên sản phẩm không được để trống.',
            'pro_name.unique' => 'Tên sản phẩm đã tồn tại.',
            'pro_category_id.required'=>'Thể loại sản phẩm không được để trống.',
            'pro_area_id.required'=>'Khu vực không được để trống.',
            'pro_typeCook_id.required'=>'Loại ẩm thực không được để trống.',
            'pro_typeProduct_id.required'=>'Loại sản phẩm không được để trống.',
            'pro_price.required'=>'Giá sản phẩm không được để trống.',
            'pro_address.required'=>'Địa chỉ không được để trống.',
            'pro_timeOpen.required'=>'Thời gian mở cửa không được để trống.'
        ];
    }
}
