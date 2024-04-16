<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Ice Cream</title>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footerStyle.css') }}">
</head>

<body>
    @include('layout.nav')
    <div class="contact-box">
        <form action="/cItem" method="POST">
            @csrf
            <div class='try'>
                <label for="">Title</label>
                <input type="text" name="title">
            </div>

            <div class="try">
                <label for="">Price</label>
                <input type="text" name="price" value='RM'>
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
                <input type="text" name="image_path">
            </div>

            <div class='try'>
                <label for="">Description</label><br>
                <textarea name="dscrpt" cols="100" rows="10"></textarea><br>
                <label for="">Flavor</label><br>
                <textarea name="flavor" cols="100" rows="10"></textarea><br>
                <label for="">Ingredients</label><br>
                <textarea name="ingredients" cols="100" rows="3"></textarea><br>
                <label for="">Steps</label><br>
                <textarea name="steps" cols="100" rows="10"></textarea><br>
                <button type="submit" class="Submit_Button">Submit</button>
            </div>
        </form>
    </div>
    @include('layout.footer')
</body>

</html>
