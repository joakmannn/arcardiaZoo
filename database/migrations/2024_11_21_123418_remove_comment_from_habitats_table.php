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
        Schema::table('habitats', function (Blueprint $table) {
            if (Schema::hasColumn('habitats', 'comment')) {
                $table->dropColumn('comment');
            }
        });
    }
    
    public function down(): void
    {
        Schema::table('habitats', function (Blueprint $table) {
            $table->text('comment')->nullable();
        });
    }
};
