<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {
    protected $fillable = [ 'name', 'path' ];

    public function pages() {
        return $this->morphedByMany( 'App\Page', 'imageable' );
    }

    public function menuitems() {
        return $this->morphedByMany( 'App\MenuItem', 'imageable' );
    }

}
