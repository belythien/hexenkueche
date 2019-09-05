<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {
    protected $fillable = [ 'title', 'description', 'code' ];

    public function pages() {
        return $this->belongsToMany( 'App\Page' )->withPivot('sort')->orderBy('sort');
    }

    public function otherPages() {
        $otherPages = Page::whereNotIn( 'id', $this->pages()->pluck('page_id') );
        return $otherPages;
    }
}
