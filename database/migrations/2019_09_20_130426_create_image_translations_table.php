<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTranslationsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'image_translations', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->unsignedBigInteger( 'image_id' )->unsigned();
            $table->string( 'locale' )->index();
            $table->string( 'name' )->nullable();
            $table->text( 'description' )->nullable();
            $table->text( 'copyright' )->nullable();
            $table->unique( [ 'image_id', 'locale' ] );
            $table->foreign( 'image_id' )->references( 'id' )->on( 'images' )->onDelete( 'cascade' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'image_translations' );
    }
}
