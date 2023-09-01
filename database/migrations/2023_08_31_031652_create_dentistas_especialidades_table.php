<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dentistas_especialidades', function (Blueprint $table) {
            $table->integer('especialidade_id')->unsigned();
            $table->integer('dentista_id')->unsigned();
            $table->foreign('especialidade_id')->references('id')->on('especialidades')->onDelete('cascade');
            $table->foreign('dentista_id')->references('id')->on('dentistas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dentistas_especialidades');
    }
};
