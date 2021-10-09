<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {

		$table->id();
		$table->integer('survey_id',30);
		$table->integer('user_id',30);
		$table->text('answer');
		$table->integer('question_id',30);
		$table->datetime('date_created')->useCurrent();

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('answers');
    }
}