<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function user(){
        $user = User::paginate(5);
        return view("pages.other.user",["user"=>$user]);
    }

    public function cariuser(Request $request)
    {
        $cariuser = $request->cari; 
        
        $user = User::where('name', 'like', "%$cariuser%")->paginate(5); // Lakukan pencarian langsung dalam query
    
        return view('pages.other.user', ['user' => $user]); // Kirim data pengguna hasil pencarian ke view
    }
    
}
