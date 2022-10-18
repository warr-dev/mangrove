<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;
use \App\Models\Profile;
use \App\Models\Session;
use \App\Models\Event;

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
                'email'=>'miraplesregine24@gmail.com',
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
        Event::create([
            'title'=>'Event 1',
            'date'=>date('Y-m-d',strtotime('+1 week')),
            'venue'=>'venue 1',
            'description'=> 'description 1',
            'title'=>'Boardwalking',
            'date'=>date('2017-06-08',strtotime('+1 week')),
            'venue'=>'silonay',
            'description'=> 'a promenade made of wooden boards, usually along a beach or shore. any walk made of boards or planks.',
            'title'=>'kayaking',
            'date'=>date('2018-07-11 ',strtotime('+1 week')),
            'venue'=>'silonay',
            'description'=> 'Kayaking is the use of a Kayak for moving across water. Kayaking and canoeing are also known as paddling',
            'title'=>'catering',
            'date'=>date('2018-01-24 ',strtotime('+1 week')),
            'venue'=>'silonay',
            'description'=> 'Catering refers to a service that delivers food to a clients location and may also cook and serve it on site',
            'title'=>'planting mangrove',
            'date'=>date('2019-06-04',strtotime('+1 week')),
            'venue'=>'silonay',
            'description'=> 'Planting new mangroves helps to re-establish the shoreline stabilization and buffering that coastal ',
            ]);
    }
}
