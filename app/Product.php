<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;
use Session;

class Product extends Model
{
    public function products(){
    	return $this->hasone('App\Product','id');
    }

    public static function cartcount(){
    	if(Auth::check()){
    		$user_email = Auth::user()->email;
    		$cartCount = DB::table('cart')->where('user_email',$user_email)->sum('quantity');

    	} else {
    		$session_id = Session::get('session_id');
    		$cartCount = DB::table('cart')->where('session_id',$session_id)->sum('quantity');


    	}
    	return $cartCount;
    }

     public static function cartcountprice(){
    	if(Auth::check()){
    		$user_email = Auth::user()->email;
    		$cartCountPrice = DB::table('cart')->where('user_email',$user_email)->sum('price');

    	} else {
    		$session_id = Session::get('session_id');
    		$cartCountPrice = DB::table('cart')->where('session_id',$session_id)->sum('price');


    	}
    	return $cartCountPrice;
    }

    public static function productCount($cat_id){
    	$catCount = Product::where(['category_id'=>$cat_id,'status'=>1])->count();
    	return $catCount;
    }
}
