<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->increments('idinventory');
            $table->integer('product_codeproduct');
            $table->integer('entryamount');
            $table->decimal('entryunitaryprice',8,2);
            $table->decimal('totalentryprice',8,2);
            $table->integer('outamount');
            $table->decimal('outunitaryprice',8,2);
            $table->decimal('totaloutprice',8,2);            
            $table->date('data');
            $table->timestamps();

            $table->foreign('product_codeproduct')->references('codeproduct')->on('product')->onUpdate('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory');
    }
}
