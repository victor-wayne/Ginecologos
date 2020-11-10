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
                'apellidos' => 'Rivera Hernandez',
                'direccion' => 'Allende no1',
                'telefono' => '4613124967',
                'email'  => 'sudosistemasfh@gmail.com',
                'password' => \Hash::make('WATS_VDJm10$'),
                'transaction_id' => null,
                'transaction_status'=>null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],

            [
                'name' => 'Victor',
                'apellidos' => 'Hernandez Villafuerte',
                'direccion' => 'Allende no23',
                'telefono' => '4613121134',
                'email'  => 'victoritcelaya@gmail.com',
                'password' => \Hash::make('12345'),
                'transaction_id' => null,
                'transaction_status'=>null,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],


        );

        User::insert($data);
    }
}
