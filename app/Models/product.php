<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnValueMap;

class product extends Model
{
    use HasFactory;

    // In the Product model
protected $fillable = ['category_id', 'product_name', 'product_qty', 'product_price', 'updated_at', 'created_at'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
