<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Destination;
use App\Models\Cruises;
use App\Models\Gallery;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        
    }
    public function index(){
        view()->share('isHome', true);

        return view('fontend::home.welcome.index', [
            'site_title' => __('site.trangchu'),
            'banner' => Banner::getSkides(),
            'tours' => Destination::getListDestination(),

        ]);
    }

    public function home(){
        
    }
}
