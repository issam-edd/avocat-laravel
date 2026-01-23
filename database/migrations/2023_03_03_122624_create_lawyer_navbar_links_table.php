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
        Schema::create('lawyer_navbar_links', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("lawyer_id")->unsigned();
            $table->string("name_fr");
            $table->string("name_ar");
            $table->string("link");
            $table->integer("is_active")->default("0");
            $table->foreign('lawyer_id')
                    ->references("id")
                    ->on("users")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyer_navbar_links');
    }
};
