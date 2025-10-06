<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::table('kelas', function (Blueprint $table) {
        $table->string('jurusan')->nullable()->after('nama_kelas');

        // foreign key ke users.id (role = guru)
        $table->unsignedBigInteger('wali_kelas_id')->nullable()->after('jurusan');
        $table->foreign('wali_kelas_id')->references('id')->on('users')->onDelete('set null');

        $table->integer('jumlah_siswa')->default(0)->after('wali_kelas_id');
        $table->string('ruang')->nullable()->after('jumlah_siswa');
    });
}

public function down(): void
{
    Schema::table('kelas', function (Blueprint $table) {
        $table->dropForeign(['wali_kelas_id']);
        $table->dropColumn(['jurusan', 'wali_kelas_id', 'jumlah_siswa', 'ruang']);
    });
}
};
