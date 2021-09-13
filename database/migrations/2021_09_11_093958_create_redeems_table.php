<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedeemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redeems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id', 250)->nullable();
            $table->string('pubg_id', 250)->nullable();
            $table->string('redeem_uc', 250)->default(0);
            $table->string('uc', 250)->default(0);
            $table->string('coins', 250)->default(0);
            $table->string('status', 250)->default(0);
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
        Schema::dropIfExists('redeems');
    }
}
