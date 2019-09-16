<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotboxTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotbox_translations', function (Blueprint $table) {
            $table->bigIncrements( 'id' );
            $table->unsignedBigInteger( 'hotbox_id' )->unsigned();
            $table->string( 'locale' )->index();
            $table->string( 'text' )->nullable();
            $table->unique( [ 'hotbox_id', 'locale' ] );
            $table->foreign( 'hotbox_id' )->references( 'id' )->on( 'hotboxes' )->onDelete( 'cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotbox_translations');
    }
}
