<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'pages', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->string( 'slug' );
            $table->string( 'title' )->nullable();
            $table->string( 'menu_title' )->nullable();
            $table->string( 'external_url' )->nullable();
            $table->text( 'content' )->nullable();
            $table->boolean( 'status' )->default( 0 );
            $table->string('template')->default('fullwidth');
            $table->integer( 'hotbox_id' )->nullable();
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
        Schema::dropIfExists( 'pages' );
    }
}
