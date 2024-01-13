<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->insert([
            [
                'name'=> 'ベンチプレス',
            ],
            [
               'name'=> 'デッドリフト',
            ],
            [
                'name'=> 'スクワット',
            ],
        ]);
        //
    }
}
