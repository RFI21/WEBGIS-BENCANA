<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bencana;
use App\Models\User;

class bencanaController extends Controller
{
        public function index()
    {
        $bencanas = bencana::paginate(10);
        $admins = User::all();
        return view('admin.bencana', compact('bencanas', 'admins'));
    }

    public function create()
    {
        $admins = User::all();
        return view('admin.tambahbencana', compact('admins'));
    }

public function store(Request $request)
{
    $request->validate([
        'jenis_bencana' => 'required',
        'tanggal' => 'required',
        'lokasi' => 'required',
        'terdampak' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
        'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $namaGambar = null;

    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');

        $namaGambar = time().'_'.$file->getClientOriginalName();

        $file->move(public_path('uploads/bencana'), $namaGambar);
    }

    $koordinat = $request->latitude . ',' . $request->longitude;

    bencana::create([
        'jenis_bencana' => $request->jenis_bencana,
        'tanggal' => $request->tanggal,
        'lokasi' => $request->lokasi,
        'terdampak' => $request->terdampak,
        'long_lat' => $koordinat,
        'gambar' => $namaGambar
    ]);

    return redirect()->route('admin.bencana')
        ->with('success', 'Data bencana berhasil ditambahkan');
}

    public function edit($id)
    {
        $bencana = bencana::findOrFail($id);
        $admins = User::all();
        return view('admin.editbencana', compact('bencana','admins'));
    }



public function update(Request $request, $id)
{
    $bencana = bencana::findOrFail($id);

    $request->validate([
        'jenis_bencana' => 'required',
        'tanggal' => 'required',
        'lokasi' => 'required',
        'terdampak' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    // Gabungkan latitude dan longitude
    $koordinat = $request->latitude . ',' . $request->longitude;

    $data = [
        'jenis_bencana' => $request->jenis_bencana,
        'tanggal' => $request->tanggal,
        'lokasi' => $request->lokasi,
        'terdampak' => $request->terdampak,
        'long_lat' => $koordinat,
    ];

    // Jika ada gambar baru yang diupload
    if ($request->hasFile('gambar')) {

        // Hapus gambar lama
        if ($bencana->gambar &&
            file_exists(public_path('uploads/bencana/' . $bencana->gambar))) {
            unlink(public_path('uploads/bencana/' . $bencana->gambar));
        }

        $file = $request->file('gambar');
        $namaGambar = time() . '_' . $file->getClientOriginalName();

        $file->move(public_path('uploads/bencana'), $namaGambar);

        $data['gambar'] = $namaGambar;
    }

    $bencana->update($data);

    return redirect()->route('admin.bencana')
        ->with('success', 'Bencana berhasil diupdate');
}


    public function destroy($id)
    {
        $bencana = bencana::findOrFail($id);
        $bencana->delete();

        return redirect()->route('admin.bencana')->with('success','Bencana berhasil dihapus');
    }
}
