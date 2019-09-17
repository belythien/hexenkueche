<?php

namespace App;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Event extends Model {

    use Translatable;

    public    $translatedAttributes = [ 'name', 'description' ];
    protected $fillable = [ 'date', 'time', 'periodically', 'copyright' ];

    public function images() {
        return $this->morphToMany( 'App\Image', 'imageable' );
    }
}
