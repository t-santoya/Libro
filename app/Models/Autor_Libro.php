<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor_Libro extends Model
{
    use HasFactory;

    protected $table = "autor_libro";
    protected $fillable = ["id", "autor_id", "libro_id"];



    public function autor()
    {
        return $this->belongsTo(Autor::class, "autor_id", "id");
    }

    public function libro()
    {
        return $this->belongsTo(Libro::class, "libro_id", "id");
    }
}
