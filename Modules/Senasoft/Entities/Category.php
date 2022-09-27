<?php

namespace Modules\Senasoft\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Category extends Model
{
    use softDeletes;
    protected $fillable = [];
    protected $dates = [];
    
}
