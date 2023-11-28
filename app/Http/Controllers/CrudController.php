<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\ProductCategories;


class CrudController extends Controller
{
    //query builder show/read
    // public function index(){

    //     $products = DB::table('products')
    //     ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
    //     ->select('products.*', 'product_categories.category_name')
    //     ->paginate(5);
    //     return view("crud",["products"=>$products]);
    // }

    public function index(){

        $products = Products::join('product_categories', 'products.category_id', '=', 'product_categories.id')
        ->select('products.*', 'product_categories.category_name')
        ->paginate(5);
        return view("pages.crud.crud",["products"=>$products]);
    }

    public function tambah()
    {
        $categories = ProductCategories::all();
    
        return view("pages.crud.tambah", ["categories" => $categories]);
    }
    

    //query builder tambah
    // public function add(Request $request)
    // {
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
    
    //     $imageName = time().'.'.$request->image->extension();
    //     $request->image->move(public_path('images'), $imageName);
    
    //     DB::table('products')->insert([
    //         'product_name' => $request->input('product_name'),
    //         'category_id'=> $request->input('category_id'),
    //         'description'=> $request->input('description'),
    //         'price'=> $request->input('price'),
    //         'stock'=> $request->input('stock'),
    //         'image' => 'images/' . $imageName,
    //     ]);
    
    //     return redirect('/crud')->with('success', 'Data berhasil ditambahkan');
    // } 

    public function add(Request $request)
    {
        $request->validate([        
            'product_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'description'=> 'required|string',
            'price'=> 'required|integer',
            'stock'=> 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ],[
            'product_name.required' => 'Mohon isi form ini',
            'product_name.regex' => 'Masukkan hanya teks',
            'description.required' => 'Mohon isi form ini',
            'price.required' => 'Mohon isi form ini',   
            'stock.required' => 'Mohon isi form ini',
            'image.required' => 'Upload gambar terlebih dahulu'
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    
        Products::create([
            'product_name' => $request->input('product_name'),
            'category_id'=> $request->input('category_id'),
            'description'=> $request->input('description'),
            'price'=> $request->input('price'),
            'stock'=> $request->input('stock'),
            'image' => 'images/' . $imageName,
        ]);
    
        return redirect('/crud')->with('success', 'Data berhasil ditambahkan');
    }    
    //query builder hapus
    // public function hapus($id){
    //     DB::table('products')->where('id',$id)->delete();
    //     return redirect('/crud')->with('success', 'Data berhasil dihapus');
    // }

    public function hapus($id){
        $products = Products::find($id);
        $products->delete();
        return redirect('/crud')->with('success', 'Data berhasil dihapus');
    }

    //query builder edit
    // public function edit($id)
    //     $products = DB::table('products')->where('id',$id)->get();
    //     return view('edit',['products'=>$products]);
    // }

    public function edit($id)
    {
        $product = Products::find($id); 
        $categories = ProductCategories::all(); 
    
        return view("pages.crud.edit", ["product" => $product, "categories" => $categories]);
    }
    

    //query builder update
    // public function update(Request $request)
    // {
    //     $request->validate([
    //         'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $imageName = time().'.'.$request->image->extension();
    //         $request->image->move(public_path('images'), $imageName);
            
    //         DB::table('products')->where('id', $request->id)->update([
    //             'product_name' => $request->input('product_name'),
    //             'category_id' => $request->input('category_id'),
    //             'description' => $request->input('description'),
    //             'price' => $request->input('price'),
    //             'stock' => $request->input('stock'),
    //             'image' => 'images/' . $imageName,
    //         ]);
    //     } else {
    //         DB::table('products')->where('id', $request->id)->update([
    //             'product_name' => $request->input('product_name'),
    //             'category_id' => $request->input('category_id'),
    //             'description' => $request->input('description'),
    //             'price' => $request->input('price'),
    //             'stock' => $request->input('stock'),
    //         ]);
    //     }
    
    //     return redirect('/crud')->with('success', 'Data berhasil diperbarui');
    // }

    public function update(Request $request)
    {
        $request->validate([        
            'product_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'description'=> 'required|string',
            'price'=> 'required|integer',
            'stock'=> 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ],[
            'product_name.required' => 'Mohon isi form ini',
            'product_name.regex' => 'Masukkan hanya teks',
            'description.required' => 'Mohon isi form ini',
            'price.required' => 'Mohon isi form ini',
            'stock.required' => 'Mohon isi form ini',
        ]);

        $product = Products::find($request->id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->image = 'images/' . $imageName;
        }

        $product->product_name = $request->input('product_name');
        $product->category_id = $request->input('category_id');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        
        $product->save();

        return redirect('/crud')->with('success', 'Data berhasil diperbarui');
    }

    //query builder search
	// public function cari(Request $request)
	// {
	// 	$cari = $request->cari;
	// 	$products = DB::table('products')
    //     ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
    //     ->select('products.*', 'product_categories.category_name')
	// 	->where('product_name','like',"%".$cari."%")
	// 	->paginate(5);
	// 	return view('crud',['products' => $products]);
	// }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $products = Products::join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->select('products.*', 'product_categories.category_name')
            ->where('product_name', 'like', "%$cari%")
            ->paginate(5);

        return view('pages.crud.crud', ['products' => $products]);
    }
}
