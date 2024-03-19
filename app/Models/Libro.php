<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Libro extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="libro";
    protected $fillable=["id", "titulo", "categoria"];


    public function autor()
    {
        return $this->hasMany(Autor_Libro::class, "libro_id", "id");
    }
}
