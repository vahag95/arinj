<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $subject = [
            'name' => 'Մաթեմատիկա',
        ];
        DB::table('subjects')->insert($subject);

        $subject = [
            'name' => 'Հայոց լեզու, Գրականություն',
        ];
        DB::table('subjects')->insert($subject);

        $subject = [
            'name' => 'Բնագիտություն',            
        ];
        DB::table('subjects')->insert($subject);

        $subject = [
            'name' => 'Աշխարհագրություն',            
        ];
        DB::table('subjects')->insert($subject);

        $subject = [
            'name' => 'Ռուսաց լեզու',            
        ];
        DB::table('subjects')->insert($subject);

        $subject = [
            'name' => 'Անգլերեն',            
        ];
        DB::table('subjects')->insert($subject);

        $subject = [
            'name' => 'Աշխատանքի ուսուցում',            
        ];
        DB::table('subjects')->insert($subject);

        $subject = [
            'name' => 'Ֆիզիկա',            
        ];
        DB::table('subjects')->insert($subject);

        $subject = [
            'name' => 'Քիմիա',            
        ];
        DB::table('subjects')->insert($subject);

        $subject = [
            'name' => 'Կենսաբանություն',            
        ];
        DB::table('subjects')->insert($subject);        
                
    }
}
