<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books App</title>

    <link rel="stylesheet" href="/css/main.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('books.index') }}">
                     <img src="/b.png">
                    </a>
                </li>
                <li>
                    <a href="{{ route('books.index') }}" class="hover:text-gray-300" style="font-family: 'Arial Rounded MT Bold'">Books App</a>
                </li>
                @unless (Auth::check())            
                <li>
                    <a href="{{ route('login') }}" class="hover:text-gray-300 ml-8" style="font-family: 'Arial Rounded MT Bold'">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="hover:text-gray-300 ml-8" style="font-family: 'Arial Rounded MT Bold'">Register</a>
                </li>

                @endunless
          
            </ul>
            <div class="flex flex-col md:flex-row items-center">
              <input type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none
              focus:shadow-outline" placeholder="Search">
                <div class="md:ml-4 mt-3 md:mt-0">
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')

</body>
</html>
