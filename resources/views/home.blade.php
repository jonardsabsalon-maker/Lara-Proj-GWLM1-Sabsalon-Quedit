@extends('layouts.app')

@section('title', 'Home | Kidits Cafe')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
<section class="hero">
    <div class="container hero-grid">
        <div class="hero-copy">
            <p class="eyebrow">Fresh coffee &amp; warm pastries</p>
            <h1>Coffee poured slow, served warm.</h1>
            <p>Kidits Cafe is a neighborhood coffee bar. We roast in small batches, bake every morning, and keep the good chairs by the window.</p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="{{ url('/contact') }}">Find us</a>
                <a class="btn btn-ghost" href="{{ url('/about') }}">Our story</a>
            </div>
        </div>

        <aside class="board" aria-label="Sample menu">
            <h2>Today at the bar</h2>
            <ul>
                <li><span>Espresso</span><span>&#8369;90</span></li>
                <li><span>Flat white</span><span>&#8369;130</span></li>
                <li><span>Spanish latte</span><span>&#8369;150</span></li>
                <li><span>Matcha latte</span><span>&#8369;160</span></li>
                <li><span>Butter croissant</span><span>&#8369;95</span></li>
            </ul>
        </aside>
    </div>
</section>

<section class="slider-section">
    <div class="container">
        <h2>From the bar and the oven</h2>

        <div class="slider" aria-roledescription="carousel" aria-label="Featured drinks and pastries">
            <div class="slides">
                <figure class="slide is-active" style="--slide-bg: linear-gradient(135deg, rgba(20, 15, 10, .12), rgba(20, 15, 10, .18)), url('{{ asset('images/menu/spanish-latte.jpg') }}');">
                    <figcaption>
                        <h3>Spanish latte</h3>
                        <p>Espresso, steamed milk, and a spoon of condensed milk.</p>
                    </figcaption>
                </figure>
                <figure class="slide" style="--slide-bg: linear-gradient(135deg, rgba(20, 15, 10, .12), rgba(20, 15, 10, .18)), url('{{ asset('images/menu/matcha-latte.jpg') }}');">
                    <figcaption>
                        <h3>Ceremonial matcha</h3>
                        <p>Whisked to order, hot or iced.</p>
                    </figcaption>
                </figure>
                <figure class="slide" style="--slide-bg: linear-gradient(135deg, rgba(20, 15, 10, .12), rgba(20, 15, 10, .18)), url('{{ asset('images/menu/butter-croissant.jpg') }}');">
                    <figcaption>
                        <h3>Morning croissants</h3>
                        <p>Out of the oven by 7 a.m. and gone by noon.</p>
                    </figcaption>
                </figure>
            </div>

            <button class="slider-btn prev" type="button" aria-label="Previous slide">&#8249;</button>
            <button class="slider-btn next" type="button" aria-label="Next slide">&#8250;</button>
            <div class="dots" role="tablist" aria-label="Choose slide"></div>
        </div>
    </div>
</section>

<section class="visit">
    <div class="container visit-grid">
        <div>
            <h2>Come by</h2>
            <p>Rotonda, Ampayon, Butuan City</p>
            <p>Open daily, 7:00 a.m. to 9:00 p.m.</p>
        </div>
        <a class="btn btn-primary" href="{{ url('/contact') }}">Send us a message</a>
    </div>
</section>
@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush
