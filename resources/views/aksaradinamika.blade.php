@extends('layouts.app')

@section('content')
    {{-- Main Content --}}
    <a href="/formaksaradinamika"> <button class="bg-white h-14 w-14 text-4xl shadow-lg justify-center mb-4">+</button></a>
    <!-- Daftar Item -->
    <div class="space-y-4">
        <!-- Item 1: Sedang Menunggu -->
        <div class="bg-white shadow-md p-4 rounded-md flex justify-between items-center relative">
            <div>
                <p class="font-bold">Panduan Java Dasar Bagian 1</p>
                <p class="text-gray-600 text-sm">10 Feb 2025</p>
            </div>
            <div class="text-gray-500 text-sm flex items-center">
                Sedang Menunggu
                <span class="w-2 h-2 bg-gray-400 rounded-full ml-2"></span>
            </div>
        </div>

        <!-- Item 2: Diterima -->
        <div
            class="bg-white shadow-md p-4 rounded-md flex justify-between items-center relative border-b-4 border-green-500">
            <div>
                <p class="font-bold">Manusia Ulang-Alik: Biografi Umar Kayam</p>
                <p class="text-gray-600 text-sm">15 Jan 2025</p>
            </div>
            <div class="text-green-600 text-sm flex items-center">
                Diterima
                <span class="w-2 h-2 bg-green-500 rounded-full ml-2"></span>
            </div>
        </div>

        <!-- Item 3: Ditolak -->
        <div class="bg-white shadow-md p-4 rounded-md flex justify-between items-center relative border-b-4 border-red-500">
            <div>
                <p class="font-bold">Panduan Belajar Desain Grafis Dengan Adobe Photoshop CS</p>
                <p class="text-gray-600 text-sm">26 Des 2024</p>
            </div>
            <div class="text-red-600 text-sm flex items-center">
                Ditolak
                <span class="w-2 h-2 bg-red-500 rounded-full ml-2"></span>
            </div>
        </div>
    </div>
@endsection