<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table( 'users' )->insert( [
            'name'     => 'Basti',
            'email'    => 's.hoewer@gmail.com',
            'password' => '$2y$10$QvOtrRv3uSJSpqu/2zuk7OdCGY/tCnnVbDN/L3E6ndH.hVpm3mkE2',
        ] );

        DB::table( 'users' )->insert( [
            'name'     => 'Tastibasti',
            'email'    => 'tastibasti@gmail.com',
            'password' => '$2y$10$hVeLO5n8LR8eBHLpwzaqTuQ9eASyJSIccr1C1b.L4O/B.iEkpUKM2',
        ] );

        DB::table( 'users' )->insert( [
            'name'     => 'Birgit',
            'email'    => 'hexenkueche1@yahoo.com',
            'password' => '$2y$10$eP2JhMW6cSarXHysRj15ROu9oCItegRIa7/syL0REqJoasyHYohVe',
        ] );
    }
}
