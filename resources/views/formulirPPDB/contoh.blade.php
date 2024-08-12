@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- INFORMASI PRIBADI -->
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" required>
            </div>

            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" class="form-control" name="tempat_lahir" required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" name="tanggal_lahir" required>
            </div>

            <div class="form-group">
                <label for="hobi">Hobi:</label>
                <input type="text" class="form-control" name="hobi" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" name="alamat" required></textarea>
            </div>

            <div class="form-group">
                <label for="agama">Agama:</label>
                <select class="form-control" name="agama" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                </select>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki" required>
                    <label class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" required>
                    <label class="form-check-label">Perempuan</label>
                </div>
            </div>

            <!-- Informasi Alamat -->
            <div class="form-group">
                <label for="desa_kelurahan">Desa/Kelurahan:</label>
                <input type="text" class="form-control" name="desa_kelurahan" required>
            </div>

            <div class="form-group">
                <label for="kecamatan">Kecamatan:</label>
                <input type="text" class="form-control" name="kecamatan" required>
            </div>

            <div class="form-group">
                <label for="kota_kabupaten">Kota/Kabupaten:</label>
                <input type="text" class="form-control" name="kota_kabupaten" required>
            </div>

            <div class="form-group">
                <label for="provinsi">Provinsi:</label>
                <input type="text" class="form-control" name="provinsi" required>
            </div>

            <!-- Informasi Kontak -->
            <div class="form-group">
                <label for="no_telepon">No. Telepon:</label>
                <input type="tel" class="form-control" name="no_telepon" required>
            </div>

            <!-- INFORMASI ASAL SEKOLAH -->
            <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah:</label>
                <input type="text" class="form-control" name="nama_sekolah" required>
            </div>

            <div class="form-group">
                <label for="alamat_sekolah">Alamat Sekolah:</label>
                <textarea class="form-control" name="alamat_sekolah" required></textarea>
            </div>

            <div class="form-group">
                <label for="no_telepon_sekolah">No. Telepon Sekolah:</label>
                <input type="tel" class="form-control" name="no_telepon_sekolah" required>
            </div>

            <!-- Upload Foto -->
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" class="form-control-file" name="foto" accept="image/*" required>
            </div>

            <!-- PILIHAN JURUSAN -->
            <div class="form-group">
                <label for="jurusan1">Jurusan 1:</label>
                <select class="form-control" name="jurusan1" required>
                    <option value="Teknik Pengelasan (TP)">Teknik Pengelasan (TP)</option>
                    <!-- Add other major options if applicable -->
                </select>
            </div>

            <div class="form-group">
                <label for="jurusan2">Jurusan 2:</label>
                <select class="form-control" name="jurusan2" required>
                    <option value="Teknik Pengelasan (TP)">Teknik Pengelasan (TP)</option>
                    <!-- Add other major options if applicable -->
                </select>
            </div>

            <!-- INFORMASI ORANG TUA -->
            <div class="form-group">
                <label for="nama_ayah">Nama Ayah:</label>
                <input type="text" class="form-control" name="nama_ayah" required>
            </div>

            <div class="form-group">
                <label for="tempat_lahir_ayah">Tempat Lahir Ayah:</label>
                <input type="text" class="form-control" name="tempat_lahir_ayah" required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir_ayah">Tanggal Lahir Ayah:</label>
                <input type="date" class="form-control" name="tanggal_lahir_ayah" required>
            </div>

            <div class="form-group">
                <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
                <input type="text" class="form-control" name="pekerjaan_ayah" required>
            </div>

            <div class="form-group">
                <label for="nama_ibu">Nama Ibu:</label>
                <input type="text" class="form-control" name="nama_ibu" required>
            </div>

            <div class="form-group">
                <label for="tempat_lahir_ibu">Tempat Lahir Ibu:</label>
                <input type="text" class="form-control" name="tempat_lahir_ibu" required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir_ibu">Tanggal Lahir Ibu:</label>
                <input type="date" class="form-control" name="tanggal_lahir_ibu" required>
            </div>

            <div class="form-group">
                <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
                <input type="text" class="form-control" name="pekerjaan_ibu" required>
            </div>

            <div class="form-group">
                <label for="agama_ortu">Agama Orang Tua:</label>
                <select class="form-control" name="agama_ortu" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                </select>
            </div>

            <div class="form-group">
                <label for="alamat_ortu">Alamat Orang Tua:</label>
                <textarea class="form-control" name="alamat_ortu" required></textarea>
            </div>

            <div class="form-group">
                <label for="no_telepon_ortu">No. Telepon Orang Tua:</label>
                <input type="tel" class="form-control" name="no_telepon_ortu" required>
            </div>

            <div class="form-group">
                <label for="no_telepon_lain_ortu">No. Telepon Lain Orang Tua:</label>
                <input type="tel" class="form-control" name="no_telepon_lain_ortu">
            </div>

            <!-- Tombol Submit dan Batal -->
            <button type="submit" class="btn btn-primary">Proses</button>
            <button type="reset" class="btn btn-secondary">Batal</button>
        </form>
    </div>
@endsection
