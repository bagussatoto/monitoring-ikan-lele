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
        Schema::create('monitorings', function (Blueprint $table) {
            $table->id();
            $table->boolean('notification')->default(false);
            $table->decimal('temperature', 10, 2);
            $table->decimal('turbidity', 10, 2);
            $table->decimal('ph', 10, 2);
            $table->decimal('jarak', 10, 2);
            $table->string('pompa_masuk');
            $table->string('pompa_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitorings');
    }
};
