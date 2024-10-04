<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerlpbbmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PERLPBBM', function (Blueprint $table) {
            $table->char('NO_LPB', 11);
            $table->date('TGL_LPB')->nullable();
            $table->char('NO_LPB2', 11)->nullable();
            $table->date('TGL_LPB2')->nullable();
            $table->char('NM_BHN', 45)->nullable();
            $table->char('STN', 3)->nullable();
            $table->float('UNITB')->nullable();
            $table->float('HSATUAN')->nullable();
            $table->float('TOTAL')->nullable();
            $table->char('KP', 13)->nullable();
            $table->char('NO_PO', 11)->nullable();
            $table->date('TGL_PO')->nullable();
            $table->char('KET_VAL', 45)->nullable();
            $table->char('IMP', 1)->nullable();
            $table->char('KET', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PERLPBBM');
    }
}
