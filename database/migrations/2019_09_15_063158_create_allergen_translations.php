<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllergenTranslations extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'allergen_translations', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->unsignedBigInteger( 'allergen_id' )->unsigned();
            $table->string( 'locale' )->index();
            $table->string( 'name' );
            $table->unique( [ 'allergen_id', 'locale' ] );
            $table->foreign( 'allergen_id' )->references( 'id' )->on( 'allergens' )->onDelete( 'cascade' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'allergen_translations' );
    }
}
