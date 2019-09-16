<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Allergen extends Model {

    use Translatable;

    public    $translatedAttributes = [ 'name' ];

    public function menuitems() {
        return $this->belongsToMany( 'App\MenuItem' );
    }
}
