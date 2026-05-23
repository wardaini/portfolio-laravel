@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section class="hero" id="home">
    <canvas class="hero-canvas" id="heroCanvas"></canvas>
    <div class="hero-content">
        <div class="hero-badge"><span class="badge-dot"></span><span>Open to Opportunities</span></div>
        <div class="hero-greeting"><span class="greeting-line">> Hello, World!</span></div>
        <h1 class="hero-title">
            <span class="title-line title-name">Wardatul A'ani</span>
            <span class="title-line title-role">
                <span class="role-prefix">// </span>
                <span class="typewriter" id="typewriter"></span>
                <span class="type-cursor">|</span>
            </span>
        </h1>
        <p class="hero-desc">
            Informatika Student · AI & Machine Learning Enthusiast<br>
            Research & Digital Technology Learner<br>
            <span class="highlight">📍 Lhokseumawe, Aceh — Universitas Malikussaleh</span>
        </p>
        <div class="hero-actions">
            <a href="#projects" class="btn btn-primary">
                <span>Lihat Projects</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="https://github.com/wardaini" target="_blank" class="btn btn-ghost">
                <svg viewBox="0 0 24 24" fill="currentColor" style="width:16px;height:16px"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                GitHub
            </a>
            <a href="#contact" class="btn btn-ghost">Hubungi Saya</a>
        </div>
        <div class="hero-stats">
            <div class="stat"><span class="stat-num" data-count="13">0</span><span class="stat-plus">+</span><span class="stat-label">Repositories</span></div>
            <div class="stat-divider"></div>
            <div class="stat"><span class="stat-num" data-count="10">0</span><span class="stat-plus">+</span><span class="stat-label">Sertifikasi</span></div>
            <div class="stat-divider"></div>
            <div class="stat"><span class="stat-num" data-count="1">0</span><span class="stat-plus"></span><span class="stat-label">Int'l Publication</span></div>
        </div>
    </div>
    <div class="hero-scroll"><span>Scroll</span><div class="scroll-arrow"><span></span><span></span></div></div>
    <div class="hero-floats">
        <div class="float-card float-card-1"><span class="float-icon">🤖</span><span>AI / ML</span></div>
        <div class="float-card float-card-2"><span class="float-icon">🔬</span><span>Researcher</span></div>
        <div class="float-card float-card-3"><span class="float-icon">📄</span><span>Published</span></div>
    </div>
</section>

