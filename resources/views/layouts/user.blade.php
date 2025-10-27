{{-- <!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Dashboard</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>

    <body class="bg-gray-100">
        <nav class="bg-green-600 text-white p-4 shadow-lg">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-xl font-bold">User Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <span class="text-sm">Selamat datang, {{ auth()->user()->name }}!</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded text-sm transition duration-200">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container mx-auto py-6">
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Sidebar -->
                <aside class="w-full md:w-64 bg-white rounded-lg shadow-md p-4">
                    <nav class="space-y-2">
                        <a href="{{ route('user.dashboard') }}"
                        class="flex items-center space-x-3 text-gray-700 p-3 rounded-lg hover:bg-gray-100 transition duration-200 {{ request()->routeIs('user.dashboard') ? 'bg-green-100 text-green-700' : '' }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V7a2 2 0 012-2h4a2 2 0 012 2v0"></path>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                        <a href="{{ route('user.profile') }}"
                        class="flex items-center space-x-3 text-gray-700 p-3 rounded-lg hover:bg-gray-100 transition duration-200 {{ request()->routeIs('user.profile') ? 'bg-green-100 text-green-700' : '' }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>Profile Saya</span>
                        </a>
                    </nav>
                </aside>

                <!-- Main Content -->
                <main class="flex-1">
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6">
                            {{ session('error') }}
                        </div>
                    @endif

                    @yield('content')
                </main>
            </div>
        </div>
    </body>

</html> --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Takresindo</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: {
                                600: '#2563eb',
                                700: '#1d4ed8',
                            },
                            dark: {
                                800: '#1e293b',
                                900: '#0f172a',
                            }
                        }
                    }
                }
            }
        </script>
        <style>
            .sidebar-collapsed {
                width: 5rem !important;
            }
            .sidebar-collapsed .nav-text {
                display: none;
            }
            .sidebar-collapsed .logo-text {
                display: none;
            }
            .sidebar-collapsed .toggle-icon {
                transform: rotate(180deg);
            }
            .transition-all {
                transition: all 0.3s ease;
            }
            .active-nav-item {
                background-color: rgba(37, 99, 235, 0.1);
                border-left: 4px solid #2563eb;
                color: #2563eb;
            }
        </style>
    </head>
    <body class="bg-gray-50">
        <div class="flex h-screen overflow-hidden">
            <!-- Sidebar -->
            <aside id="sidebar" class="w-64 bg-white shadow-lg transition-all duration-300 ease-in-out z-10">
                <div class="flex items-center justify-between p-4 border-b">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-shield-alt text-primary-600 text-xl"></i>
                        <span class="logo-text font-bold text-lg text-gray-800">AdminPanel</span>
                    </div>
                    <button id="toggle-sidebar" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                        <i class="fas fa-chevron-left toggle-icon"></i>
                    </button>
                </div>

                <div class="p-4 flex items-center space-x-3 border-b">
                    <div class="h-10 w-10 rounded-full bg-primary-600 flex items-center justify-center text-white">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <div class="nav-text">
                        <p class="font-medium text-gray-800">{{ auth()->user()->name }}</p>
                        <p class="text-xs text-gray-500">Editor</p>
                    </div>
                </div>

                <nav class="p-2">
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ route('user.dashboard') }}" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-100 group nav-item">
                                <i class="fas fa-house mr-3 text-gray-500 group-hover:text-primary-600"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.profile') }}" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-100 group nav-item">
                                <i class="fas fa-user-circle mr-3 text-gray-500 group-hover:text-primary-600"></i>
                                <span class="nav-text">Profil Saya</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.main.data') }}" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-100 group nav-item">
                                <i class="fas fa-server mr-3 text-gray-500 group-hover:text-primary-600"></i>
                                <span class="nav-text">Input Data</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Top Navigation -->
                <header class="bg-white shadow-sm z-0">
                    <div class="flex items-center justify-between p-4">
                        <div class="flex items-center">
                            <button id="mobile-toggle-sidebar" class="md:hidden text-gray-500 mr-4 focus:outline-none">
                                <i class="fas fa-bars"></i>
                            </button>
                            <h1 class="text-xl font-semibold text-gray-800">@yield('title', 'Dashboard')</h1>
                        </div>
                        <div class="flex items-center space-x-4">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="flex items-center text-gray-600 hover:text-red-600 focus:outline-none">
                                    <i class="fas fa-sign-out-alt mr-2"></i>
                                    <span class="hidden md:inline">Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </header>

                <!-- Main Content Area -->
                <main class="flex-1 overflow-y-auto p-4 md:p-6 bg-gray-50">

                    <!-- Flash Messages -->
                    @if(session('success'))
                        <div id="flash-success" class="bg-green-50 border-l-4 border-green-500 p-4 mb-6 rounded-lg shadow-sm transition-opacity duration-500">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 text-green-500">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-green-700">{{ session('success') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(session('error'))
                        <div id="flash-error" class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-lg shadow-sm transition-opacity duration-500">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 text-red-500">
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-red-700">{{ session('error') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Page Content -->
                    <div class="bg-white rounded-lg shadow-sm p-4 md:p-6">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>

        <script>
            // Toggle sidebar on desktop
            document.getElementById('toggle-sidebar').addEventListener('click', function() {
                document.getElementById('sidebar').classList.toggle('sidebar-collapsed');
            });

            // Toggle sidebar on mobile
            document.getElementById('mobile-toggle-sidebar').addEventListener('click', function() {
                document.getElementById('sidebar').classList.toggle('hidden');
            });

            // Highlight active nav item
            document.addEventListener('DOMContentLoaded', function() {
                const currentPath = window.location.pathname;
                const navItems = document.querySelectorAll('.nav-item');

                navItems.forEach(item => {
                    if (item.getAttribute('href') === currentPath) {
                        item.classList.add('active-nav-item');
                        item.querySelector('i').classList.remove('text-gray-500');
                        item.querySelector('i').classList.add('text-primary-600');
                    }
                });
            });

            // Responsive behavior
            function handleResize() {
                const sidebar = document.getElementById('sidebar');
                if (window.innerWidth < 768) {
                    sidebar.classList.add('hidden');
                } else {
                    sidebar.classList.remove('hidden');
                    sidebar.classList.remove('sidebar-collapsed');
                }
            }

            window.addEventListener('resize', handleResize);
            handleResize(); // Initial check

            // Tunggu 2 detik, lalu hilangkan pesan
            setTimeout(() => {
                const success = document.getElementById('flash-success');
                const error = document.getElementById('flash-error');

                if (success) {
                    success.style.opacity = '0';
                    setTimeout(() => success.remove(), 200); // hapus dari DOM setelah animasi
                }

                if (error) {
                    error.style.opacity = '0';
                    setTimeout(() => error.remove(), 200);
                }
            }, 2000); // 2000 ms = 2 detik
        </script>
    </body>
</html>
