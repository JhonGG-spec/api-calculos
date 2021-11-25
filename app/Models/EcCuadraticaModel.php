<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcCuadraticaModel extends Model
{
    use HasFactory;
    //Campos que pueden ser llenados
    protected $fillable = ["value_a", "value_b", "value_c", "results"];
}
