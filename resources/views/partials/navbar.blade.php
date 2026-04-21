<nav class="navbar">
    <ul class="navbar-list">
        <li class="navbar-item">
            <a href="{{ route('home') }}" class="navbar-link {{ request()->routeIs('home') ? 'active' : '' }}">
                Home
            </a>
        </li>

        <li class="navbar-item">
            <a href="{{ route('portfolio.index') }}"
               class="navbar-link {{ request()->routeIs('portfolio.*') ? 'active' : '' }}">
                Portfolio
            </a>
        </li>

        <li class="navbar-item">
            <a href="{{ route('blog.index') }}" class="navbar-link {{ request()->routeIs('blog.*') ? 'active' : '' }}">
                Blog
            </a>
        </li>

        <li class="navbar-item">
            <a href="{{ route('contact') }}" class="navbar-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                Contact
            </a>
        </li>
    </ul>
</nav>
