<?php

namespace App\Http\Controllers;

use App\Models\ProductCategories;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function column()
    {
        $products = Products::all();
        $productData = Products::select('category_id', 'price', 'stock')
            ->get()
            ->groupBy('category_id')
            ->map(function ($category) {
                return [
                    'total_products' => $category->count(),
                    'total_price' => $category->sum('price'),
                    'total_stock' => $category->sum('stock')
                ];
            });
    
        return view('pages.dashboard.column', compact('products', 'productData'));
    }
    

    public function pie()
    {
        $productsByCategory = Products::select('category_id', 
                DB::raw('count(*) as total_produk'), 
                DB::raw('sum(price) as total_harga'), 
                DB::raw('sum(stock) as total_stok'))
                ->groupBy('category_id')
                ->get();
        $data = [];
        $data['category_id'] = $productsByCategory->pluck('category_id')->toArray();
        $data['total_produk'] = $productsByCategory->pluck('total_produk')->toArray();
        $data['total_harga'] = $productsByCategory->pluck('total_harga')->toArray();
        $data['total_stok'] = $productsByCategory->pluck('total_stok')->toArray();
    
        return view('pages.dashboard.pie')->with('data', $data);
    }
    
    public function dashboard()
    {
        $totalProducts = Products::count();

        $totalStock = Products::sum('stock');

        $totalCategories = ProductCategories::count();

        $totalPrice = Products::sum('price');

        return view('pages.dashboard.dashboard', [
            'totalProducts' => $totalProducts,
            'totalStock' => $totalStock,
            'totalCategories' => $totalCategories,
            'totalPrice' => $totalPrice,
        ]);
    }
    
}

