// Countdown setup
function startCountdown(targetDate, elementId) {
    const targetTime = new Date(targetDate).getTime();

    const countdown = setInterval(() => {
        const now = new Date().getTime();
        const timeLeft = targetTime - now;

        if (timeLeft <= 0) {
            document.getElementById(elementId).innerText = 'Event has started!';
            clearInterval(countdown);
            return;
        }

        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        document.getElementById(elementId).innerText = `${days}d ${hours}h ${minutes}m ${seconds}s`;
    }, 1000);
}

// Start countdowns
window.onload = () => {
    startCountdown('2025-04-26T17:30:00', 'nextEventCountdown');
    startCountdown('2025-08-09T17:30:00', 'nextAcademyCountdown');
};







// Scroll-triggered animations
function revealOnScroll() {
    const elements = document.querySelectorAll('.reveal');

    elements.forEach(el => {
        const windowHeight = window.innerHeight;
        const elementTop = el.getBoundingClientRect().top;
        const revealPoint = 100;

        if (elementTop < windowHeight - revealPoint) {
            el.classList.add('active');
        } else {
            el.classList.remove('active');
        }
    });
}

window.addEventListener('scroll', revealOnScroll);

// Initial check in case elements are already in view
revealOnScroll();

// CSS for reveal animations
const style = document.createElement('style');
style.innerHTML = `
    .reveal {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
`;
document.head.appendChild(style);