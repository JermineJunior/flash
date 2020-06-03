<body class="bg-gray-100">
    <nav id="header" class="w-full z-30 top-0 py-1 shadow-lg border-b border-orange-400">
        <div class="w-full flex items-center justify-between mt-0 px-6 py-2">
            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle">
            
            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-lg text-orange-700 pt-4 md:pt-0">
                        <li><a class="inline-block no-underline font-medium text-lg py-2 px-4 lg:-ml-2" href="/">Eco<span class="text-gray-700">Market</span></a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
                @guest
                <div class="auth flex items-center w-full md:w-full">
                    <a class="bg-transparent text-gray-800  p-2 rounded border border-orange-500 mr-4 hover:bg-gray-100 hover:text-gray-700" href="{{ route('login') }}">Sign in</a>
                    @if (Route::has('register'))
                    <a class="bg-orange-600 text-gray-200  p-2 rounded  hover:bg-orange-500 hover:text-gray-100" href="{{ route('register') }}">Sign up</a>
                    @endif
                    @else
                    <a class="text-indigo-500 pl-3 inline-block no-underline hover:text-black mr-2" href="#">
                        <span>{{ auth()->user()->name }}</span>
                    </a>
                    
                    <a href="{{ route('user.logout') }}"
                    class="no-underline hover:underline text-indigo-500 text-sm p-3"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                </div>
                @endguest
                
            </div>
        </div>
    </nav>
    