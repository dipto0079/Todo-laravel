<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('todo_id');
            $table->bigInteger('users_id');
            $table->bigInteger('rep_id');
            $table->bigInteger('comment_id');
            $table->text('comment');
            $table->text('comment_rep');
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
        Schema::dropIfExists('todo_comments');
    }
}
