<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAvailabilityInfoToMenuItems extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table( 'menu_item_translations', function ( Blueprint $table ) {
            $table->string( 'availability_info' )->nullable();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table( 'menu_item_translations', function ( Blueprint $table ) {
            $table->dropColumn( 'availability_info' );
        } );
    }
}
