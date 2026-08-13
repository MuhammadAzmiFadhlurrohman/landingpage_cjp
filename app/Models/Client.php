<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'tb_client';
    public $timestamps = false;
    protected $guarded = ['id'];
}