<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<30; $i++){
            if($i==0){
                $role = 'admin';

            }else{
                $role = 'client';
            }

            DB::table('users')->insert([
                'name' => 'Luis Carlos Gomez',
                'email' =>Str::random(20)."@hotmail.com",
                // 'email' =>"luiskaco@gmail.com",
                'password' => Hash::make('12345678'),
                'dni' => "018729619".$i,
                'line' => false,
                'status' => true,
                'group'=> getDateEvent(),
                'role' =>  $role,
                'agency' => "Orange 360",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        // DB::table('users')->insert([
        //     'name' => 'Desarrolladores',
        //     'email' =>Str::random(25)."@hotmail.com",
        //     // 'email' =>"luiskaco@gmail.com",
        //     'password' => Hash::make('12345678'),
        //     'dni' => "0187296190",
        //     'line' => false,
        //     'status' => true,
        //     'group'=> getDateEvent(),
        //     'role' =>  "admin",
        //     'agency' => "Geeks Corps",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);


    }
}
