// Home page: image slider / carousel
document.addEventListener('DOMContentLoaded', function () {
    var slider = document.querySelector('.slider');
    if (!slider) return;

    var slides = slider.querySelectorAll('.slide');
    var dotsBox = slider.querySelector('.dots');
    var current = 0;
    var timer = null;
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Build one dot per slide
    slides.forEach(function (_, i) {
        var dot = document.createElement('button');
        dot.type = 'button';
        dot.setAttribute('role', 'tab');
        dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
        dot.addEventListener('click', function () { show(i); restart(); });
        dotsBox.appendChild(dot);
    });
    var dots = dotsBox.querySelectorAll('button');

    function show(index) {
        current = (index + slides.length) % slides.length;
        slides.forEach(function (s, i) { s.classList.toggle('is-active', i === current); });
        dots.forEach(function (d, i) { d.setAttribute('aria-selected', String(i === current)); });
    }

    function next() { show(current + 1); }
    function prev() { show(current - 1); }

    function start() {
        stop();
        if (reduceMotion) return;
        timer = setInterval(next, 5000);
    }
    function stop() { clearInterval(timer); }
    function restart() {
        stop();
        if (!slider.matches(':hover') && !slider.contains(document.activeElement)) start();
    }

    slider.querySelector('.next').addEventListener('click', function () { next(); restart(); });
    slider.querySelector('.prev').addEventListener('click', function () { prev(); restart(); });
    slider.addEventListener('mouseenter', stop);
    slider.addEventListener('mouseleave', restart);
    slider.addEventListener('focusin', stop);
    slider.addEventListener('focusout', function (event) {
        if (!slider.contains(event.relatedTarget) && !slider.matches(':hover')) start();
    });
    slider.addEventListener('keydown', function (e) {
        if (e.key === 'ArrowRight') { next(); restart(); }
        if (e.key === 'ArrowLeft') { prev(); restart(); }
    });

    show(0);
    start();
});
