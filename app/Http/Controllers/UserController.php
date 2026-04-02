<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Imports\UsersImport;
use App\Exports\UsersTemplateExport; // ⬅️ TAMBAHAN
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        $kelass = Kelas::whereNot('jurusan', 'UMUM')
            ->orderBy('nama_kelas', 'asc')
            ->get();

        return view('backend.user.index', compact('users', 'kelass'));
    }

    public function create()
    {
        $users = User::latest()->get();
        $kelass = Kelas::whereNot('jurusan', 'UMUM')->orderBy('nama_kelas', 'asc')->get();

        return view('backend.user.create', compact('users', 'kelass'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'kelas_id' => 'required',
            'isAdmin'  => 'required|in:0,1',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'kelas_id' => $request->kelas_id,
            'isAdmin'  => $request->isAdmin,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.index')
            ->with('success', 'User berhasil ditambahkan');
    }

    /** ✅ IMPORT USER DARI EXCEL */
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);

        Excel::import(new UsersImport, $request->file('file'));

        return redirect()->route('users.index')
            ->with('success', 'User berhasil diimport');
    }

    /** ✅ EXPORT TEMPLATE EXCEL */
    public function exportTemplate()
    {
        return Excel::download(new UsersTemplateExport, 'template_user.xlsx');
    }

    public function edit(User $user)
    {
        $kelass = Kelas::whereNot('jurusan', 'UMUM')
            ->orderBy('nama_kelas', 'asc')
            ->get();

        return view('backend.user.edit', compact('user', 'kelass'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'kelas_id' => 'required',
            'isAdmin'  => 'required|in:0,1',
            'password' => 'nullable|min:8|confirmed',
        ]);

        $data = [
            'name'     => $request->name,
            'email'    => $request->email,
            'kelas_id' => $request->kelas_id,
            'isAdmin'  => $request->isAdmin,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('users.index')
            ->with('success', 'User berhasil diupdate');
    }

    public function destroy(User $user)
    {
        if (Auth::id() === $user->id) {
            return back()->with('error', 'Tidak bisa menghapus akun sendiri');
        }

        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User berhasil dihapus');
    }
}