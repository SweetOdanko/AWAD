<nav>
    <section id="navbar">
        <p id="clock"></p>
        <a href="/"><img src='../../Element/logoi.png' class="logo" alt="" /></a>

        <div id="searchContainer">
            <form method="get" action="{{ route('search') }}#product1" id="search-form">
                <input type="text" id="navsearch" name="searchInput" placeholder="Ice cream..." />
                <button type="submit" id="navbutton">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <div class="navbox">
            <ul class='row'>
                <li><a class="{{ Request::path() === '/' ? 'active' : '' }}" href="/">Home</a></li>
                <li><a class="{{ Request::path() === 'about' ? 'active' : '' }}" href="/about">About</a></li>
                <li class="dropdown">
                    <a class="{{ Request::path() === 'itemList' ? 'active' : '' }}" href="/itemList">Menu</a>
                    <div class="dropdown-content">
                        <a href="/itemList#product1">Cup ice cream</a>
                        <a href="/itemList#product2">Cone ice cream</a>
                    </div>
                </li>
                <li><a class="{{ Request::path() === 'contact' ? 'active' : '' }}" href="/contact">Contact</a></li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>


                        <div class="dropdown-content" aria-labelledby="navbarDropdown">
                            <a href="/cart"><i class="fa fa-shopping-cart"></i></a>
                            <a class="dropdown-item" href="/logout">Logout</a>
                            </a>


                        </div>
                    </li>
                @endguest

            </ul>
        </div>
    </section>
</nav>
