@extends('layout.dashboard') {{-- or your preferred layout --}}

@section('main-dashboard')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900 dark:text-white">{{ $space->title }}</h1>
    <p class="text-lg text-gray-700 dark:text-gray-300">{{ $space->description }}</p>
</div>
@endsection
