<?php

namespace App\Http\Controllers;

use App\Models\ProductCategories;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    // public function dashboard(){
    //     return view('pages.dashboard.dashboard');
    // }
    public function column()
    {
        $products = Products::all();

        $productData = Products::select('product_name', 'price', 'stock', 'created_at')
            ->orderBy('created_at')
            ->get();
        $data['product_name'] = $productData->pluck('product_name')->toArray();
        $data['price'] = $productData->pluck('price')->toArray();
        $data['stock'] = $productData->pluck('stock')->toArray();
        $data['created_at'] = $productData->pluck('created_at')->map(function ($date) {
            return $date->format('Y-m-d');
        })->toArray();

        return view('pages.dashboard.column', compact('products', 'data'));
    }

    public function pie()
    {
        $productData = Products::select('product_name', 'price', 'stock', 'created_at')
            ->orderBy('created_at')
            ->get();
    
        $data['product_name'] = $productData->pluck('product_name')->toArray();
        $data['stock'] = $productData->pluck('stock')->toArray();
        return view('pages.dashboard.pie', compact('data'));
    }
    
    public function dashboard()
    {
        $totalStock = Products::sum('stock');

        $totalCategories = ProductCategories::count();

        $totalUsers = User::count();

        return view('pages.dashboard.dashboard', [
            'totalStock' => $totalStock,
            'totalCategories' => $totalCategories,
            'totalUsers' => $totalUsers,
        ]);
    }
    
}

