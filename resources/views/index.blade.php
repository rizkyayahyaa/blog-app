@extends('layout.mainlayout')

@section('content')
<div class="container">
    <div class="home-banner home-banner-three">
        <div class="row align-items-center w-100">
            <div class="col-lg-6 col-md-12 mx-auto">
                <div class="section-search section-section-five">
                    <h1 style="color: blue">The Largest Professional <span>Car</span> Rental</h1>
                    <p style="color: grey">
                        Car rental is a service allowing individuals or companies to rent vehicles for a short period, ranging from a few hours to several weeks. It's ideal for those who need a temporary vehicle for personal, business, or travel purposes without owning one.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="floating-img">
                    <img src="#" alt="audi" class="img-fluid rotate-img">
                </div>
                <div class="car-five-arrow-img">
                    <img src="#" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Banner Section -->

<!-- Feature Section -->
<section class="featured-categories-section">
    <div class="featured-category-bg-img">
        <img src="{{ URL::asset('/assets/img/car-category-five.png') }}" alt="">
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="section-heading car-wash-heading car-wash-feature aos" data-aos="fade-up">
                <div class="car-wash-img-five">
                    <img src="{{ URL::asset('/assets/img/icons/car-wash-header-1.svg') }}" alt=""
                        class="car-wash-header-one">
                    <h2>Cars Available</h2>
                    <img src="{{ URL::asset('/assets/img/icons/car-wash-header-2.svg') }}" alt=""
                        class="car-wash-header-two">
                </div>
                <p>What do you need to find?</p>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        @foreach($cars as $car)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="service-widget service-two aos" data-aos="fade-up">
                    <div class="service-img service-four-img">
                        @if($car->photo)
                            <img class="img-fluid serv-img" alt="{{ $car->name }}" src="{{ asset('storage/' . $car->photo) }}">
                        @else
                            <img class="img-fluid serv-img" alt="No Image" src="{{ URL::asset('/assets/img/no-image.png') }}">
                        @endif
                    </div>
                    <div class="service-content service-content-five">
                        <div class="feature-content-bottom">
                            <h3>{{ $car->name }}</h3>
                            <p>Model: {{ $car->model }}</p>
                            <p>Price: Rp{{ number_format($car->price, 2) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}
</section>
<!-- /Feature Section -->

<!-- Booking Cars Available -->
<section class="feature-category-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-heading car-wash-heading aos" data-aos="fade-up">
                    <div class="car-wash-img-five">
                        <div class="car-wash-img-five">
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-1.svg') }}" alt=""
                                class="car-wash-header-one">
                            <h2>Booking Cars Available</h2>
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-2.svg') }}" alt=""
                                class="car-wash-header-two">
                        </div>
                    </div>
                    <p>What do you need to find?</p>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            @foreach($cars as $car)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget aos" data-aos="fade-up">
                        <div class="service-img">
                            @if($car->photo)
                                <img class="img-fluid serv-img" alt="{{ $car->name }}" src="{{ asset('storage/' . $car->photo) }}">
                            @else
                                <img class="img-fluid serv-img" alt="No Image" src="{{ URL::asset('/assets/img/no-image.png') }}">
                            @endif
                            <div class="fav-item ">
                                <div class="features-service-five">
                                    <div class="features-service-rating">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                    <h6>Featured</h6>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-content service-feature-five">
                            <h3 class="title">
                                <a href="{{ route('book.form', ['carId' => $car->id]) }}">{{ $car->name }} - {{ $car->model }}</a>
                            </h3>
                            <div class="feature-services-five">
                                <h6>Rp{{ number_format($car->price, 2) }}</h6><span>{{ $car->discount_price ? '$'.number_format($car->discount_price, 2) : '' }}</span>
                            </div>
                            <div class="feature-service-botton">
                                <div class="feature-service-btn">
                                    <a href="{{ route('book.form', ['carId' => $car->id]) }}">Book Car</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}
        {{-- <div class="btn-sec btn-sec-five aos" data-aos="fade-up">
            <a href="{{ url('search') }}" class="btn btn-primary btn-view">View All</a>
        </div> --}}
    </div>
</section>
<!-- /Featured Services -->

@component('components.model-popup')
@endcomponent
@component('components.scrollToTop')
@endcomponent
@endsection
