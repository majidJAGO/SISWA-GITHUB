<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <div class="bg-white rounded-lg shadow-md p-4">
            <h1 class="text-2xl font-bold mb-4">DAFTAR PELANGGARAN</h1>
            <div class="flex justify-between mb-8">
                <div class="w-1/3">
                    <ul>
                        @foreach($daftar_pelanggaran as $index => $item)
                            @if($index % 2 == 1)
                                <li class="mb-3">{{ $item['pelanggaran'] }} - Poin {{ $item['poin'] }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="w-1/3">
                    <ul>
                        @foreach($daftar_pelanggaran as $index => $item)
                            @if($index % 2 == 1)
                                <li class="mb-3">{{ $item['pelanggaran'] }} - Poin {{ $item['poin'] }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <a href="{{ route('aplikasi') }}" class="bg-gray-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Kembali</a>
        </div>
    </div>
</body>
</html>
