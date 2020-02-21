<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Area;
use App\Models\Product;
use App\Models\Store;
use App\Models\TypeCook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreDetailController extends Controller
{
    public function getDetailStore(Request $request)
    {
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);
        if ($id = array_pop($url)) {
           $storeDetails = Store::where('st_active',Store::STATUS_PUBLIC)->find($id);
//           dd($storeDetails->id);
            $productInStoreDetails =  Product::where([
                'pro_typeStore_id'=>$id,
                'pro_active'=>Product::STATUS_PUBLIC
            ])->get();
//           $productInStoreDetail = Store::where([$storeDetails,Product::find('pro_typeStore_id')->get()
           $localDetail = Area::find($storeDetails->st_area_id);
           $typeCookDetail = TypeCook::find($storeDetails->st_typeCook_id);
//           Shopping cart
            $listProducts = \Cart::content();
            $total = \Cart::subtotal(0,',','.');
            $viewdata = [
                'storeDetails' => $storeDetails,
                'localDetail' => $localDetail,
                'typeCookDetail' => $typeCookDetail,
                'productInStoreDetails'=>$productInStoreDetails,
                'listProducts' =>  $listProducts,
                'total' => $total
            ];
            return view('frontend.pages.store.detail', $viewdata);
        }

    }
}
