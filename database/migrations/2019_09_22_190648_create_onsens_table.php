<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onsens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('map',1000);
            $table->integer('picint');
            $table->string('prefecture',10);
            $table->integer('prefectureint');
            $table->string('adress',1000);
            $table->string('eat',10);
            $table->string('sauna',10);
            $table->string('towel',10);
            $table->string('towel_text',50);
            $table->string('hot_stone',10);
            $table->string('open_bath',10);
            $table->timestamp('time_opne');
            $table->timestamp('time_close');
            $table->timestamp('w_time_opne');
            $table->timestamp('w_time_close');
            $table->timestamp('h_time_opne');
            $table->timestamp('h_time_close');
            $table->string('w_a_fee',10);
            $table->string('w_c_fee',10);
            $table->string('h_a_fee',10);
            $table->string('h_c_fee',10);
            $table->string('close_text',50);
            $table->string('close',10);
            $table->string('jaf_url',1000);
            $table->string('nifty_url',1000);
            $table->string('onsen_url',1000);
            $table->string('blog_url',1000);
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
        Schema::dropIfExists('onsens');
    }
}
