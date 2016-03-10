<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $member = [
            'first_name' => 'Սահակ',
            'last_name' => 'Գրիգորյան',
            'role' => 'director',
            'image' => '92489.png'       
        ];
        DB::table('members')->insert($member);

        $member = [
            'first_name' => 'Նելլի',
            'last_name' => 'Մխիթարյան',
            'role' => 'deputy_director',
            'image' => '92489.png'
        ];
        DB::table('members')->insert($member);

        $member = [
            'first_name' => 'Գայանե',
            'last_name' => 'Նիկողոսյան',
            'role' => 'deputy_director',
            'image' => '92489.png'
        ];
        DB::table('members')->insert($member);

        $member = [
            'first_name' => 'Սյուզաննա',
            'last_name' => 'Ավանեսյան',
            'role' => 'accountant',
            'image' => '92489.png'
        ];
        DB::table('members')->insert($member);

        $member = [
            'first_name' => 'Անուն',
            'last_name' => 'Ազգանուն',
            'role' => 'nurse',
            'image' => '92489.png'
        ];
        DB::table('members')->insert($member);        

        $member = [
            'first_name' => 'Անուն',
            'last_name' => 'Ազգանուն',
            'role' => 'librarian',
            'image' => '92489.png'
        ];
        DB::table('members')->insert($member);
                
    }
}
