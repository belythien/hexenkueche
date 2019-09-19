<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    use Translatable;

    public    $translatedAttributes = [ 'name', 'description' ];
    protected $fillable             = [ 'publication', 'expiration' ];

    public function menuItems() {
        return $this->hasMany( 'App\MenuItem' )->orderby( 'sort' );
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

    public static function getTemplates() {
        return [
            'default'     => 'Standard',
            'specials_01' => 'Specials #1 - Einspaltig',
            'specials_02' => 'Specials #2 - Gerichte oben, Bilder unten',
            'specials_03' => 'Specials #3 - Zweispaltig'
        ];
    }
}
