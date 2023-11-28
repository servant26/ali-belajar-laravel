<?php

namespace App\Http\Controllers;
use App\Models\ProductCategories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index(){
        $product_categories = ProductCategories::paginate(5);
        return view("pages.crud_categories.product_categories",["product_categories"=>$product_categories]);
    }

    public function tambah(){
        return view("pages.crud_categories.tambah_categories");
    }

    public function add(Request $request)
    {
        $request->validate([        
            'category_name' => 'required|regex:/^[a-zA-Z\s]+$/',
        ],[
            'category_name.required' => 'Mohon isi form ini',
            'category_name.regex' => 'Masukkan hanya teks',
        ]);
    
        ProductCategories::create([
            'category_name' => $request->input('category_name'),
        ]);
    
        return redirect('/categories')->with('success', 'Data berhasil ditambahkan');
    }
    
    public function edit($id){
        $product_categories = ProductCategories::find($id);
        return view('pages.crud_categories.edit_categories',['product_categories'=>$product_categories]);
    }

    public function update(Request $request)
    {
        $request->validate([        
            'category_name' => 'required|regex:/^[a-zA-Z\s]+$/',
        ],[
            'category_name.required' => 'Mohon isi form ini',
            'category_name.regex' => 'Masukkan hanya teks',
        ]);

        $product_categories = ProductCategories::find($request->id);

        $product_categories->category_name = $request->input('category_name');

        $product_categories->save();

        return redirect('/categories')->with('success', 'Data berhasil diperbarui');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari; 
        
        $product_categories = ProductCategories::where('category_name', 'like', "%$cari%")->paginate(5); 
    
        return view('pages.crud_categories.product_categories', ['product_categories' => $product_categories]); 
    }

    public function hapus($id){
        $product_categories = ProductCategories::find($id);
        $product_categories->delete();
        return redirect('/categories')->with('success', 'Data berhasil dihapus');
    }
}
