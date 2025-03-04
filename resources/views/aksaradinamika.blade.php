@extends('layouts.app')

@section('content')
    {{-- Main Content --}}
    <a href="/formaksaradinamika"> <button class="bg-white h-14 w-14 text-4xl shadow-lg justify-center mb-4">+</button></a>
    <button data-dialog-target="animated-modal"
        class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
        type="button">
        Open Animation Modal
    </button>
    <div data-dialog-backdrop="animated-modal" data-dialog-backdrop-close="true"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div data-dialog="animated-modal" data-dialog-mount="opacity-100 translate-y-0 scale-100"
            data-dialog-unmount="opacity-0 -translate-y-28 scale-90 pointer-events-none"
            data-dialog-transition="transition-all duration-300"
            class="relative m-4 p-4 w-2/5 min-w-[40%] max-w-[40%] rounded-lg bg-white shadow-sm">
            <div class="flex shrink-0 items-center pb-4 text-xl font-medium text-slate-800">
                Custom Animation Modal
            </div>
            <div class="relative border-t border-slate-200 py-4 leading-normal text-slate-600 font-light">
                The key to more success is to have a lot of pillows. Put it this
                way, it took me twenty five years to get these plants, twenty five
                years of blood sweat and tears, and I&apos;m never giving up,
                I&apos;m just getting started. I&apos;m up to something. Fan luv.
            </div>
            <div class="flex shrink-0 flex-wrap items-center pt-4 justify-end">
                <button data-dialog-close="true"
                    class="rounded-md border border-transparent py-2 px-4 text-center text-sm transition-all text-slate-600 hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    Cancel
                </button>
                <button data-dialog-close="true"
                    class="rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                    type="button">
                    Confirm
                </button>
            </div>
        </div>
    </div>

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
