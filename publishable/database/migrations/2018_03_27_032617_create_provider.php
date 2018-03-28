<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idprovider');
            $table->integer('address_codeaddress');
            $table->integer('status_codestatus');
            $table->integer('codeprovider');
            $table->string('nameprovider',60)->nullable(false);
            $table->text('descriptionprovider')->nullabll();
            $table->timestamps();

            $table->index('codeprovider');
            $table->foreign('address_codeaddress')->references('codeaddress')->on('address');
            $table->foreign('status_codestatus')->references('codestatus')->on('status');
        
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider');
    }
}
