<nav>
    <section id="navbar">
        <p id="clock"></p>
        <a href="/index"><img src='../../Element/logoi.png' class="logo" alt="" /></a>

        <div id="searchContainer">
            <form method="get" action="/itemList#product1" id="search-form">
                <input type="text" id="navsearch" name="input" placeholder="Ice cream..." />
                <button type="submit" id="navbutton">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <div class="navbox">
            <ul class='row'>
                <li><a class="{{ Request::path() === '/' ? 'active' : '' }}" href="/home">Home</a></li>
                <li><a class="{{ Request::path() === 'about' ? 'active' : '' }}" href="/about">About</a></li>
                <li class="dropdown">
                    <a class="{{ Request::path() === 'itemList' ? 'active' : '' }}" href="/itemList">Menu</a>
                    <div class="dropdown-content">
                        <a href="/itemList#product1">Cup ice cream</a>
                        <a href="/itemList#product2">Cone ice cream</a>
                    </div>
                </li>
                <li><a class="{{ Request::path() === 'contact' ? 'active' : '' }}" href="/contact">Contact</a></li>
                <li>
                    <a href="/cart"><i class="fa fa-shopping-cart"></i></a>
                </li>
            </ul>
        </div>
    </section>
</nav>