<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->

    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <script src="{{ asset('datatable/jquery-3.6.0.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('datatable/datatables.css') }}">
    <script src="{{ asset('datatable/datatables.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body class="font-sans antialiased">
    <div class="flex">
        <div
            class="w-56 fixed top-0 left-0 bottom-0 bg-gray-900 shadow-lg shadow-red-300 flex flex-col justify-between">
            <div>
                <img class="h-20 my-10 mx-auto" src="images\logo.png">

                {{-- <h3>Hello, {{ auth()->user()->role }}</h3> --}}


                <a href="dashboard"
                    class="text-x1 font-bold block mx-2 my-2 px-2 py-1 hover:bg-gray-800 text-gray-200 rounded-md">Dashbord</a>

                <a href="{{ route('category.index') }}"
                    class="text-x1 font-bold block mx-2 my-2 px-2 py-1 hover:bg-gray-800 text-gray-200 rounded-md">Category</a>

                <a href="{{ route('contact.index') }}"
                    class="text-x1 font-bold block mx-2 my-2 px-2 py-1 hover:bg-gray-800 text-gray-200 rounded-md">Contact</a>

                <a href="{{ route('product.index') }}"
                    class="text-x1 font-bold block mx-2 my-2 px-2 py-1 hover:bg-gray-800 text-gray-200 rounded-md">Product</a>

                <a href="{{ route('user.index') }}"
                    class="text-x1 font-bold block mx-2 my-2 px-2 py-1 hover:bg-gray-800 text-gray-200 rounded-md">Users</a>

                <a href="{{ route('order.index') }}"
                    class="text-x1 font-bold block mx-2 my-2 px-2 py-1 hover:bg-gray-800 text-gray-200 rounded-md">Order</a>

                <a href="{{ route('rating.index') }}"
                    class="text-x1 font-bold block mx-2 my-2 px-2 py-1 hover:bg-gray-800 text-gray-200 rounded-md">Ratings</a>
            </div>
            <div>
                <form action="{{ route('logout') }}" method="POST" class="text-center">
                    @csrf
                    <button type="submit"
                        class="text-x1 cursor-pointer mx-auto font-bold bg-gray-800 block mb-24 px-4 py-1 text-white">
                        Log Out <i class="fa fa-sign-out ml-2"></i>
                    </button>
                </form>
            </div>

        </div>

        <div class="p-4 flex-1 pl-60">
            @yield('content')
        </div>
    </div>
</body>

</html>
