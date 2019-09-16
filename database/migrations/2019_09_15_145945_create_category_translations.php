<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTranslations extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'category_translations', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->unsignedBigInteger( 'category_id' )->unsigned();
            $table->string( 'locale' )->index();
            $table->string( 'name' )->nullable();
            $table->text( 'description' )->nullable();
            $table->unique( [ 'category_id', 'locale' ] );
            $table->foreign( 'category_id' )->references( 'id' )->on( 'categories' )->onDelete( 'cascade' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'category_translations' );
    }
}
