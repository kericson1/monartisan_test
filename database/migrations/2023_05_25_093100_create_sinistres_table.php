<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinistresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinistres', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("assurance");
            $table->string("police");
            $table->string("email")->nullable();
            $table->string("contact1");
            $table->string("contact2")->nullable();
            $table->string("lieu");
            $table->string("nature");
            $table->string("date");
            $table->string("details");
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
        Schema::dropIfExists('sinistres');
    }
}
