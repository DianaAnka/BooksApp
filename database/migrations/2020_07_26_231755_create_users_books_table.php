<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_books', function (Blueprint $table) {


            $table->unsignedBigInteger('user_id')->unsigned();

            $table->unsignedBigInteger('book_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->float('rating',8,2);
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
        Schema::dropIfExists('users_books');
    }
}
