<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    use Translatable;

    public    $translatedAttributes = [ 'title', 'menu_title', 'content' ];
    protected $fillable             = [ 'slug', 'status', 'hotbox_id', 'template', 'publication', 'expiration' ];

    public function menu() {
        return $this->belongsToMany( 'App\Menu' );
    }

    public function hotbox() {
        return $this->belongsTo( 'App\Hotbox' );
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
