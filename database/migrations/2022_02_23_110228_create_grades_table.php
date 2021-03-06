<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_name');
            $table->string('test_name');
            $table->decimal('lowest_passing_grade')
                ->comment('Lowest grade to pass so average can be applied')
                ->default(5.5);
            $table->decimal('best_grade')
                ->comment('Date that the grade was larger than or equal to the lowest passing grade')
                ->nullable();
            $table->date('passed_at')->nullable();
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
        Schema::dropIfExists('grades');
    }
}
