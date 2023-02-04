<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/vitrine.css')}}">
    <title>KelyKart</title>
</head>
<body>

    {{-- Header Section start --}}
        <section class="header">
            {{-- @yield('header') --}}
            @include('visiteurs.header')
        </section>
        <hr class="header__line">
    {{-- Header Section End --}}

{{-- Main content start --}}
        <main>
            @yield('content')
        </main>
    
{{-- Main content End --}}
{{-- Debut du footer --}}

<footer class="footer">    
    @include('visiteurs.footer')
</footer>





<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>