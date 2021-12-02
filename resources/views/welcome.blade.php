<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="bg-gray-200">
  <x-partial.navbar />

  <section>
    <div class="grid grid-cols-1 lg:grid-cols-2 lg:h-2/4">
      <div class="relative flex items-center bg-blue-900 lg:pl-4">

        <div class="relative px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
          <h2 class="text-2xl font-bold text-white sm:text-3xl">Welcome to Ruang Baca TC</h2>

          <p class="mt-4 text-white">
            Sistem Informasi Ruang Baca TC merupakan sistem informasi berbasis online milik RBTC agar memudahkan dosen
            dan mahasiswa untuk mengakses sumber belajar digital yang disediakan oleh Teknik Informatika ITS
          </p>

          <form action="" class="mt-6 flex space-x-3">
            <div class="w-2/3">
              <input type="text" id="search" placeholder="Search Book" class="rounded-lg w-full h-10">
            </div>
            <button type="submit"
              class="text-blue-900 bg-white rounded-md px-2 inline-flex justify-center items-center border border-white hover:bg-blue-900 hover:text-white transition duration-300"><i
                data-feather="search"></i></button>
          </form>
        </div>

        <span class="absolute -inset-y-0 hidden w-16 bg-blue-900 lg:block -right-16"></span>

      </div>
      <div class="relative z-10 lg:py-8">
        <div class="relative h-64 lg:h-full">
          <img class="absolute inset-0 object-cover w-full h-full"
            src="https://www.hyperui.dev/code/photos/house-1.jpeg" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="flex justify-between items-center p-2 space-x-">
      <x-partial.card logo="monta.png">
        Tugas Akhir
      </x-partial.card>
      <x-partial.card logo="book.png">
        Buku
      </x-partial.card>
      <x-partial.card logo="magz.png">
        Majalah
      </x-partial.card>
      <x-partial.card logo="paper.png">
        Research Paper
      </x-partial.card>
    </div>
  </section>

  <x-partial.footer />

  <script src="https://unpkg.com/feather-icons"></script>

  <script>
    feather.replace();
  </script>

</body>

</html>