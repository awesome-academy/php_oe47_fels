<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpdateEnumTypeStatusColumnQuizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quies', function (Blueprint $table) {
            DB::statement("ALTER TABLE quizes MODIFY COLUMN status ENUM('active', 'inactive')");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quies', function (Blueprint $table) {
            //
        });
    }
}
