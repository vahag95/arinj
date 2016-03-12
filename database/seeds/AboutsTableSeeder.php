<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $about = [
            'key' => 'elementary_school_pupils_count',
            'value' => '0',            
        ];
        DB::table('abouts')->insert($about);

        $about = [
            'key' => 'middle_school_pupils_count',
            'value' => '0',            
        ];
        DB::table('abouts')->insert($about);

        $about = [
            'key' => 'high_school_pupils_count',
            'value' => '0',            
        ];
        DB::table('abouts')->insert($about);                
    }
}
