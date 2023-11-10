<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    //
    public function index(){

        $products = DB::table('products')
        ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
        ->select('products.*', 'product_categories.category_name')
        ->get();
        return view("crud",["products"=>$products]);
    }

    public function tambah(){
        return view("tambah");
    }

    public function add(Request $request){

        DB::table('products')->insert([
            'product_name' => $request->input('product_name'),
            'category_id'=> $request->input('category_id'),
            'description'=> $request->input('description'),
            'price'=> $request->input('price'),
            'stock'=> $request->input('stock')
        ]);
        return redirect('/crud');
       
    }

    public function hapus($id){
        DB::table('products')->where('id',$id)->delete();
        return redirect('/crud');
    }

    public function edit($id){
        $products = DB::table('products')->where('id',$id)->get();
        return view('edit',['products'=>$products]);
    }

    public function update(Request $request){
        DB::table('products')->where('id',$request->id)->update([
            'product_name' => $request->input('product_name'),
            'category_id'=> $request->input('category_id'),
            'description'=> $request->input('description'),
            'price'=> $request->input('price'),
            'stock'=> $request->input('stock')
        ]);
        return redirect('/crud');
    }
}
