<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
</head>
<body>

<main>
    @include('partials.sidebar')

    <div class="main-content">
        @include('partials.navbar')

        @yield('content')

    </div>
</main>

@include('partials.footer')

