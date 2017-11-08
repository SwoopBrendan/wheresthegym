<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->delete();

        DB::table('user_types')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Admin',
                    'slug' => 'admin',
                    'description' => 'Admin User',
                ),
            1 =>
                array(
                    'id' => 2,
                    'label' => 'Member',
                    'slug' => 'member',
                    'description' => 'Member User',
                ),
            2 =>
                array(
                    'id' => 3,
                    'label' => 'Gym',
                    'slug' => 'gym',
                    'description' => 'Gym Business',
                ),
        ));
    }
}
