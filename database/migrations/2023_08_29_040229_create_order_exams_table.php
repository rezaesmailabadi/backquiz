<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     * 

     
     */
    public function up()
    {
        Schema::create('order_exams', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('exam_id');
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
        Schema::dropIfExists('order_exams');
    }
}
