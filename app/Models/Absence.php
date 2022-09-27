<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illumitate\Database\Eloquent\SoftDeletes; /* Importacion de la clase para usar el softdeletes */
use Apprentice, Instructor; /* Le indico que modelos voy a usar  */


class Absence extends Model
{
    use SoftDeletes;/* Vamos a usar el softdeletes */
    protected $dates = ['delected_at']; /* Queda guardado la fecha en la que se elimino */
    protected $hidden = ['created_at','updated_at']; /* Datos con fecha de creacion y modificacion aqui el hidden significa que estan ocultos */
    protected $fillable = ['apprentice_id','instructor_id','date','justification']; /* lista de datos que quedaran disponibles para el uso */

    public function apprentice(){
        return $this->belongsTo(Apprentice::class);/* permite ver que al momento de hacer una consulta de la absence puedo ver la informacion de la clase apprentice */
    } /* BelongsTo significa pertence a:  */

    public function instructor(){
        return $this->belongsTo(Instructor::class);
    }
}
