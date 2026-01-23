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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("lawyer_id")->unsigned();

            $table->string("phone_number_one")->default("06 XXX XXX XX")->nullable();
            $table->string("phone_number_two")->default("06 XXX XXX XX")->nullable();
            $table->string("email_address_one")->default("exemple@gmail.com")->nullable();
            $table->string("email_address_two")->default("exemple@gmail.com")->nullable();
            $table->string("address")->default("xxxxxxxxx")->nullable();

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
        Schema::dropIfExists('footers');
    }
};
