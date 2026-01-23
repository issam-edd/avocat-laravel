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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("client_id")->unsigned()->nullable();
            $table->longText("avocacy_division")->nullable();
            $table->bigInteger("amount")->nullable();
            $table->longText("file_reference")->nullable();
            $table->longText("parties")->nullable();    // client
            $table->longText("parties_involved")->nullable();
            $table->foreign('client_id')
                ->references("id")
                ->on("clients")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
