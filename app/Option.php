<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Option extends Model {

    use Translatable;

    public    $translatedAttributes = [ 'name', 'amount' ];
    protected $fillable             = [ 'price', 'publication', 'expiration' ];

    public function menuItem() {
        return $this->belongsTo( 'App\MenuItem' );
    }
}
