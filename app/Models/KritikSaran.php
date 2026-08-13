<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    protected $table = 'tb_kritik_saran';
    public $timestamps = false;
    protected $guarded = ['id'];
}