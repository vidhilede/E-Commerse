<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =['status'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function OrderProduct(){
        return $this->hasMany(OrderProduct::class);
    }

    public function Product(){
        return $this->belongsToMany(Product::class,'order_products');
    }
}
