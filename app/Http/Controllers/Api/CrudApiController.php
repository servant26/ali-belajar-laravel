<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Validator;

class CrudApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Products::orderBy('product_name','asc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data ditemukan',
            'data' => $data
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataProducts = new Products;

        $rules = [ 
            'product_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'description'=> 'required|string',
            'price'=> 'required|integer',
            'stock'=> 'required|integer|max:100',
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Gagal memasukkan data',
                'data' => $validator->errors()
            ]);
        }
        
        $dataProducts->product_name = $request->product_name;
        $dataProducts->category_id = $request->category_id;
        $dataProducts->description = $request->description;
        $dataProducts->price = $request->price;
        $dataProducts->stock = $request->stock;

        $post = $dataProducts->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses memasukkan data'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Products::find($id);
        if($data){
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data' => $data
            ],200);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ]); 
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataProducts = Products::find($id);
        if(empty($dataProducts)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404); 
        }

        $rules = [ 
            'product_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'description'=> 'required|string',
            'price'=> 'required|integer',
            'stock'=> 'required|integer|max:100',
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Gagal memperbarui data',
                'data' => $validator->errors()
            ]);
        }
        
        $dataProducts->product_name = $request->product_name;
        $dataProducts->category_id = $request->category_id;
        $dataProducts->description = $request->description;
        $dataProducts->price = $request->price;
        $dataProducts->stock = $request->stock;

        $post = $dataProducts->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses memperbarui data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataProducts = Products::find($id);
        if(empty($dataProducts)){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404); 
        }

        $post = $dataProducts->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses menghapus data'
        ]);
    }
}
