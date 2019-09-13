<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

    protected $fillable = [ 'name', 'description', 'date', 'time', 'periodically', 'copyright' ];

    public function images() {
        return $this->morphToMany( 'App\Image', 'imageable' );
    }
}
