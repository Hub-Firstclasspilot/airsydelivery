<?php


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Role::create([
            "name" => "user",
        ]);

        $admin = Role::create([
            "name" => "admin",
        ]);

        Permission::create([
            "name" => "make orders"
        ])->syncRoles([$admin, $user]);

        Permission::create([
            "name" => "check status"
        ])->syncRoles([$admin, $user]);

        Permission::create([
            "name" => "send message"
        ])->syncRoles([$admin, $user]);

        Permission::create([
            "name" => "make payment"
        ])->syncRoles([$admin, $user]);

        Permission::create([
            "name" => "delete user"
        ])->assignRole($admin);

        Permission::create([
            "name" => "create user"
        ])->assignRole($admin);

        Permission::create([
            "name" => "authorize payment"
        ])->assignRole($admin);

        Permission::create([
            "name" => "edit orders"
        ])->assignRole($admin);

        Permission::create([
            "name" => "edit status"
        ])->assignRole($admin);

        Permission::create([
            "name" => "perform transactions"
        ])->assignRole($admin);
    }
}
