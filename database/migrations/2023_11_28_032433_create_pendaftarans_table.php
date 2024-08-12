<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('hobi');
            $table->text('alamat');
            $table->string('agama');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            
            // Informasi Alamat
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->string('kota_kabupaten');
            $table->string('provinsi');

            // Informasi Kontak
            $table->string('no_telepon');

            // INFORMASI ASAL SEKOLAH
            $table->string('nama_sekolah');
            $table->text('alamat_sekolah');
            $table->string('no_telepon_sekolah');

            // Upload Foto
            $table->string('foto');

            // PILIHAN JURUSAN
            $table->string('jurusan1');
            $table->string('jurusan2');

            // INFORMASI ORANG TUA
            $table->string('nama_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('pekerjaan_ayah');

            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('pekerjaan_ibu');

            $table->string('agama_ortu');
            $table->text('alamat_ortu');
            $table->string('no_telepon_ortu');
            $table->string('no_telepon_lain_ortu')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
