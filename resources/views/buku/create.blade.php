<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data Buku</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto mt-10 p-4">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
            <div class="bg-indigo-600 p-6">
                <h2 id="judul-page" class="text-2xl font-bold text-white uppercase tracking-wide">Input Buku Baru</h2>
            </div>

            <form action="{{ route('buku.store') }}" method="POST" id="form-buku" class="p-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf

                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-1">Judul Buku</label>
                    <input type="text" id="judul" name="judul" required class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 p-3 border outline-none">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Penulis</label>
                    <input type="text" id="penulis" name="penulis" required class="w-full rounded-lg border-gray-300 p-3 border outline-none">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Penerbit</label>
                    <input type="text" id="penerbit" name="penerbit" required class="w-full rounded-lg border-gray-300 p-3 border outline-none">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Tanggal Terbit</label>
                    <input type="date" id="tanggal" name="tanggal_terbit" required class="w-full rounded-lg border-gray-300 p-3 border outline-none">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Kategori</label>
                    <select id="kategori" name="kategori" class="w-full rounded-lg border-gray-300 p-3 border bg-white">
                        <option value="fiksi">Fiksi</option>
                        <option value="nonfiksi">Non-Fiksi</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">ISBN</label>
                    <input type="text" id="isbn" name="isbn" required class="w-full rounded-lg border-gray-300 p-3 border outline-none">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Harga (Rp)</label>
                    <input type="number" id="harga" name="harga" required class="w-full rounded-lg border-gray-300 p-3 border outline-none">
                </div>

                <div class="md:col-span-2 flex justify-end gap-3 mt-6 border-t pt-6">
                    <a href="{{ route('buku.index') }}" class="bg-gray-100 text-gray-600 px-8 py-3 rounded-lg hover:bg-gray-200 font-bold transition">Batal</a>
                    <button type="submit" class="bg-indigo-600 text-white px-10 py-3 rounded-lg hover:bg-indigo-700 font-bold shadow-lg shadow-indigo-200 transition">Simpan Koleksi</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
