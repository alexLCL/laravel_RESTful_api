<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = \Faker\Factory::create('zh_CN');
        $pwd =Hash::make('123456');

        User::create([
            'name'=>'admin',
            'password'=>$pwd,
            'email'=>'aaa@b.com'
        ]);

        for ($i=0;$i<10;$i++){
            User::create([
                'name'=>$faker->name,
                'password'=>$pwd,
                'email'=>$faker->email
            ]);
        }
    }
}
