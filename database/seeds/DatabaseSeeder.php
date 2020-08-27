<?php

use App\User;
use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();

        $this->call(UsuarioSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(CursoTableSeeder::class);
        $this->call(TemaCursosTableSeeder::class);

        Model::reguard();

    }
}
