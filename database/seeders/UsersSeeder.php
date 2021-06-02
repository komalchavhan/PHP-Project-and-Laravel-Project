<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('usertables')->insert
        ([
        'firstname' => 'Admin'
        ]);
        DB::table('usertables')->insert
        ([
        'lastname' => 'admin'
        ]);
        DB::table('usertables')->insert
        ([
        'email' => $email
        ]);
        DB::table('usertables')->insert
        ([
        'password' => 'order manager'
        ]);
       
    }
 }