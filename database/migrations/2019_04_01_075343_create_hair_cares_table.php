<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHairCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hair_cares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_of_care');
            $table->string('image');
            $table->string('price');
            $table->string('country');
            $table->string('type_of_hair');
            $table->string('product_type');
            $table->string('slug');
            $table->string('description');
            $table->string('presence_of');
            $table->string('category_id');
            $table->string('is_under_order');
            $table->string('is_top_sales');
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
        Schema::dropIfExists('hair_cares');
    }
}
