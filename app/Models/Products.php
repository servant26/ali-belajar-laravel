<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = "products";

    protected $fillable = [
        'product_name',
        'category_id',
        'description',
        'price',
        'stock',
        'image'
    ];
    
    public function product_categories(){
        return $this->hasMany(ProductCategories::class);
    }

}
