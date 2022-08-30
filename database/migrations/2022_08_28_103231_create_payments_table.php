<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('payments_details');
        Schema::create('payments_details', function (Blueprint $table) {
            $table->id();
//            $table->foreignId('user_id')->constrained('users');
//            $table->string('type') -> nullable();
//            $table->integer('length') -> nullable();
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        schema::table('payments', function (Blueprint $table){
//            $table->dropForeign('payments_user_id_foreign');
//            $table->dropColumn('user_id');
//        });
        Schema::dropIfExists('payments_details');
    }
}
