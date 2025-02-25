@extends('layouts.app')

@section('content')
        <!-- Main Content -->
        <main class="flex-1 p-5">
            <h2 class="text-3xl font-bold mb-5">Leaderboard</h2>
            <div class="bg-blue-900 text-white p-8 rounded-lg relative">
                <div class="flex justify-center space-x-10 items-end">
                    @foreach ([['name' => 'User 2', 'points' => 1000], ['name' => 'User 1', 'points' => 1200], ['name' => 'User 3', 'points' => 800]] as $index => $user)
                        <div class="text-center">
                            <div
                                class="w-{{ $index == 1 ? '36' : '28' }} h-{{ $index == 1 ? '36' : '28' }} bg-gray-300 rounded-full mx-auto border-4 border-yellow-500">
                            </div>
                            <p class="mt-2 font-bold text-lg">{{ $user['name'] }}</p>
                            <p class="text-md">{{ $user['points'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Points Leaderboard -->
            <div class="mt-5 bg-white p-6 rounded-t-[25px] shadow-md w-full">
                <h3 class="text-xl font-bold mb-3 text-center">Points Leaderboard</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-gray-700 border-collapse">
                        <thead class="p-0">
                            <tr class="bg-white">
                                <th class="p-3 text-left">Place</th>
                                <th class="p-3 text-left">Profile</th>
                                <th class="p-3 text-left">Nama</th>
                                <th class="p-3 text-left">NIM</th>
                                <th class="p-3 text-left">Email</th>
                                <th class="p-3 text-right">Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ([['place' => 1, 'name' => 'User 1', 'nim' => '22410100016', 'email' => '22410100016@dinamika.ac.id', 'points' => 1200], ['place' => 2, 'name' => 'User 2', 'nim' => '22410100016', 'email' => '22410100016@dinamika.ac.id', 'points' => 1000], ['place' => 3, 'name' => 'User 3', 'nim' => '22410100016', 'email' => '22410100016@dinamika.ac.id', 'points' => 800], ['place' => 4, 'name' => 'User 4', 'nim' => '22410100016', 'email' => '22410100016@dinamika.ac.id', 'points' => 650], ['place' => 5, 'name' => 'User 5', 'nim' => '22410100016', 'email' => '22410100016@dinamika.ac.id', 'points' => 500]] as $user)
                                <tr class="{{ $loop->index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }}">
                                    <td class="p-3">{{ $user['place'] }} 
                                        <div class = "w-6 h-6 bg-yellow-500 rounded-full"></div>
                                    </td>
                                    <td class="p-3">
                                        <div class="w-6 h-6 bg-blue-500 rounded-full"></div>
                                    </td>
                                    <td class="p-3">{{ $user['name'] }}</td>
                                    <td class="p-3">{{ $user['nim'] }}</td>
                                    <td class="p-3">{{ $user['email'] }}</td>
                                    <td class="p-3 text-right font-bold">{{ $user['points'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- My Ranking -->
            <div class="bg-blue-900 text-white p-4 mt-5 rounded-lg">
                <h2 class="text-white font-bold mb-2">My Ranking</h2>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <span
                            class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-white text-blue-900 font-medium">21</span>
                        <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                        <span class="font-medium">You</span>
                    </div>
                    <div class="flex items-center gap-8">
                        <span>22410100016</span>
                        <span>22410100016@dinamika.ac.id</span>
                        <span class="font-bold">415</span>
                    </div>
                </div>
            </div>
        </main>
@endsection
