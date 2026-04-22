<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Admin Panel</h1>

        <div class="flex items-center gap-4">
            <span>{{ Auth::user()->name }}</span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-red-500 hover:underline">Logout</button>
            </form>
        </div>
    </nav>

    <div class="flex">

        <!-- Sidebar -->
        <aside class="w-64 min-h-screen bg-white shadow p-4">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('admin.index') }}" class="block p-2 rounded hover:bg-gray-200">
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.profile') }}" class="block p-2 rounded hover:bg-gray-200">
                        Profilo Admin
                    </a>
                </li>

                <li>
                    <a href="{{ route('dashboard') }}" class="block p-2 rounded hover:bg-gray-200">
                        Area Utente
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>

    </div>

</body>
</html>