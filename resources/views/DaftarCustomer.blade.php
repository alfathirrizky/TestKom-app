<x-app-layout>
    <div class="bg-white shadow-xl p-5 rounded-lg w-full">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="font-semibold">Dashboard</h1>
                <p>Selamat datang di dashboard Anda!</p>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">CetakCustomer</button>
        </div>
        <table class="w-full mt-5">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2">Nama</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">No. Telepon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-2">John Doe</td>
                    <td class="p-2">john.doe@example.com</td>
                    <td class="p-2">081234567890</td>
                </tr>
                <tr>
                    <td class="p-2">Jane Smith</td>
                    <td class="p-2">jane.smith@example.com</td>
                    <td class="p-2">081234567891</td>
                </tr>
                <tr>
                    <td class="p-2">Bob Johnson</td>
                    <td class="p-2">bob.johnson@example.com</td>
                    <td class="p-2">081234567892</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
