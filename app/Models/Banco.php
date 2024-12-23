<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    use HasFactory;

    protected $table = 'bancos';
    protected $fillable = ['nombre_banco', 'tipo_moneda', 'numero_cuenta', 'estado'];
}
