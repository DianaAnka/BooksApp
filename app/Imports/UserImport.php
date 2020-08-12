<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Faker;
class UserImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

     public function model(array $row)
    {
        set_time_limit(0);
        $faker=Faker\Factory::create();
        $faker->name;
           return new User([
            'name'=> $faker->name,
            'location'=>$row[1],
            'age'=>$row[2],
             'email'=>$faker->email,
            'password'=>\Hash::make($faker->password),
        ]);
    }
}
