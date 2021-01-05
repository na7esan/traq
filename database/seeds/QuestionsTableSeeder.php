<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=100;$i++){
            DB::table('questions')->insert([
            'title' => 'test title' . $i,
            'content' => 'test content' . $i,
            'status' => 'test status'  . $i
            ]);
        }
    }
}
