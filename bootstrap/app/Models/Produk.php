<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;


    protected $fillable = [

        'id_kategori',
        'judul',
        'harga',
        'stok',
        'desk',
        'gambar',
    ];
    
    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    
}
