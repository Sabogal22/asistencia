<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; /* Importacion de la clase para usar el softdeletes */
use Apprentice;

class Course extends Model
{
    use SoftDeletes; /* Vamos a usar el softdeletes */
    protected $dates = ['delected_at']; /* Queda guardado la fecha en la que se elimino */
    protected $hidden = ['created_at','updated_at']; /* Datos con fecha de creacion y modificacion aqui el hidden significa que estan ocultos */
    protected $fillable = ['name','code']; /* lista de datos que quedaran disponibles para el uso */

    public function apprentices(){
        return $this->hasMany(Apprentice::class);
    }
}
