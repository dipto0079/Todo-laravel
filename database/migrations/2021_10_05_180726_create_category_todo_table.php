<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_todo', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('todo_id');
            $table->timestamps();

            $table->unique(['todo_id','category_id']);
            $table->foreign("todo_id")
                ->references("id")
                ->on('todos')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign("category_id")
                ->references("id")
                ->on('categories')
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
        Schema::dropIfExists('category_todo');
    }
}
