<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'item_id',
        'codename',
        'type',
        'image',
        'price',
        'stock'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class,'item_id','id');
    }
}
