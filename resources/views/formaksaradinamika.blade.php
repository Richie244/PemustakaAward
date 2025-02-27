@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto pt-16">
        <div class="bg-white shadow-md p-6 relative rounded-md">
            <form action="">
                <p>Judul</p>
                <input type="text" class="w-full border border-gray-300 p-2 rounded-md mt-2" id="judul" name="judul" required>
                <p>Pengarang</p>
                <input type="text" class="w-full border border-gray-300 p-2 rounded-md mt-2" id="pengarang" name="pengarang" required>

            </form>
        </div>
    </div>
@endsection