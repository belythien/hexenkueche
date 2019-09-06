<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model {
    protected $fillable = [ 'name', 'description', 'category_id', 'sort', 'publication', 'expiration' ];

    public function category() {
        return $this->belongsTo( 'App\Category' );
    }

    public function options() {
        return $this->hasMany( 'App\Option' );
    }

    public function allergens() {
        return $this->belongsToMany( 'App\Allergen' )->orderBy('id');
    }

    public function images() {
        return $this->morphToMany( 'App\Image', 'imageable' );
    }

    public function isLive() {
        if( $this->status == 1 ) {
            if( $this->publication == '' || $this->publication <= date( 'Y-m-d' ) ) {
                if( $this->expiration == '' || $this->expiration > date( 'Y-m-d' ) ) {
                    return 1;
                }
                return 0;
            }
            return 0;
        }
        return 0;
    }
}
