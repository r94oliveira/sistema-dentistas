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
        Schema::create('dentistas', function (Blueprint $table) {
            $table->increments('id')->nullable(false);
            $table->string('name',100)->nullable(false);
            $table->string('email',100)->nullable(false);
            $table->integer('cro')->nullable(false);
            $table->char('cro_uf',2)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dentistas');
    }
};
