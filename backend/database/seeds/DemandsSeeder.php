<?php

use Illuminate\Database\Seeder;

class DemandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('demands')->insert([
        'email' => 'fmrz1996@gmail.com',
        'tag_id' => '1',
      ]);

      DB::table('demands')->insert([
        'email' => 'hugohugo@gmail.com',
        'tag_id' => '6',
      ]);

      DB::table('demands')->insert([
        'email' => 'fmrz1996@gmail.com',
        'tag_id' => '4',
      ]);

      DB::table('demands')->insert([
        'email' => 'fmrz1996@gmail.com',
        'tag_id' => '3',
      ]);

      DB::table('demands')->insert([
        'email' => 'ejemplo123@gmail.com',
        'tag_id' => '1',
      ]);

      DB::table('demands')->insert([
        'email' => 'ejemplo123@gmail.com',
        'tag_id' => '7',
      ]);
    }
}
