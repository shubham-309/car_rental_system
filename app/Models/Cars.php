<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $table ='cars';
   protected $fillable=[
    'cate_id',
    'name',
    'registration_no',
    'slug',
    'discription',
    'original_price',
    'selling_price',
    'image',
    'quantity',
    'tax',
    'status',
    'trending',
   ];

    public function category()
    {
        return $this->belongsTo(Category::class , 'cate_id', 'id');
    }
}
