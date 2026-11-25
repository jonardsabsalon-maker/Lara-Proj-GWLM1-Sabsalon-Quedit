@extends('layouts.app')

@section('title', 'Contact | Kidits Cafe')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
<section class="page-head">
    <div class="container">
        <p class="eyebrow">Talk to our team</p>
        <h1>Contact Kidits Cafe</h1>
        <p class="lead">Have a question, reservation request, or event idea? Send us a note.</p>
    </div>
</section>

<section class="contact-section">
    <div class="container contact-grid">
        <aside class="contact-details" aria-label="Cafe contact details">
            <h2>Visit or reach us</h2>

            <div class="detail">
                <span class="detail-label">Address</span>
                <p>Rotonda, Ampayon, Butuan City</p>
            </div>

            <div class="detail">
                <span class="detail-label">Phone</span>
                <p><a href="tel:+639123456789">+63 912 345 6789</a></p>
            </div>

            <div class="detail">
                <span class="detail-label">Email</span>
                <p><a href="mailto:hello@kiditscafe.com">hello@kiditscafe.com</a></p>
            </div>

            <div class="detail">
                <span class="detail-label">Hours</span>
                <p>Open daily, 7:00 a.m. to 9:00 p.m.</p>
            </div>
        </aside>

        <div class="form-card">
            <h2>Send a message</h2>

            <form id="contact-form" novalidate>
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" autocomplete="name" aria-describedby="name-error">
                    <p class="field-error" id="name-error" role="alert"></p>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" autocomplete="email" aria-describedby="email-error">
                    <p class="field-error" id="email-error" role="alert"></p>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input id="subject" name="subject" type="text" aria-describedby="subject-error">
                    <p class="field-error" id="subject-error" role="alert"></p>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="6" aria-describedby="message-error"></textarea>
                    <p class="field-error" id="message-error" role="alert"></p>
                </div>

                <button class="btn btn-primary" type="submit">Send message</button>
                <p id="form-success" class="form-success" role="status" aria-live="polite"></p>
            </form>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush
