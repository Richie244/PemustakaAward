@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="flex-1 p-1">
        <h2 class="text-3xl font-bold font-rubik mb-5">Leaderboard</h2>

        <!-- Background Biru -->
        <div class="relative bg-[rgba(31,76,109,1)] text-white pt-32 px-10 pb-28 rounded-t-[25px] min-h-[350px]">
            <div class="flex justify-center items-end">
                <div class="text-center">
                    <div class="w-36 h-36 bg-gray-300 rounded-full mx-auto border-4 border-[rgba(251,195,77,1)]">
                    </div>
                    <p class="mt-2 font-bold font-rubik text-lg text-[rgba(251,195,77,1)]">User 1</p>
                    <p class="text-md font-russo">1200</p>
                </div>
            </div>


            <!-- Header Points Leaderboard -->
            <div class="absolute bottom-[-2px] left-0 w-full z-10">
                <div class="bg-white p-4 rounded-t-[25px] w-full flex items-center justify-center">
                    <h3 class="text-2xl font-bold font-rubik text-[rgba(31,76,109,1)] text-center">Points Leaderboard</h3>
                </div>
            </div>
        </div>


        <!-- Tabel Leaderboard -->
        <div class="overflow-hidden rounded-b-[25px] w-full bg-white">
            <table class="w-full text-gray-700 border-collapse">
                <thead class="p-0">
                    <tr class="bg-white border-t border-gray-300">
                        <th class="p-3 font-rubik text-left border-t border-gray-300">Place</th>
                        <th class="p-3 font-rubik text-left border-t border-gray-300">Profile</th>
                        <th class="p-3 font-rubik text-left border-t border-gray-300">Nama</th>
                        <th class="p-3 font-rubik text-left border-t border-gray-300">NIM</th>
                        <th class="p-3 font-rubik text-left border-t border-gray-300">Email</th>
                        <th class="p-3 font-rubik text-center border-t border-gray-300">Points</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ([['place' => 1, 'name' => 'User 1', 'nim' => '22410100016', 'email' => '22410100016@dinamika.ac.id', 'points' => 1200], ['place' => 2, 'name' => 'User 2', 'nim' => '22410100016', 'email' => '22410100016@dinamika.ac.id', 'points' => 1000], ['place' => 3, 'name' => 'User 3', 'nim' => '22410100016', 'email' => '22410100016@dinamika.ac.id', 'points' => 800], ['place' => 4, 'name' => 'User 4', 'nim' => '22410100016', 'email' => '22410100016@dinamika.ac.id', 'points' => 650], ['place' => 5, 'name' => 'User 5', 'nim' => '22410100016', 'email' => '22410100016@dinamika.ac.id', 'points' => 500]] as $user)
                        <tr class="{{ $loop->index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }}">
                            <td class="p-3">
                                <span
                                    class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-[rgba(251,195,77,1)] text-[rgba(31,76,109,1)] font-medium border border-gray-300">
                                    {{ $user['place'] }}
                                </span>
                            </td>
                            <td class="p-3">
                                <div class="w-6 h-6 bg-blue-500 rounded-full"></div>
                            </td>
                            <td class="p-3 font-rubik font-bold text-[rgba(31,76,109,1)]">{{ $user['name'] }}</td>
                            <td class="p-3 font-rubik font-bold text-[rgba(31,76,109,1)]">{{ $user['nim'] }}</td>
                            <td class="p-3 font-rubik font-bold text-[rgba(31,76,109,1)]">{{ $user['email'] }}</td>
                            <td class="p-3 text-center font-russo text-[rgba(31,76,109,1)]">
                                <div class="flex items-center justify-center space-x-2">
                                    <img src="{{ asset('assets/images/Poin.png') }}" alt="Poin Icon" class="w-5 h-5">
                                    <span>{{ $user['points'] }}</span>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <!-- My Ranking -->
        <div class="mt-5 bg-white p-1 rounded-t-[25px] shadow-lg w-full flex items-center justify-center h-[55px]">
            <h3 class="text-2xl font-bold font-rubik text-[rgba(31,76,109,1)] text-center">My Ranking</h3>
            <div class="overflow-x-auto">
            </div>
        </div>
        <div class="overflow-hidden rounded-b-[25px]">
            <table class="w-full text-gray-700 border-collapse">
                <tbody>
                    @foreach ([['place' => 1, 'name' => 'User 1', 'nim' => '22410100016', 'email' => '22410100016@dinamika.ac.id', 'points' => 1200]] as $user)
                        <tr class="bg-[rgba(31,76,109,1)]">
                            <td class="p-3">
                                <span
                                    class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-white text-[rgba(31,76,109,1)] font-medium border border-gray-300">
                                    {{ $user['place'] }}
                                </span>
                            </td>
                            <td class="p-3">
                                <div class="w-6 h-6 bg-blue-500 rounded-full"></div>
                            </td>
                            <td class="p-3 text-white font-rubik font-bold">{{ $user['name'] }}</td>
                            <td class="p-3 text-white font-rubik font-bold">{{ $user['nim'] }}</td>
                            <td class="p-3 text-white font-rubik font-bold">{{ $user['email'] }}</td>
                            <td class="p-3 text-right font-russo text-white">{{ $user['points'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
