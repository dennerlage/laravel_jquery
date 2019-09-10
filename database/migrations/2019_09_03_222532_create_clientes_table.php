<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('codcli');
            $table->string('nomcli',50);
            $table->string('cpfcli', 11);
            $table->string('endcli', 200);
            $table->integer('numcli');
            $table->string('baicli', 30);
            $table->string('cidcli', 45);
            $table->string('ufcli', 2);
            $table->string('telcli',11);
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
        Schema::dropIfExists('cliente');
    }
}
