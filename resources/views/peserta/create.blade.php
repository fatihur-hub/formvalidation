<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/id.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100 dark:bg-zinc-900">
    <div class="min-h-screen bg-blue-500 flex items-center justify-center p-4">
        <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg shadow-lg w-full max-w-3xl">
            <h2 class="text-2xl font-bold mb-4 text-zinc-900 dark:text-zinc-100">Pendaftaran</h2>

            @if (session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: '{{ session('success') }}',
                        });
                    });
                </script>
            @endif

            <form action="{{ route('peserta.store') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-2 text-zinc-800 dark:text-zinc-200">Detail Pribadi</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-zinc-700 dark:text-zinc-300 mb-1">NIK</label>
                            <input type="text" name="nik" value="{{ old('nik') }}" placeholder="Masukkan NIK Anda" class="w-full p-2 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300">
                            @error('nik')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-zinc-700 dark:text-zinc-300 mb-1">Nama Lengkap</label>
                            <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama lengkap Anda" class="w-full p-2 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300">
                            @error('nama')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-zinc-700 dark:text-zinc-300 mb-1">Alamat</label>
                            <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan alamat Anda" class="w-full p-2 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300">
                            @error('alamat')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-zinc-700 dark:text-zinc-300 mb-1">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Masukkan tempat lahir Anda" class="
                            w-full p-2 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300">
                            @error('tempat_lahir')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-zinc-700 dark:text-zinc-300 mb-1">Tanggal Lahir</label>
                            <input type="text" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" placeholder="Pilih tanggal lahir Anda" class="w-full p-2 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300">
                            @error('tanggal_lahir')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-zinc-700 dark:text-zinc-300 mb-1">Nomor WhatsApp</label>
                            <input type="text" name="wa" value="{{ old('wa') }}" placeholder="Masukkan nomor WhatsApp Anda" class="w-full p-2 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300">
                            @error('wa')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-zinc-700 dark:text-zinc-300 mb-1">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email Anda" class="w-full p-2 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300">
                            @error('email')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-zinc-700 dark:text-zinc-300 mb-1">Username</label>
                            <input type="text" name="username" value="{{ old('username') }}" placeholder="Masukkan username Anda" class="w-full p-2 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300">
                            @error('username')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span><br>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-zinc-700 dark:text-zinc-300 mb-1">Password</label>
                            <input type="password" name="password" placeholder="Masukkan password Anda" class="w-full p-2 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300">
                            @error('password')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span><br>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Daftar</button>
            </form>
        </div>
    </div>
    <script>
         document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#tanggal_lahir", {
                locale: "id",
                dateFormat: "d F Y",
            });

            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: '{{ session('error') }}',
                });
            @endif
        });

    </script>
</body>
</html>
