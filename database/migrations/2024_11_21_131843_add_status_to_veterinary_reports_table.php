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
        Schema::table('veterinary_reports', function (Blueprint $table) {
            $table->string('status', 50)->default('healthy'); // Ajouter le champ avec une valeur par défaut
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('veterinary_reports', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};