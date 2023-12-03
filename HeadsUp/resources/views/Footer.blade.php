<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>
    {{-- Start of Footer --}}
    <footer class="card overflow-auto" id="footer">
        <div class="card-body d-flex flex-column">
            {{-- Start of Listing Grid View  --}}
            <div class="row d-flex justify-content-between mx-5">
                <div class="col-auto d-flex flex-column align-items-start">
                    <img src="{{ asset('svg/Heads Up.svg') }}" alt="HeadsUp Logo">
                    <p class="text-stroke">Visit us at :</p>
                    <p class="text-start text-stroke">Jalan Malioboro Kampus C Unair, <br>Merr, Surabaya, Jawa Timur</p>
                </div>
                <div class="col-auto p-0 mt-lg-4">
                    <ul>
                        <li class="text-start">Support Center</li>
                        <li class="text-start">Shipping & Return</li>
                        <li class="text-start">Payment</li>
                        <li class="text-start">Warranty</li>
                        <li class="text-start">Identification Check</li>
                        <li class="text-start">Track Orders</li>
                    </ul>
                </div>
                <div class="col-auto p-0 mt-lg-4">
                    <ul>
                        <li class="text-start">Rewards</li>
                        <li class="text-start">#TakeAHeadsUp</li>
                        <li class="text-start">Affiliate Program</li>
                        <li class="text-start">Where to Buy</li>
                    </ul>
                </div>
                <div class="col-auto p-0 mt-lg-4">
                    <ul>
                        <li class="text-start">About Us</li>
                        <li class="text-start">Privacy Policy</li>
                        <li class="text-start">Terms and Conditions</li>
                    </ul>
                </div>
            </div>
            {{-- End of listing Grid View --}}

            <div class="d-flex flex-row flex-wrap justify-content-between gap-4  mt-md-3 mt-4 mx-5">
                {{-- Start of Media Social Flex Row --}}
                <div class="d-flex flex-row gap-4">
                    <img src="{{ asset('svg/icon_twitter.svg') }}" alt="">
                    <img src="{{ asset('svg/icon_instagram.svg') }}" alt="">
                    <img src="{{ asset('svg/icon_mail.svg') }}" alt="">
                    <img src="{{ asset('svg/icon_facebook.svg') }}" alt="">
                </div>
                {{-- End of Media Social Flex Row --}}

                {{-- Start of Payment Method Flex Row --}}
                <div class="d-flex flex-row align-items-center flex-wrap">
                    <p>We Accept</p>
                    <img id="payment_images" src="{{ asset('svg/logo_semua_bank.svg') }}" alt="">
                </div>
                {{-- End of Payment Method Flex Row --}}

            </div>
        </div>
    </footer>
    {{-- End Of Footer --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
