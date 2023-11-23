<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaquinha extends Model
{
    use HasFactory;
    protected $fillable = [ "nome", "valor", "objetivo", "descricao", "data_fim"];
    protected $primaryKey="id_vaquinha";

    public function auxiliar()
    {
        return $this->hasMany(Auxiliar::class, "id_vaquinha");
    }
}