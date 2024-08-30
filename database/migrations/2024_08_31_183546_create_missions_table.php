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
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('lib')->nullable();
            $table->longText('consigne')->nullable();
            $table->date('date_signature');
            $table->string('lieu')->nullable();
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('tache')->nullable();
            $table->foreignId('personnel_missions_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missions');
    }
};
