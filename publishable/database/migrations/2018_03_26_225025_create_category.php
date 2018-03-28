<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('idcategory');
            $table->integer('codecategory')->unique();
            $table->string('namecategory',60)->nullable(false);
            $table->text('descriptionCategory')->nullable(true);            
            $table->string('imgcategory')->nullable(true);
            $table->string('keywords')->nullable(true);
            $table->timestamps();

            $table->index('codecategory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
