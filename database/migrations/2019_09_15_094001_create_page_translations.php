<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTranslations extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'page_translations', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->unsignedBigInteger( 'page_id' )->unsigned();
            $table->string( 'locale' )->index();
            $table->string( 'title' )->nullable();
            $table->string( 'menu_title' );
            $table->text( 'content' )->nullable();
            $table->unique( [ 'page_id', 'locale' ] );
            $table->foreign( 'page_id' )->references( 'id' )->on( 'pages' )->onDelete( 'cascade' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'page_translations' );
    }
}
