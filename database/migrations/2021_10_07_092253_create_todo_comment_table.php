<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_comment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('todo_id');
            $table->unsignedBigInteger('users_id');
            $table->text('comment');
            $table->timestamps();

            $table->foreign("todo_id")
                ->references("id")
                ->on('todos')
                ->onDelete('restrict')
                ->onUpdate('restrict');


            $table->foreign("users_id")
                ->references("id")
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todo_comment');
    }
}
