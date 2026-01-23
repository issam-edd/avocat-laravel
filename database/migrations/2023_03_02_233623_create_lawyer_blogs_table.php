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
        Schema::create('lawyer_blogs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("lawyer_id")->unsigned();
            $table->string("title")->nullable();
            $table->longText("body")->nullable();

            $table->string("title_ar")->nullable();
            $table->longText("body_ar")->nullable();

            $table->string("image_link");
            $table->integer("is_published")->default("1");
            $table->integer("is_approved")->default("1");
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
        Schema::dropIfExists('lawyer_blogs');
    }
};
