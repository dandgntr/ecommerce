<!DOCTYPE html>
<html lang="en">
<head>  
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2" defer></script>

</head>
<body>
    @include('navbar')  <!-- Include Navbar -->

    <main>
        @yield('content')  <!-- Section Content -->
    </main>

    @include('footer') <!-- Placeholder Footer -->
</body>
</html>
