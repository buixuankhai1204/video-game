<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url('public/css/app.css') }}" rel="stylesheet">

    <title>keyqeen Video Games</title>
</head>

<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class=" container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
            <div class="flex items-center flex-col lg:flex-row">
                <a href=""><img src="{{asset('public/images/logo.jpeg')}}" alt="laracast" class="w-32 flex-none"></a>
                <ul class="flex ml-16  space-x-6 my-4">
                    <li><a class="hover:text-gray-400" href="/">Game</a></li>
                    <li><a class="hover:text-gray-400" href="/">Reviews</a></li>
                    <li><a class="hover:text-gray-400" href="/">Comming Son</a></li>
                </ul>
            </div>
            <div class="flex items-center mb-2">
                <div class="realative">
                    <input type="text" class="rounded-full bg-gray-800 px-3 pl-8 py-1 w-64 text-sm focus:outline-none focus:shadow-outline" placeholder="search...">
                    <div class="absolute flex top-10 hidden lg:block items-center ml-2">
                        <svg class="fill-current w-4 text-gray-400 " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 487.95 487.95" style="enable-background:new 0 0 487.95 487.95;" xml:space="preserve">
                            <g>
                                <path d="M481.8,453l-140-140.1c27.6-33.1,44.2-75.4,44.2-121.6C386,85.9,299.5,0.2,193.1,0.2S0,86,0,191.4s86.5,191.1,192.9,191.1    c45.2,0,86.8-15.5,119.8-41.4l140.5,140.5c8.2,8.2,20.4,8.2,28.6,0C490,473.4,490,461.2,481.8,453z M41,191.4    c0-82.8,68.2-150.1,151.9-150.1s151.9,67.3,151.9,150.1s-68.2,150.1-151.9,150.1S41,274.1,41,191.4z" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div><img class="ml-6 rounded-full w-8" src="{{asset('public/images/avatar.jpg')}}" alt=""></div>
            </div>
        </nav>
    </header>
    <main class="py-8">
        @yield('content')
    </main>
    <footer class="border-t border-gray-800">
    <div class="container mx-auto px-4 py-6">
        powere By <a href="" class="hover:text-gray-400">IGBD API</a>
    </div>
    </footer>
</body>

</html>