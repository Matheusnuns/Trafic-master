<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SemaforoConfig extends Model
{
    protected $table = 'semaforoconfigs';

    protected $fillable = [
        'controladores',
        'endereco',
        'ip',
    ];
}
