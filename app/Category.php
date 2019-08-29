<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $fillable = [ 'name', 'description', 'publication', 'expiration' ];

    public function menuItems() {
        return $this->hasMany( 'App\MenuItem' );
    }
}
