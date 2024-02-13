<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>LOGO</title>
    
</head>

<body>
    <header
        class="w-[100%] flex justify-center items-center font-bold h-[70px] "
    >
        <nav 
            class="flex justify-between w-[90%] text-gray-700"
        >
            <ul
                class="flex items-center"
            >
                <h1
                    class="m-[10px]"
                >
                    <a href="{{ route('home_page') }}">LOGO</a>
                </h1>
            </ul>
            <ul
                class="flex items-center"
            >
                <li
                    class="m-[10px] hover:text-blue-600"
                >
                    <a href="{{ route('home_page') }}">HOME</a>
                </li>
                <li
                    class="m-[10px] hover:text-blue-600"
                >
                    <a href="{{ route('books_page') }}">BOOKS</a>
                </li>
                <li
                    class="m-[10px] hover:text-blue-600"
                >
                    <a href="{{ route('home_page') }}">AUTHOR</a>
                </li>
                <li
                    class="m-[10px] hover:text-blue-600"
                >
                    <a href="{{ route('home_page') }}">CONTACT</a>
                </li>
                <li
                    class="m-[10px] hover:text-blue-600"
                >
                    <a href="{{ route('home_page') }}">ABOUT</a>
                </li>
            </ul>
            <ul
                class="flex items-center"
            >
                <li
                    class="m-[10px] hover:text-blue-600"
                >
                    <a href="{{ route('home_page') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>                        
                    </a>
                </li>
                @guest
                    <li
                        class="m-[10px] hover:bg-blue-700 bg-blue-600 h-[40px] w-[80px] rounded flex items-center justify-center hover:text-gray-300 text-white"
                    >
                        <a href="{{ route('signin_page') }}">SIGN IN</a>                    
                    </li>
                    <li
                        class="m-[10px] "
                    >
                        <a href="{{ route('signup_page') }}">SIGN UP</a>                    
                    </li>
                @endguest
                @auth
                    <li
                        class="m-[10px] hover:text-blue-600"
                    >
                        <a href="{{ route('user-dash') }}">
                            {{-- {{ Auth::user()->email }} --}}
                            <img
                                src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                class="w-[35px] h-[35px] hover:border-2 hover:border-blue-600 rounded-2xl"
                            />
                        </a>                    
                    </li>
                @endauth
                
            </ul>
        </nav>
    </header>

    @yield('content')
</body>
</html>