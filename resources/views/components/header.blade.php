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

    <div class="w-full flex-grow lg:flex lg:items-center justify-end lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">

        <!-- <ul class="list-reset lg:flex justify-start flex-1 items-center">
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
        </ul> -->
        <div>
            @guest
            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>

            <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative inline-block text-left">
                <div>
                    <span class="rounded-md shadow-sm">
                        <button @click="open = !open" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150">
                            Login
                            <svg class="-mr-1 ml-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </span>
                </div>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="-mr-4 origin-top-right absolute right-0 mt-2 w-64 rounded-md shadow-lg">
                    <div class="rounded-md bg-white shadow-xs">
                        <form class="w-11/12 p-4 mx-auto text-center" method="POST" action="{{ route('tologin') }}">
                            @csrf

                            <div class="flex flex-wrap mb-6">
                       

                        <input id="username" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') border-red-500 @enderror" name="login" value="{{ old('nim') ?: old('email') }}" required autofocus placeholder="username">

                        @error('username')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                            <div class="flex flex-wrap mb-6">

                                <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" name="password" required placeholder="password">

                                @error('password')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="flex mb-4">
                                <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                                    <input type="checkbox" name="remember" id="remember" class="form-checkbox" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="ml-2">{{ __('Remember Me') }}</span>
                                </label>
                            </div>

                            <div class="">
                                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class=" text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline ml-auto" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif


                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- <a class="inline-block py-2 px-4 text-black no-underline font-semibold text-lg" href="{{ route('login') }}"> {{ __('Login') }}</a> -->
            @else
            <div>
                <a class="inline-block text-black no-underline hover:text-gray-200 hover:text-underline py-2 px-4 font-semibold text-lg" href="#">Dashboard</a>
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