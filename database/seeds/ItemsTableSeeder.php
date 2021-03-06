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
            $user_id = \Register\User::where('name','=','Jill')->pluck('id');
            DB::table('items')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'school'=> 'Sunshine Dance',
            'name' => 'Dance Medley',
            'type' => 'Dance',
            'participant_count' => 2,
            'audition_link' => 'http://www.example.com',
            'user_id' => $user_id,
            'description' => 'Medley of dances',
            'status' => 'Incomplete',
            'special_notes' => 'Need floor mikes'
        ]);

            DB::table('items')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'school'=> 'Lidman music school',
            'name' => 'String quartets rock!',
            'type' => 'Music',
            'participant_count' => 4,
            'audition_link' => 'http://www.example.com',
            'user_id' => $user_id,
            'description' => '2 violins, cello and a guitar',
            'status' => 'Incomplete',
            'special_notes' => 'Need 4 mikes'
        ]);
            $user_id = \Register\User::where('name','=','Jamal')->pluck('id');
            DB::table('items')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'school' => "Violets violas",
            'name' => 'String quartet',
            'type' => 'Music',
            'participant_count' => 4,
            'audition_link' => 'http://www.example.com',
            'user_id' => $user_id,
            'description' => 'Violins and Cellos',
            'status' => 'Incomplete',
            'special_notes' => 'Need standing mikes'
        ]);

            DB::table('items')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'school' => "Concord Academy",
            'name' => 'Shakespeare',
            'type' => 'Skit',
            'participant_count' => 6,
            'audition_link' => 'http://www.example.com',
            'user_id' => $user_id,
            'description' => 'Spoof on shakespearean characters',
            'status' => 'Incomplete',
            'special_notes' => 'Need 2 tables and 4 chairs'
        ]);
    }
}
