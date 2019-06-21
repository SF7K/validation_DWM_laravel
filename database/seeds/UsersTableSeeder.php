<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.admin',
            'password' => bcrypt('admin0000'),
            'role_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'michelcon',
            'email' => 'michel@mail.con',
            'password' => bcrypt('michelcon69'),
            'role_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'JoliePetuniaDu92',
            'email' => 'tulipe@fleurs.com',
            'password' => bcrypt('PetitCoquelicot'),
            'role_id' => 2,
        ]);
        DB::table('users')->insert([
            'name' => 'Rambo',
            'email' => 'gmail@chucknorris.com',
            'password' => bcrypt('terminator'),
            'role_id' => 3,
        ]);
    }
}
