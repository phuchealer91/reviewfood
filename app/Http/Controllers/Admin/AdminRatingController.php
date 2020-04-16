<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminRatingController extends Controller
{
    public function index(){
        $ratings = Rating::with('getUserRating:id,name','getStoreRating:id,st_name,st_activeOpen')->paginate(10);
        $viewdata = [
            'ratings' => $ratings
        ];

        return view('admin.rating.index',$viewdata);
    }
}
