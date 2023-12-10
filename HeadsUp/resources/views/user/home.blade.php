@extends('layout.layout_home')
@section('content')
    {{-- Section1 --}}
    <div class="d-flex flex-row align-items-center justify-content-between gap-5 mb-5 flex-wrap first-section">
        <div class="d-flex flex-column gap-4 ms-5">
            <div class="d-flex flex-column">
                <h1 class="jacques-font">Take a shot,</h1>
                <h1 class="jacques-font">#TakeAHeadsUp</h1>
            </div>
            <a href="{{ route('katalogPage') }}"><button type="button"
                    class="btn rounded fw-medium button-buy-now jacques-font text-light w-75">Buy Now!</button></a>
        </div>
        <div>
            <img src="{{ asset('svg/Home_Page/Three_Display_Pictures.svg') }}" class="three-Display-Pictures" alt="Display Pictures">
        </div>
    </div>
    {{-- End of Section 1 --}}

    {{-- Start Section 2 --}}
    <h3 class="jacques-font text-center top-section-1 mb-5">Heads Up - Not Only Headphones</h3>
    <div class="container text-center">
        <div class="row gap-5">
            <div class="col">
                <a href ="{{ route('katalogPage') }}" class="d-flex flex-column align-items-center">
                    <img src="{{ asset('svg/Home_Page/Case.svg') }}" class="category-image" alt="Case Image">
                    <img src="{{ asset('svg/Home_page/Case-Text.svg') }}" class="mt-3 category-text" alt="Case Text">
                </a>
            </div>
            <div class="col">
                <a href ="{{ route('katalogPage') }}" class="d-flex flex-column align-items-center">
                    <img src="{{ asset('svg/Home_Page/Headphone.svg') }}" class="category-image" alt="Headphone Image">
                    <img src="{{ asset('svg/Home_page/Headphone-Text.svg') }}" class="mt-3 category-text" alt="Headphone Text">
                </a>
            </div>
            <div class="col">
                <a href ="{{ route('katalogPage') }}" class="d-flex flex-column align-items-center">
                    <img src="{{ asset('svg/Home_Page/Earphone.svg') }}" class="category-image" alt="Earphone Image">
                    <img src="{{ asset('svg/Home_page/Earphone-Text.svg') }}" class="mt-3 category-text" alt="Earphone Text">
                </a>
            </div>
            <div class="col">
                <a href ="{{ route('katalogPage') }}" class="d-flex flex-column align-items-center">
                    <img src="{{ asset('svg/Home_Page/TWS.svg') }}" class="category-image" alt="TWS Image">
                    <img src="{{ asset('svg/Home_page/TWS-Text.svg') }}" class="mt-3 category-text" alt="TWS Text">
                </a>
            </div>
            <div class="col">
                <a href ="{{ route('katalogPage') }}" class="d-flex flex-column align-items-center">
                    <img src="{{ asset('svg/Home_Page/Accessories.svg') }}" class="category-image" alt="Accessories Image">
                    <img src="{{ asset('svg/Home_page/Accessories-Text.svg') }}" class="mt-3 category-text" alt="Accessories Text">
                </a>
            </div>
        </div>
    </div>
    {{-- End Section 2 --}}
@endsection
