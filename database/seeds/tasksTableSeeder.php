<?php

use Illuminate\Database\Seeder;

class tasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
              'title' => 'test1',
              'contents' => null,
              'status' => '完了',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'test2',
                'contents' => 'testes',
                'status' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
          ]);
    }
}
