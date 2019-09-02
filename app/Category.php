<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $fillable = [ 'name', 'description', 'publication', 'expiration' ];

    public function menuItems() {
        return $this->hasMany( 'App\MenuItem' );
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
