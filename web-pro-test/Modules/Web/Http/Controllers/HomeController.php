<?php

namespace Modules\Web\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('web::home');
    }

    public function cart() {
        return view('web::cart');
    }

    public function checkout() {
        return view('web::checkout');
    }

    public function searchOrder() {
        return view('web::search-order');
    }

    public function detail() {
        return view('web::product-detail');
    }

    public function aboutUs() {
        return view('web::about-us');
    }
}
