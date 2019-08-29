<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model {
    protected $fillable = [ 'name', 'price', 'publication', 'expiration' ];

    public function menuItem() {
        return $this->belongsTo( 'App\MenuItem' );
    }
}
