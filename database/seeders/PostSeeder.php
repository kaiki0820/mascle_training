<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id'=>1,
                'body'=>'今日はベンチプレスをしました。',
                'category_id'=>1,
            ],
            [
                'user_id'=>1,
                'body'=>'今日はベンチプレスが１００ｋｇ上がりました。',
                'category_id'=>1,
            ],
            [
                'user_id'=>1,
                'body'=>'毎朝ヨーグルトとはちみつを食べています。',
                'category_id'=>1,
            ],
        ]);
        //
    }
}
