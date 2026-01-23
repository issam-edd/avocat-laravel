<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $procedure = "
        DROP PROCEDURE IF EXISTS `count_fees_by_file`;
        CREATE PROCEDURE `count_fees_by_file` (IN f_id int)
        BEGIN
            SELECT count(*) FROM file_fees WHERE file_id = f_id;
        END;";

        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
