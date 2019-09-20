<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {
    protected $fillable = [ 'title', 'description', 'code' ];

    public function pages() {
        return $this->belongsToMany( 'App\Page' )->withPivot( 'sort' )->orderBy( 'sort' );
    }

    public function otherPages() {
        $otherPages = Page::whereNotIn( 'id', $this->pages()->pluck( 'page_id' ) );
        return $otherPages;
    }

    public static function getAllMenus() {
        $menus = Menu::all();
        return $menus;
    }

    public static function getWelcomeMenu() {
        return Menu::find( 1 );
    }

    public static function getMainMenu() {
        return Menu::find( 2 );
    }

    public static function getFooterMenu() {
        return Menu::find( 3 );
    }
}
