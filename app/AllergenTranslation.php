<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllergenTranslation extends Model {

    public    $timestamps = false;
    protected $fillable   = [ 'name' ];
}
