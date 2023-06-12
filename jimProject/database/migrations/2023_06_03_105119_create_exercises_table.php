<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->unsignedBigInteger('Type')->nullable();
            $table->foreign('Type')
                ->references('id')
                ->on('types')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->unsignedBigInteger('Part')->nullable();
            $table->foreign('Part')
                ->references('id')
                ->on('parts')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->unsignedBigInteger('Tool')->nullable();
            $table->foreign('Tool')
                ->references('id')
                ->on('tools')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->unsignedBigInteger('Difficulty')->nullable();
            $table->foreign('Difficulty')
                ->references('id')
                ->on('difficulties')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->text("Instruction");
            $table->string("VideoUrl");
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};