<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ! Product Model 
class Product extends Model
{
    use HasFactory;

    // !Specifying the table
    protected $table='product';

    // !Specifying the fillable fields for product model
    protected $fillable = [
        'title',
        'description',
        'is_available'
    ];
}
