<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* Optional: Custom styles can go here */
    </style>
</head>
<body class="flex flex-col min-h-screen ml-96">

    <!-- Navbar berada di atas -->
    @include('dash.navbar')

    <!-- Main content -->
    <main class="flex-grow flex">
        @include('dash.sidebar') <!-- Sidebar di sebelah kiri -->
        <section class="flex-1 p-4">
            @yield('content') <!-- Konten utama -->
        </section>
    </main>

    <!-- Footer -->
    @include('footer')
    

</body>
</html>
