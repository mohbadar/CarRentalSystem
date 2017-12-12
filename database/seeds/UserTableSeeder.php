<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user =new User;
        $user->firstname ="admin";
        $user->lastname = "admin";
        $user->email = "admin@email.com";
        $user->password = bcrypt('123456');
        $user->isActive =1;
        $user->role = "admin";
        $user->save();


        $user =new User;
        $user->firstname ="customer";
        $user->lastname = "sys";
        $user->email = "customer@gmail.com";
        $user->password = bcrypt('123456');
        $user->isActive =1;
        $user->role = "customer";
        $user->save();
    }
}
