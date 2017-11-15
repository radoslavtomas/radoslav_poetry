<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_sk');
            $table->string('slug');
            $table->text('description');
            $table->text('description_sk');
            $table->text('meta');
            $table->text('meta_sk');
            $table->text('poems')->nullable();
            $table->text('poems_sk');
            $table->string('download');
            $table->string('buy')->nullable();
            $table->string('cover');
            $table->string('background');
            $table->integer('year');
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
        Schema::dropIfExists('books');
    }
}
