<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Workopia | Find and list jobs</title> -->
     <title>@yield('title', 'Workopia')</title>
</head>
<body class="bg-gray-100">
    <header>
        <h1>Welcome to Workopia</h1>
    </header>
    <main class="container mx-auto mt-4 p-4">
        @yield('content')
    </main>
</body>
</html>

