<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->text('author_name');
            $table->text('author_position');
            $table->text('author_note');
            $table->integer('duration');
            $table->text('introduction');
            $table->string('title');
            $table->text('paragraphe_one');
            $table->string('image');
            $table->string('caption');
            $table->text('paragraphe_two');
            $table->text('paragraphe_three');
            $table->string('tags'); 
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
        Schema::dropIfExists('articles');
    }
}
