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
        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("lawyer_id")->unsigned();
            $table->bigInteger("model_file_id")->unsigned();
            $table->longText("name");
            $table->longText("path");
            $table->json("options");
            $table->foreign('lawyer_id')
                    ->references("id")
                    ->on("users")->onDelete("cascade");
            $table->foreign('model_file_id')
                    ->references("id")
                    ->on("model_files")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('models');
    }
};
