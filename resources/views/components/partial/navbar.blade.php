<header class="shadow-sm bg-white">
    <div class="p-4 mx-auto max-w-screen-xl">
        <div class="flex items-center justify-between space-x-4 lg:space-x-10">
            <div class="flex lg:w-0 lg:flex-1">
                <x-application-logo class="h-8"/>
            </div>

            <nav class="hidden text-sm font-medium space-x-8 md:flex">
                <a href="/" class="{{ Request::is('/') ? 'text-blue-500' : 'text-gray-500' }}">Home</a>
                <a href="/" class="{{ Request::is('/books') ? 'text-blue-500' : 'text-gray-500' }}">Katalog</a>
                <a href="/" class="{{ Request::is('/contact') ? 'text-blue-500' : 'text-gray-500' }}">Hubungi Kami</a>
            </nav>

            @auth
                
            @else
            <div class="items-center justify-end flex-1 hidden space-x-4 sm:flex">
                <a href="{{ route('login') }}" class="px-5 py-2 text-sm font-medium text-gray-500 bg-gray-100 rounded-lg transition duration-300 hover:bg-gray-200">Log in</a>
                <a href="{{ route('register') }}" class="px-5 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg transition duration-300 hover:bg-blue-700">Sign up</a>
            </div>
            @endauth

            <div class="lg:hidden">
                <button class="p-2 text-gray-600 bg-gray-100 rounded-lg" type="button">
                    <span class="sr-only">Open menu</span>
                    <svg
                    aria-hidden="true"
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewbox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>