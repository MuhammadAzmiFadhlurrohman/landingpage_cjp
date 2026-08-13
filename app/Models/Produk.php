<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'tb_produk';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function details()
    {
        // Relasi ke tb_produk_detail berdasarkan id_produk
        return $this->hasMany(ProdukDetail::class, 'id_produk', 'id');
    }
}