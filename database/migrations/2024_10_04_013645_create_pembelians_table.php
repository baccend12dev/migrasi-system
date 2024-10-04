<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelians', function (Blueprint $table) {
            $table->char('no_po', 11);
            $table->date('tgl_po');
            $table->float('w_kredit');
            $table->date('tglkirim')->nullable();
            $table->char('w_kirim', 35)->nullable();
            $table->text('note')->nullable();
            $table->float('disc1')->nullable();
            $table->float('disc')->nullable();
            $table->char('bg', 1)->nullable();
            $table->char('no_poh', 11)->nullable();
            $table->char('jud', 35)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelians');
    }
}
