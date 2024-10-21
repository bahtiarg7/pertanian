<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = ['admin','kadin','sekdin','bagian','bidang','uptd'];
        
        foreach ($role as $name) {
            Role::create(['name' => $name]);
        }

        $type = Type::all();
        
        foreach ($type as $key => $value) {
            $email = $value["code"].'@distan.com';
            if ($value["category_id"] == 2) {
                $role = 'admin';
            }elseif ($value["category_id"] == 3) {
                $role = 'kadin';
            }elseif ($value["category_id"] == 4) {
                $role = 'sekdin';
            }elseif ($value["category_id"] == 5) {
                $role = 'bagian';
            }elseif ($value["category_id"] == 6) {
                $role = 'bidang';
            }elseif ($value["category_id"] == 7) {
                $role = 'uptd';
            }
            $user = User::create([
                'name' => $value["name"],
                'email' => $email,
                'password' => bcrypt($email),
                'role' => $role,
            ]);
            $user->assignRole($role);
        }
    }
}
