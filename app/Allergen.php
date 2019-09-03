<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allergen extends Model {

    protected $fillable = [ 'name' ];

    public function menuitems() {
        return $this->belongsToMany( 'App\MenuItem' );
    }
}
