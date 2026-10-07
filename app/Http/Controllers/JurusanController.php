<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    /**
     * Menampilkan semua data jurusan.
     */
    public function index(Request $request)
    {
        // Filter pencarian
        $jurusans = Jurusan::query()
            ->when($request->search, function ($query, $search) {
                $query->where('nama_jurusan', 'like', "%{$search}%")
                      ->orWhere('kode_jurusan', 'like', "%{$search}%");
            })
            ->paginate(10);

        return view('jurusan.index', compact('jurusans'));
    }

    /**
     * Menampilkan form tambah jurusan.
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Menyimpan data jurusan baru.
     */
    public function store(Request $request)
    {
        // Validasi data
        $data = $request->validate([
            'kode_jurusan' => 'required|string|max:20|unique:jurusans,kode_jurusan',
            'nama_jurusan' => 'required|string|max:100',
        ]);

        // Simpan data
        Jurusan::create($data);

        return redirect()
            ->route('jurusan.index')
            ->with('success', 'Data jurusan berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail jurusan.
     */
    public function show(Jurusan $jurusan)
    {
        return view('jurusan.show', compact('jurusan'));
    }

    /**
     * Menampilkan form edit jurusan.
     */
    public function edit(Jurusan $jurusan)
    {
        return view('jurusan.edit', compact('jurusan'));
    }

    /**
     * Mengupdate data jurusan.
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        // Validasi data
        $data = $request->validate([
            'kode_jurusan' => 'required|string|max:20|unique:jurusans,kode_jurusan,' . $jurusan->id,
            'nama_jurusan' => 'required|string|max:100',
        ]);

        // Update data
        $jurusan->update($data);

        return redirect()
            ->route('jurusan.index')
            ->with('success', 'Data jurusan berhasil diperbarui.');
    }

    /**
     * Menghapus data jurusan.
     */
    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();

        return redirect()
            ->route('jurusan.index') ->with('success', 'Data jurusan berhasil dihapus.');
    }
}