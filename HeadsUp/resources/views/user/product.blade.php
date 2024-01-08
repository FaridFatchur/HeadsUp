@extends('layout.layout_product')
@section('content')
    <div class="root my-5">
        <!-- Content -->
        <div class="title-wrapper-product ms-5">
            <h1>WH-1000XM5 Headphone</h1>
        </div>
        <div class="container">
            <div class="overlap">
                <div class="col position-absolute start-10 ">
                    <img src="{{ asset('svg/Home_Page/Headphone.svg') }}" class="category-image" alt="Headphone Image">
                </div>
                <div class="container-s ms-5 border border-2 border-black">
                    <div class="product-content start-10 d-flex flex-column">
                        <h1>Rp 2.480.000</h1>
                        <div class="container m-0 p-0">
                            <img class="object-fit-contain w-25" src="{{ asset('svg/Product_Page/Line-star-heart.svg') }}"
                                alt="rating">
                        </div>
                        <p>WH-1000XM5 Headphone merupakan terobosan terbaru dari brand Heads Up yang memiliki berbagai fitur
                            kekinian seperti 8D surround sound, noise reduction, serta built in flashlight</p>
                        <hr class="border border-black">
                        <h4>Warna :</h4>
                        <br>
                        <div>
                            <button type="button" class="btn active btn-light mx-2" data-bs-toggle="button">
                                <img class=""
                                    src="{{ asset('svg/Product_Page/84bedceaa11a095149c072b265f5a827 2.svg') }}"
                                    alt="oranye">
                                Oranye
                            </button>
                            <button type="button" class="btn active btn-light mx-2" data-bs-toggle="button">
                                <img class="w"
                                    src="{{ asset('svg/Product_Page/1974c08390e42efc83cbf3cfc4ed85bb 2.svg') }}"
                                    alt="biru">
                                Biru
                            </button>
                        </div>
                        <hr class="border border-black">
                        <h4>Kuantitas :</h4>
                        <div>
                            <div>
                                <button class="btn btn-outline-secondary">
                                    -
                                </button>
                                <button class="btn btn-outline-secondary">
                                    1
                                </button>
                                <button class="btn btn-outline-secondary">
                                    +
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-2 d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-outline-secondary btn-lg">
                    Add to Cart
                </button>
                <a href="{{ route('methodPage') }}"><button type="button" class="btn btn-success btn-lg">
                        Buy Now
                    </button>
                </a>
            </div>
        </div>
        <!-- End Content -->
    </div>
@endsection
