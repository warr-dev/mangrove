<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;
use \App\Models\Profile;
use \App\Models\Session;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        $user=User::create([
            'username'=>'admin',
            'email'=>'admin@test.com',
            'usertype'=>'admin',
            'password' => Hash::make('admin'),
            'status'=>'approved'
        ]);
        Profile::create([
            'user_id'=>$user->id,
            'first_name'=>'admin',
            'last_name'=>'admin',
          ]);
        $user=User::create([
                'username'=>'regine',
                'email'=>'miraplesregine24@.com',
                'usertype'=>'user',
                'password' => Hash::make('regine'),
                'status'=>'approved'
            ]);
            Profile::create([
                'user_id'=>$user->id,
                'first_name'=>'regine',
                'last_name'=>'regine',
        ]);
        Session::create(['name'=>'8:00am-12:00am']);
        Session::create(['name'=>'1:00pm-5:00pm']);
        
    }
}
