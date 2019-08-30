<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotbox extends Model {
    protected $fillable = [ 'text', 'url', 'status', 'publication', 'expiration' ];

    public function pages() {
        return $this->hasMany( 'App\Page' );
    }
}
