<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeywordTranslation extends Model
{
    public    $timestamps = false;
    protected $fillable   = [ 'name' ];
}
