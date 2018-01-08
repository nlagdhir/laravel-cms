<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('pages', function(Blueprint $table) {
            $table->increments('id');
            $table->string('page_title');
            $table->string('page_slug');
            $table->text('page_content')->nullable();
            $table->text('page_short_content')->nullable();
            $table->string('page_thumbnail')->nullable();
            $table->string('page_status');
            $table->integer('parent_id')->nullable();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }

}
