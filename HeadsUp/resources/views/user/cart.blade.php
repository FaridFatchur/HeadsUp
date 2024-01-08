<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <title>Document</title>
</head>
<body>
    ex
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="sc" id="sc">
                    <h4 id="sc">Shopping cart</h4>
                </div>
                <div id="cart" class="d-flex flex-row justify-content-between align-items-center p-2 py-4 bg-white mt-4 px-3 rounded">
                    <div class="d-flex flex-row align-items-center">
                        <div class="mr-1" id="prod-svg"><img class="rounded" src="{{ asset('svg/prod-1.svg') }}" id="prod-svg" width="70"></div>
                    <div class="d-flex flex-column mx-4 align-items-left product-details"><span id="font-title" class="font-weight-bold">WH-1000XM5 headphones</span>
                        <div class="d-flex flex-row product-desc">
                            <div class="size mr-1"><span id="price-tag" class="font-weight-bold" style="font-size: 25px">Rp. 2.480.000</span></div>
                        </div>
                        <div class="quantity">
                            <button class="minus-btn" onclick="decrease()">-</button>
                            <input type="text" id="quantity" value="1">
                            <button class="plus-btn" onclick="increase()">+</button>
                        </div>                          
                    </div>
                    </div>
                    <input type="checkbox" id="checkbox1" class="custom-checkbox">
                </div>

                <div id="cart" class="d-flex flex-row justify-content-between align-items-center p-2 py-4 bg-white mt-4 px-3 rounded">
                    <div class="d-flex flex-row align-items-center">
                        <div class="mr-1" id="prod-svg"><img class="rounded" src="{{ asset('svg/prod-2.svg') }}" id="prod-svg" width="70"></div>
                    <div class="d-flex flex-column mx-4 align-items-left product-details"><span id="font-title" class="font-weight-bold">XQ-20023 Noise Cancelling</span>
                        <div class="d-flex flex-row product-desc">
                            <div class="size mr-1"><span id="price-tag" class="font-weight-bold" style="font-size: 25px">Rp. 3.700.000</span></div>
                        </div>
                        <div class="quantity">
                            <button class="minus-btn" onclick="decrease2()">-</button>
                            <input type="text" id="quantity2" value="1">
                            <button class="plus-btn" onclick="increase2()">+</button>
                        </div>                          
                    </div>
                    </div>
                    <input type="checkbox" id="checkbox1" class="custom-checkbox">
                </div>

                <div id="cart" class="d-flex flex-row justify-content-between align-items-center p-2 py-4 bg-white mt-4 px-3 rounded">
                    <div class="d-flex flex-row align-items-center">
                        <div class="mr-1" id="prod-svg"><img class="rounded" src="{{ asset('svg/prod-3.svg') }}" id="prod-svg" width="70"></div>
                    <div class="d-flex flex-column mx-4 align-items-left product-details"><span id="font-title" class="font-weight-bold">WMA-003 Headphones</span>
                        <div class="d-flex flex-row product-desc">
                            <div class="size mr-1"><span id="price-tag" class="font-weight-bold" style="font-size: 25px">Rp. 3.190.000</span></div>
                        </div>
                        <div class="quantity">
                            <button class="minus-btn" onclick="decrease3()">-</button>
                            <input type="text" id="quantity3" value="1">
                            <button class="plus-btn" onclick="increase3()">+</button>
                        </div>                          
                    </div>
                    </div>
                    <input type="checkbox" id="checkbox1" class="custom-checkbox">
                </div>
            </div>
        </div>
    </div>

    <footer class="d-flex justify-content-end align-items-center">
        <div class="d-flex flex-row align-items-center mr-4">
            <p id="price-tot">Total Rp 2.480.000</p>
            <button class="checkout-btn">Checkout (1)</button>
        </div>
    </footer>

    <script>
        function increase() {
        var quantityInput = document.getElementById('quantity');
        var currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
        }

        function decrease() {
        var quantityInput = document.getElementById('quantity');
        var currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
        }

        function increase2() {
        var quantityInput = document.getElementById('quantity2');
        var currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
        }

        function decrease2() {
        var quantityInput = document.getElementById('quantity2');
        var currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
        }

        function increase3() {
        var quantityInput = document.getElementById('quantity3');
        var currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
        }

        function decrease3() {
        var quantityInput = document.getElementById('quantity3');
        var currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
        }
    </script>
</body>
</html>