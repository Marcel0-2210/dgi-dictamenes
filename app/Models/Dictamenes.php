<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dictamenes extends Model
{
    use HasFactory;

    protected $table="dictamenes";

    protected $fillable = ['nro_dictamen', 'expediente', 'asunto', 'monto', 'fecha_ingreso', 'fecha_salida'];
}
