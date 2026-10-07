<?php

namespace App\Models;

//"User as Authenticatable" por que se usar apenas User ele conflita com o model padrao do laravel
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'USUARIOS';
    protected $primaryKey = 'USRCODIGO';
    public $timestamps = false;
    protected $hidden = ['USRSENHA'];

    protected $casts = [
        'USRDTCAD' => 'date',
    ];

    public function nivel()
    {
        return $this->belongsTo(Nivel::class, 'USRNIVEL', 'NVLCODIGO');
    }

    public function getAuthPassword()
    {
        return $this->USRSENHA;
    }
}