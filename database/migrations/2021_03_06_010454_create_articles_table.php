<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('spot_name');
            $table->string('image_path')->nullable();
            $table->date('visited_on');
            $table->integer('prefecture');
            $table->integer('category');
            $table->integer('subcategory');
            $table->string('impression');
            $table->integer('congestion');
            $table->integer('expence');
            $table->string('nearest_station')->nullable();
            $table->integer('parking')->nullable();
            $table->integer('disclosure');
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
        Schema::dropIfExists('articles');
    }
}
