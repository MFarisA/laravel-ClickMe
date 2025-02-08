@extends('layout.dashboard')

@section('main-dashboard')
<div class="mt-4 p-6 rounded-lg shadow-md">
    <!-- Profile Header -->
    <div class="mb-8">
        <h1 class="text-black dark:text-white text-4xl font-roboto font-bold">Settings</h1>
        <h2 class="text-gray-600 dark:text-gray-400 text-lg font-roboto">Profile Information</h2>
    </div>

    <!-- Profile Update Form -->
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Profile Picture and Basic Info -->
        <div class="flex items-center space-x-6 mb-8">
            <div>
                <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('image/default-user-preview.png') }}"
                     alt="Profile Picture"
                     class="w-28 h-28 rounded-full border-4 border-gray-200 dark:border-gray-700 bg-gray-500"
                     id="profile-preview" />
            </div>
            <div>
                <div class="flex items-center space-x-4 mt-2">
                    <!-- Input file untuk upload foto profil, tersembunyi -->
                    <input type="file" name="profile_picture" id="profile_picture" class="hidden" accept="image/*" onchange="previewImage(event)">
                    
                    <!-- Tombol untuk trigger input file -->
                    <button type="button" onclick="document.getElementById('profile_picture').click()"
                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                        Change Picture
                    </button>
                    
                    <!-- Tombol untuk menghapus preview (opsional: update di controller untuk hapus foto) -->
                    <button type="button" onclick="deletePicture()"
                        class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">
                        Delete Picture
                    </button>
                </div>
            </div>
        </div>

        <!-- Field Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 font-roboto">Name</label>
            <input type="text" name="name" id="name" value="{{ Auth::user()->name }}"
                   class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-neutral-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-neutral-900 dark:text-white font-roboto"
                   required>
        </div>

        <!-- Field Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
            <input type="email" name="email" id="email" value="{{ Auth::user()->email }}"
                   class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-neutral-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-neutral-900 dark:text-white font-roboto"
                   required>
        </div>

        <!-- Field Password Baru -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">New Password</label>
            <input type="password" name="password" id="password"
                   class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-neutral-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-neutral-900 dark:text-white font-roboto">
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Leave blank to keep the current password.</p>
        </div>

        <!-- Field Konfirmasi Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300 font-roboto">Confirm New Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                   class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-neutral-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-neutral-900 dark:text-white font-roboto">
        </div>

        <!-- Tombol Submit -->
        <div>
            <button type="submit"
                    class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 font-roboto">
                Update Profile
            </button>
        </div>
    </form>

    <!-- Delete Account Section (Opsional) -->
    <div class="mt-10 border-t border-gray-200 dark:border-neutral-700 pt-6">
        <h3 class="text-lg font-medium text-gray-900 dark:text-white font-roboto">Delete Account (not workerd)</h3>
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 font-roboto">
            Once your account is deleted, all of its resources and data will be permanently removed.
        </p>
        <form action="#" method="POST" class="mt-4">
            @csrf
            <button type="submit"
                    class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 font-roboto">
                Delete Account
            </button>
        </form>
    </div>
</div>

<!-- JavaScript untuk Preview dan Delete Picture -->
<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('profile-preview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    function deletePicture() {
        // Menghapus nilai input file
        const fileInput = document.getElementById('profile_picture');
        fileInput.value = '';

        // Mengembalikan preview ke gambar default
        document.getElementById('profile-preview').src = "{{ asset('image/default-user-preview.png') }}";
    }
</script>
@endsection
