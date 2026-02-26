<div x-data="{ open: true }" class="flex">
    <!-- Sidebar -->
    <aside class="transition-all duration-300 shadow-xl p-5 rounded-lg bg-white">
        <!-- Menu -->
        <nav class="mt-4">
            <a href="#" class="flex items-center p-3 hover:bg-blue-500 transition rounded-lg">
                <span x-show="open" class="text-blue-500 hover:text-white font-semibold">Dashboard</span>
            </a>

            <a href="#" class="flex items-center p-3 hover:bg-blue-500 transition rounded-lg">
                <span x-show="open" class="text-blue-500 hover:text-white font-semibold">Laporan</span>
            </a>

            <a href="#" class="flex items-center p-3 hover:bg-blue-500 transition rounded-lg">
                <span x-show="open" class="text-blue-500 hover:text-white font-semibold">Pengaturan</span>
            </a>
        </nav>
    </aside>
</div>