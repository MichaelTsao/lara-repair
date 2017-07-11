<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('worker_id')->nullable();
            $table->integer('product_id');
            $table->integer('service_id');
            $table->decimal('price');
            $table->tinyInteger('rate')->nullable();
            $table->tinyInteger('status');
            $table->timestamp('accepted_at')->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('begin_service_at')->nullable();
            $table->timestamp('finish_at')->nullable();
            $table->timestamp('pay_at')->nullable();
            $table->timestamp('comment_at')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
