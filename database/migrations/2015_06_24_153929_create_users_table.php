<?php
// generated using: ./artisan make:migration --create='users' create_users_table
// file : databases/xxxx_xx_xx_xxxxxx_create_users_table
 
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 
class CreateUsersTable extends Migration {
 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('email');            
            $table->string('password');
            $table->string('remember_token',100)->nullable();
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
        Schema::drop('users');
    }
 
}