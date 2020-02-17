<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call( UserSeeder::class );
        $this->call( AllergenSeeder::class );
        $this->call( AllergenTranslationSeeder::class );
        $this->call( CategorySeeder::class );
        $this->call( ImageSeeder::class );
        $this->call( MenuItemSeeder::class );
        $this->call( AllergenMenuItemSeeder::class );
        $this->call( OptionSeeder::class );
        $this->call( HotboxSeeder::class );
        $this->call( MenuSeeder::class );
        $this->call( PageSeeder::class );
        $this->call( MenuPageSeeder::class );
        $this->call( ImageableSeeder::class );
        $this->call( MenuItemTranslationSeeder::class );
        $this->call( CategoryTranslationSeeder::class );
        $this->call( HotboxTranslationSeeder::class );
        $this->call( ImageTranslationSeeder::class );
        $this->call( OptionTranslationSeeder::class );
        $this->call( PageTranslationSeeder::class );



    }
}
