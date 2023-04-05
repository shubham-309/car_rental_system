<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table ='user';
   protected $fillable=[
    'user_id',
    'car_id',
    'start_date',
    'end_date',
    'original_price',
    'selling_price',
   ];
/**
         * Get the user that owns the Booking
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class, 'user_id', 'id');
        }

        public function cars(): BelongsTo
        {
            return $this->belongsTo(Cars::class, 'car_id', 'id');
        }
}
