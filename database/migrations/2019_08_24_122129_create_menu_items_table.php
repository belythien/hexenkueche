<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'menu_items', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->string( 'name' )->nullable();
            $table->text( 'description' )->nullable();
            $table->string( 'image' )->nullable();
            $table->double( 'price' )->nullable();
            $table->integer( 'sort' )->nullable();
            $table->integer( 'category_id' )->nullable();
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
        Schema::dropIfExists( 'menu_items' );
    }
}
