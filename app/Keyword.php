<?php

namespace App;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model {

    use Translatable;

    public $translatedAttributes = [ 'name' ];

    public function menuitems() {
        return $this->belongsToMany( 'App\MenuItem', 'keyword_menu_item', 'keyword_id', 'menu_item_id' );
    }
}
