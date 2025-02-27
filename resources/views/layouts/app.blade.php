<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Pemustaka Award')</title>
    
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@300..900&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap">
        
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            rubik: ["Rubik", "sans-serif"],
                            russo: ["Russo One", "sans-serif"],
                        }
                    }
                }
            }
        </script>
    </head>
    
    <body class="bg-gray-200">
        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <aside class="w-64 bg-white p-5 shadow-md">
                <h1 class="text-lg font-bold font-rubik">
                    <span class="text-[rgba(31,76,109,1)]">Pemustaka</span> <span class="text-black">Award</span>
                </h1>
                <nav class="mt-5">
                    <ul>
                        <li class="mb-3">
                            <div class="flex items-center p-3 rounded-lg {{ Request::is('/') ? 'bg-[rgba(31,76,109,1)] text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                                <img src="{{ Request::is('/') ? asset('assets/images/Leaderboard.png') : asset('assets/images/BlackLeaderboard.png') }}" alt="Leaderboard Icon" class="w-6 h-6 mr-4">
                                <a href="{{ url('/') }}" class="font-semibold">Leaderboard</a>
                            </div>
                        </li>
                        
                        <li class="mb-3">
                            <div class="flex items-center p-3 rounded-lg {{ Request::is('profile') ? 'bg-[rgba(31,76,109,1)] text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                                <img src="{{ Request::is('profile') ? asset('assets/images/Profile.png') : asset('assets/images/BlackProfile.png') }}" alt="Profile Icon" class="w-6 h-6 mr-4">
                                <a href="{{ url('profile') }}" class="font-semibold">Profile</a>
                            </div>
                        </li>
                        
                        <li class="mb-3">
                            <div class="flex items-center p-3 rounded-lg {{ Request::is('kegiatan') || Request::is('riwayatkegiatan') ? 'bg-[rgba(31,76,109,1)] text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                                <img src="{{ Request::is('kegiatan') || Request::is('riwayatkegiatan') ? asset('assets/images/Kegiatan.png') : asset('assets/images/BlackKegiatan.png') }}" alt="Kegiatan Icon" class="w-6 h-6 mr-4">
                                <a href="{{ url('kegiatan') }}" class="font-semibold">Kegiatan</a>
                            </div>
                        </li>
                        
                        <li>
                            <div class="flex items-center p-3 rounded-lg {{ Request::is('aksara') || Request::is('formaksaradinamika') ? 'bg-[rgba(31,76,109,1)] text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                                <img src="{{ Request::is('aksara') || Request::is('formaksaradinamika') ? asset('assets/images/Aksara.png') : asset('assets/images/BlackAksara.png') }}" alt="Aksara Icon" class="w-6 h-6 mr-4">
                                <a href="{{ url('aksara') }}" class="font-semibold">Aksara Dinamika</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </aside>
            
            <!-- Main Content -->
            <main class="flex-1 p-5">
                @yield('content')
            </main>
        </div>
    </body>
</html>
