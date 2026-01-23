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
        Schema::create('lawyer_mails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("lawyer_id")->unsigned();
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('email', 191);
            $table->string('phone_number');
            $table->string('body');
            $table->integer("is_read")->default("0");
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
        Schema::dropIfExists('lawyer_mails');
    }
};
