<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Victor',
                'email'  => 'victoritcelaya@gmail.com',
                'password' => \Hash::make('WATS_VDJm10$'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],


        );

        User::insert($data);

    }
}
