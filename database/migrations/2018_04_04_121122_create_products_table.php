<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateproductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en');
            $table->string('name_ar');
            $table->text('image');
            $table->text('logo');
            $table->string('desc_en');
            $table->string('desc_ar');
            $table->text('advantages_en');
            $table->text('advantages_ar');
            $table->string('address');
            $table->string('latitude');
            $table->string('longitude');
            $table->text('conditions_en');
            $table->text('conditions_ar');
            $table->string('category_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
