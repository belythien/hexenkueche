<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeywordTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyword_translations', function (Blueprint $table) {
            $table->bigIncrements( 'id' );
            $table->unsignedBigInteger( 'keyword_id' )->unsigned();
            $table->string( 'locale' )->index();
            $table->string( 'name' )->nullable();
            $table->unique( [ 'keyword_id', 'locale' ] );
            $table->foreign( 'keyword_id' )->references( 'id' )->on( 'keywords' )->onDelete( 'cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keyword_translations');
    }
}
