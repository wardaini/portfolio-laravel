/* ═══════════════════════════════════════════════════════
   PORTFOLIO JS — Animations, Cursor, Canvas, Typewriter
   ═══════════════════════════════════════════════════════ */

document.addEventListener('DOMContentLoaded', () => {

  /* ── Custom Cursor ──────────────────────────────────── */
  const dot  = document.getElementById('cursorDot');
  const ring = document.getElementById('cursorRing');
  let mouseX = 0, mouseY = 0;
  let ringX  = 0, ringY  = 0;

  document.addEventListener('mousemove', e => {
    mouseX = e.clientX; mouseY = e.clientY;
    dot.style.left  = mouseX + 'px';
    dot.style.top   = mouseY + 'px';
  });

  (function animateRing() {
    ringX += (mouseX - ringX) * .12;
    ringY += (mouseY - ringY) * .12;
    ring.style.left = ringX + 'px';
    ring.style.top  = ringY + 'px';
    requestAnimationFrame(animateRing);
  })();

  /* ── Nav: scroll behaviour ──────────────────────────── */
  const nav = document.getElementById('mainNav');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 40);
  });

  /* ── Mobile Nav Toggle ──────────────────────────────── */
  const toggle = document.getElementById('navToggle');
  const mobile = document.getElementById('navMobile');
  toggle?.addEventListener('click', () => {
    mobile.classList.toggle('open');
    const spans = toggle.querySelectorAll('span');
    const isOpen = mobile.classList.contains('open');
    if (isOpen) {
      spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
      spans[1].style.opacity = '0';
      spans[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
    } else {
      spans.forEach(s => { s.style.transform = ''; s.style.opacity = ''; });
    }
  });
  document.querySelectorAll('.mobile-link').forEach(l => {
    l.addEventListener('click', () => {
      mobile.classList.remove('open');
      const spans = toggle.querySelectorAll('span');
      spans.forEach(s => { s.style.transform = ''; s.style.opacity = ''; });
    });
  });

  /* ── Hero Canvas — Particle Network ────────────────── */
  const canvas  = document.getElementById('heroCanvas');
  const ctx     = canvas.getContext('2d');
  let particles = [];
  const PARTICLE_COUNT = 80;
  const MAX_DIST       = 140;

  function resizeCanvas() {
    canvas.width  = window.innerWidth;
    canvas.height = window.innerHeight;
  }
  resizeCanvas();
  window.addEventListener('resize', resizeCanvas);

  class Particle {
    constructor() { this.reset(); }
    reset() {
      this.x  = Math.random() * canvas.width;
      this.y  = Math.random() * canvas.height;
      this.vx = (Math.random() - .5) * .4;
      this.vy = (Math.random() - .5) * .4;
      this.r  = Math.random() * 2 + 1;
      this.type = Math.random() > .5 ? 'blue' : 'green';
      this.alpha = Math.random() * .5 + .3;
    }
    update() {
      this.x += this.vx; this.y += this.vy;
      if (this.x < 0 || this.x > canvas.width)  this.vx *= -1;
      if (this.y < 0 || this.y > canvas.height) this.vy *= -1;
    }
    draw() {
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
      ctx.fillStyle = this.type === 'blue'
        ? `rgba(0,195,255,${this.alpha})`
        : `rgba(0,255,136,${this.alpha})`;
      ctx.fill();
    }
  }

  for (let i = 0; i < PARTICLE_COUNT; i++) particles.push(new Particle());

  let animFrame;
  function animateCanvas() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    particles.forEach(p => { p.update(); p.draw(); });
    // Draw connections
    for (let i = 0; i < particles.length; i++) {
      for (let j = i + 1; j < particles.length; j++) {
        const dx   = particles[i].x - particles[j].x;
        const dy   = particles[i].y - particles[j].y;
        const dist = Math.sqrt(dx * dx + dy * dy);
        if (dist < MAX_DIST) {
          const alpha = (1 - dist / MAX_DIST) * .25;
          ctx.beginPath();
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.strokeStyle = `rgba(0,195,255,${alpha})`;
          ctx.lineWidth = .5;
          ctx.stroke();
        }
      }
    }
    animFrame = requestAnimationFrame(animateCanvas);
  }
  animateCanvas();

  /* ── Typewriter ─────────────────────────────────────── */
  const words = [
    'AI & ML Enthusiast',
    'Informatics Student',
    'Research & Data Learner',
    'Laravel Developer',
    'Open Source Contributor',
    'Published Researcher',
  ];
  const tyEl = document.getElementById('typewriter');
  let wIdx = 0, cIdx = 0, deleting = false;

  function typeLoop() {
    const word = words[wIdx];
    if (!deleting) {
      cIdx++;
      tyEl.textContent = word.slice(0, cIdx);
      if (cIdx === word.length) {
        setTimeout(() => { deleting = true; typeLoop(); }, 2000);
        return;
      }
    } else {
      cIdx--;
      tyEl.textContent = word.slice(0, cIdx);
      if (cIdx === 0) {
        deleting = false;
        wIdx = (wIdx + 1) % words.length;
      }
    }
    setTimeout(typeLoop, deleting ? 50 : 100);
  }
  typeLoop();

  /* ── Counter Animation ──────────────────────────────── */
  function animateCounter(el) {
    const target = parseInt(el.dataset.count);
    let current  = 0;
    const step   = target / 60;
    const timer  = setInterval(() => {
      current += step;
      if (current >= target) { current = target; clearInterval(timer); }
      el.textContent = Math.floor(current);
    }, 25);
  }

  /* ── Skill Bars ─────────────────────────────────────── */
  function animateSkillBars() {
    document.querySelectorAll('.skill-fill').forEach(bar => {
      bar.style.width = bar.dataset.width + '%';
    });
  }

  /* ── IntersectionObserver: Reveal + Counters + Bars ─── */
  const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');

        // Counters
        entry.target.querySelectorAll('[data-count]').forEach(el => animateCounter(el));
        // Skill bars
        if (entry.target.querySelector('.skill-fill')) animateSkillBars();

        revealObs.unobserve(entry.target);
      }
    });
  }, { threshold: .12 });

  document.querySelectorAll('.reveal').forEach(el => revealObs.observe(el));

  // Also observe stat nums directly (they're in hero which isn't .reveal)
  const statObs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.querySelectorAll('[data-count]').forEach(animateCounter);
        statObs.unobserve(e.target);
      }
    });
  }, { threshold: .5 });
  const heroStats = document.querySelector('.hero-stats');
  if (heroStats) statObs.observe(heroStats);

  /* ── Project Filter ─────────────────────────────────── */
  const filterBtns = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.project-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const filter = btn.dataset.filter;

      projectCards.forEach(card => {
        const match = filter === 'all' || card.dataset.category === filter;
        card.style.transition = 'opacity .3s, transform .3s';
        if (match) {
          card.style.opacity = '1';
          card.style.transform = '';
          card.style.pointerEvents = '';
        } else {
          card.style.opacity = '0';
          card.style.transform = 'scale(.95)';
          card.style.pointerEvents = 'none';
        }
      });
    });
  });

  /* ── GitHub Refresh Button ──────────────────────────── */
  const refreshBtn = document.getElementById('refreshRepos');
  const reposRow   = document.getElementById('githubReposRow');

  refreshBtn?.addEventListener('click', async () => {
    refreshBtn.classList.add('loading');
    refreshBtn.disabled = true;
    try {
      const res  = await fetch('/github-repos');
      const data = await res.json();

      if (data.length) {
        reposRow.innerHTML = data.map(r => `
          <a href="${r.url}" target="_blank" rel="noopener" class="github-repo-card">
            <div class="repo-name">${r.name}</div>
            ${r.description ? `<div class="repo-desc">${r.description.slice(0, 60)}${r.description.length > 60 ? '…' : ''}</div>` : ''}
            <div class="repo-meta">
              ${r.language !== 'N/A' ? `<span class="repo-lang">● ${r.language}</span>` : ''}
              <span class="repo-stars">★ ${r.stars}</span>
              <span class="repo-updated">${r.updated}</span>
            </div>
          </a>
        `).join('');
      }
    } catch (e) {
      console.warn('GitHub refresh failed:', e);
    } finally {
      refreshBtn.classList.remove('loading');
      refreshBtn.disabled = false;
    }
  });

  /* ── Active nav for certifications section ──────────── */
  const sections = document.querySelectorAll('section[id]');
  const navLinks  = document.querySelectorAll('.nav-link');

  const navObs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        navLinks.forEach(l => l.style.color = '');
        const active = document.querySelector(`.nav-link[href="#${e.target.id}"]`);
        if (active) active.style.color = 'var(--green)';
      }
    });
  }, { threshold: .45 });
  sections.forEach(s => navObs.observe(s));

  /* ── Smooth scroll for all anchor links ─────────────── */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  /* ── Float card parallax ────────────────────────────── */
  document.addEventListener('mousemove', e => {
    const cx = window.innerWidth / 2;
    const cy = window.innerHeight / 2;
    const dx = (e.clientX - cx) / cx;
    const dy = (e.clientY - cy) / cy;

    document.querySelectorAll('.float-card').forEach((card, i) => {
      const factor = (i + 1) * 6;
      card.style.transform = `translate(${dx * factor}px, ${dy * factor}px)`;
    });
  });

  /* ── Form feedback ──────────────────────────────────── */
  const form = document.querySelector('.contact-form');
  if (form) {
    form.addEventListener('submit', () => {
      const btn = form.querySelector('button[type="submit"]');
      btn.innerHTML = '<span>Mengirim...</span>';
      btn.disabled = true;
    });
  }

  /* ── Glitch effect on hero title hover ─────────────── */
  const heroTitle = document.querySelector('.title-name');
  if (heroTitle) {
    heroTitle.addEventListener('mouseenter', () => {
      heroTitle.style.animation = 'glitch .3s steps(2) infinite';
    });
    heroTitle.addEventListener('mouseleave', () => {
      heroTitle.style.animation = '';
    });
  }

  console.log('%c[AMARE_] Portfolio loaded.', 'color:#00ff88; font-family:monospace; font-size:14px');
  console.log('%cWardatul A\'ani — AI & ML Enthusiast ⚡', 'color:#00c3ff; font-family:monospace; font-size:11px');
});
