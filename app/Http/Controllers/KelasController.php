<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all()->map(fn ($item) => $item->only("_id", "kelas", "siswa"));
        if ($kelas) {
            return $kelas->toArray();
        } else {
            return response()->json(['message' => 'data empty'], 404);
        }
    }

    public function kelas(Request $request)
    {
        $kelas = $request->input('kelas');
        $nama = $request->input('nama');
        $siswaid = $request->input('siswa_id');

        $query = Kelas::query();

        if (!empty($kelas)) {
            $query->where('kelas', $kelas);
        }
        if (!empty($nama)) {
            $query->whereHas('siswa', function ($subquery) use ($nama) {
                $subquery->where('nama', $nama);
            });
        }
        if (!empty($siswaid)) {
            $query->whereHas('siswa', function ($subquery) use ($siswaid) {
                $subquery->where('siswa_id', $siswaid);
            });
        }

        $data = $query->get();

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
