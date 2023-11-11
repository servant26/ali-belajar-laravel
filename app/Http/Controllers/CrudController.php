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
        ->paginate(5);
        return view("crud",["products"=>$products]);
    }

    public function tambah(){
        return view("tambah");
    }

    public function add(Request $request)
    {
        $request->validate([
            // ... aturan validasi yang sudah ada ...
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Tangani unggahan gambar
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    
        // Masukkan data ke database
        DB::table('products')->insert([
            'product_name' => $request->input('product_name'),
            'category_id'=> $request->input('category_id'),
            'description'=> $request->input('description'),
            'price'=> $request->input('price'),
            'stock'=> $request->input('stock'),
            'image' => 'images/' . $imageName, // Simpan jalur gambar
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

    public function update(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            
            DB::table('products')->where('id', $request->id)->update([
                'product_name' => $request->input('product_name'),
                'category_id' => $request->input('category_id'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'image' => 'images/' . $imageName,
            ]);
        } else {
            DB::table('products')->where('id', $request->id)->update([
                'product_name' => $request->input('product_name'),
                'category_id' => $request->input('category_id'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
            ]);
        }
    
        return redirect('/crud');
    }

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table pegawai sesuai pencarian data
		$products = DB::table('products')
        ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
        ->select('products.*', 'product_categories.category_name')
		->where('product_name','like',"%".$cari."%")
		->paginate(5);
 
    	// mengirim data pegawai ke view index
		return view('crud',['products' => $products]);
 
	}
    
    
}
