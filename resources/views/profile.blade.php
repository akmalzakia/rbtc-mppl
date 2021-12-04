<x-main-layout>
  <div class="flex p-5 space-x-3 items-stretch">
    <div class="w-1/3 flex flex-col space-y-1">
      <div class="inline-flex space-x-2 text-2xl items-center">
        <i data-feather="user" class="text-blue-600"></i>
        <p class="text-blue-600 font-bold ">Profile</p>
      </div>
      <x-partial.cards.card class="rounded-md flex-1 flex-col px-4 pt-4 justify-between">
        <div class="flex flex-col items-center space-y-2 mt-4">
          <img src="{{ $user->image ?? 'https://source.unsplash.com/500x400?people' }}" alt=""
            class="rounded-full object-cover h-44 w-44">
          <p class="text-3xl text-blue-600 m-2">{{ $user->name }}</p>
          <p class="text-xl m-1">{{ ucfirst($user->roles) }}</p>
        </div>
        <div class="block mt-5">
          @if (Auth::user() === $user) 
          <div class="border-b-2 border-gray-200 rounded-md p-3 text-center">
            <a href="" class="text-gray-600 hover:text-blue-600 transition">Settings</a>
          </div>
          <div class="p-3 text-center">
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" class="text-red-500 hover:text-red-600 transition">Logout</button>
            </form>
          </div>
          @endif
        </div>
      </x-partial.cards.card>
    </div>
    <div class="w-2/3 flex flex-col space-y-1">
      <div class="inline-flex space-x-2 text-2xl items-center">
        <i data-feather="book" class="text-blue-600"></i>
        <p class="text-blue-600 font-bold ">Latest Bookmark</p>
      </div>
      <x-partial.cards.card class="rounded-md h-screen flex-1">
        <ul class="flex border-b border-gray-100">
          <li class="flex-1 border-b border-blue-600">
            <a class="relative block p-4" href="">
              {{-- <span class="absolute inset-x-0 w-full h-px bg-blue-600 -bottom-px"></span> --}}

              <div class="flex items-center justify-center">
                <span class="ml-3 text-sm font-medium text-blue-600"> Majalah </span>
              </div>
            </a>
          </li>

          <li class="flex-1 border-b border-transparent group hover:border-blue-400 transition duration-300">
            <a class="relative block p-4" href="">
              <div class="flex items-center justify-center">
                <span class="ml-3 text-sm font-medium text-gray-900 group-hover:text-blue-400 transition duration-300">
                  Textbook </span>
              </div>
            </a>
          </li>

          <li class="flex-1 border-b border-transparent group hover:border-blue-400 transition duration-300">
            <a class="relative block p-4" href="">
              <div class="flex items-center justify-center">
                <span class="ml-3 text-sm font-medium text-gray-900 group-hover:text-blue-400 transition duration-300">
                  Paper </span>
              </div>
            </a>
          </li>
        </ul>
      </x-partial.cards.card>
    </div>
  </div>
</x-main-layout>