<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KeywordMenuItem extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'keyword_menu_item', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->bigInteger( 'keyword_id' )->unsigned();
            $table->bigInteger( 'menu_item_id' )->unsigned();
            $table->timestamps();

            $table->foreign( 'keyword_id' )->references( 'id' )->on( 'keywords' )->onDelete( 'CASCADE' );
            $table->foreign( 'menu_item_id' )->references( 'id' )->on( 'menu_items' )->onDelete( 'CASCADE' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'keyword_menu_item' );
    }
}
