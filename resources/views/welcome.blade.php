<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="p-5">
    <h1>Daftar Makanan</h1>

    {{-- <ul>
        @foreach ($makanans as $makanan)
            <img src={{ $makanan->gambar }} width="100" />

            <li>{{ $makanan->nama }} - Rp. {{ number_format($makanan->harga) }}</li>
        @endforeach
    </ul> --}}
    <div class="flex gap-5">
        @foreach ($makanans as $makanan)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full h-64" src="{{ $makanan->gambar }}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $makanan->nama }}</div>
                    <p class="text-gray-700 text-base">Rp. {{ number_format($makanan->harga) }}</p>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>
