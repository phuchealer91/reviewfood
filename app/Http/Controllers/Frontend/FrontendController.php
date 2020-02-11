<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\View\View;
use Illuminate\Support\Facades\View;


class FrontendController extends Controller
{
    public function __construct()
    {
        $areas = Area::all();
        View::share('areas',$areas);
    }
}
