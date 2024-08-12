<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Peserta Didik Baru</title>
</head>

<body>
    <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- INFORMASI PRIBADI -->
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" required>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required>

        <label for="hobi">Hobi:</label>
        <input type="text" name="hobi" required>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" required></textarea>

        <label for="agama">Agama:</label>
        <select name="agama" required>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
        </select>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan

        <!-- Informasi Alamat -->
        <label for="desa_kelurahan">Desa/Kelurahan:</label>
        <input type="text" name="desa_kelurahan" required>

        <label for="kecamatan">Kecamatan:</label>
        <input type="text" name="kecamatan" required>

        <label for="kota_kabupaten">Kota/Kabupaten:</label>
        <input type="text" name="kota_kabupaten" required>

        <label for="provinsi">Provinsi:</label>
        <input type="text" name="provinsi" required>

        <!-- Informasi Kontak -->
        <label for="no_telepon">No. Telepon:</label>
        <input type="tel" name="no_telepon" required>

        <!-- INFORMASI ASAL SEKOLAH -->
        <label for="nama_sekolah">Nama Sekolah:</label>
        <input type="text" name="nama_sekolah" required>

        <label for="alamat_sekolah">Alamat Sekolah:</label>
        <textarea name="alamat_sekolah" required></textarea>

        <label for="no_telepon_sekolah">No. Telepon Sekolah:</label>
        <input type="tel" name="no_telepon_sekolah" required>

        <!-- Upload Foto -->
        <label for="foto">Foto:</label>
        <input type="file" name="foto" accept="image/*" required>

        <!-- PILIHAN JURUSAN -->
        <label for="jurusan1">Jurusan 1:</label>
        <select name="jurusan1" required>
            <option value="Teknik Pengelasan (TP)">Teknik Pengelasan (TP)</option>
            <!-- Tambahkan pilihan jurusan lain jika ada -->
        </select>

        <label for="jurusan2">Jurusan 2:</label>
        <select name="jurusan2" required>
            <option value="Teknik Pengelasan (TP)">Teknik Pengelasan (TP)</option>
            <!-- Tambahkan pilihan jurusan lain jika ada -->
        </select>

        <!-- INFORMASI ORANG TUA -->
        <label for="nama_ayah">Nama Ayah:</label>
        <input type="text" name="nama_ayah" required>

        <label for="tempat_lahir_ayah">Tempat Lahir Ayah:</label>
        <input type="text" name="tempat_lahir_ayah" required>

        <label for="tanggal_lahir_ayah">Tanggal Lahir Ayah:</label>
        <input type="date" name="tanggal_lahir_ayah" required>

        <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
        <input type="text" name="pekerjaan_ayah" required>

        <label for="nama_ibu">Nama Ibu:</label>
        <input type="text" name="nama_ibu" required>

        <label for="tempat_lahir_ibu">Tempat Lahir Ibu:</label>
        <input type="text" name="tempat_lahir_ibu" required>

        <label for="tanggal_lahir_ibu">Tanggal Lahir Ibu:</label>
        <input type="date" name="tanggal_lahir_ibu" required>

        <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
        <input type="text" name="pekerjaan_ibu" required>

        <label for="agama_ortu">Agama Orang Tua:</label>
        <select name="agama_ortu" required>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
        </select>

        <label for="alamat_ortu">Alamat Orang Tua:</label>
        <textarea name="alamat_ortu" required></textarea>

        <label for="no_telepon_ortu">No. Telepon Orang Tua:</label>
        <input type="tel" name="no_telepon_ortu" required>

        <label for="no_telepon_lain_ortu">No. Telepon Lain Orang Tua:</label>
        <input type="tel" name="no_telepon_lain_ortu">

        <!-- Tombol Submit dan Batal -->
        <button type="submit">Proses</button>
        <button type="reset">Batal</button>
    </form>
</body>

</html>