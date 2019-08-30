<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    protected $fillable = [ 'path', 'title', 'content', 'status', 'hotbox_id', 'publication', 'expiration' ];

    public function hotbox() {
        return $this->belongsTo( 'App\Hotbox' );
    }
}
