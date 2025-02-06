@extends('layout.dashboard')

{{-- @section('title', 'Welcome') --}}

@section('main-dashboard')
<div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-black dark:text-white">Welcome, {{ Auth::user()->email }}</h1>
    </div>
    <!-- Konten dashboard lainnya -->
    
</div>
    @endsection
