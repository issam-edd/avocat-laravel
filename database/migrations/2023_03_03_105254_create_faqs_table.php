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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("lawyer_id")->unsigned();
            $table->longText("question_fr");
            $table->longText("question_ar");
            $table->longText("answer_fr");
            $table->longText("answer_ar");
            $table->integer("is_published")->default("1");
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
        Schema::dropIfExists('faqs');
    }
};
