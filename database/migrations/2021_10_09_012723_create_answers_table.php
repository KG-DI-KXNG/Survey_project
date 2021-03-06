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
        $table->foreignId('survey_id')->references('id')->on('survey_set');
		$table->foreignId('user_id');
		$table->text('answer');
		$table->foreignId('question_id');
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