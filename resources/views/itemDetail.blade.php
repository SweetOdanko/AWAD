<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="{{ asset('css/itemDetail.css') }}">
<link rel="stylesheet" href="{{ asset('css/itemList.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-VhXcnoJQq62L7cqu3wpiJQbsmOoKWtTYOO7cBksmJhLpZz17vcPvMY7t27ROQwQ/" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Detail</title>
</head>

<body>
            <section class='section-p1'>
                   <div id='itemdetail'>
                    <div class='single-pro-image'>
                        <img src= '{{$item->image_path}}'>
                       </div>
                       <div class='single-pro-details'>
                <h6>Home / Ice-Cream</h6>
                <h1>{{ $item->title }}</h1>
                <h2>RM {{ $item->price }}</h2>
                <input id='quantity' type='number' value='1'>
                <button id='addItem' onclick='showAlert()'>Add to Cart</button><br><br>
                <div id='customAlert' class='alert hide'></div><br>
                <h3>Product Details</h3><br>
                <p id='detail'>Description: </p>
                <span>{{ $item->dscrpt }}</span><br><br>
                <p id='detail'>Flavor: </p>
                <span>{{ $item->flavor }}</span><br><br>
                <p id='detail'>Ingredients: </p>
                <span>{{ $item->ingredients }}</span><br><br>
                <span>{{ $item->steps }}</span><br><br>
                <a href='/home'><button>Go Back</button></a>
            </div>
        </div>
    </section>

    <h2 class="recommend">Recommendation</h2>
    <div class="container">
        <div class="ice cup flavour2" onclick="location.href='/itemDetail?id=2'">
            <img src="Ice_Cream/Angel Food Cake.png" />
            <div class="des">
                <h5>Angel Food Cake</h5>
                <p>
                    Heavenly light and fluffy ice cream with hints of vanilla and a
                    sweet, airy finish
                </p>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h4>RM5</h4>
            </div>
        </div>
        <div class="ice cup flavour2" onclick="location.href='/itemDetail?id=11'">
            <img src="Ice_Cream/Mocha Macchiato.png" />
            <div class="des">
                <h5>Mocha Macchiato</h5>
                <p>
                    A creamy blend of espresso and chocolate, with a hint of sweetness
                </p>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RM7</h4>
            </div>
        </div>
        <div class="ice cup flavour2" onclick="location.href='/itemDetail?id=16'">
            <img src="Ice_Cream/Wisconsin Old Fashioned.png" />
            <div class="des">
                <h5>Wisconsin Old Fashioned</h5>
                <p>
                    Classic cocktail-inspired flavor
                </p>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RM8</h4>
            </div>
        </div>
    </div>
    <script>

    const quantityInput = document.getElementById('quantity');
    const addItemButton = document.getElementById('addItem');
    const message = document.getElementById('customAlert');

   
    addItemButton.addEventListener('click', () => {
   
        const itemId = `<?php echo $id; ?>`;
        const quantity = quantityInput.value;
        const itemprice = '<?php echo $price; ?>'

       
        const xhr = new XMLHttpRequest();
        xhr.open('POST', './includes/add_to_cart.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
             
                const response = xhr.responseText;
                message.innerHTML =
                    `<h2>${response}</h2><br><button onclick='hideAlert()'>OK</button>`
            }
        };
        xhr.send(`itemId=${itemId}&quantity=${quantity}&itemprice=${itemprice}`);
    });

    function showAlert() {
        document.getElementById("customAlert").classList.remove("hide");
    }


    function hideAlert() {
        document.getElementById("customAlert").classList.add("hide");
    }
    </script>
</body>

</html>