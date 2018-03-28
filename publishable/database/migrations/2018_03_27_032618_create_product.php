<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('idproduct');           
            $table->integer('provider_codeprovider')->nullable(true); 
            $table->integer('codeproduct')->unique();
            $table->string('barcodeproduct')->unique();
            $table->string('codefactoryproduct',50)->unique();
            $table->integer('brand_codebrand');
            $table->integer('category_codecategory');
            $table->string('nameproduct',60);

            $table->string('especificationproduct');                      
            $table->text('descriptionproduct')->nullable(true);
            $table->string('imgproduct')->nullable(true);
            $table->timestamps();
            
            $table->index('codeproduct');

            $table->foreign('category_codecategory')->references('codecategory')->on('category')->onUpdate('cascade');
            $table->foreign('brand_codebrand')->references('codebrand')->on('brand')->onUpdate('cascade');
            $table->foreign('provider_codeprovider')->references('codeprovider')->on('provider')->onUpdate('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
