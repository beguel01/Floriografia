document.addEventListener('DOMContentLoaded', () => {
  const elementos = document.querySelectorAll('.reveal');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target); // anima só uma vez
      }
    });
  }, { threshold: 0.15 });

  elementos.forEach((el) => observer.observe(el));

  // stagger: cada card do carrossel entra com um pequeno atraso a mais que o anterior
  document.querySelectorAll('#flores .card-flor').forEach((card, index) => {
    card.style.setProperty('--reveal-delay', `${index * 0.08}s`);
  });
});

// Navbar só aparece depois da capa (só existe #capa no index.php)
const capa = document.querySelector('#capa');
const nav = document.querySelector('nav');

if (capa && nav) {
  nav.classList.add('nav-escondida');

  window.addEventListener('scroll', () => {
    if (window.scrollY > window.innerHeight * 0.6) {
      nav.classList.add('nav-visivel');
    } else {
      nav.classList.remove('nav-visivel');
    }
  });
}