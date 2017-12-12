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
            $table->string('take_date');
            $table->string('return_date');
            $table->integer('cost')->nullable();
            $table->integer('isReturned')->default(0);
            $table->integer('isServed')->default(0);
            $table->integer('isConfirm')->default(0);
            $table->integer('car_id');
            $table->string('phone');
            $table->text('address');
            $table->integer('user_id');
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
