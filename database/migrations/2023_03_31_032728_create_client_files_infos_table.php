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
        Schema::create('client_files_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("client_id")->unsigned()->nullable();

            $table->longText("name_file")->nullable();
            $table->longText("path_file")->nullable();

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
        Schema::dropIfExists('client_files_infos');
    }
};
