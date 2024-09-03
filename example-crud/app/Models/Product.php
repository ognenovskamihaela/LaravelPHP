<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Petshop;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_name',
        'price',
        'description',
        'petshop_id'
    ];
    public function petshop(){
        return $this->belongsTo(Petshop::class);
    }
}
