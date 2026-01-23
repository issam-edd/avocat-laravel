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
        Schema::create('lawyer_expertises', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("lawyer_id")->unsigned();
            $table->integer("car_accident")->default(1);
            $table->integer("business_law")->default(1);
            $table->integer("civil_litigation")->default(1);
            $table->integer("insurance_defence")->default(1);
            $table->integer("employment_law")->default(1);
            $table->integer("business_litigation")->default(1);
            $table->integer("workers_law")->default(1);
            // $table->integer("family_law")->default(1);
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
        Schema::dropIfExists('lawyer_expertises');
    }
};
