<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string('name');
            $table->string('logo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('brand');
    }
}
