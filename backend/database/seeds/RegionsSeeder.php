<?php

use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
          ['name' => 'Región de Arica y Parinacota'],
          ['name' => 'Región de Tarapaca'],
          ['name' => 'Región de Antofagasta'],
          ['name' => 'Región de Atacama'],
          ['name' => 'Región de Coquimbo'],
          ['name' => 'Región de Valparaíso'],
          ['name' => 'Región Metropolitana de Santiago'],
          ['name' => 'Región del Libertador General Bernardo O’Higgins'],
          ['name' => 'Región del Maule'],
          ['name' => 'Región del Ñuble'],
          ['name' => 'Región del Biobío'],
          ['name' => 'Región de La Araucanía'],
          ['name' => 'Región de Los Ríos'],
          ['name' => 'Región de Los Lagos'],
          ['name' => 'Región de Aysén del General Carlos Ibáñez del Campo'],
          ['name' => 'Región de Magallanes y la Antártica Chilena']
        ];

        DB::table('regions')->insert($regions);
    }
}
