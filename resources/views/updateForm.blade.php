<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footerStyle.css') }}">
</head>

<body>
    @include('layout.nav')
    <div class="contact-box">
        <form action="/uItem" method="POST">
            <input type="hidden" name='id' value='{{ $item->id }}'>
            @csrf
            <div class='try'>
                <label for="">Title</label>
                <input type="text" name="title" value='{{ $item->title }}'>
            </div>

            <div class="try">
                <label for="">Price</label>
                <input type="number" name="price" value='{{ $item->price }}'>
            </div>

            <div class="try">
                <label for="">Type</label>
                <select name="type">
                    <option value="cup">cup</option>
                    <option value="cone">cone</option>
                </select>
            </div>

            <div class="try">
                <label for="">Image Path</label>
                <input class="path" type="text" name="image_path" value='{{ $item->image_path }}'>
            </div>

            <div class='try'>
                <label for="">Description</label><br>
                <textarea name="dscrpt" cols="100" rows="10">{{ $item->dscrpt }}</textarea><br>
                <label for="">Flavor</label><br>
                <textarea name="flavor" cols="100" rows="10">{{ $item->flavor }}</textarea><br>
                <label for="">Ingredients</label><br>
                <textarea name="ingredients" cols="100" rows="3">{{ $item->ingredients }}</textarea><br>
                <label for="">Steps</label><br>
                <textarea name="steps" cols="100" rows="10">{{ $item->steps }}</textarea><br>
                <button type="submit" class="Submit_Button">Submit</button>
            </div>
        </form>
    </div>
    @include('layout.footer')
</body>

</html>
