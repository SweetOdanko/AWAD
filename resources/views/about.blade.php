<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footerStyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {
        background-image: url(./Element/Untitled3.gif);
        background-position: center top 70px;
        width: 100%;
    }
    </style>
</head>

<body>


    @include('layout.nav')
    <section id="container">
        <h1>About us</h1>
        <section id="text">
            <h2>Meet the founder of OutsideScoop</h2>
            <p>Meet Chong Wai Soon, the passionate founder of OutsideScoop, a beloved ice cream shop that has been
                serving up sweet treats since 2012. Wai Soon's love for ice cream is only surpassed by his desire to
                sharp happiness with everyone who walks through the door. With his warm smile and infectious energy, Wai
                Soon has built a reputation as a beloved leader in the community, bringing people together over their
                shaved love of delicious, creamy ice cream. His commitment to quality and dedication to customer service
                has made OutsideScoop a go-to destination for ice cream lovers everywhere.</p>
            <p>Outsidescoop opened its first outlet on Jalan Bunga in 2012, quickly becoming a favorite among locals and
                visitors alike. In 2017, Wai Soon opened a second location on Jalan Grass, expanding the reach of his
                ice cream empire. With each scoop, Wai Soon and his team strive to create a joyful experience for their
                customers, using only the freshest ingredients and most innovative flavors. Wai Soon's dedication to
                quality and commitment to spreading happiness through ice cream has made Outsidescoop a beloved
                institution in the community.</p>
        </section>
    </section>
    @include('layout.footer')
</body>

</html>