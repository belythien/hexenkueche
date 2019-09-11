<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Startseite
        DB::table( 'imageables' )->insert( [
            'image_id'     => 14,
            'imageable_id' => 1,
            'imageable_type' => 'App\Page'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 2,
            'imageable_id' => 1,
            'imageable_type' => 'App\Page'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 9,
            'imageable_id' => 1,
            'imageable_type' => 'App\Page'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 1,
            'imageable_id' => 1,
            'imageable_type' => 'App\Page'
        ] );

        // Reservierung
        DB::table( 'imageables' )->insert( [
            'image_id'     => 10,
            'imageable_id' => 4,
            'imageable_type' => 'App\Page'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 11,
            'imageable_id' => 4,
            'imageable_type' => 'App\Page'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 12,
            'imageable_id' => 4,
            'imageable_type' => 'App\Page'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 19,
            'imageable_id' => 4,
            'imageable_type' => 'App\Page'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 17,
            'imageable_id' => 5,
            'imageable_type' => 'App\Page'
        ] );

        // MenuItems
        DB::table( 'imageables' )->insert( [
            'image_id'     => 1,
            'imageable_id' => 23,
            'imageable_type' => 'App\MenuItem'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 2,
            'imageable_id' => 27,
            'imageable_type' => 'App\MenuItem'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 3,
            'imageable_id' => 4,
            'imageable_type' => 'App\MenuItem'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 4,
            'imageable_id' => 8,
            'imageable_type' => 'App\MenuItem'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 5,
            'imageable_id' => 45,
            'imageable_type' => 'App\MenuItem'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 6,
            'imageable_id' => 34,
            'imageable_type' => 'App\MenuItem'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 7,
            'imageable_id' => 42,
            'imageable_type' => 'App\MenuItem'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 9,
            'imageable_id' => 22,
            'imageable_type' => 'App\MenuItem'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 13,
            'imageable_id' => 12,
            'imageable_type' => 'App\MenuItem'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 14,
            'imageable_id' => 14,
            'imageable_type' => 'App\MenuItem'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 15,
            'imageable_id' => 36,
            'imageable_type' => 'App\MenuItem'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 16,
            'imageable_id' => 17,
            'imageable_type' => 'App\MenuItem'
        ] );

        DB::table( 'imageables' )->insert( [
            'image_id'     => 18,
            'imageable_id' => 43,
            'imageable_type' => 'App\MenuItem'
        ] );
    }
}
