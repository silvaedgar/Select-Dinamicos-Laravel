<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

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
        $data = DB::connection('mysql2')->table('estados')->get();
        foreach ($data as $renglon) {
            DB::table('estados')->insert([
                'id' => $renglon->id,
                'nombre' => $renglon->estado
            ]);
        }
        $data = DB::connection('mysql2')->table('municipios')->get();
        foreach ($data as $renglon) {
            DB::table('municipios')->insert([
                'id' => $renglon->id,
                'estado_id' => $renglon->estado_id,
                'nombre' => $renglon->municipio
            ]);
        }

        $data = DB::connection('mysql2')->table('parroquias')->get();
        foreach ($data as $renglon) {
            DB::table('parroquias')->insert([
                'id' => $renglon->id,
                'municipio_id' => $renglon->municipio_id,
                'nombre' => $renglon->parroquia
            ]);
        }

    }
}
