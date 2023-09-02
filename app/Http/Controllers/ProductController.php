<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ParentCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Helpers\MyHelper;


class ProductController extends Controller
{


    function productGallery(){
       $allImages=Product::all();
     
      return view('admin.products.browse',['images'=>$allImages]);
    }
    
    function addNewProductPage(){
          $type="add";
           $categories=Category::all();
          return view('admin.products.edit_add',['categories'=>$categories,'type'=>$type]);
        }

    function saveNewProduct(Request $request){
          $product=new Product();
    
          if ($request->hasFile('image')) {
            $file = $request->file('image');
            $uniqueId = uniqid(); // Generate a unique ID
    
            // Generate a unique name for the image using the unique ID and the original file extension
            $imageName = $uniqueId . '.' . $file->getClientOriginalExtension();
    
            // Store the image in the storage
            $file->storeAs('public/product/images', $imageName); // 'images' is the storage folder
    
            // Save the image name to the database
            $product->categoryId = $request->categoryId;
            $product->imageTitle = $request->imageTitle;
            $product->imageName = $imageName;
            $product->save();
    
        }
       return redirect()->route('product.images.view');
    }

    function editProductPage(Request $req){
      $product=Product::find($req->id);
      $category=Category::find($product->categoryId);
      $product->categoryName=$category->categoryName;
      $type="edit";
      $categories=Category::all();
      return view('admin.products.edit_add',['categories'=>$categories,'type'=>$type,'product'=>$product]);
   }
   function updateProduct(Request $request){
    $product=Product::find($request->id);
    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $fileToDelete = 'public/product/images/' . $product->imageName;
      Storage::delete($fileToDelete);
      $uniqueId = uniqid(); // Generate a unique ID

      // Generate a unique name for the image using the unique ID and the original file extension
      $imageName = $uniqueId . '.' . $file->getClientOriginalExtension();

      // Store the image in the storage
      $file->storeAs('public/product/images', $imageName); // 'images' is the storage folder

      // Save the image name to the database
      $product->imageName = $imageName;
   }
   $product->categoryId = $request->categoryId;
   $product->imageTitle = $request->imageTitle;
   $product->update();
   return redirect()->route('product.images.view');
  }
  function deleteProduct(Request $req){
    $product=Product::find($req->id);
    $fileToDelete = 'public/product/images/' . $product->imageName;
    Storage::delete($fileToDelete);
    $product->delete();
    return redirect()->back();
   }

}
