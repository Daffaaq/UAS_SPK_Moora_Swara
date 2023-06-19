<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criterias', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->set('tipe', ['benefit', 'cost']);
            $table->float('bobot1')->nullable();
            $table->float('bobot2')->nullable();
            $table->float('bobot3')->nullable();
            $table->float('bobot4')->nullable();
            $table->float('bobot5')->nullable();
            $table->float('bobot6')->nullable();
            $table->float('bobot7')->nullable();
            $table->float('bobot8')->nullable();
            $table->float('bobot9')->nullable();
            $table->float('bobot10')->nullable();
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
        Schema::dropIfExists('criterias');
    }
}
