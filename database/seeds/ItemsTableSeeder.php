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
    }
}
