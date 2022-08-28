<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subscription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id('sub_id');
            $table->foreignId('user_id')->constrained('users');
            $table->string('type') -> nullable();
            $table->integer('length') -> nullable();
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
        schema::table('subscriptions', function (Blueprint $table){
            $table->dropForeign('subscriptions_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
