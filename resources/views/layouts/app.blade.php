<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pemustaka Award')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white p-5 shadow-md">
        <h1 class="text-lg font-bold">Pemustaka Award</h1>
        <nav class="mt-5">
            <ul>
                <li class="mb-3">
                    <a href="{{ route('leaderboard') }}" class="block p-3 rounded-lg font-semibold 
                        {{ Request::is('leaderboard') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                        Leaderboard
                    </a>
                </li>
                <li class="mb-3">
                    <a href="{{ route('profile') }}" class="block p-3 rounded-lg font-semibold 
                        {{ Request::is('profile') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                        Profile
                    </a>
                </li>
                <li class="mb-3">
                    <a href="{{ route('reward') }}" class="block p-3 rounded-lg font-semibold 
                        {{ Request::is('reward') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                        Klaim Reward
                    </a>
                </li>
                <li class="mb-3">
                    <a href="{{ route('kegiatan') }}" class="block p-3 rounded-lg font-semibold 
                        {{ Request::is('kegiatan') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                        Kegiatan
                    </a>
                </li>
                <li>
                    <a href="{{ route('aksara') }}" class="block p-3 rounded-lg font-semibold 
                        {{ Request::is('aksara') ? 'bg-blue-600 text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                        Aksara Dinamika
                    </a>
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
