<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Validasi input
        $validatedData = $request->validate([
            'name'            => 'required|string|max:50',
            'email'           => 'required|string|email|unique:users,email,' . $user->id,
            'password'        => 'nullable|string|min:8|confirmed',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Proses upload foto profil jika ada
        if ($request->hasFile('profile_picture')) {
            // Hapus foto profil lama jika ada
            if ($user->profile_picture) {
                Storage::disk('public')->delete($user->profile_picture);
            }
            $file = $request->file('profile_picture');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/profile_pictures', $filename, 'public');
            $validatedData['profile_picture'] = $path;
        }

        // Jika password diisi, lakukan update
        if (!empty($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            // Jika password kosong, hapus key tersebut agar tidak diupdate
            unset($validatedData['password']);
        }

        // Update data user
        $user->update($validatedData);

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
