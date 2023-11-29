<?php

namespace App\Http\Controllers;

use App\Models\ProductCategories;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
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

    public function column()
    {
        $productsData = Products::select('products.category_id', 'products.price', 'products.stock', 'product_categories.category_name')
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->get()
            ->groupBy('category_name')
            ->map(function ($category) {
                return [
                    'total_products' => $category->count(),
                    'total_price' => $category->sum('price'),
                    'total_stock' => $category->sum('stock')
                ];
            });
    
        return view('pages.dashboard.column', compact('productsData'));
    }
    
    

    public function pie()
    {
        $productsByCategory = Products::select(
            'products.category_id',
            'product_categories.category_name',
            DB::raw('count(*) as total_produk'),
            DB::raw('sum(products.price) as total_harga'),
            DB::raw('sum(products.stock) as total_stok')
        )
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->groupBy('products.category_id', 'product_categories.category_name')
            ->get();
    
        $data = [
            'category_names' => $productsByCategory->pluck('category_name')->toArray(),
            'total_produk' => $productsByCategory->pluck('total_produk')->toArray(),
            'total_harga' => $productsByCategory->pluck('total_harga')->toArray(),
            'total_stok' => $productsByCategory->pluck('total_stok')->toArray(),
        ];
    
        return view('pages.dashboard.pie')->with('data', $data);
    }
    
}

