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
        // Schema::create('users', function (Blueprint $table) {
        //     // $table->id();
        //     // $table->string('full_name',50);
        //     // $table->string('email')->unique();
        //     // $table->string('address',255);
        //     // $table->string('password');
        //     // $table->tinyInteger('status')->default(1);
        //     // $table->tinyInteger('role')->default(0);
        //     // $table->string('phone');
        //     // $table->rememberToken();
        //     // $table->timestamps();
        // });
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
