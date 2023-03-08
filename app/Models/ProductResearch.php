<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductResearch extends Model
{
    protected $fillable = [
        'title',
        'categories',
        'buy_price',
        'sell_price',
        'short_description',
        'aliexpress_link',
        'fb_ads',
        'fb_ads_img',
        'url',
        'eng_heart',
        'eng_comment',
        'eng_reaction',
        'cpa',
        'net',
        'total_order',
        'country',
        'gender',
        'age',
        'audience',
        'interests',
        'images',
    ];
}
