<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OutsideScoop</title>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    @include('layout.nav')
    <section id="hero">

        <img src="../../Element/IcecramLogo-removebg-preview.png" alt="">
        <h1>The "I" inside the happiness</h1>
        <h2>Stands for Icecream</h2>

        <p>
            Register now as a member to unlock exclusive access to special offers in
            the future!
        </p>

        {{-- original login button --}}
        {{-- <button id='hbttn' onclick="{{ route('login') }}'">Login now</button> --}}
        @if (Auth::check())
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-link">Logout</button>
            </form>
        @else
            <form action="{{ route('login') }}" method="GET" style="display: inline;">
                <button type="submit" class="btn btn-primary" id="hbttn">Login now</button>
            </form>
        @endif





    </section>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
