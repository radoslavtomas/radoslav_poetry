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
			$table->integer('year');
			$table->string('cover');
            $table->text('description');
            $table->text('description_sk');
            $table->text('meta');
            $table->text('meta_sk');
            $table->text('poems')->nullable();
            $table->text('poems_sk');
            $table->string('buy')->nullable();
			$table->string('slide_color');
			$table->string('download')->nullable();
            $table->string('background');

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
