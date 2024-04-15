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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ice Cream Detail</title>
</head>

<body>
    <section class='section-p1'>
        <div id='itemdetail'>
            <div class='single-pro-image'>
                <img src='{{ $item->image_path }}'>
            </div>
            <div class='single-pro-details'>
                <h6>Home / Ice-Cream</h6>

                @can('delete',$item)
                route to handle
                <a href="/dItems/{{$item->id}}">Delete</a>
                @endcan
                @can('update',$item)
                <a href="/uItem/{{$item->id}}">update</a>
                @endcan
                <h1>{{ $item->title }}</h1>
                <h2>RM {{ $item->price }}</h2>
                <form method="POST" action="{{ route('addToCart') }}">
                    @csrf
                    <input type="hidden" name="itemId" value="{{ $item->id }}">
                    <input id='quantity' name="quantity" type='number' value='1'>
                    <input type="hidden" name="itemprice" value="{{ $item->price }}">
                    <button type="submit" data-item-id="{{ $item->id }}" data-item-price="{{ $item->price }}">Add to
                        Cart</button><br><br>
                </form>
                <div class='alert hide'></div><br>
                <h3>Product Details</h3><br>
                <p id='detail'>Description: </p>
                <span>{{ $item->dscrpt }}</span><br><br>
                <p id='detail'>Flavor: </p>
                <span>{{ $item->flavor }}</span><br><br>
                <p id='detail'>Ingredients: </p>
                <span>{{ $item->ingredients }}</span><br><br>
                <span>{{ $item->steps }}</span><br><br>
                <a href='/itemList'><button>Go Back</button></a>
            </div>
        </div>
    </section>
    <h2 class="recommend">Recommendation</h2>
    <div class="container">
        <div class="ice cup flavour2" onclick="location.href='/itemDetail/2'">
            <img src="../../Ice_Cream/Angel Food Cake.png" />
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
        <div class="ice cup flavour2" onclick="location.href='/itemDetail/11'">
            <img src="../../Ice_Cream/Mocha Macchiato.png" />
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
        <div class="ice cup flavour2" onclick="location.href='/itemDetail/16'">
            <img src="../../Ice_Cream/Wisconsin Old Fashioned.png" />
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
    document.addEventListener('DOMContentLoaded', () => {
        const quantityInput = document.getElementById('quantity');
        const addItemButtons = document.querySelectorAll('button[type="submit"]');
        const alertDiv = document.querySelector('.alert');

        addItemButtons.forEach(addItemButton => {
            addItemButton.addEventListener('click', (event) => {
                event.preventDefault();

                const itemId = addItemButton.getAttribute('data-item-id');
                const itemprice = addItemButton.getAttribute('data-item-price');
                const quantity = quantityInput.value;

                const formData = new FormData();
                formData.append('itemId', itemId);
                formData.append('quantity', quantity);
                formData.append('itemprice', itemprice);

                fetch('{{ url("/add-to-cart") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector(
                                'meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            itemId: itemId,
                            quantity: quantity,
                            itemprice: itemprice
                        })
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Failed to add item to cart.');
                        }
                        return response.json();
                    })
                    .then(data => {
                        alertDiv.textContent = data.message;
                        alertDiv.classList.remove('hide');
                        setTimeout(() => {
                            alertDiv.classList.add('hide');
                        }, 200); // 2 seconds
                    })
                    .catch(error => {
                        alertDiv.textContent = 'Failed to add item to cart.';
                        alertDiv.classList.remove('hide');
                        setTimeout(() => {
                            alertDiv.classList.add('hide');
                        }, 200); // 2 seconds
                    });
            });
        });
    });
    </script>

    </script>
</body>

</html>