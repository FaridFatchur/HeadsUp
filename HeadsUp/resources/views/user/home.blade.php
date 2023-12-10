@extends('layout.layout_home')
@section('content')
    {{-- Section1 --}}
    <div class="d-flex flex-row align-items-center justify-content-between">
        <div class="d-flex flex-column gap-4">
            <div class="d-flex flex-column">
                <h1 class="jacques-font">Take a shot,</h1>
                <h1 class="jacques-font">#TakeAHeadsUp</h1>
            </div>
            <button type="button" class="btn rounded fw-medium button-buy-now jacques-font text-light w-75">Buy Now!</button>
        </div>
        <div>
            <img src="{{ asset('svg/Home_Page/Three_Display_Pictures.svg') }}" alt="Display Pictures">
        </div>
    </div>
@endsection
