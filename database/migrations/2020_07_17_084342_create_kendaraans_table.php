<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nopol');
            $table->string('merk');
            $table->string('tipe');
            $table->string('jenis');
            $table->string('model');
            $table->string('tahun');
            $table->string('jmlCC');
            $table->string('noRangka');
            $table->string('noMesin');
            $table->string('noBpkb');
            $table->String('warnaKb');
            $table->string('warnaTnkb');
            $table->string('photoKb');
            $table->string('photoBpkb');
            $table->string('photoStnk');
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
        Schema::dropIfExists('kendaraans');
    }
}
