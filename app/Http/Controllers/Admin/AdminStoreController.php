<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RequestStore;
use App\Http\Requests\RequestTypeProduct;
use App\Models\Area;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use App\Models\TypeCook;
use App\Models\TypeProduct;
use App\Models\TypeQuality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminStoreController extends AdminController
{
    public function index(){
        $stores = Store::with('relation_area:id,ar_name','relation_category:id,c_name')->paginate(10);
        $viewdata = [
            'stores' => $stores
        ];
        return view('admin.store.index',$viewdata);
    }
    public function create(){
        $categories = $this->getCategories();
        $areas = $this->getArea();
        $typeCooks = $this->getTypeCook();
        $typeProducts = $this->getTypeProduct();
        $typeQualitys = $this->getTypeQuality();
        $viewdata = [
            'areas' => $areas,
            'typeCooks' => $typeCooks,
            'typeProducts' => $typeProducts,
            'categories' => $categories,
            'typeQualitys'=>$typeQualitys
        ];
        return view('admin.store.create',$viewdata);
    }
    public function store(RequestStore $requestStore){
        $this->insertOrUpdate($requestStore);
//        dd($requestStore->all());
//        return redirect()->route('admin.index.store');
        return redirect()->back();
    }
    public function edit($id){
        $categories = $this->getCategories();
        $areas = $this->getArea();
        $typeCooks = $this->getTypeCook();
        $typeProducts = $this->getTypeProduct();
        $typeQualitys = $this->getTypeQuality();
        $stores = Store::find($id);
        $viewdata = [
            'areas' => $areas,
            'typeCooks' => $typeCooks,
            'typeProducts' => $typeProducts,
            'categories' => $categories,
            'typeQualitys'=>$typeQualitys,
            'stores' => $stores
        ];

        return view('admin.store.update',$viewdata);
    }
    public function update(RequestStore $requestStore,$id){
        $this->insertOrUpdate($requestStore,$id);
        return redirect()->route('admin.index.store');
    }
    public function insertOrUpdate( $requestStore, $id=''){
        $store = new Store();
        if($id) $store = Store::find($id);
        $store->st_name = $requestStore->st_name;
        $store->st_slug = str_slug($requestStore->st_name);
        $store->st_category_id = $requestStore->st_category_id;
        $store->st_area_id = $requestStore->st_area_id;
        $store->st_typeCook_id = $requestStore->st_typeCook_id;
        $store->st_typeProduct_id = $requestStore->st_typeProduct_id;
        $store->st_typeQuality_id = $requestStore->st_typeQuality_id;
        $store->st_price = $requestStore->st_price;
        $store->st_phone = $requestStore->st_phone;
//        $store->st_hot = $requestStore->st_hot;
        $store->st_avatar = $requestStore->st_avatar;
        $store->st_timeOpen = $requestStore->st_timeOpen;
        $store->st_address = $requestStore->st_address;
        $store->st_desc_seo = $requestStore->st_desc_seo ? $requestStore->st_desc_seo : $requestStore->st_name;
        $store->st_keyword_seo = $requestStore->st_keyword_seo;

        $store->save();
    }

    public function delete($action,$id){
        if($action){
            $store = Store::find($id);
            Switch($action){
                case 'delete':
                    $store->delete();
                    break;
            }
        }
        return Redirect()->Route('admin.index.category');
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
    public function getTypeQuality(){
        return TypeQuality::select('id','tq_name')->get();
    }
}
