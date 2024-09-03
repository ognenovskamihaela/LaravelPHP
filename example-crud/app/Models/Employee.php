<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Petshop;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'surname',
        'salary',
        'petshop_id',
    ];

    public function petshop()
    {
        return $this->belongsTo(Petshop::class);
    }
}
