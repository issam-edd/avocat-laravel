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
        Schema::create('event_procedures', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("lawyer_id")->unsigned()->nullable();

            $table->longText("avocacy_division")->nullable();
            $table->longText("file_id")->nullable();
            $table->longText("file_reference")->nullable();

            $table->longText("client_name")->nullable();
            $table->longText("phone_number")->nullable();

            $table->timestamp("date_debut")->nullable();
            $table->timestamp("date_fin")->nullable();

            $table->longText("procedure_id")->nullable();
            $table->longText("title")->nullable();

            $table->longText("slug")->nullable(); // title + time()

            $table->longText("procedure_description")->nullable();
            $table->longText("procedure_result")->nullable();

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
        Schema::dropIfExists('event_procedures');
    }
};
