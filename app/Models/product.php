<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model
{
    use HasFactory , HasApiTokens , SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'image_name',
        'available_quantity',
        'price',
        'sale_price',
        'clothing_type',
        'product_category',
        'is_accessory'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->BelongsTo(user::class);
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }

    // public function clothes_men_filter()
    // {
    //     $clothes_men       = Product::all()->where('is_accessory','no')->where('product_category', '=', 'men');
    //     $clothes_men_count = $clothes_men->count();

    //     return view('website.products.clothes.clothes-filter.clothes_men_filter', compact('clothes_men' , 'clothes_men_count'));
    // }

    // public function clothes_women_filter()
    // {
    //     $clothes_women       = Product::all()->where('is_accessory','no')->where('product_category', '=', 'women');
    //     $clothes_women_count = $clothes_women->count();

    //     return view('website.products.clothes.clothes-filter.clothes_women_filter', compact('clothes_women' , 'clothes_women_count'));
    // }

}
