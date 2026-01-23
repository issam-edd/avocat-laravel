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
        Schema::create('landing_pages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("lawyer_id")->unsigned();

            // section 1
            // $table->longText("hero_description")->nullable();
            // $table->string("hero_button_text")->nullable();
            // $table->string("hero_background")->nullable();

            // section 2
            $table->longText("service_one_title")->nullable();
            $table->longText("service_one_description")->nullable();
            $table->longText("service_two_title")->nullable();
            $table->longText("service_two_description")->nullable();
            $table->longText("service_three_title")->nullable();
            $table->longText("service_three_description")->nullable();
            $table->longText("service_four_title")->nullable();
            $table->longText("service_four_description")->nullable();

            $table->longText("service_one_title_ar")->nullable();
            $table->longText("service_one_description_ar")->nullable();
            $table->longText("service_two_title_ar")->nullable();
            $table->longText("service_two_description_ar")->nullable();
            $table->longText("service_three_title_ar")->nullable();
            $table->longText("service_three_description_ar")->nullable();
            $table->longText("service_four_title_ar")->nullable();
            $table->longText("service_four_description_ar")->nullable();

            // section 3
            $table->longText("about_me_text")->nullable();
            $table->string("about_me_image")->nullable();

            $table->longText("about_me_text_ar")->nullable();

            // section 4
            $table->integer("counter_years_experience")->nullable();
            $table->integer("counter_clients")->nullable();
            $table->integer("counter_cases")->nullable();
            $table->integer("counter_partners")->nullable();

            // section 5
            $table->bigInteger("faq_id_one")->unsigned()->nullable();
            $table->bigInteger("faq_id_two")->unsigned()->nullable();
            $table->bigInteger("faq_id_three")->unsigned()->nullable();


            $table->foreign('lawyer_id')
                    ->references("id")
                    ->on("lawyer_details")->onDelete("cascade");

            $table->foreign('faq_id_one')
                    ->references("id")
                    ->on("faqs")->onDelete("cascade");

            $table->foreign('faq_id_two')
                    ->references("id")
                    ->on("faqs")->onDelete("cascade");

            $table->foreign('faq_id_three')
                    ->references("id")
                    ->on("faqs")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages');
    }
};
