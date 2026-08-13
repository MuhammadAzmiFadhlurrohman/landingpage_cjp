<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    // Mengacu pada tabel tb_loker_studio di database
    protected $table = 'tb_loker_studio';
    
    // Menonaktifkan timestamps bawaan Laravel
    public $timestamps = false;
    
    protected $guarded = [];
}