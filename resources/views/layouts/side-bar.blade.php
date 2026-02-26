<div x-data="{ open: true }" class="flex">
    <!-- Sidebar -->
    <aside class="transition-all duration-300 shadow-xl p-5 rounded-lg bg-white">
        <!-- Menu -->
        <nav class="mt-4 flex flex-col gap-2">
            <a href="#" class="flex items-center transition rounded-lg">
                <span x-show="open" class="text-blue-500 hover:text-white hover:bg-blue-500 p-2 rounded-lg font-semibold transition-all duration-300">Dashboard</span>
            </a>

            <a href="#" class="flex items-center hover:bg-blue-500 transition rounded-lg">
                <span x-show="open" class="text-blue-500 hover:text-white hover:bg-blue-500 p-2 rounded-lg font-semibold transition-all duration-300">Laporan</span>
            </a>

            <a href="#" class="flex items-center hover:bg-blue-500 transition rounded-lg">
                <span x-show="open" class="text-blue-500 hover:text-white hover:bg-blue-500 p-2 rounded-lg font-semibold transition-all duration-300">Pengaturan</span>
            </a>
        </nav>
    </aside>
</div>