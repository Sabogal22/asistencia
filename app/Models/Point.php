<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illumitate\Database\Eloquent\SoftDeletes; /* Importacion de la clase para usar el softdeletes */
use Apprentice, Instructor;

class Point extends Model
{
    use SoftDeletes;/* Vamos a usar el softdeletes */
    protected $dates = ['delected_at']; /* Queda guardado la fecha en la que se elimino */
    protected $hidden = ['created_at','updated_at']; /* Datos con fecha de creacion y modificacion aqui el hidden significa que estan ocultos */
    protected $fillable = ['apprentice_id','points','instructor_id','date','activity']; /* lista de datos que quedaran disponibles para el uso */

    public function apprentices(){
        return $this->belongsTo(Apprentice::class);
    }

    public function instructors(){
        return $this->belongsTo(Instructor::class);
    }
}
