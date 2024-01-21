<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $nama = $request->input('nama');
        $query = Siswa::query();

        if (!empty($nama)) {
            $query->where('nama', $nama);
        }
        $data = $query->get();

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */

}
