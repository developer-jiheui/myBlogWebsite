<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.shared.head')
</head>
<body>

<main>
    @include('partials.site.sidebar')

    <div class="main-content">
        @include('partials.site.navbar')

        @yield('content')

        @include('partials.site.footer')
    </div>
</main>

@include('partials.shared.scripts')
</body>
</html>