{{-- ABOUT --}}
<section class="about" id="about">
    <div class="section-container">
        <div class="section-header reveal">
            <span class="section-tag">// 01 — About</span>
            <h2 class="section-title">Who I Am</h2>
        </div>
        <div class="about-grid">
            <div class="about-visual reveal">
                <div class="about-img-wrapper">
                    <div class="about-img-border"></div>
                    <div class="about-img-placeholder">
                        <img src="{{ asset('images/profile.jpg') }}" 
                            alt="Wardatul A'ani" 
                            style="width:100%;height:100%;object-fit:cover;object-position:center top;">
                    </div>
                    <div class="about-img-glow"></div>
                </div>
                <div class="about-code-snippet">
                    <div class="snippet-header">
                        <span class="dot red"></span><span class="dot yellow"></span><span class="dot green"></span>
                        <span class="snippet-filename">profile.py</span>
                    </div>
                    <pre class="snippet-body"><code><span class="kw">profile</span> = {
  <span class="str">'name'</span>  : <span class="str">'Wardatul A'ani'</span>,
  <span class="str">'alias'</span> : <span class="str">'Amare'</span>,
  <span class="str">'role'</span>  : <span class="str">'AI & ML Learner'</span>,
  <span class="str">'uni'</span>   : <span class="str">'Unimal — S1 Teknik Informatika'</span>,
  <span class="str">'city'</span>  : <span class="str">'Lhokseumawe, Aceh'</span>,
  <span class="str">'origin'</span>: <span class="str">'Peureulak, Aceh Timur'</span>,
}</code></pre>
                </div>
                <div class="about-links-grid">
                    <a href="https://www.linkedin.com/in/wardatul-a-ani-a716b3319/" target="_blank" class="about-social-btn">
                        <span>💼</span> LinkedIn
                    </a>
                    <a href="https://github.com/wardaini" target="_blank" class="about-social-btn">
                        <span>🐙</span> GitHub
                    </a>
                    <a href="https://www.dicoding.com/users/wardaini/academies" target="_blank" class="about-social-btn">
                        <span>🎓</span> Dicoding
                    </a>
                    <a href="https://www.tiktok.com/@zyxwv__ihgfedcba" target="_blank" class="about-social-btn">
                        <span>🎵</span> TikTok
                    </a>
                    <a href="https://www.instagram.com/zyxwv__ihgfedcba" target="_blank" class="about-social-btn">
                        <span>📸</span> Instagram
                    </a>
                    <a href="https://doi.org/10.60401/ijabc.163" target="_blank" class="about-social-btn about-social-btn--pub">
                        <span>📄</span> Publication
                    </a>
                </div>
            </div>
            <div class="about-content reveal">
                <p class="about-text">
                    Hai! Saya <strong>Wardatul A'ani</strong>, akrab dipanggil <strong>Amare</strong> — mahasiswi S1 Informatika <strong>Universitas Malikussaleh</strong> semester 6 dari Peureulak, Aceh Timur.
                </p>
                <p class="about-text">
                    Saya memiliki minat besar pada <strong>Artificial Intelligence, Machine Learning</strong>, analisis data, Internet of Things (IoT) dasar, pengembangan sistem, tata kelola digital, serta riset berbasis teknologi.
                </p>
                <p class="about-text">
                    Aktif mengikuti pelatihan, sertifikasi, publikasi ilmiah internasional, kompetisi essay, LKTI, dan innovation paper. Terbiasa bekerja secara individu maupun tim dengan kemampuan analytical thinking dan problem solving.
                </p>
                <div class="about-interests">
                    <span class="interest-tag">🤖 AI / ML</span>
                    <span class="interest-tag">📊 Data Analysis</span>
                    <span class="interest-tag">🔬 Research</span>
                    <span class="interest-tag">🌐 Web Dev</span>
                    <span class="interest-tag">☁️ Cloud AI</span>
                    <span class="interest-tag">🔌 IoT Dasar</span>
                    <span class="interest-tag">✍️ Scientific Writing</span>
                    <span class="interest-tag">🧮 Mathematics</span>
                </div>
                <div class="about-actions">
                    <a href="https://mail.google.com/mail/?view=cm&to=awardatul5@gmail.com" target="_blank" class="btn btn-primary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        Kirim Email
                    </a>
                    <a href="https://www.linkedin.com/in/wardatul-a-ani-a716b3319/" target="_blank" class="btn btn-ghost">LinkedIn</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- SKILLS --}}
<section class="skills" id="skills">
    <div class="section-container">
        <div class="section-header reveal">
            <span class="section-tag">// 02 — Skills</span>
            <h2 class="section-title">Tech Stack</h2>
        </div>
        <div class="skills-categories reveal">
            @foreach ($skills as $category => $items)
            <div class="skill-category">
                <h3 class="skill-cat-title">{{ $category }}</h3>
                <div class="skill-items">
                    @foreach ($items as $skill)
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-icon">{{ $skill['icon'] }}</span>
                            <span class="skill-name">{{ $skill['name'] }}</span>
                            <span class="skill-pct">{{ $skill['level'] }}%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-fill" data-width="{{ $skill['level'] }}"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <div class="tech-icons-row reveal">
            @foreach (['Python','Laravel','PHP','JavaScript','React','Node.js','SQL','MySQL','MongoDB','Git','RAG','LLM','FAISS','Streamlit','GeoPandas','PSPP','Tinkercad','Jupyter','Tailwind CSS','AWS','Alibaba Cloud'] as $tech)
            <div class="tech-icon-pill">{{ $tech }}</div>
            @endforeach
        </div>
    </div>
</section>

