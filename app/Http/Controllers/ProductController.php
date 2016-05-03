<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

// use Users;
class ProductController extends Controller
{
    public function main(){
    	$users = User::all();
    	return view('products/main', compact('users'));
    }

    public function productDetails(){
    	return view('product/details');
    }
}