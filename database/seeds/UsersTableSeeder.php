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
        factory(\App\Models\User::class,1)->create([
            'email' => 'admin@editora.com'
        ]);

        factory(\App\Models\User::class,1)->create([
            'email' => 'antevertonlima@gmail.com'
        ]);
    }
}