{{-- PROJECTS --}}
<section class="projects" id="projects">
    <div class="section-container">
        <div class="section-header reveal">
            <span class="section-tag">// 03 — Projects</span>
            <h2 class="section-title">Featured Work</h2>
            <p class="section-sub">Terorganisir per kategori — klik GitHub untuk source code lengkap.</p>
        </div>

        {{-- GitHub Live Repos Strip --}}
        <div class="github-strip reveal" id="githubStrip">
            <div class="github-strip-header">
                <span class="github-strip-title">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                    Live GitHub Repositories
                </span>
                <button class="github-refresh-btn" id="refreshRepos" title="Refresh dari GitHub">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 11-2.12-9.36L23 10"/></svg>
                    Refresh
                </button>
            </div>
            <div class="github-repos-row" id="githubReposRow">
                @forelse ($githubRepos as $repo)
                <a href="{{ $repo['url'] }}" target="_blank" class="github-repo-card">
                    <div class="repo-name">{{ $repo['name'] }}</div>
                    @if($repo['description'])
                    <div class="repo-desc">{{ Str::limit($repo['description'], 60) }}</div>
                    @endif
                    <div class="repo-meta">
                        @if($repo['language'] !== 'N/A')
                        <span class="repo-lang">● {{ $repo['language'] }}</span>
                        @endif
                        <span class="repo-stars">★ {{ $repo['stars'] }}</span>
                        <span class="repo-updated">{{ $repo['updated'] }}</span>
                    </div>
                </a>
                @empty
                <p class="github-empty">Repos akan dimuat dari GitHub API</p>
                @endforelse
            </div>
        </div>

        {{-- Project Groups --}}
        @foreach ($projectGroups as $group)
        <div class="project-group reveal" id="group-{{ $group['id'] }}">
            <div class="project-group-header" style="--group-color: {{ $group['color'] }}">
                <h3 class="project-group-title">{{ $group['label'] }}</h3>
                <span class="project-group-count">{{ count($group['items']) }} projects</span>
            </div>
            <div class="projects-grid-group">
                @foreach ($group['items'] as $idx => $project)
                <article class="project-card {{ isset($project['featured']) && $project['featured'] ? 'project-featured' : '' }}" style="--group-color: {{ $group['color'] }}">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <span class="project-emoji">{{ $project['emoji'] }}</span>
                        </div>
                        <div class="project-overlay">
                            @if($project['github'] && $project['github'] !== '#')
                            <a href="{{ $project['github'] }}" class="project-link" target="_blank" rel="noopener">
                                <svg viewBox="0 0 24 24" fill="currentColor" style="width:14px;height:14px"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                                GitHub
                            </a>
                            @endif
                            @if($project['demo'])
                            <a href="{{ $project['demo'] }}" class="project-link project-link-ghost" target="_blank" rel="noopener">Live / DOI</a>
                            @endif
                        </div>
                    </div>
                    <div class="project-info">
                        <div class="project-meta">
                            <span class="project-num">{{ str_pad($idx + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            @if(isset($project['badge']))
                            <span class="project-pub-badge">{{ $project['badge'] }}</span>
                            @endif
                            @if(isset($project['featured']) && $project['featured'])
                            <span class="project-featured-badge">★ Featured</span>
                            @endif
                        </div>
                        <h3 class="project-title">{{ $project['title'] }}</h3>
                        <p class="project-desc">{{ $project['desc'] }}</p>
                        <div class="project-stack">
                            @foreach ($project['stack'] as $tech)
                            <span class="stack-tag">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
        @endforeach

        <div class="projects-more reveal">
            <a href="https://github.com/wardaini" target="_blank" class="btn btn-ghost">
                Semua Repository di GitHub
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- EXPERIENCE --}}
<section class="experience" id="experience">
    <div class="section-container">
        <div class="section-header reveal">
            <span class="section-tag">// 04 — Experience</span>
            <h2 class="section-title">Journey</h2>
        </div>
        <div class="timeline">
            @foreach ($experiences as $exp)
            <div class="timeline-item reveal">
                <div class="timeline-dot exp-type--{{ $exp['type'] }}">
                    <span class="timeline-dot-inner"></span>
                </div>
                <div class="timeline-card">
                    <div class="timeline-type-badge type-{{ $exp['type'] }}">
                        {{ ['work'=>'💼 Work','org'=>'🏛️ Organization','event'=>'🎤 Event','training'=>'🎓 Training','academic'=>'📚 Academic'][$exp['type']] }}
                    </div>
                    <div class="timeline-header">
                        <div>
                            <h3 class="timeline-role">{{ $exp['role'] }}</h3>
                            <span class="timeline-company">@ {{ $exp['org'] }}</span>
                        </div>
                        <span class="timeline-period">{{ $exp['period'] }}</span>
                    </div>
                    <p class="timeline-desc">{{ $exp['desc'] }}</p>
                    <div class="timeline-stack">
                        @foreach ($exp['stack'] as $t)
                        <span class="stack-tag">{{ $t }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CERTIFICATIONS --}}
