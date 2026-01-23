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
        Schema::create('admin_mails', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('email', 191);
            $table->string('phone_number');
            $table->longText('body');
            $table->integer("is_read")->default("0");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_mails');
    }
};
