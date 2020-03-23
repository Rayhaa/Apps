<nav class="flex items-center justify-between flex-wrap border-b py-3 px-6 w-full z-10 top-0">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a class="text-black no-underline hover:text-white hover:no-underline font-bold" href="/">
            <span class="text-2xl pl-2">
                <i class="em em-grinning"></i>SIMANTEN</span>
        </a>
    </div>

    <div class="block lg:hidden">
        <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>

    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">

        <ul class="list-reset lg:flex justify-start flex-1 items-center">
            <li class="mr-3">
                <a class="inline-block py-2 px-4 text-black no-underline font-semibold text-lg" href="#">Active</a>
            </li>
            <li class="mr-3">
                <a class="inline-block text-black no-underline hover:text-gray-200 hover:text-underline py-2 px-4 font-semibold text-lg" href="#">link</a>
            </li>
            <li class="mr-3">
                <a class="inline-block text-black no-underline hover:text-gray-200 hover:text-underline py-2 px-4 font-semibold text-lg" href="#">link</a>
            </li>
            <li class="mr-3">
                <a class="inline-block text-black no-underline hover:text-gray-200 hover:text-underline py-2 px-4 font-semibold text-lg" href="#">link</a>
            </li>
        </ul>
        <div>
            @guest
            <a class="inline-block py-2 px-4 text-black no-underline font-semibold text-lg" href="{{ route('login') }}"> {{ __('Login') }}</a>
            @else
            <div>

                <div class="dropdown inline-block relative">
                    <button class="inline-flex appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <span class="mr-1">
                            <i class="fas fa-user mr-1"></i>
                            {{ Auth::user()->name }}
                        </span>
                        <svg class="fill-current h-5 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </button>
                    <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                        <li class="">
                            
                            <a class="drounded-t block whitespace-no-wrap
                            appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fas fa-power-off"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>


                </div>

            </div>

            @endguest
        </div>
    </div>
</nav>