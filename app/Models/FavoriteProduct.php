<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'user_id',
        'project_id'
    ];

    public function product()
    {
        return $this->hasOne(ProductResearch::class, 'id','product_id');
    }
}
