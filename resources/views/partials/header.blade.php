<header class="header-section-other">
    <div class="container-fluid">
        <div class="logo">
            <a href="./index.html"><img src="{{asset('assets')}}/img/little-logo.png" alt=""></a>
        </div>
        <div class="nav-menu">
            <nav class="main-menu mobile-menu">
                <ul>
                    {{-- index doesn't extends from master so I can't use @yield('home-active') --}}
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('Theme.index') }}">Home</a>
                    </li>
                    <li class="@yield('category-active')"><a href="{{ route('Theme.category') }}">Categories</a></li>
                    <li class="@yield('recipe-active')"><a href="{{ route('Theme.recipe') }}">Recipes</a></li>
                    <li class="@yield('blog-active')"><a href="{{ route('theme.blog') }}">Blogs</a></li>
                    <li class="@yield('contact-active')"><a href="{{ route('Theme.contact') }}">Contact</a></li>
                    <li class="@yield('about-active')"><a href="{{ route('Theme.about') }}">About Me</a></li>
                    <li class="">
                        @if(!Auth::check())
                        <a href="{{ route('register') }}">Login / Register</a>
                        @else
                        <a href="#">{{ Auth::user()->name }}</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">My Blogs</a></li>
                            <li><a href="blog.html">My Recipes</a></li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link"
                                    style="color: black; font-weight: bold;">Logout</button>
                            </form>
                        </ul>
                        @endif
                    </li>
                </ul>
            </nav>
            <div class="nav-right search-switch">
                <i class="fa fa-search"></i>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
