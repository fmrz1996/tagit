<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tags')->insert([
        'name' => 'Mejorar las pensiones',
        'ministery_id' => '12',
      ]);

      DB::table('tags')->insert([
        'name' => 'Asegurar sistema de salud',
        'ministery_id' => '14',
      ]);

      DB::table('tags')->insert([
        'name' => 'Cambiar la constitución',
        'ministery_id' => '1',
      ]);

      DB::table('tags')->insert([
        'name' => 'Educación superior gratuita',
        'ministery_id' => '10',
      ]);

      DB::table('tags')->insert([
        'name' => 'Aumentar sueldo mínimo',
        'ministery_id' => '8',
      ]);

      DB::table('tags')->insert([
        'name' => 'Arreglar taza de impuestos',
        'ministery_id' => '8',
      ]);

      DB::table('tags')->insert([
        'name' => 'Renuncia presidente',
        'ministery_id' => '1',
      ]);
    }
}
