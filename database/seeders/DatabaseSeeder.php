<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([ 'name' => 'Test User', 'email' => 'test@example.com', 'password' => bcrypt('1152194566') ]);
        \App\Models\TipoServicio::Create([ 'Nombre' => 'Básico']);
        \App\Models\TipoServicio::Create([ 'Nombre' => 'Avanzado']);
        // $this->call(ClienteSeeder::class);
        \App\Models\Cliente::factory(25)->create();
        \App\Models\Servicio::factory(7)->create();
        \App\Models\Servicio_cliente::Create([ 'cliente_id' => '1', 'servicio_id' => '1' ]);
    }
}
