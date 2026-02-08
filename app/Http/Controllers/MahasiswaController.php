<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Menampilkan semua data mahasiswa
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Menampilkan form tambah mahasiswa
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * MENYIMPAN DATA MAHASISWA
     * VALIDASI NIM:
     * - tidak boleh kosong
     * - harus unik
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim'        => 'required|unique:mahasiswas,nim',
            'nama'       => 'required',
            'kelas'      => 'required',
            'matakuliah' => 'required',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    /**
     * Menampilkan form edit mahasiswa
     */
    public function edit($nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * UPDATE DATA MAHASISWA
     */
    public function update(Request $request, $nim)
    {
        $request->validate([
            'nama'       => 'required',
            'kelas'      => 'required',
            'matakuliah' => 'required',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil diupdate');
    }

    /**
     * MENGHAPUS DATA MAHASISWA
     */
    public function destroy($nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
