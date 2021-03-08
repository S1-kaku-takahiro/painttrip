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
            $table->string('prefecture');
            $table->string('category');
            $table->string('subcategory');
            $table->string('impression');
            $table->string('congestion');
            $table->integer('expence');
            $table->string('nearest_station')->nullable();
            $table->string('parking')->nullable();
            $table->string('disclosure');
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
