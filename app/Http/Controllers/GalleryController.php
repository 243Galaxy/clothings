<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Clothing;
use App\Models\Fgallery;

class GalleryController extends BaseController
{    
    
    public function __construct()
    {
        
    }
    public function gallery(Request $request)
    {
        $gallery = Gallery::all();
    
        return view('gallery', ['gallery' => $gallery]);
    }

    public function creategallery(Request $request)
      {
        if($request->isMethod('get'))
        return view('admin/creategallery');
    elseif($request->isMethod('post')){
    $rules = [
               'material' => 'required',
               'style' => 'nullable|sometimes',
               'color' => 'required',
               'price' => 'required',
               'image2' => 'nullable|sometimes|image|mimes:jpeg,bmp,png,jpg,svg|max:500',
             ];

             $gallery = new Gallery();


             $gallery->material = request('material');
             $gallery->style = request('style');
             $gallery->color = request('color');
             $gallery->price = request('price');
             $gallery->image2 = '';

             if($request->hasfile('image2')) {
                $file = $request->file('image2');
                $extension = $file->getClientOriginalExtension();
                $filename = $request->file('image2')->getClientOriginalName();
                $file->move('uploads/avatars', $filename);
                $gallery->image2 = $filename;
            }

            $gallery->save();
            return redirect()->back()->with('success', 'Style Successfuly uploaded');
  
        }
      }
     
      public function orderg(Request $request)
        {

          // storing a review

            $clothing = new Fgallery();

            $clothing->material = request('material');
            $clothing->galleries_id = request('gallerie_id');
            $clothing->color = request('color');
            $clothing->address = request('address');
            $clothing->name = request('name');
            $clothing->gender = request('gender');
            $clothing->size = request('size');
            $clothing->email = request('email');
            $clothing->phone = request('phone');
            
            $clothing->save();
      
            return redirect('/')->with('success', 'Thanks for your order, you will be notified soon');
          }


      public function show($id)
      {
        $gallery = Gallery::findOrFail($id);

        return view('show', ['gallery' => $gallery, 'c'=>$id]);
      }

      
}
