<x-main-layout>
  <section>
    <div class="grid grid-cols-1 lg:grid-cols-2 lg:h-2/4">
      <div class="relative flex items-center bg-blue-900 lg:pl-4">

        <div class="relative px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
          <h2 class="text-2xl font-bold text-white sm:text-3xl">Welcome to Ruang Baca TC</h2>

          <p class="mt-4 text-white">
            Sistem Informasi Ruang Baca TC merupakan sistem informasi berbasis online milik RBTC agar memudahkan dosen
            dan mahasiswa untuk mengakses sumber belajar digital yang disediakan oleh Teknik Informatika ITS
          </p>

          <x-partial.forms.search action='/books' class="mt-6 w-2/3"/>
        </div>

        <span class="absolute -inset-y-0 hidden w-16 bg-blue-900 lg:block -right-16"></span>

      </div>
      <div class="relative z-10 lg:py-8">
        <div class="relative h-64 lg:h-full">
          <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('assets/rbtc.png') }}" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="flex justify-between items-center p-2 space-x-">
      <div class="p-2 flex-1">
        <x-partial.cards.top-border-card logo="monta.png" href='http://monta.if.its.ac.id'>
          Tugas Akhir
        </x-partial.cards.top-border-card>
      </div>
      <div class="p-2 flex-1">
        <x-partial.cards.top-border-card logo="book.png" href='/books'>
          Buku
        </x-partial.cards.top-border-card>
      </div>
      <div class="p-2 flex-1">
        <x-partial.cards.top-border-card logo="magz.png" href='/books'>
          Majalah
        </x-partial.cards.top-border-card>
      </div>
      <div class="p-2 flex-1">
        <x-partial.cards.top-border-card logo="paper.png" href='/books'>
          Research Paper
        </x-partial.cards.top-border-card>
      </div>
    </div>
  </section>
</x-main-layout>