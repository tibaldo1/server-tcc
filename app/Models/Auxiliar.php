<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auxiliar extends Model
{
    use HasFactory;

    protected $fillable=["cpf", "id_vaquinha" ];

    public function usuarios(){
        return $this->belongsTo(Usuario::class, "cpf");
    }
    public function vaquinhas(){
        return $this->belongsTo(Vaquinha::class, "id_vaquinha");
    }
}
