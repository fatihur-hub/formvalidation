<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white">

    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-full max-w-5xl">

            <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-gray-100">Daftar Peserta</h2>

            {{-- Alert for status message --}}
            @if (session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('status') }}</span>
                </div>
            @endif

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white dark:bg-gray-800 rounded-lg overflow-hidden">
                    <thead class="bg-gray-200 dark:bg-gray-700">
                        <tr>
                            <th class="py-2 px-4 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase">NIK</th>
                            <th class="py-2 px-4 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase">Nama</th>
                            <th class="py-2 px-4 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase">Alamat</th>
                            <th class="py-2 px-4 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase">Tempat Lahir</th>
                            <th class="py-2 px-4 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase">Tanggal Lahir</th>
                            <th class="py-2 px-4 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase">Nomer WhatsApp</th>
                            <th class="py-2 px-4 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase">Email</th>
                            <th class="py-2 px-4 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase">Username</th>
                            <th class="py-2 px-4 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesertas as $peserta)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $peserta->nik }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $peserta->nama }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $peserta->alamat }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $peserta->tempat_lahir }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $peserta->tanggal_lahir }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $peserta->wa }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $peserta->email }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $peserta->username }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">
                                    <a href="{{ route('peserta.edit', $peserta->id) }}" class="text-blue-600 hover:text-blue-900">Edit</a> |
                                    <form action="{{ route('peserta.destroy', $peserta->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>
</html>
