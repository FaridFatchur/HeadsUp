@extends('layout.layout_catalog_metode_pembayaran')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/method.css') }}">
@endsection

@section('content')
    <div class="root my-5">
        <div class="wrapper">
            <h1>Metode Pembayaran</h1>
            <div class="opt">
                <div class="item">
                    <h3>Card</h3>
                    <div class="item_card">
                        <img src="{{ asset('img\method\Group 480.png') }}" alt="">
                        <img src="{{ asset('img\method\Group 481.png') }}" alt="">
                        <img src="{{ asset('img\method\Group 482.png') }}" alt="">
                        <img src="{{ asset('img\method\Group 483.png') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <h3 class="judul">Virtual Account</h3>
                    <div class="item_card">
                        <img src="{{ asset('img\method\Group 467.png') }}" alt="">
                        <img src="{{ asset('img\method\Group 468.png') }}" alt="">
                        <img src="{{ asset('img\method\Group 469.png') }}" alt="">
                        <img src="{{ asset('img\method\Group 471.png') }}" alt="">
                        <img src="{{ asset('img\method\Group 472.png') }}" alt="">
                        <img src="{{ asset('img\method\Group 473.png') }}" alt="">
                        <img src="{{ asset('img\method\Group 474.png') }}" alt="">
                        <img src="{{ asset('img\method\Group 475.png') }}" alt="">
                        <img src="{{ asset('img\method\Group 476.png') }}" alt="">
                        <img src="{{ asset('img\method\Group 477.png') }}" alt="">
                        <img src="{{ asset('img\method\Group 478.png') }}" alt="">
                        <img src="{{ asset('img\method\Group 479.png') }}" alt="">
                    </div>
                </div>
            </div>
            <a href="{{ route('checkoutPage') }}"><button>Submit</button></a>
        </div>
    </div>
@endsection
