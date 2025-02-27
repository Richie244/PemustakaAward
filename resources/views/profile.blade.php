@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto pt-16">
        {{-- Kartu Profil & Progress Level --}}
        <div class="bg-white shadow-md p-6 relative">
            <div
                class="absolute left-0 top-0 w-3/5 h-36 bg-[#1F4C6D] rounded-tr-full rounded-br-full transform z-0 drop-shadow-[2px_6px_20px_rgba(0,0,0,0.5)] flex items-center px-6">
                <!-- Profil Lingkaran -->
                <div class="w-20 h-20 bg-gray-400 rounded-full ml-5"></div>

                <!-- Informasi User -->
                <div class="ml-4 flex flex-col justify-center h-20">
                    <h2 class="text-xl font-bold text-white">User 10</h2>
                    <p class="text-white">LEVEL 1</p>
                    <p class="text-2xl font-bold text-yellow-500"><img src="{{ asset('assets/images/poin.png') }}" alt="poin" class="inline-block w-6 h-6"> 815</p>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col items-end ml-auto pr-20">
                    <div class="inline-flex items-end space-x-1">
                        <p class="text-gray-600 text-3xl font-bold">PERINGKAT</p>
                        <p class="text-6xl font-bold text-gray-800">21</p>
                    </div>
                    <a href="/"><button class="bg-[#1F4C6D] text-white px-4 py-2 rounded-md mt-2 mr-14">Leaderboard</button></a>
                </div>
            </div>

            {{-- Progress Level --}}
            <div class="mt-10">
                <div class="flex justify-between text-gray-700 font-bold">
                    <p>LEVEL 0</p>
                    <p>LEVEL 1</p>
                    <p>LEVEL 2</p>
                    <p>LEVEL 3</p>
                </div>
                <div class="flex justify-between mb-3 text-2xl font-bold">
                    <p class="text-yellow-500 "><img src="{{ asset('assets/images/poin.png') }}" alt="poin" class="inline-block w-6 h-6"> 0</p>
                    <p class="text-yellow-500 ml-4"><img src="{{ asset('assets/images/poin.png') }}" alt="poin" class="inline-block w-6 h-6"> 400</p>
                    <p class="text-yellow-500 ml-4"><img src="{{ asset('assets/images/poin.png') }}" alt="poin" class="inline-block w-6 h-6"> 800</p>
                    <p class="text-yellow-500"><img src="{{ asset('assets/images/poin.png') }}" alt="poin" class="inline-block w-6 h-6"> 1200</p>
                </div>
                <div class="relative bg-gray-300 h-7 rounded-full mt-2">
                    <div
                        class="absolute left-1/3 transform -translate-x-1/2 w-6 h-6 bg-yellow-500 rounded-full border-4 border-white top-1/2 -translate-y-1/2">
                    </div>
                    <div class="bg-[#1F4C6D] h-7 w-1/3 rounded-full"></div>
                </div>

                <button class="block bg-[#1F4C6D] text-white px-4 py-2 rounded-md mt-4 ml-72"
                    onclick="openModal()">Klaim</button>
        </div>
    </div>

    {{-- Pencapaian --}}
    <div class="bg-white  shadow-md p-6 mt-6">
        <h3 class="text-lg font-bold mb-4 text-center">PENCAPAIAN</h3>
        <div class="grid grid-cols-4 text-center text-lg font-semibold">
            <div>
                <p class="text-gray-500">Kunjungan</p>
                <p class="text-3xl font-bold text-gray-800">32</p>
            </div>
            <div>
                <p class="text-gray-500">Kegiatan</p>
                <p class="text-3xl font-bold text-gray-800">3</p>

            </div>
            <div>
                <p class="text-gray-500">Peminjaman</p>
                <p class="text-3xl font-bold text-gray-800">0</p>
            </div>
            <div>
                <p class="text-gray-500">Challenge</p>
                <p class="text-3xl font-bold text-gray-800">1</p>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-xl font-bold mb-4">Judul Modal</h2>
            <p class="text-gray-600">Ini adalah isi dari modal.</p>
            <div class="mt-4 flex justify-end">
                <button class="bg-gray-400 text-white px-4 py-2 rounded-md mr-2" onclick="closeModal()">Tutup</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
            </div>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }
    </script>
@endsection
