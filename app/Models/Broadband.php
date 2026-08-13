<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Broadband extends Model
{
    protected $table = 'tb_broadband';
    public $timestamps = false;
    protected $guarded = ['id'];
}