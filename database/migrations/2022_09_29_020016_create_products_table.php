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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('image_name');
            $table->integer('available_quantity')->nullable();
            $table->decimal('price');
            $table->decimal('sale_price')->default(0)->nullable(); // temporary nullable!
            $table->enum('clothing_type',['formal','casual','sports wear'])->nullable();
            $table->enum('is_accessory',['yes','no']); //this column is only for accessories so it has a null option too!
            // $table->enum('is_sale',['yes','no']);
            // $table->boolean('is_accessory')->default(1)->nullable();
            $table->enum('product_category',['men','women','kids']);
            // $table->unsignedBigInteger('cart_id');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('cart_id')->references('id')->on('carts');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->integer('create_user_id')->nullable();
            $table->integer('update_user_id')->nullable();
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
        Schema::dropIfExists('products');
    }
};
