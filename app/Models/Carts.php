<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $table = 'tmd_carts';

    // public function product(): BelongsTo
    // {
    //     return $this->belongsTo(Product::class);
    // }
}
