<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function create()
    {
        return view('formulirPPDB.contoh');
    }

    public function store(Request $request)
    {
        // Validasi formulir di sini jika diperlukan
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'hobi' => 'required|string',
            'alamat' => 'required|string',
            'agama' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'desa_kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kota_kabupaten' => 'required|string',
            'provinsi' => 'required|string',
            'no_telepon' => 'required|string',
            'nama_sekolah' => 'required|string',
            'alamat_sekolah' => 'required|string',
            'no_telepon_sekolah' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'jurusan1' => 'required|string',
            'jurusan2' => 'required|string',
            'nama_ayah' => 'required|string',
            'tempat_lahir_ayah' => 'required|string',
            'tanggal_lahir_ayah' => 'required|date',
            'pekerjaan_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'tempat_lahir_ibu' => 'required|string',
            'tanggal_lahir_ibu' => 'required|date',
            'pekerjaan_ibu' => 'required|string',
            'agama_ortu' => 'required|string',
            'alamat_ortu' => 'required|string',
            'no_telepon_ortu' => 'required|string',
            'no_telepon_lain_ortu' => 'nullable|string',
        ]);

        // Handle file foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName); // Simpan file ke direktori tertentu
            $validatedData['foto'] = $fileName; 
        }

        Pendaftaran::create($validatedData);

        return redirect()->route('pendaftaran.create')->with('success', 'Pendaftaran berhasil disimpan!');
    }
}
