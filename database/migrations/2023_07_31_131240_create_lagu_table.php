<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lagu', function (Blueprint $table) {
            $table->id();
            $table->string('judul',100);
            $table->string('artis',100);
            $table->string('gender',100);
            $table->string('penulis',100);
            $table->string('tahun',100);
            $table->string('file',100);
            $table->integer('id_album');
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
        Schema::dropIfExists('lagu');
    }
};
