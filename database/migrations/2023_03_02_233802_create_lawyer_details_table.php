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
        Schema::create('lawyer_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("lawyer_id")->unsigned();
            $table->longText("slug");

            $table->longText('first_name_ar')->nullable();
            $table->longText('last_name_ar')->nullable();

            $table->longText("full_name_ar")->nullable();
            $table->longText("full_name_fr")->nullable();

            $table->longText("phone_number")->nullable();

            $table->integer("is_premium")->default("0");
            $table->integer("genre")->default("1");
            $table->longText("bio_ar")->nullable();
            $table->longText("bio_fr")->nullable();
            $table->longText("google_maps_link")->nullable();
            $table->longText("whatsapp_link")->nullable();
            $table->longText("linkedin_link")->nullable();
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
        Schema::dropIfExists('lawyer_details');
    }
};
