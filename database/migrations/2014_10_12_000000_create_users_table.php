<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userfirstname');
            $table->string('userlastname');
            $table->string('usermiddlename')->nullable();
            $table->date('userbirthday');
            $table->string('usersex');
            $table->string('usercontactnumber');
            $table->string('usercompany');
            $table->string('userbaranggay');
            $table->string('usercity');
            $table->string('userstreet');
            $table->string('userhousenumber');
            $table->string('logintype');
            $table->string('loginid')->nullable();
            $table->string('usertype');
            $table->string('userstatus')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
