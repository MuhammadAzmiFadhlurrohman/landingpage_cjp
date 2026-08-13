<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdukDetail extends Model
{
    protected $table = 'tb_produk_detail';
    public $timestamps = false;
    protected $guarded = ['id'];
}