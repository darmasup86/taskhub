@extends('layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('page-sub')
    Selamat datang kembali, {{ auth()->user()->name }}!
@endsection

@section('topbar-actions')
    {{-- Opsional: Tombol di kanan atas, misal buat project baru --}}
    @if(Route::has('projects.create'))
    <a href="{{ route('projects.create') }}"
       class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-2.5 rounded-xl transition-colors">
        + Project Baru
    </a>
    @endif
@endsection

@section('content')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200">
        <div class="p-6 text-gray-900">
            {{ __("You're logged in!") }}
        </div>
    </div>
@endsection
