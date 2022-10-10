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
            $table->enum('user_type',['customer' , 'vendor' , 'moderator' , 'admin'])->default('customer'); //NOT NULL
            $table->string('address')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('governorate_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('whatsapp')->unique()->nullable(); // unique key
            $table->string('facebook')->unique()->nullable(); // unique key
            $table->string('instagram')->unique()->nullable(); // unique key
            // $table->unsignedBigInteger('product_id');
            // $table->foreign('product_id')->references('id')->on('products');
            $table->integer('create_user_id')->nullable();
            $table->integer('update_user_id')->nullable();
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

    public function scopeType($query,$arg)
    {
        return $query->where('user_type',$arg);
    }
};
