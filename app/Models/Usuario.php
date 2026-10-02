<?php

namespace App\Models;

//"User as Authenticatable" por que se usar apenas User ele conflita com o model padrao do laravel
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    //
}
