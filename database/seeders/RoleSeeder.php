<?php
/**
 *  database/seeders/RoleSeeder.php
 *
 * Date-Time: 18.05.21
 * Time: 13:22
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run(): void
        {

        DB::table('users')->insert([
            'name' => 'test test',
            'email' => 'admin@cryptcon.so',
            'password' => '$2y$10$Wg7PCZKBIpPk4VwLZaXUrOH/6y0hMX4GKoggJONKFtDYHfI1IiT6O',
            'phone'=>'5555'
        ]);

        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin'
        ]);

        DB::table('users_roles')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);

    }
}
