<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'route', 'mime'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_file');
    }
}
