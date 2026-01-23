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
        Schema::table('event_procedures', function (Blueprint $table) {
            //
            $table->boolean("exist")->default(0)->after('color');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('event_procedures', function (Blueprint $table) {
            //
            $table->dropColumn("exist");
        });
    }
};
