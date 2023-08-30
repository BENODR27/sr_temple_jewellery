<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SlideController extends Controller
{
    function slideGallery(){
      $allImages=Slide::all();
      return view('admin.slides.browse',['images'=>$allImages]);
    }
        
    function addNewSlidePage(){
      $type="add";
      return view('admin.slides.edit_add',['type'=>$type]);
    }

    function saveNewSlide(Request $request){
      $slide=new Slide();

      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $uniqueId = uniqid(); // Generate a unique ID

        // Generate a unique name for the image using the unique ID and the original file extension
        $imageName = $uniqueId . '.' . $file->getClientOriginalExtension();

        // Store the image in the storage
        $file->storeAs('public/slide/images', $imageName); // 'images' is the storage folder

        // Save the image name to the database
        $slide->imageName = $imageName;
        $slide->save();

    }
return redirect()->route('slide.images.view');
    }

    function editSlidePage(Request $req){
        $selectedSlide=Slide::find($req->id);
        $type="edit";
        return view('admin.slides.edit_add',['type'=>$type,'slide'=>$selectedSlide]);
    }
    function updateSlide(Request $request){
      $slide=Slide::find($request->id);

      if ($request->hasFile('image')) {
        $fileToDelete = 'public/slide/images/' . $slide->imageName;
        Storage::delete($fileToDelete);

        $file = $request->file('image');
        $uniqueId = uniqid(); // Generate a unique ID

        // Generate a unique name for the image using the unique ID and the original file extension
        $imageName = $uniqueId . '.' . $file->getClientOriginalExtension();

        // Store the image in the storage
        $file->storeAs('public/slide/images', $imageName); // 'images' is the storage folder

        // Save the image name to the database
        $slide->imageName = $imageName;
        

    }
    $slide->save();
return redirect()->route('slide.images.view');
    }
    function deleteSlide(Request $req){
      $slide=Slide::find($req->id);
      $fileToDelete = 'public/slide/images/' . $slide->imageName;
      Storage::delete($fileToDelete);
      $slide->delete();
      return redirect()->back();
     }
    
}
