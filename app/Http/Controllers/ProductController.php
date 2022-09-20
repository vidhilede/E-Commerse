<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {

    return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',

        ]);
        $data=new Product();
        $data->name= $request->name;
        $data->price= $request->price;
        $data->description= $request->description;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads',$filename);
            $data->image=$filename;
        }
        $data->save();
         return redirect()->route('products.index')->with('message','Data Inserted Successfully');

    }
    public function index()
    {
        $data = product::paginate(5);

        return view('admin.products.index',compact('data'));
    }
    public function edit($id)
    {
        $data=Product::find($id);
        return view('admin.products.edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        $data=Product::find($id);
        $data->name= $request->name;
        $data->price= $request->price;
        $data->description= $request->description;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads',$filename);
            $data->image=$filename;
        }
        $data->save();
        return redirect()->route('products.index')->with('message','Data Updated Successfully');
    }
    public function delete($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect()->route('products.index')->with('message','Data Deleted Successfully');
    }








}
