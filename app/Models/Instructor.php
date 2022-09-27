<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illumitate\Database\Eloquent\SoftDeletes; /* Importacion de la clase para usar el softdeletes */
use Absence, Point;

class Instructor extends Model
{
    use SoftDeletes;/* Vamos a usar el softdeletes */
    protected $dates = ['delected_at']; /* Queda guardado la fecha en la que se elimino */
    protected $hidden = ['created_at','updated_at']; /* Datos con fecha de creacion y modificacion aqui el hidden significa que estan ocultos */
    protected $fillable = ['name','document_number','speciality']; /* lista de datos que quedaran disponibles para el uso */

    public function absences(){
        return $this->hasMany(Absence::class);
    }

    public function points(){
        return $this->hasMany(Point::class);
    }
}
