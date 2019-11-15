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
      $tags = [
        ['name' => 'Mejorar las pensiones', 'ministery_id' => '12'],
        ['name' => 'Seguro universal de salud', 'ministery_id' => '14'],
        ['name' => 'Cárcel efectiva para todos', 'ministery_id' => '11'],
        ['name' => 'Reforma del Sename', 'ministery_id' => '11'],
        ['name' => 'Reducción IVA medicamentos', 'ministery_id' => '14'],
        ['name' => 'Desprivatización del agua', 'ministery_id' => '21'],
        ['name' => 'Aumento salario profesores', 'ministery_id' => '10'],
        ['name' => 'Aumentar sueldo mínimo', 'ministery_id' => '12'],
        ['name' => 'Nueva constitución', 'ministery_id' => '1'],
        ['name' => 'Lucha contra narcotráfico', 'ministery_id' => '2'],
        ['name' => 'Renuncia presidente', 'ministery_id' => '1'],
        ['name' => 'Mejorar educación tecnico profesional', 'ministery_id' => '10'],
        ['name' => 'Diversificar la economía', 'ministery_id' => '8'],
        ['name' => 'Acceso universal sala cuna', 'ministery_id' => '10'],
        ['name' => 'Subsidio para vivienda', 'ministery_id' => '15'],
        ['name' => 'Asamblea Constituyente', 'ministery_id' => '1'],
        ['name' => 'Creación farmacias populares', 'ministery_id' => '14'],
        ['name' => 'Menor dieta parlamentaria', 'ministery_id' => '1'],
        ['name' => 'Estatización del litio', 'ministery_id' => '17'],
        ['name' => 'Reducción jornada laboral', 'ministery_id' => '12'],
        ['name' => 'Cambio de gabinete', 'ministery_id' => '1'],
        ['name' => 'Fin toque de queda', 'ministery_id' => '2'],
        ['name' => 'Reforma Fuerzas Armadas', 'ministery_id' => '2'],
        ['name' => 'Reducción IVA libros', 'ministery_id' => '8'],
        ['name' => 'Subcidio precio del agua', 'ministery_id' => '12'],
        ['name' => 'Reducción del Parlamento', 'ministery_id' => '1'],
        ['name' => 'Más autopistas urbanas', 'ministery_id' => '13'],
        ['name' => 'Aumento edad de jubilación', 'ministery_id' => '12'],
        ['name' => 'Cierre de termoelétricas', 'ministery_id' => '13'],
        ['name' => 'Crear líneas de Metro', 'ministery_id' => '18'],
        ['name' => 'Protesis oculares gratuitas', 'ministery_id' => '14'],
        ['name' => 'Acceso a Internet gratuito', 'ministery_id' => '18']
      ];

      DB::table('tags')->insert($tags);
    }
}
