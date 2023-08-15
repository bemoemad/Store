<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','category_id','created_at','updated_at'];

   // $prod->category
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}

