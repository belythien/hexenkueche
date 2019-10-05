<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveNameAndDescriptionFromEvent extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table( 'events', function ( Blueprint $table ) {
            $table->dropColumn( 'name' );
            $table->dropColumn( 'description' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table( 'events', function ( Blueprint $table ) {
            $table->string( 'name' );
            $table->text( 'description' )->nullable();
        } );
    }
}
