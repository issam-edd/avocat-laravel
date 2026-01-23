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
        Schema::table('lawyer_expertises', function (Blueprint $table) {
            $table->integer("family_law")->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lawyer_expertises', function (Blueprint $table) {
            $table->dropColumn('family_law');
        });
    }
};
