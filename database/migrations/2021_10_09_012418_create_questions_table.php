<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {

		$table->id();
		$table->text('question');
		$table->text('frm_option');
		$table->string('type',50);
		// $table->integer('order_by',11);
		$table->foreignId('survey_id')->references('id')->on('survey_set');
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
        Schema::dropIfExists('questions');
    }
}