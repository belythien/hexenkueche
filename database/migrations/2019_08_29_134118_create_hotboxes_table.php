<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotboxesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'hotboxes', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->string( 'text' )->nullable();
            $table->string( 'url' )->nullable();
            $table->boolean( 'status' )->default( 0 );
            $table->date( 'publication' )->nullable();
            $table->date( 'expiration' )->nullable();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'hotboxes' );
    }
}
