<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>{{ $artikel->title }}</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 text-blue-950">

  <div class="bg-gradient-to-r from-blue-200 to-blue-300 to bg-blue-500 text-white sticky top-0 z-50 shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center text-blue-950">
      <p class="text-2xl sm:text-3xl font-bold">Artikelia</p>
      <a href="{{ route('user.dashboard') }}" class="hover:underline font-semibold mr-15">Kembali</a>
    </div>
  </div>

  <div class="max-w-3xl mx-auto p-6 bg-white rounded-xl shadow mt-8 mb-10">
    <div>
      <img src="{{ asset('storage/' . $artikel->thumbnail) }}" alt="{{ $artikel->title }}" class="rounded-md mb-4 w-full h-64 object-cover" />
    </div>

    <div class="text-sm text-gray-500 mb-2">
      {{ $artikel->category }} by {{ $artikel->author }} • 
      {{ \Carbon\Carbon::parse($artikel->published_at)->format('d F Y') }}
    </div>

    <div>
      <h1 class="text-3xl font-bold mb-4">{{ $artikel->title }}</h1>
    </div>

    <div class="text-gray-700 leading-relaxed prose max-w-none">
      {!! $artikel->content !!}
    </div>
  </div>

</body>
</html>
