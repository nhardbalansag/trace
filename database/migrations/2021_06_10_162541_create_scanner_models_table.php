<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScannerModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scanner_models', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('userqrcode_fkid')->unsigned();
            $table->foreign('userqrcode_fkid')
            ->references('id')
            ->on('q_r_code_models')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->integer('user_fkid')->unsigned();
            $table->foreign('user_fkid')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('qrcodestatus');

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
        Schema::dropIfExists('scanner_models');
    }
}
