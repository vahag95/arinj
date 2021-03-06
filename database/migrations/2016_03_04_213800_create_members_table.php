<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function(Blueprint $table){
            $table->increments('id');
            $table->enum('role', [ 'accountant', 'director', 'deputy_director', 'librarian', 'nurse', 'soldier', 'operator']);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->longText('description');
            $table->string('image');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members');
    }
}
