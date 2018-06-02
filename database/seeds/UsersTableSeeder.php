<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	[
        		'name' => 'Hector',
        		'last_name' => 'Chumpitaz',
        		'email' => 'hectorwatanabe.hw@gmail.com',
        		'user' => 'valafar',
        		'password' => \Hash::make('123456'),
        		'type' => 'admin',
        		'active' => 1,
        		'address' => 'Urb. Los Pilares Mz 01 Lote 47 Callao',
        		'created_at' => new DateTime,
        		'updated_at' => new DateTime
        	],
        	[
        		'name' => 'Maria',
        		'last_name' => 'Segovia',
        		'email' => 'mariafernanda.mf@gmail.com',
        		'user' => 'mafer',
        		'password' => \Hash::make('123456'),
        		'type' => 'user',
        		'active' => 1,
        		'address' => 'Urb. Los Pilares Mz 02 Lote 47 Callao',
        		'created_at' => new DateTime,
        		'updated_at' => new DateTime
        	]
        );

        User::insert($data);
    }
}
