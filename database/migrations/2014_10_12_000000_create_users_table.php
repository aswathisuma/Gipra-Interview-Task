<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {           
            $table->id();
            $table->integer('type')->comment('1:admin;2:management staff;3:developers');
            $table->string('name');
            $table->string('email')->unique();
            $table->date('dob')->nullable();
            $table->longText('address')->nullable();
            $table->string('photo')->nullable();
            $table->string('gender')->nullable();
            $table->string('mobile_prefix');
            $table->string('mobile');
            $table->string('password');
            $table->tinyInteger('status')->default('1')->comment('1:active; 0:inactivate');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
};
