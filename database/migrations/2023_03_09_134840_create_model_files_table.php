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
        Schema::create('model_files', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("model_category_id")->unsigned();
            $table->bigInteger("lawyer_id")->unsigned()->nullable();
            $table->longText("name");
            $table->longText("file_path")->nullable();
            $table->longText("view_path")->nullable();
            $table->json("options");
            $table->foreign('lawyer_id')
                ->references("id")
                ->on("users")->onDelete("cascade");
            $table->foreign('model_category_id')
                    ->references("id")
                    ->on("model_categories")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_files');
    }
};
