<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMastebmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterbm', function (Blueprint $table) {
            $table->char('NO_LPB', 11);
            $table->date('TGL_LPB')->nullable();
            $table->float('JUMLAH')->nullable();
            $table->float('PAJAK')->nullable();
            $table->float('METERAI')->nullable();
            $table->float('TOTAL')->nullable();
            $table->char('NO_BKAS', 8)->nullable();
            $table->date('TGL_BAYAR')->nullable();
            $table->char('NO_FAKPJ', 19)->nullable();
            $table->date('TGL_FAKPJ')->nullable();
            $table->date('TGL_FAKPJ2')->nullable();
            $table->date('JTH_TEMPO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masterbm');
    }
}
