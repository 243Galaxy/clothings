<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothing;
use App\Models\Gallery;

class ClothingController extends Controller
{
    public function index()
      {
          $clothings = Clothing::latest()->get();
      
          return view('admin/index', [
      
            'clothings' => $clothings]);
      }
    
        public function order(Request $request){
    
          if($request->isMethod('get'))
                return view('create');
            elseif($request->isMethod('post')){
            $rules = [
                       'name' => 'required',
                       'material' => 'nullable|sometimes',
                       'color' => 'required',
                       'size' => 'required',
                       'address' => 'required',
                       'gender' => 'required',
                       'phone' => 'required',
                       'email' => 'required',
                       'image' => 'nullable|sometimes|image|mimes:jpeg,bmp,png,jpg,svg|max:500',
                     ];
             
    
          $clothing = new Clothing();
    
          $clothing->material = request('material');
          $clothing->color = request('color');
          $clothing->address = request('address');
          $clothing->name = request('name');
          $clothing->gender = request('gender');
          $clothing->size = request('size');
          $clothing->email = request('email');
          $clothing->phone = request('phone');
          $clothing->image = '';
    
          if($request->hasfile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = $request->file('image')->getClientOriginalName();
                $file->move('uploads/avatars', $filename);
                $clothing->image = $filename;
            }
    
    
          $clothing->save();
    
          return redirect('/')->with('success', 'Thanks for your order, you will be notified soon');
        }
      }
     
    public function showa($id) 
      {
  
          $clothing = Clothing::findOrFail($id);
  
          return view('admin/show', ['clothing' => $clothing]);
      }

    public function destroy($id) {
    
          $clothing = Clothing::findOrFail($id);
          $clothing->delete();
    
          return redirect('/clothings');
        }
    
    public function edit($id)
        {
          $clothing = Clothing::findOrFail($id);
    
          return view('clothings.edit', ['clothing' => $clothing]);
        }
    
        
    public function update(Request $request, $id) {
          $this->validate($request, [
            'name'  =>  'required',
            'email'  =>  'required',
            'phone'  =>  'required',
            'gender'  =>  'required',
            'date'  =>  'required',
            'material'  =>  'required',
            'color'  =>  'required',
            'style'  =>  'required',
            'size'  =>  'required',
            'additionaldetails'  =>  'required'
    
          ]);
          $clothing = Clothing::find($id);
    
          $clothing->material = request('material');
          $clothing->color = request('color');
          $clothing->style = request('style');
          $clothing->name = request('name');
          $clothing->gender = request('gender');
          $clothing->date = request('date');
          $clothing->size = request('size');
          $clothing->email = request('email');
          $clothing->phone = request('phone');
          $clothing->additionaldetails = request('additionaldetails');
    
          $clothing->save();
    
          return redirect('/')->with('mssg', 'Update Successful');
        }
    
}
