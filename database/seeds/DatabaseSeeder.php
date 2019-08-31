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

        $this->call( CategorySeeder::class );

        $this->call( MenuItemSeeder::class );

        $this->call( OptionSeeder::class );
		$this->call( HotboxSeeder::class );
		$this->call( MenuSeeder::class );
		
        $this->call( PageSeeder::class );
        
		$this->call( MenuPageSeeder::class );
        
    }
}
