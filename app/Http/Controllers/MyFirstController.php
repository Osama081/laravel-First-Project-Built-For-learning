<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class MyFirstController extends Controller
{

    function addProduct(){
        $name = Auth::user()->name;
        return view('AdminPanel.AddingNewProduct.ProductForm',compact('name'));
    }

    function  getTheCategories($category){
        $myCategory = Product::all()->where('Product_Category','Phone');
        return view('Customers.PageWithSameCategories.samecate',compact('myCategory'));
    }

    function gettingProducts(){
        $product = Product::take(4)->orderBy('id','DESC')->get();
        $product1 = Product::take(4)->orderBy('id','ASC')->get();
        return view('Customers.HomePage.HomePageCategories.categoriesField',compact('product','product1'));
    }



    function  getHomePage(){
        return view('MasterView');
    }
    function getFoot(){
        return view('Customers.HomePage.HomePageCategories.categoriesField');
    }

    function singleCate($id){
        $products = Product::all()->where('Product_Category',$id);
        return view('Customers/HomePage/singleCate',compact('id','products'));
    }

}