<section class="certifications" id="certifications">
    <div class="section-container">
        <div class="section-header reveal">
            <span class="section-tag">// 05 — Certifications</span>
            <h2 class="section-title">Licenses & Certs</h2>
        </div>
        <div class="certs-grid reveal">
            @foreach ($certifications as $cert)
            <div class="cert-group" style="--cert-color: {{ $cert['color'] }}">
                <h3 class="cert-issuer">{{ $cert['issuer'] }}</h3>
                <ul class="cert-list">
                    @foreach ($cert['items'] as $item)
                    <li class="cert-item">
                        <span class="cert-check">✓</span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        <div class="cert-note reveal">
            <span class="cert-note-text">
                🔗 Semua sertifikat dapat diverifikasi di
                <a href="https://www.dicoding.com/users/wardaini/academies" target="_blank" class="cert-link">Dicoding Profile</a>
            </span>
        </div>
    </div>
</section>

{{-- CONTACT --}}
<section class="contact" id="contact">
    <div class="section-container">
        <div class="section-header reveal">
            <span class="section-tag">// 06 — Contact</span>
            <h2 class="section-title">Let's Connect</h2>
        </div>
        <div class="contact-grid">
            <div class="contact-info reveal">
                <p class="contact-intro">
                    Tertarik kolaborasi, penelitian, magang, atau sekadar diskusi tentang AI & teknologi? Saya terbuka untuk kesempatan baru!
                </p>
                <div class="contact-channels">
                    <a href="https://mail.google.com/mail/?view=cm&to=awardatul5@gmail.com" target="_blank" rel="noopener" class="contact-channel">
                        <div class="channel-icon">📧</div>
                        <div class="channel-info">
                            <span class="channel-label">Email</span>
                            <span class="channel-value">awardatul5@gmail.com</span>
                        </div>
                        <svg class="channel-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="https://wa.me/6282259130101" class="contact-channel" target="_blank" rel="noopener">
                        <div class="channel-icon">💬</div>
                        <div class="channel-info">
                            <span class="channel-label">WhatsApp</span>
                            <span class="channel-value">+62 822-5913-0101</span>
                        </div>
                        <svg class="channel-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/wardatul-a-ani-a716b3319/" class="contact-channel" target="_blank" rel="noopener">
                        <div class="channel-icon">💼</div>
                        <div class="channel-info">
                            <span class="channel-label">LinkedIn</span>
                            <span class="channel-value">wardatul-a-ani-a716b3319</span>
                        </div>
                        <svg class="channel-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="https://github.com/wardaini" class="contact-channel" target="_blank" rel="noopener">
                        <div class="channel-icon">🐙</div>
                        <div class="channel-info">
                            <span class="channel-label">GitHub</span>
                            <span class="channel-value">github.com/wardaini</span>
                        </div>
                        <svg class="channel-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
            <div class="contact-form-wrapper reveal">
                @if(session('success'))
                <div class="alert-success"><span>✅</span> {{ session('success') }}</div>
                @endif
                @if(session('error'))
                <div class="alert-error"><span>❌</span> {{ session('error') }}</div>
                @endif
                <form class="contact-form" action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="name">Nama</label>
                        <input class="form-input" type="text" id="name" name="name" placeholder="Nama lengkap" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-input" type="email" id="email" name="email" placeholder="email@example.com" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="subject">Keperluan</label>
                        <input class="form-input" type="text" id="subject" name="subject" placeholder="Kolaborasi / Magang / Diskusi" value="{{ old('subject') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="message">Pesan</label>
                        <textarea class="form-input form-textarea" id="message" name="message" placeholder="Ceritakan keperluanmu..." rows="5" required>{{ old('message') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">
                        <span>Kirim Pesan</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
