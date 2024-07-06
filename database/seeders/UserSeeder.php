<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //seeder use kora hoi jokon datavase freash korarr por abar nija thaka jano data gulo upoad kora jai
        // $user=new User();
        // $user->name="shovo";
        // $user->email="shovom677@gmail.com";
        // $user->password="password";
        // $user->save();


        // anak gulo face data insert korarr jonno ata use kora hoi aytar somporko holo factory ar sata
        User::factory(10)->create();




    }
}
