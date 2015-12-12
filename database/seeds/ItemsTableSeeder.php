<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            DB::table('items')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Dance Medley',
            'type' => 'dance',
            'participant_count' => 2,
            'audition_link' => 'http://www.example.com',
            'user_id' => 1001,
            'description' => 'Medley of dances',
            'status' => 'incomplete',
            'special_notes' => 'Need floor mikes'
        ]);

            DB::table('items')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'String quartet',
            'type' => 'music',
            'participant_count' => 4,
            'audition_link' => 'http://www.example.com',
            'user_id' => 1002,
            'description' => 'Violins and Cellos',
            'status' => 'incomplete',
            'special_notes' => 'Need standing mikes'
        ]);
    }
}
