const track = document.getElementById('marquee-track');
if (track) {
    let x = 0;
    const half = track.scrollWidth / 2;
    const speed = 0.5; // px per frame, adjust to taste

    (function tick() {
        x -= speed;
        if (x <= -half) x = 0;
        track.style.transform = `translateX(${x}px)`;
        requestAnimationFrame(tick);
    })();
}
