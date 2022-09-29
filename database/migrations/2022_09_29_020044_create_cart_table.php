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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_image')->nullable();
            $table->string('is_accessory')->nullable();
            $table->string('clothing_type')->nullable(); //relationship with categories (clothing types of products) table
            $table->enum('product_category',['men','women','kids'])->nullable();
            $table->float('price')->nullable();
            $table->integer('quantity')->nullable();
            // $table->integer('create_user_id');
            // $table->integer('update_user_id')->nullable();
            $table->string('customer_id')->nullable(); //relationship with users (customers ONLY!) table
            $table->integer('update_user_id')->nullable(); //relationship with users (customers ONLY!) table
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
        Schema::dropIfExists('cart');
    }
};
