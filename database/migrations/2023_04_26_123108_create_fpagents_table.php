<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fpagents', function (Blueprint $table) {
            $table->id('matriule');
            $table->string('nomagent');
            $table->string('prenagent');
            $table->string('nomagentarabe');
            $table->string('prenagentarabe');
            $table->integer('cin');
            $table->integer('datenaiss');
            $table->string('service');
            $table->integer('dateaffic');
            $table->string('fonction');
            $table->string('grade');
            $table->integer('Téléphone');
            $table->string('email');
            $table->string('adragent');
            $table->string('adragentarabe');
            $table->string('sexe');
            $table->string('Etat_Matmoniale');
            $table->string('natagent');
            $table->string('observation');
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
        Schema::dropIfExists('fpagents');
    }
};
