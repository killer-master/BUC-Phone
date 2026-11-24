@extends('layouts.app')

@section('content')
    <section id="bucCarousel" class="carousel slide buc-carousel" data-bs-ride="carousel" data-bs-interval="8000">
        <div class="carousel-indicators buc-carousel-indicators">
            <button type="button" data-bs-target="#bucCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Show slide 1"></button>
            <button type="button" data-bs-target="#bucCarousel" data-bs-slide-to="1" aria-label="Show slide 2"></button>
            <button type="button" data-bs-target="#bucCarousel" data-bs-slide-to="2" aria-label="Show slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="8000">
                <img src="{{ asset('assets/images/buc-footer.jpg') }}" class="d-block w-100 buc-carousel-image" alt="BUC Phones collection">
                <div class="buc-carousel-shade"></div>
                <div class="buc-slide-content">
                    <div class="buc-slide-copy">
                        <span class="buc-carousel-eyebrow">BUC Phones</span>
                        <h1>Technology<br>for every moment.</h1>
                        <p>Discover devices that match the way you work, create and connect.</p>
                        <a href="#" class="buc-carousel-cta">Shop the collection <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="buc-slide-visual">
                        <img src="{{ asset('assets/images/carousel1.webp') }}" alt="Featured BUC Phones device">
                    </div>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="8000">
                <img src="{{ asset('assets/images/photo_2026-11-16_10-32-05.jpg') }}" class="d-block w-100 buc-carousel-image" alt="Latest BUC Phones devices">
                <div class="buc-carousel-shade"></div>
                <div class="buc-slide-content">
                    <div class="buc-slide-copy">
                        <span class="buc-carousel-eyebrow">Latest selection</span>
                        <h1>Find your<br>perfect device.</h1>
                        <p>Premium phones, reliable accessories and support you can count on.</p>
                        <a href="#" class="buc-carousel-cta">Explore devices <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="buc-slide-visual">
                        <img src="{{ asset('assets/images/carousel2.webp') }}" alt="Featured device from our latest selection">
                    </div>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="8000">
                <img src="{{ asset('assets/images/buc-logo.jpg') }}" class="d-block w-100 buc-carousel-image" alt="BUC Phones brand">
                <div class="buc-carousel-shade"></div>
                <div class="buc-slide-content">
                    <div class="buc-slide-copy">
                        <span class="buc-carousel-eyebrow">Built to keep you connected</span>
                        <h1>More choice.<br>Better value.</h1>
                        <p>Smart phones and everyday essentials, all in one trusted place.</p>
                        <a href="#" class="buc-carousel-cta">View offers <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="buc-slide-visual">
                        <img src="{{ asset('assets/images/carousel3.webp') }}" alt="Featured BUC Phones offer">
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev buc-carousel-control" type="button" data-bs-target="#bucCarousel" data-bs-slide="prev" aria-label="Previous slide">
            <span class="buc-carousel-control-icon" aria-hidden="true"><i class="fa-solid fa-chevron-left"></i></span>
        </button>
        <button class="carousel-control-next buc-carousel-control" type="button" data-bs-target="#bucCarousel" data-bs-slide="next" aria-label="Next slide">
            <span class="buc-carousel-control-icon" aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
        </button>

        <div class="buc-carousel-progress" aria-label="Time until next slide">
            <span id="bucCarouselProgress"></span>
        </div>
    </section>
@endsection
