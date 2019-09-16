<?php

namespace App;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Hotbox extends Model {

    use Translatable;

    public    $translatedAttributes = [ 'text' ];
    protected $fillable             = [ 'url', 'status', 'publication', 'expiration' ];

    public function pages() {
        return $this->hasMany( 'App\Page' );
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
