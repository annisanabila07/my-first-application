<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard Web Desa')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <div class="w-64 bg-slate-800 text-white flex flex-col">
            <div class="px-6 py-4 text-xl font-bold border-b border-slate-700">
                Admin Desa Sukamaju
            </div>
            <nav class="flex-1 px-4 py-4 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2.5 rounded hover:bg-slate-700 font-medium">Dashboard</a>
                <a href="{{ route('berita.index') }}" class="block px-4 py-2.5 rounded hover:bg-slate-700 font-medium">Kelola Berita</a>
            </nav>
            <div class="p-4 border-t border-slate-700">
                <a href="/" target="_blank" class="block text-center text-sm bg-blue-600 py-2 rounded hover:bg-blue-700">Lihat Website Utama</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-y-auto">
            <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold text-gray-800">@yield('page_title', 'Dashboard')</h1>
                <span class="text-sm text-gray-600">Halo, Admin Desa</span>
            </header>
            <main class="p-6">
                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>