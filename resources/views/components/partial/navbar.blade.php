<header class="shadow-sm bg-white">
    <div class="p-4 mx-auto max-w-screen-xl">
        <div class="flex items-center justify-between space-x-4 lg:space-x-10">
            <div class="flex lg:w-0 lg:flex-1">
                <x-application-logo class="h-8" />
            </div>

            <nav class="hidden text-sm font-medium space-x-8 md:flex">
                <a href="/" class="{{ Request::is('/') ? 'text-blue-500' : 'text-gray-500' }}">Home</a>
                <a href="/books" class="{{ Request::is('books') ? 'text-blue-500' : 'text-gray-500' }}">Katalog</a>
                <a href="/contact" class="{{ Request::is('contact') ? 'text-blue-500' : 'text-gray-500' }}">Hubungi
                    Kami</a>
            </nav>

            @auth
            <div class="inline-flex p-2 border-l-2">
                <button type="button" onclick="showDropdown()"
                        class="dropdownButton inline-flex items-center rounded-xl w-full"
                        id='menu-button' aria-expanded="true" aria-haspopup="true">
                        <img src="{{ auth()->user()->image ?? 'https://source.unsplash.com/500x400?people' }}" alt=""
                            class="rounded-full max-h-6">

                        <span class="ml-2 mr-1 text-xs font-medium text-gray-700">
                            {{ auth()->user()->name }}
                        </span>

                        <span></span>

                </button>

                <!--
                Dropdown menu, show/hide based on menu state.

                Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
                <div class="hidden z-30 origin-top-right absolute right-0 mt-8 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                    id="dropdownMenu">
                    <div class="" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="/profile" class="text-gray-700 block px-4 py-2 text-sm hover:bg-blue-600 hover:text-white rounded-t-md" role="menuitem" tabindex="-1"
                            id="menu-item-0">Account</a>
                        <form method="POST" action="{{ route('logout') }}" role="none">
                            @csrf
                            <button type="submit" class="text-gray-700 block w-full text-left px-4 py-2 text-sm hover:bg-blue-600 hover:text-white rounded-b-md"
                                role="menuitem" tabindex="-1" id="menu-item-3">
                                Sign out
                            </button>
                        </form>
                    </div>
                </div>
            </div>



            @else
            <div class="items-center justify-end flex-1 hidden space-x-4 sm:flex">
                <a href="{{ route('login') }}"
                    class="px-5 py-2 text-sm font-medium text-gray-500 bg-gray-100 rounded-lg transition duration-300 hover:bg-gray-200">Log
                    in</a>
                <a href="{{ route('register') }}"
                    class="px-5 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg transition duration-300 hover:bg-blue-700">Sign
                    up</a>
            </div>
            @endauth

            <div class="lg:hidden">
                <button class="p-2 text-gray-600 bg-gray-100 rounded-lg" type="button">
                    <span class="sr-only">Open menu</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <script>
        function showDropdown() {
            document.getElementById("dropdownMenu").classList.toggle("hidden");
        }
    </script>
</header>