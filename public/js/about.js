// About page: Read More / Read Less toggle + animated number counters
document.addEventListener('DOMContentLoaded', function () {

    // --- Read More / Read Less ---
    var btn = document.getElementById('read-more-btn');
    var extra = document.getElementById('more-text');
    if (btn && extra) {
        btn.addEventListener('click', function () {
            var opening = extra.hasAttribute('hidden');
            if (opening) { extra.removeAttribute('hidden'); }
            else { extra.setAttribute('hidden', ''); }
            btn.textContent = opening ? 'Read less' : 'Read more';
            btn.setAttribute('aria-expanded', String(opening));
        });
    }

    // --- Animated counters ---
    var counters = document.querySelectorAll('.count');
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function format(el, value) {
        el.textContent = value + (el.dataset.suffix || '');
    }

    function animate(el) {
        var target = parseInt(el.dataset.target, 10);
        if (reduceMotion) { format(el, target); return; }

        var duration = 1500;
        var start = null;
        function step(ts) {
            if (start === null) start = ts;
            var progress = Math.min((ts - start) / duration, 1);
            format(el, Math.floor(progress * target));
            if (progress < 1) requestAnimationFrame(step);
            else format(el, target);
        }
        requestAnimationFrame(step);
    }

    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries, obs) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) { animate(entry.target); obs.unobserve(entry.target); }
            });
        }, { threshold: 0.4 });
        counters.forEach(function (c) { observer.observe(c); });
    } else {
        counters.forEach(animate);
    }
});
