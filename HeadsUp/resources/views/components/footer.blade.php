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
