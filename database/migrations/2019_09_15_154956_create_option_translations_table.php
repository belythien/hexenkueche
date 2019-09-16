<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_translations', function (Blueprint $table) {
            $table->bigIncrements( 'id' );
            $table->unsignedBigInteger( 'option_id' )->unsigned();
            $table->string( 'locale' )->index();
            $table->string( 'name' )->nullable();
            $table->string( 'amount' )->nullable();
            $table->unique( [ 'option_id', 'locale' ] );
            $table->foreign( 'option_id' )->references( 'id' )->on( 'options' )->onDelete( 'cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('option_translations');
    }
}
