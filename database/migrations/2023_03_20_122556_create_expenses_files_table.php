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
        Schema::create('expenses_files', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("file_id")->unsigned()->nullable();
            $table->bigInteger("expense")->nullable();
            $table->longText("description")->nullable();
            $table->date("date")->nullable();
            $table->text("type")->nullable();
            $table->bigInteger("amount")->nullable();
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
        Schema::dropIfExists('expenses_files');
    }
};
