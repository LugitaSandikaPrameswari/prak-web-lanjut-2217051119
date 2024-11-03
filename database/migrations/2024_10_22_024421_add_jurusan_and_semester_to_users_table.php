<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(){
    Schema::table('user', function (Blueprint $table) {
        $table->string('jurusan')->nullable();  // Tambahkan kolom 'jurusan' (string)
        $table->integer('semester')->nullable(); // Tambahkan kolom 'semester' (integer)
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(){
    Schema::table('user', function (Blueprint $table) {
        $table->dropColumn(['jurusan', 'semester']);
    });
    }

};