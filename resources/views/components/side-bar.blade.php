<div x-data="{ open: true }" class="flex">
    <!-- Sidebar -->
    <aside 
        :class="open ? 'w-64' : 'w-20'" 
        class="bg-gray-900 text-white min-h-screen transition-all duration-300">

        <!-- Logo -->
        <div class="flex items-center justify-between p-4 border-b border-gray-700">
            <span x-show="open" class="text-xl font-bold">MyApp</span>
            <button @click="open = !open" class="text-gray-400 hover:text-white">
                ☰
            </button>
        </div>

        <!-- Menu -->
        <nav class="mt-4">
            <a href="#" class="flex items-center p-3 hover:bg-gray-800 transition">
                <span class="text-lg">🏠</span>
                <span x-show="open" class="ml-3">Dashboard</span>
            </a>

            <a href="#" class="flex items-center p-3 hover:bg-gray-800 transition">
                <span class="text-lg">📊</span>
                <span x-show="open" class="ml-3">Laporan</span>
            </a>

            <a href="#" class="flex items-center p-3 hover:bg-gray-800 transition">
                <span class="text-lg">⚙️</span>
                <span x-show="open" class="ml-3">Pengaturan</span>
            </a>

            <a href="#" class="flex items-center p-3 hover:bg-gray-800 transition">
                <span class="text-lg">🚪</span>
                <span x-show="open" class="ml-3">Logout</span>
            </a>
        </nav>
    </aside>

    <!-- Content -->
    <main class="flex-1 bg-gray-100 min-h-screen p-6">
        {{ $slot }}
    </main>
</div>