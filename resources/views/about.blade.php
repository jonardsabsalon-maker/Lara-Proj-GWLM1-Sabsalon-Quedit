@extends('layouts.app')

@section('title', 'About | Kidits Cafe')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
<section class="page-head">
    <div class="container">
        <h1>About Kidits Cafe</h1>
        <p class="lead">A small cafe built around good coffee and unhurried conversations.</p>
    </div>
</section>

<section class="story">
    <div class="container narrow">
        <h2>Our story</h2>
        <p>Kidits Cafe started as a corner counter with one espresso machine and a handful of regulars. Today it is a full cafe, but we still pull every shot by hand and learn every customer's usual order.</p>
        <p>We work with local farms for our beans and bake our pastries in the shop each morning, so what you taste is what we made that day.</p>
        <div id="more-text" class="more-text" hidden>
            <p>Our name comes from the group of friends who first gathered here every Saturday. The cafe grew from that table, and we keep a few seats open for anyone who wants to join one.</p>
            <p>Behind the bar, our baristas train for weeks before serving their first customer. We care about the details: water temperature, grind size, and the time you wait.</p>
        </div>
        <button id="read-more-btn" class="btn btn-ghost" type="button" aria-expanded="false" aria-controls="more-text">Read more</button>
    </div>
</section>

<section class="mv">
    <div class="container mv-grid">
        <article>
            <h2>Mission</h2>
            <p>To serve honest, well-made coffee and food in a place where people feel welcome to stay.</p>
        </article>
        <article>
            <h2>Vision</h2>
            <p>To be the neighborhood cafe people think of first, for a quick cup or a long afternoon.</p>
        </article>
    </div>
</section>

<section class="stats" aria-label="Kidits Cafe in numbers">
    <div class="container stats-grid">
        <div><span class="count" data-target="500" data-suffix="+">0</span><p>Regular customers</p></div>
        <div><span class="count" data-target="30" data-suffix="+">0</span><p>Drinks on the menu</p></div>
        <div><span class="count" data-target="12" data-suffix="">0</span><p>Pastries baked daily</p></div>
        <div><span class="count" data-target="5" data-suffix="">0</span><p>Years serving coffee</p></div>
    </div>
</section>

<section class="team">
    <div class="container">
        <h2>Meet the team</h2>
        <div class="team-grid">
            <article class="card">
                <img class="team-photo" src="{{ asset('images/barista/john-paul-quedit.jpg') }}" alt="John Paul Quedit" width="160" height="160">
                <h3>John Paul Quedit</h3>
                <p class="role">Founder</p>
                <p>Sets the menu and tastes every new batch of beans.</p>
            </article>
            <article class="card">
                <img class="team-photo" src="{{ asset('images/barista/jonard-sabsalon.webp') }}" alt="Jonard Sabsalon" width="160" height="160">
                <h3>Jonard Sabsalon</h3>
                <p class="role">Bar lead</p>
                <p>Trains the baristas and dials in the espresso each morning.</p>
            </article>
            <article class="card">
                <img class="team-photo" src="{{ asset('images/barista/nash-rada.jpg') }}" alt="Nash Rada" width="160" height="160">
                <h3>Nash Rada</h3>
                <p class="role">Kitchen</p>
                <p>Starts at 4 a.m. so the croissants are warm when we open.</p>
            </article>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush
