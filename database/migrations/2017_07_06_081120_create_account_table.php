<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('account')) {
            return;
        }
        Schema::create('account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 200)->comment('用户名');
            $table->string('password', 200)->comment('密码');
            $table->tinyInteger('status')->comment('状态');
            $table->integer('company_id')->comment('所属公司');
            $table->string('auth_key', 200)->comment('Token');
            $table->timestamp('ctime')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('创建时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('account');
    }
}
