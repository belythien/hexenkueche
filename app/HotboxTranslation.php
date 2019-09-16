<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotboxTranslation extends Model {

    public    $timestamps = false;
    protected $fillable   = [ 'text' ];
}
