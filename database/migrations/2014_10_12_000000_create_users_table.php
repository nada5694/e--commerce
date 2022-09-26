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
            $table->id(); //NOT NULL becaise it is the PK already!
            $table->string('name'); //NOT NULL
            $table->string('username')->nullable();
            $table->string('phone')->nullable();
            $table->string('bio')->nullable();
            $table->string('email')->unique(); //NOT NULL
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password'); //NOT NULL
            $table->enum('gender', ['male' , 'female' , 'undetermined'])->nullable();
            $table->date('dob')->nullable();
            $table->enum('user_type',['customer' , 'admin' , 'moderator'])->default('customer'); //NOT NULL
            $table->string('address')->nullable();
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
};
