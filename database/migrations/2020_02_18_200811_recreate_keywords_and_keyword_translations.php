<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecreateKeywordsAndKeywordTranslations extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::statement( 'SET FOREIGN_KEY_CHECKS=0;' );
        Schema::dropIfExists( 'keyword_translations' );
        Schema::dropIfExists( 'keywords' );
        Schema::dropIfExists( 'keyword_menu_item' );

        Schema::create( 'keywords', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->timestamps();
        } );

        Schema::create( 'keyword_translations', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->unsignedBigInteger( 'keyword_id' )->unsigned();
            $table->string( 'locale' )->index();
            $table->string( 'name' )->nullable();
            $table->unique( [ 'keyword_id', 'locale' ] );
            $table->foreign( 'keyword_id' )->references( 'id' )->on( 'keywords' )->onDelete( 'cascade' );
        } );

        Schema::create( 'keyword_menu_item', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->bigInteger( 'keyword_id' )->unsigned();
            $table->bigInteger( 'menu_item_id' )->unsigned();
            $table->timestamps();

            $table->foreign( 'keyword_id' )->references( 'id' )->on( 'keywords' )->onDelete( 'CASCADE' );
            $table->foreign( 'menu_item_id' )->references( 'id' )->on( 'menu_items' )->onDelete( 'CASCADE' );
        } );
        DB::statement( 'SET FOREIGN_KEY_CHECKS=1;' );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }
}
