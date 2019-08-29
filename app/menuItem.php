<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menuItem extends Model {
    protected $fillable = [ 'name', 'description', 'price', 'category_id', 'image', 'sort', 'publication', 'expiration' ];

    public function category() {
        return $this->belongsTo( 'App\Category' );
    }

    public function options() {
        return $this->hasMany( 'App\Option' );
    }
}
