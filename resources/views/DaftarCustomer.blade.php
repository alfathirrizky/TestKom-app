<x-app-layout>
    <div class="bg-white shadow-xl p-5 rounded-lg w-full">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="font-semibold">Dashboard</h1>
                <p>Selamat datang di dashboard Anda!</p>
            </div>
            <div class="flex gap-3">
                <div x-data="{ openCreate: false, preview: null }">

                    <!-- BUTTON -->
                    <button @click="openCreate = true" class="bg-blue-500 text-white px-4 py-2 rounded">
                        + Tambah Data
                    </button>

                    <!-- MODAL -->
                    <div x-show="openCreate" x-transition.opacity @click.self="openCreate = false"
                        @keydown.escape.window="openCreate = false"
                        class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">

                        <div x-show="openCreate" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                            class="bg-white p-6 rounded-xl w-96 shadow-2xl">
                            <h2 class="text-lg font-semibold mb-4">Tambah Data</h2>

                            <form action="{{ route('tests.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="text" name="test_text" placeholder="Test Text"
                                    class="w-full border p-2 mb-3 rounded">

                                <!-- PREVIEW -->
                                <template x-if="preview">
                                    <img :src="preview" class="mb-3 w-full h-40 object-cover rounded shadow">
                                </template>

                                <input type="file" name="test_gambar"
                                    @change="
                            const file = $event.target.files[0];
                            preview = URL.createObjectURL(file);
                       "
                                    class="w-full border p-2 mb-4 rounded">

                                <div class="flex justify-end space-x-2">
                                    <button type="button" @click="openCreate = false; preview = null"
                                        class="bg-gray-400 text-white px-3 py-1 rounded">
                                        Batal
                                    </button>

                                    <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded">
                                        Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cetak
                    Customer</button>
            </div>
        </div>
        <table class="w-full mt-5">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2">Text</th>
                    <th class="p-2">Gambar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tests as $test)
                    <tr>
                        <td class="p-2">{{ $test->test_text }}</td>
                        <td class="p-2">
                            <img src="{{ asset('storage/' . $test->test_gambar) }}" width="120">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
