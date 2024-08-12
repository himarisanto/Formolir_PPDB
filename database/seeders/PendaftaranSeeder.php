<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pendaftaran;
use Faker\Factory as Faker;

class PendaftaranSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Pendaftaran::create([
                'nama' => $faker->name,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date,
                'hobi' => $faker->word,
                'alamat' => $faker->address,
                'agama' => $faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha']),
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'desa_kelurahan' => $faker->citySuffix,
                'kecamatan' => $faker->cityPrefix,
                'kota_kabupaten' => $faker->city,
                'provinsi' => $faker->state,
                'no_telepon' => $faker->phoneNumber,
                'nama_sekolah' => $faker->company,
                'alamat_sekolah' => $faker->address,
                'no_telepon_sekolah' => $faker->phoneNumber,
                'foto' => 'path/to/foto.jpg', // Sesuaikan dengan path yang benar
                'jurusan1' => $faker->randomElement(['Teknik Pengelasan (TP)', 'Jurusan lainnya']),
                'jurusan2' => $faker->randomElement(['Teknik Pengelasan (TP)', 'Jurusan lainnya']),
                'nama_ayah' => $faker->name('male'),
                'tempat_lahir_ayah' => $faker->city,
                'tanggal_lahir_ayah' => $faker->date,
                'pekerjaan_ayah' => $faker->jobTitle,
                'nama_ibu' => $faker->name('female'),
                'tempat_lahir_ibu' => $faker->city,
                'tanggal_lahir_ibu' => $faker->date,
                'pekerjaan_ibu' => $faker->jobTitle,
                'agama_ortu' => $faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha']),
                'alamat_ortu' => $faker->address,
                'no_telepon_ortu' => $faker->phoneNumber,
                'no_telepon_lain_ortu' => $faker->phoneNumber,
            ]);
        }
    }
}
