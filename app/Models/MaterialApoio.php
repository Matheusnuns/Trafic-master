<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialApoio extends Model
{
   
    protected $table = "material_apoio";

    protected $fillable = [
     'titulo',
     'pdf',
    ];

}
