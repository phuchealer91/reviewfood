<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RequestProduct;
use App\Http\Requests\RequestStore;
use App\Models\Area;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use App\Models\TypeCook;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

class AdminProductController extends AdminController
{
    public function index(){
            $products = Product::paginate(10);
            $viewdata = [
              'products' => $products
            ];
        return view('admin.product.index',$viewdata);
    }
    public function create(){
        $stores = $this->getStore();
//        $areas = $this->getArea();
//        $typeCooks = $this->getTypeCook();
//        $typeProducts = $this->getTypeProduct();
        $viewdata = [
            'stores' => $stores

        ];
        return view('admin.product.create',$viewdata);
    }
    public function store(RequestProduct $requestProduct){
        $this->insertOrUpdate($requestProduct);
//        dd($requestProduct->all());
        return redirect()->back();
    }
    public function edit($id){
        $product = Product::find($id);
        return view('admin.product.update',compact('product'));
    }
    public function update(RequestProduct $requestProduct,$id){
        $this->insertOrUpdate($requestProduct,$id);
        return redirect()->route('admin.index.product');
    }
    public function insertOrUpdate( $requestProduct, $id=''){
            $product = new Product();
            if($id) $product = Product::find($id);
            $product->pro_name = $requestProduct->pro_name;
            $product->pro_slug = str_slug($requestProduct->pro_name);
            $product->pro_typeStore_id = $requestProduct->pro_typeStore_id;
            $product->pro_price = $requestProduct->pro_price;
            $product->pro_sale = $requestProduct->pro_sale;
            $product->pro_avatar = $requestProduct->pro_avatar;
            $product->pro_desc_seo = $requestProduct->pro_desc_seo ? $requestProduct->pro_desc_seo : $requestProduct->pro_name;
            $product->pro_keyword_seo = $requestProduct->pro_keyword_seo;

            $product->save();
    }
    public function delete($action,$id){
        if($action){
            $product = Product::find($id);
            Switch($action){
                case 'delete':
                    $product->delete();
                    break;
            }
        }
        return Redirect()->Route('admin.index.product');
    }




    public function getStore(){
        return Store::all();
    }
//    public function getArea(){
//        return Area::select('id','ar_name')->get();
//    }
//    public function getTypeCook(){
//        return TypeCook::select('id','tc_name')->get();
//    }
//    public function getTypeProduct(){
//        return TypeProduct::select('id','tp_name')->get();
//    }
}
