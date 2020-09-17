<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('team_id')->unsigned()->nullable();
            $table->uuid('uuid')->unique();
            $table->string('name');
            $table->string('path')->nullable();
            $table->string('extension')->nullable();
            $table->string('mime_type')->default('application/octet-stream');
            $table->integer('size')->nullable();
            $table->boolean('public')->default(0);
            $table->softDeletes();
            $table->foreign('team_id')->references('id')->on('team');
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
        Schema::dropIfExists('file');
    }
}
