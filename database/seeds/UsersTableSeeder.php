<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = \Register\User::firstOrCreate(['email' => 'jill@harvard.edu']);
        $user->name = 'Jill';
        $user->email = 'jill@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->save();

        $user = \Register\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
        $user->name = 'Jamal';
        $user->email = 'jamal@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->save();
        //
        $user = \Register\User::firstOrCreate(['email' => 'jessica@harvard.edu']);
        $user->name = 'Jessica';
        $user->email = 'jessica@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->role ='Organizer';
        $user->save();

    }
}
