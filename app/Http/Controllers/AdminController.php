<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class AdminController extends Controller
{
    public function addProductView(){
        return view('admin.AddProductForm');
    }

    public function dashboardView(){
        return view('admin.dasbor');
    }


    public function uploadProduct(Request $request){ // uncalled
        // tabel nya apa, atribut nya apa
        // nama tabel di db

        $data = new Product();
        
        // nama atribut data di tabel  // ini gimana cara makenya yak. 
        /*$image=$request->file;

         // setiap nama foto di tabel bakal punya nama unik berdasarkan waktu nya. 
        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('productimage',$imagename);
        $data->$image = $imagename;*/

        // sending and requesting data to DB.
        $data->image = $request->image;
        $data->title = $request->productname;
        $data->category = $request->category;
        $data->price = $request->price;
        $data->condition = $request->conditions;
        $data->weight = $request->weight;
        $data->stock = $request->stocks;
        $data->desc = $request->desc;
        

        //Insert into table beans(id,beansName, origin, created_at,updated_at) value(?,?,?,?,?);
        $data->save(); 
        return redirect()->route('addproduct_view')->with('success','Product Added Successfully');
    }

    public function uploadProduckt(Request $request){ // adimg == name  // called

        $filename ='';
        if (\request()->hasFile('image')){

            $img = $request->file('image');
            $filename = time().'.'. $img->getClientOriginalExtension();
            \request()->file('image')->move(public_path('productimage'), $filename);

            $data = new Product([
                // kiri nama field, kanan nama data toggle di blade. 
                "title"=> \request()->input('productname'),
                "category"=> \request()->input('category'),
                "price"=> \request()->input('price'),
                "condition"=> \request()->input('conditions'),
                "weight"=> \request()->input('weight'),
                "stock"=> \request()->input('stocks'),
                "desc"=> \request()->input('desc'),
                "image"=> $filename,
            ]);

            $data->save();
            return redirect()->route('addproduct_view')->with('message','Product Added Successfully');
        }

        else{
            return redirect()->route('addproduct_view')->with('message','Failed to add Product');
        }
    }
}
