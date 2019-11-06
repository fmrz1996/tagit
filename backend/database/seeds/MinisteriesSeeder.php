<?php

use Illuminate\Database\Seeder;

class MinisteriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ministeries')->insert([
        'name' => 'Gobierno de Chile',
        'leader' => 'Sebastián Piñera',
        'image' => 'spinera.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio del Interior',
        'leader' => 'Gonzalo Blumel',
        'image' => 'gblumel.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Relaciones Exteriores',
        'leader' => 'Teodoro Ribera',
        'image' => 'tribera.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Defensa Nacional',
        'leader' => 'Alberto Espina',
        'image' => 'aespina.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio Secretaría General de Gobierno',
        'leader' => 'Karla Rubilar',
        'image' => 'krubilar.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Hacienda',
        'leader' => 'Ignacio Briones',
        'image' => 'ibriones.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio Secretaría General de la Presidencia',
        'leader' => 'Felipe Ward',
        'image' => 'fward.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Economía, Fomento y Turismo',
        'leader' => 'Lucas Palacios',
        'image' => 'lpalacios.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Desarrollo Social y Familia',
        'leader' => 'Sebastián Sichel',
        'image' => 'ssichel.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Educación',
        'leader' => 'Marcela Cubillos',
        'image' => 'mcubillos.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Justicia y Derechos Humanos',
        'leader' => 'Hernán Larraín',
        'image' => 'hlarrain.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio del Trabajo y Previsión Social',
        'leader' => 'María José Zaldívar',
        'image' => 'mjzaldivar.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Obras Públicas',
        'leader' => 'Alfredo Moreno',
        'image' => 'amoreno.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Salud',
        'leader' => 'Jaime Mañalich',
        'image' => 'jmanalich.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Vivienda y Urbanismo',
        'leader' => 'Cristián Monckeberg',
        'image' => 'cmonckeberg.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Agricultura',
        'leader' => 'Antonio Walker',
        'image' => 'awalker.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Minería',
        'leader' => 'Baldo Prokurica',
        'image' => 'bprokurica.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Transportes y Telecomunicaciones',
        'leader' => 'Gloria Hutt',
        'image' => 'ghutt.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Bienes Nacionales',
        'leader' => 'Julio Isamit',
        'image' => 'jisamit.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Energía',
        'leader' => 'Juan Carlos Jobet',
        'image' => 'jcjobet.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio del Medio Ambiente',
        'leader' => 'Carolina Schmidt',
        'image' => 'cschmidt.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio del Deporte',
        'leader' => 'Cecilia Pérez',
        'image' => 'cperez.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de la Mujer y la Equidad de Género',
        'leader' => 'Isabel Plá',
        'image' => 'ipla.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de las Culturas, las Artes y el Patrimonio',
        'leader' => 'Consuelo Valdés',
        'image' => 'cvaldes.jpg',
      ]);

      DB::table('ministeries')->insert([
        'name' => 'Ministerio de Ciencia, Tecnología, Conocimiento e Innovación',
        'leader' => 'Andrés Couve',
        'image' => 'acouve.jpg',
      ]);
    }
}
