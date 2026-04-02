<?php

namespace App\Http\Controllers;

use App\Models\HasilUjian;
use Illuminate\Support\Facades\Auth;

class HasilUjianController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;

        $histori = HasilUjian::with('quiz')
            ->where('user_id', $user)
            ->latest()
            ->get();

        return view('frontend.histori_pengerjaan', compact('histori'));
    }
}
