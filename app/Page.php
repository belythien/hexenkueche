<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    protected $fillable = [ 'path', 'title', 'content', 'status', 'hotbox_id', 'publication', 'expiration' ];

    public function menu() {
        return $this->belongsToMany( 'App\Menu' );
    }

    public function hotbox() {
        return $this->belongsTo( 'App\Hotbox' );
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
