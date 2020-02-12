<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $storeHot = Store::where([
            'st_hot'=> Store::HOT_ON,
            'st_active'=> Store::STATUS_PUBLIC
        ])->limit(5)->get();

        $viewdata = [
            'storeHot' => $storeHot
        ];
        return view('frontend.pages.home.index',$viewdata);
    }
}
