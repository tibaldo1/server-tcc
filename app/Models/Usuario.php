<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $primaryKey = "cpf";
    protected $fillable = ["cpf", "nome", "email", "senha", "saldo"];

    public function auxiliar()
    {
        return $this->hasMany(Auxiliar::class, "cpf");
    }
    public function extratos(){
        return $this->hasMany(Extrato::class, "cpf");
    }
}