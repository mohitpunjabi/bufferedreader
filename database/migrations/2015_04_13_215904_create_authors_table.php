<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('authors', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->text('about');
			$table->timestamps();
		});

        Schema::create('article_author', function(Blueprint $table)
        {
            $table->integer('article_id')->unsigned();
            $table->integer('author_id')->unsigned();
            $table->timestamps();

            $table->foreign('article_id')
                ->references('id')
                ->on('articles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('author_id')
                ->references('id')
                ->on('authors')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('article_author');
		Schema::drop('authors');
	}

}
