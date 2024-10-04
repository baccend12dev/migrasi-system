<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePpolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppol', function (Blueprint $table) {
            $table->char('NO_PO', 11);
            $table->date('TGL_PO');
            $table->char('NO_SP', 7);
            $table->date('TGL_SP');
            $table->char('NM_BHN', 45);
            $table->char('STN', 3);
            $table->float('PESAN');
            $table->float('SATUAN');
            $table->float('H_UNIT');
            $table->float('SISA');
            $table->char('KODE_P', 3);
            $table->char('BG', 1);
            $table->char('KET', 254);
            $table->char('NO_SPH', 20);
            $table->primary('NO_PO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PPOL');
    }
}
