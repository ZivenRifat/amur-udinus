<!DOCTYPE html>
<html>

<head>
    <title>A-Mur Udinus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    {{-- @include('layouts.footer') --}}

</body>

</html>
