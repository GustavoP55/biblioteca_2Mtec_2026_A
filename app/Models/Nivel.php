<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = 'NIVEIS';
    protected $primaryKey = 'NVLCODIGO';
    public $timestamps = false;
    protected $fillable = ['NVLNOME'];
}
