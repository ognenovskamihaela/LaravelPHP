<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petshop extends Model
{
    use HasFactory;
    protected $table = 'petshops';
    protected $fillable=[
        'city'
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
