
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Workopia | Find and list jobs</title> -->
     <title>{{ $title ?? 'Workopia | Find and list jobs' }}</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
     <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
        />
        
     @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <x-header />
     @if(request()->is('/'))
  @if(request()->is('/'))
    <x-hero />
    <x-top-banner />
  @endif
  @endif
    <main class="container mx-auto mt-4 p-4">
        {{ $slot }}
    </main>
</body>
<script src="{{ asset('js/script.js') }}"></script>
</html>

