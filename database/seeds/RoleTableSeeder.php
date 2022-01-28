<?php
namespace Database\Seeders;

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "name" => "user",
            "permissions" => json_encode([
                "make_orders" => true,
                "check_status" => true,
                "message_admin" => true,
                "make_payment" =>  true
            ])
        ]);

        Role::create([
            "name" => "admin",
            "permissions" => json_encode([
                "make_orders" => true,
                "message_user" => true,
                "delete_user" => true,
                "create_user" => true,
                "authorize_payment" => true,
                "crud_order" => true,
                "crud_status" => true,
                "crud_transaction" => true
            ])
        ]);
    }
}
