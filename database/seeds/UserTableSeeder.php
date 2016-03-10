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
        if (null == $user = User::where('email','super@admin.com')->first()) {
            $user = [
                'first_name' => 'Super',
                'last_name' => 'Admin',                
                'email' => 'super@admin.com',                
                'password' => bcrypt('admin'),
            ];
            DB::table('users')->insert($user);
        }
    }
}
