<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => 'fazer tarefa A',
            'description' => 'executar tal coisa para conseguir aquele resultado',
            'priority' => 'high',
        ]);
        DB::table('tasks')->insert([
            'title' => 'fazer tarefa B',
            'description' => 'executar algo para talvez alguma novidade apareça',
            'priority' => 'medium',
        ]);
        DB::table('tasks')->insert([
            'title' => 'fazer tarefa C',
            'description' => 'executar outra coisa para conseguir um outro resultado diferente',
            'priority' => 'low',
        ]);
    }
}
