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
        Schema::create('one_sections', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("lawyer_id")->unsigned();

            // section 2
            $table->text("sub_title")->nullable();
            $table->text("title")->nullable();
            $table->longText("description")->nullable();
            $table->text("button_text")->nullable();

            $table->text("sub_title_ar")->nullable();
            $table->text("title_ar")->nullable();
            $table->longText("description_ar")->nullable();
            $table->text("button_text_ar")->nullable();

            $table->longText("button_link")->nullable();
            $table->longText("image")->nullable();
            $table->integer("is_published")->default("1");

            $table->foreign('lawyer_id')
                    ->references("id")
                    ->on("lawyer_details")->onDelete("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('one_sections');
    }
};
