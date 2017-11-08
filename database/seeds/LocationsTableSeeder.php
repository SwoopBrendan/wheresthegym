<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->delete();

        DB::table('locations')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Admin Location',
                    'latitude' => '-33.9249',
                    'longitude' => '18.4241',
                    'number' => '118',
                    'street_one' => 'Ringwood Drive',
                    'street_two' => '',
                    'street_three' => '',
                    'suburb' => 'Pinelands',
                    'city' => 'Cape Town',
                    'province' => 'Western Cape',
                    'postal_code' => 7405,
                    'user_id' => 1
                ),
        ));
    }
}
