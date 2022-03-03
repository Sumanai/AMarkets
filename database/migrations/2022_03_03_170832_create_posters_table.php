<?php

use Illuminate\Database\Migrations\Migration;
use Umbrellio\Postgres\Schema\Blueprint;
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
        Schema::create('posters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            // $table->addColumn('tsrange', 'dates');
            $table->exclude(['start_date', 'end_date'])->method('gist')->using('daterange(start_date, end_date)', '&&');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posters');
    }
};
