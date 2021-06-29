<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'category_id', 'total', 'status', 'quantity'];

    public function files()
    {
        return $this->belongsToMany(File::class, 'product_file');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
