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
            'image' => 'members/50750.jpg'       
        ];
        DB::table('members')->insert($member);

        $member = [
            'first_name'  => 'Նելլի',
            'last_name'   => 'Մխիթարյան',
            'role'        => 'deputy_director',
            'image'       => 'members/80601.jpg',
            'description' => 'ուս․ աշխատանքների գծով'
        ];
        DB::table('members')->insert($member);

        $member = [
            'first_name' => 'Գայանե',
            'last_name' => 'Նիկողոսյան',
            'role' => 'deputy_director',
            'image' => 'members/81970.jpg',
            'description' => 'մասնագիտացված կրթ․ աջակց․ գծով'
        ];
        DB::table('members')->insert($member);

        $member = [
            'first_name' => 'Սյուզաննա',
            'last_name' => 'Ավանեսյան',
            'role' => 'accountant',
            'image' => '92489.png'
        ];
        DB::table('members')->insert($member);

        // $member = [
        //     'first_name' => 'Անուն',
        //     'last_name' => 'Ազգանուն',
        //     'role' => 'nurse',
        //     'image' => '92489.png'
        // ];
        // DB::table('members')->insert($member);

        $member = [
            'first_name' => 'Հովհաննես',
            'last_name' => 'Հովհաննիսյան',
            'role' => 'soldier',
            'image' => 'members/84975.jpg'
        ];
        DB::table('members')->insert($member);                

        $member = [
            'first_name' => 'Նարինե',
            'last_name' => 'Սերոբյան',
            'role' => 'librarian',
            'image' => 'members/23599.jpg'
        ];
        DB::table('members')->insert($member);
                
    }
}
