<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_produk',
        'brand_id',
        'jenis_produk',
        'jumlah_produk'
    ];
    public function brand():BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
