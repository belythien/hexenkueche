<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllergenMenuItemTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'allergen_menu_item', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->integer( 'allergen_id' );
            $table->integer( 'menu_item_id' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'allergen_menu_item' );
    }
}
