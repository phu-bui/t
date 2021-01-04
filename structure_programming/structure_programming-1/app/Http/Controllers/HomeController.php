<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use DB;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $brand_product = DB::table('brands')->orderby('id', 'desc')->get();
        $all_product = DB::table('products')->where('status', 1)->orderby('id', 'desc')->limit(4)->get();
        return view('home')->with('brand_product', $brand_product)->with('products', $all_product);
    }
}
