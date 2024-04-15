<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/footerStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/itemList.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-VhXcnoJQq62L7cqu3wpiJQbsmOoKWtTYOO7cBksmJhLpZz17vcPvMY7t27ROQwQ/" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice-Cream</title>
</head>

<body>
    @include('layout.nav')
    <div class="header">
        <h1 class="title">Delicious Ice Cream Flavors</h1>
        <p class="subtitle">Explore our wide range of ice cream flavors!</p>
    </div>
    <form action='search' method='POST'>
        @csrf
        <div class='search_category'>
            <div class="search-container">
                <input type="text" id="searchInput" name="searchInput" placeholder="Search for products..." />
                <button type="submit" id="submitButton">
                    <i class=" fa fa-search"></i>
                </button>
            </div>
    </form>
    <form action='filter' method='POST'>
        @csrf
        <div class="category-container">
            <select id="categoryFilter" name='categoryFilter' onchange="this.form.submit()">
                <option value="all" @if($selectedCategory=='all' ) selected @endif>All</option>
                <option value="flavour1" @if($selectedCategory=='flavour1' ) selected @endif>Sweet Lover</option>
                <option value="flavour2" @if($selectedCategory=='flavour2' ) selected @endif>Classic Lover</option>
                <option value="flavour3" @if($selectedCategory=='flavour3' ) selected @endif>Fruit Lover</option>
            </select>
        </div>
        </div>
    </form>
    @can('isAdmin')
    <a href="/cItem">Create</a>
    @endcan
    <section id="product1" class="section-p1">
        @if ($showHeader1)
        <div class="header1">
            <h1 class="title1">Cup Type Ice Cream</h1>
            <p class="subtitle1">
                Enjoy the rich and creamy flavor in a convenient, easy-to-hold cup
                that's perfect for any occasion!
            </p>
        </div>
        @endif
        <div class='container'>
            @foreach ($cups as $cup)
            <div class='{{ $cup->type }}' onclick="location.href='/itemDetail/{{ $cup->id }}'">
                <img src='{{ $cup->image_path }}'>
                <div class='des'>
                    <h5>{{ $cup->name }}</h5>
                    <p>{{ $cup->dscript }}</p>
                    <div class='star'>
                        @for ($i = 0; $i < 5; $i++) @if ($i < $cup->star)
                            <i class='fas fa-star'></i>
                            @else
                            <i class='fas fa-star-half-alt'></i>
                            @endif
                            @endfor
                    </div>
                    <h4>{{ $cup->price }}</h4>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="product2" class="section-p1">
        @if ($showHeader2)
        <div class="header2">
            <h1 class="title2">Cone Type Ice Cream</h1>
            <p class="subtitle2">A delicious and convenient way to enjoy a frozen treat on-the-go!</p>
        </div>
        @endif
        <div class='container'>
            @foreach ($cones as $cone)
            <div class='{{ $cone->type }}' onclick="location.href='/itemDetail/{{ $cone->id }}'">
                <img src='{{ $cone->image_path }}'>
                <div class='des'>
                    <h5>{{ $cone->name }}</h5>
                    <p>{{ $cone->dscript }}</p>
                    <div class='star'>
                        @for ($i = 0; $i < 5; $i++) @if ($i < $cone->star)
                            <i class='fas fa-star'></i>
                            @else
                            <i class='fas fa-star-half-alt'></i>
                            @endif
                            @endfor
                    </div>
                    <h4>{{ $cone->price }}</h4>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @include('layout.footer')
    <script src="{{ asset('js/itemList.js') }}"></script>
</body>

</html>