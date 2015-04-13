<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('issue_id')->unsigned();
            $table->boolean('published');
            $table->text('title');
            $table->text('slug');
            $table->text('subtitle');
            $table->string('jumbotron_photo');
            $table->text('content');
			$table->timestamps();

            $table->foreign('issue_id')
                  ->references('id')
                  ->on('issues')
                  ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}
