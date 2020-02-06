<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RequestProduct;
use App\Models\Area;
use App\Models\Category;
use App\Models\Product;
use App\Models\TypeCook;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

class AdminProductController extends AdminController
{
    public function index(){

        return view('admin.product.index');
    }
    public function create(){
        $categories = $this->getCategories();
        $areas = $this->getArea();
        $typeCooks = $this->getTypeCook();
        $typeProducts = $this->getTypeProduct();
        $viewdata = [
            'areas' => $areas,
            'typeCooks' => $typeCooks,
            'typeProducts' => $typeProducts,
            'categories' => $categories
        ];
        return view('admin.product.create',$viewdata);
    }
    public function store(RequestProduct $requestProduct){
        $this->insertOrUpdate($requestProduct);
//        dd($requestProduct->all());
        return redirect()->back();
    }

    public function insertOrUpdate( $requestProduct, $id=''){
            $product = new Product();
            if($id) $product = Product::find($id);
            $product->pro_name = $requestProduct->pro_name;
            $product->pro_slug = str_slug($requestProduct->pro_name);
            $product->pro_category_id = $requestProduct->pro_category_id;
            $product->pro_area_id = $requestProduct->pro_area_id;
            $product->pro_typeCook_id = $requestProduct->pro_typeCook_id;
            $product->pro_typeProduct_id = $requestProduct->pro_typeProduct_id;
            $product->pro_price = $requestProduct->pro_price;
            $product->pro_sale = $requestProduct->pro_sale;
            $product->pro_avatar = $requestProduct->pro_avatar;
            $product->pro_timeOpen = $requestProduct->pro_timeOpen;
            $product->pro_address = $requestProduct->pro_address;
            $product->pro_desc_seo = $requestProduct->pro_desc_seo ? $requestProduct->pro_desc_seo : $requestProduct->pro_name;
            $product->pro_keyword_seo = $requestProduct->pro_keyword_seo;

            $product->save();
    }





    public function getCategories(){
        return Category::all();
    }
    public function getArea(){
        return Area::select('id','ar_name')->get();
    }
    public function getTypeCook(){
        return TypeCook::select('id','tc_name')->get();
    }
    public function getTypeProduct(){
        return TypeProduct::select('id','tp_name')->get();
    }
}
