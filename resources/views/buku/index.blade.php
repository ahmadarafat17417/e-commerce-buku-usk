<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Koleksi Buku</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans text-gray-900">

    <div class="container mx-auto mt-10 p-4">
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 border-b flex justify-between items-center bg-white">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">Daftar Buku</h2>
                    <span id="book-count" class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm font-semibold">0 Buku</span>
                </div>

                <a href="{{ route('buku.create') }}" onclick="localStorage.removeItem('editIndex')"
                    class="bg-indigo-600 text-white px-5 py-2.5 rounded-lg hover:bg-indigo-700 shadow-sm transition-all flex items-center gap-2 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Buku Baru
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-50 uppercase text-xs font-bold text-gray-500 tracking-wider">
                        <tr>
                            <th class="p-4 border-b">Judul & Penulis</th>
                            <th class="p-4 border-b">Penerbit</th>
                            <th class="p-4 border-b">Kategori</th>
                            <th class="p-4 border-b">Harga</th>
                            <th class="p-4 border-b text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="book-list" class="divide-y divide-gray-100">
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
