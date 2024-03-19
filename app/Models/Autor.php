<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Autor extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table="autor";
    protected $fillable=["id", "nombre", "apellido"];



    public function libros()
    {
        return $this->hasMany(Autor_Libro::class, "autor_id", "id");
    }

}
