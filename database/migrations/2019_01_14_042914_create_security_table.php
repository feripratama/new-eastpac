<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('security', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->boolean('activityLog');
            $table->boolean('passwordChange');
            $table->boolean('tokenWithDraw');
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
        Schema::dropIfExists('security');
    }
}
