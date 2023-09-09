<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ParentCategory;
use App\Models\Testimonial;
use App\Models\Category;
use App\Models\Slide;

use Illuminate\Http\Request;
use App\Helpers\MyHelper;

class WebsiteController extends Controller
{
    function getSelectedCategoryProducts(Request $req){
      $category=null;
        if($req->id!=null){
          if($req->id==-1){
            $allImages=Product::all();

          }else{
            $allImages=Product::where('categoryId',$req->id)->paginate(12);
            $category=Category::find($req->id);

          }
        }else{
          $allImages=Product::paginate(12);
        }



        $datas = MyHelper::generateDropDownData();

      return view('website.products',['images'=>$allImages,'datas'=>$datas,'categoryName'=>$category!=null?$category->categoryName:""]);
      }
   
    function website(){
       $slides=Slide::all();
        $categories=Category::all();
        $testimonials = Testimonial::all();
        $latestProducts = Product::latest()->take(8)->get();
        $datas =MyHelper::generateDropDownData();
         return view('website.index',['slides'=>$slides,'datas'=>$datas,'images'=>$latestProducts,'categories'=>$categories,'testimonials'=>$testimonials]);
    }
    function aboutus(){
      $testimonials = Testimonial::all();
        $datas = MyHelper::generateDropDownData();
         return view('website.aboutus',['datas'=>$datas,'testimonials'=>$testimonials]);
    }
}
