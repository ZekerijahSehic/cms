<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $user = new User();
        $user->name = 'Jon Doe';
        $user->email = 'jon@mail.com';
        $user->password = bcrypt('jonko');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());

        $admin = new User();
        $admin->name = "Jane Doe";
        $admin->email = "jana@mail.com";
        $admin->password = bcrypt('janka');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
