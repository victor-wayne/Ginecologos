<?php

use App\User;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Wayne',
                'email'  => 'sudosistemasfh@gmail.com',
                'password' => \Hash::make('WATS_VDJm10$'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],

            [
                'name' => 'Victor',
                'email'  => 'victoritcelaya@gmail.com',
                'password' => \Hash::make('12345'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],


        );

        User::insert($data);
    }
}
