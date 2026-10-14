<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Menampilkan data user
    public function index()
    {
        $users = User::latest()->get();

        return view('admin.user.index', compact('users'));
    }

    // Menampilkan form tambah user
    public function create()
    {
        return view('admin.user.create');
    }

    // Menyimpan user baru
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:6',
            'role' => 'required|string|max:50',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()
            ->route('user.index')
            ->with('success', 'Data user berhasil ditambahkan.');
    }

    // Menampilkan detail user
    public function show(string $id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.show', compact('user'));
    }

    // Menampilkan form edit user
    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }

    // Memperbarui data user
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'username' => [
                'required',
                'string',
                'max:255',
                Rule::unique('users', 'username')->ignore(
                    $user->getKey(),
                    $user->getKeyName()
                ),
            ],
            'password' => 'nullable|string|min:6',
            'role' => 'required|string|max:50',
        ]);

        $data = [
            'username' => $request->username,
            'role' => $request->role,
        ];

        // Password hanya diubah jika diisi
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()
            ->route('user.index')
            ->with('success', 'Data user berhasil diperbarui.');
    }

    // Menghapus user
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()
            ->route('user.index')
            ->with('success', 'Data user berhasil dihapus.');
    }
}