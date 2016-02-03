<?php

use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
            'name' => 'Pri Anton Subardio',
            'email' => 'prianthonsubardio@gmail.com',
            'password' => bcrypt('subardio90'),
      ]);
    }
}
