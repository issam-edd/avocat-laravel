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
        Schema::create('procedures', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("file_id")->unsigned()->nullable();

            $table->timestamp("date_debut")->nullable();
            $table->timestamp("date_fin")->nullable();

            $table->longText("title")->nullable();
            $table->longText("description")->nullable();
            $table->longText("result")->nullable();
            $table->foreign('file_id')
                ->references("id")
                ->on("files")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procedures');
    }
};
