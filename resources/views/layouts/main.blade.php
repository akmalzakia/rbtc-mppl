<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>
  

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="bg-gray-200">
  <x-partial.navbar />

  {{ $slot }}

  <x-partial.footer />

  <script src="https://unpkg.com/feather-icons"></script>
  <script src="{{ asset('js/pdf.js') }}"></script>

  <script>
    feather.replace();
  </script>

</body>

</html>