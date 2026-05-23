<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;


class PortfolioController extends Controller
{
    // ── GitHub username ──────────────────────────
    const GITHUB_USER = 'wardaini';

    public function index()
    {
        $githubRepos = $this->fetchGithubRepos();

        $skills = [
            'AI & Machine Learning' => [
                ['name' => 'Python',              'icon' => '🐍', 'level' => 82],
                ['name' => 'Machine Learning',    'icon' => '🤖', 'level' => 75],
                ['name' => 'Data Processing',     'icon' => '📊', 'level' => 78],
                ['name' => 'Prompt Engineering',  'icon' => '✍️', 'level' => 80],
                ['name' => 'RAG / LLM',           'icon' => '🧠', 'level' => 72],
                ['name' => 'Generative AI',       'icon' => '✨', 'level' => 74],
            ],
            'Web Development' => [
                ['name' => 'Laravel',             'icon' => '🔴', 'level' => 78],
                ['name' => 'PHP',                 'icon' => '🐘', 'level' => 75],
                ['name' => 'JavaScript',          'icon' => '🟡', 'level' => 68],
                ['name' => 'React + Vite',        'icon' => '⚛️', 'level' => 65],
                ['name' => 'Node.js / Express',   'icon' => '💚', 'level' => 65],
                ['name' => 'HTML & CSS',          'icon' => '🎨', 'level' => 80],
            ],
            'Data & Database' => [
                ['name' => 'SQL / MySQL',         'icon' => '🐬', 'level' => 70],
                ['name' => 'MongoDB',             'icon' => '🍃', 'level' => 65],
                ['name' => 'PSPP / Statistics',   'icon' => '📈', 'level' => 80],
                ['name' => 'Data Cleaning',       'icon' => '🧹', 'level' => 78],
                ['name' => 'Dataset Handling',    'icon' => '📂', 'level' => 74],
            ],
            'Tools & Cloud' => [
                ['name' => 'Git & GitHub',        'icon' => '🐙', 'level' => 82],
                ['name' => 'Alibaba Cloud / AI',  'icon' => '☁️', 'level' => 60],
                ['name' => 'AWS Cloud',           'icon' => '🌩️', 'level' => 60],
                ['name' => 'Tinkercad / IoT',     'icon' => '🔌', 'level' => 70],
                ['name' => 'Microsoft Office',    'icon' => '💼', 'level' => 88],
            ],
        ];

        // ── Projects grouped by category ─────────
        $projectGroups = [
            [
                'id'    => 'ml',
                'label' => '🤖 Machine Learning',
                'color' => 'var(--green)',
                'items' => [
                    [
                        'title'       => 'AI-RAG Streamlit',
                        'desc'        => 'AI-powered document assistant dengan RAG, FAISS vector search, dan transformer model. User bisa chat langsung dengan dokumen.',
                        'stack'       => ['Python', 'Streamlit', 'FAISS', 'RAG', 'Transformers'],
                        'github'      => 'https://github.com/wardaini/AI-RAG-Streamlit',
                        'demo'        => null,
                        'emoji'       => '🧠',
                        'featured'    => true,
                    ],
                    [
                        'title'       => 'AI Backend Projects',
                        'desc'        => 'LLM Developer Intern Portfolio — RAG systems, LLM integration, dan semantic search backend.',
                        'stack'       => ['Python', 'LLM', 'RAG', 'Semantic Search'],
                        'github'      => 'https://github.com/wardaini/ai-backend-projects',
                        'demo'        => null,
                        'emoji'       => '🤖',
                        'featured'    => true,
                    ],
                    [
                        'title'       => 'Smart Vision AI',
                        'desc'        => 'Real-time object detection menggunakan Python dengan dukungan webcam. Computer vision berbasis model pre-trained.',
                        'stack'       => ['Python', 'OpenCV', 'Object Detection'],
                        'github'      => 'https://github.com/wardaini/smart-vision-ai',
                        'demo'        => null,
                        'emoji'       => '👁️',
                        'featured'    => false,
                    ],
                    [
                        'title'       => 'WiFi ML Optimization',
                        'desc'        => 'Analisis performa jaringan WiFi berbasis machine learning untuk optimasi konektivitas (Studi kasus Fakultas Teknik Unimal).',
                        'stack'       => ['Python', 'ML', 'Network Analysis'],
                        'github'      => 'https://github.com/wardaini/optimizationwifimlunimal',
                        'demo'        => null,
                        'emoji'       => '📡',
                        'featured'    => false,
                    ],
                ],
            ],
            [
                'id'    => 'research',
                'label' => '🔬 Research & Data',
                'color' => 'var(--blue)',
                'items' => [
                    [
                        'title'       => 'Indoor Localization — IJABC 2026',
                        'desc'        => 'Publikasi internasional: Interactive Signal Pattern-Based Relabelling untuk Indoor Localization di fasilitas perawatan dengan pendekatan KL/JS Divergence & Wasserstein Distance.',
                        'stack'       => ['Python', 'BLE', 'Accelerometer', 'Signal Processing', 'ML'],
                        'github'      => 'https://doi.org/10.60401/ijabc.163',
                        'demo'        => 'https://doi.org/10.60401/ijabc.163',
                        'emoji'       => '📄',
                        'featured'    => true,
                        'badge'       => 'Published',
                    ],
                    [
                        'title'       => 'Data Ingestion Pipeline',
                        'desc'        => 'Pipeline untuk menyaring dan memanipulasi data mentah agar siap digunakan untuk analitik lanjutan.',
                        'stack'       => ['Python', 'Jupyter', 'Pandas', 'Data Engineering'],
                        'github'      => 'https://github.com/wardaini/Data-Ingestion-Pipeline',
                        'demo'        => null,
                        'emoji'       => '🔄',
                        'featured'    => false,
                    ],
                    [
                        'title'       => 'North Aceh Geospatial',
                        'desc'        => 'Analisis geospasial yang memetakan kepadatan penduduk di tiap kecamatan Aceh Utara menggunakan GeoPandas dan Matplotlib.',
                        'stack'       => ['Python', 'GeoPandas', 'Matplotlib', 'Jupyter'],
                        'github'      => 'https://github.com/wardaini/northAceh',
                        'demo'        => null,
                        'emoji'       => '🗺️',
                        'featured'    => false,
                    ],
                ],
            ],
            [
                'id'    => 'web',
                'label' => '🌐 Web Development',
                'color' => '#a78bfa',
                'items' => [
                    [
                        'title'       => 'Inventory Management System',
                        'desc'        => 'Full-stack inventory system — backend REST API dengan Node.js/Express/MongoDB, frontend React+Vite+Tailwind untuk manajemen item, kategori, dan stok.',
                        'stack'       => ['Node.js', 'Express', 'MongoDB', 'React', 'Vite', 'Tailwind'],
                        'github'      => 'https://github.com/wardaini/inventory-backend',
                        'demo'        => null,
                        'emoji'       => '🏪',
                        'featured'    => true,
                    ],
                    [
                        'title'       => 'SIMPEG — Sistem Informasi Kepegawaian',
                        'desc'        => 'Sistem informasi kepegawaian berbasis Laravel dengan login auth, CRUD data pegawai, dan admin dashboard.',
                        'stack'       => ['Laravel', 'PHP', 'MySQL', 'Blade'],
                        'github'      => 'https://github.com/wardaini/laravel',
                        'demo'        => null,
                        'emoji'       => '👥',
                        'featured'    => false,
                    ],
                    [
                        'title'       => 'Portfolio HTML/CSS',
                        'desc'        => 'Portfolio personal berbasis HTML & CSS murni — eksplorasi desain dan layout web statis.',
                        'stack'       => ['HTML', 'CSS'],
                        'github'      => 'https://github.com/wardaini/Portofolio-html-css',
                        'demo'        => null,
                        'emoji'       => '🎨',
                        'featured'    => false,
                    ],
                ],
            ],
            [
                'id'    => 'general',
                'label' => '📚 Learning & General',
                'color' => '#f59e0b',
                'items' => [
                    [
                        'title'       => 'Cloud Projects',
                        'desc'        => 'Eksplorasi dan latihan cloud computing — JavaScript-based cloud project sebagai bagian dari pembelajaran cloud & AI.',
                        'stack'       => ['JavaScript', 'Cloud'],
                        'github'      => 'https://github.com/wardaini/cloud',
                        'demo'        => null,
                        'emoji'       => '☁️',
                        'featured'    => false,
                    ],
                    [
                        'title'       => 'Naruto Fan Project',
                        'desc'        => 'Forked project berbasis HTML sebagai latihan eksplorasi struktur kode dan UI design dari repo publik.',
                        'stack'       => ['HTML'],
                        'github'      => 'https://github.com/wardaini/naruto',
                        'demo'        => null,
                        'emoji'       => '⚡',
                        'featured'    => false,
                    ],
                ],
            ],
        ];

        $experiences = [
            [
                'type'   => 'work',
                'role'   => 'Junior Python Machine Learning Intern',
                'org'    => 'Vinix7',
                'period' => '2026',
                'desc'   => 'Pembelajaran dan praktik pengolahan data berbasis Python, dataset handling, data preprocessing, basic ML workflow, dan implementasi model machine learning sederhana.',
                'stack'  => ['Python', 'ML', 'Data Preprocessing', 'Dataset Handling'],
            ],
            [
                'type'   => 'org',
                'role'   => 'Bidang Kesekretariatan',
                'org'    => 'HIMPUNAN MAHASISWA Lhokseumawe–Aceh Utara',
                'period' => '2024 – 2026',
                'desc'   => 'Mengelola administrasi organisasi, menyusun surat-menyurat, dokumentasi kegiatan, koordinasi internal, dan pengarsipan dokumen.',
                'stack'  => ['Administrasi', 'Dokumentasi', 'Koordinasi', 'Teamwork'],
            ],
            [
                'type'   => 'event',
                'role'   => 'Master of Ceremony (MC)',
                'org'    => 'Pelantikan Pengurus Organisasi',
                'period' => '2025',
                'desc'   => 'Menjadi pembawa acara pada pelantikan pengurus, menjaga alur kegiatan tertib, dan berkoordinasi dengan seluruh panitia.',
                'stack'  => ['Public Speaking', 'Event Coordination', 'Communication'],
            ],
            [
                'type'   => 'training',
                'role'   => 'Bootcamp & Technology Training',
                'org'    => 'Dicoding Indonesia · Alibaba Cloud Academy',
                'period' => '2025 – Sekarang',
                'desc'   => 'Menyelesaikan 10+ pelatihan Alibaba Cloud (Generative AI, RAG, LLM, Prompt Engineering, PAI) dan 6+ sertifikasi Dicoding (ML, Data Science, AI, SQL, Python, Cloud).',
                'stack'  => ['AI', 'ML', 'Cloud', 'SQL', 'Python', 'Gen AI'],
            ],
            [
                'type'   => 'academic',
                'role'   => 'Mahasiswa S1 Informatika',
                'org'    => 'Universitas Malikussaleh',
                'period' => '2023 – Sekarang',
                'desc'   => 'Semester 6 — fokus pada AI, Machine Learning, analisis data, pengembangan sistem, dan riset teknologi. Aktif kompetisi essay, LKTI, dan innovation paper.',
                'stack'  => ['AI', 'ML', 'Research', 'IoT', 'Software Dev'],
            ],
        ];

        $certifications = [
            [
                'issuer' => 'Alibaba Cloud Academy',
                'color'  => 'var(--blue)',
                'items'  => [
                    'Using Generative AI Ethically & Responsibly',
                    'The Inner Workings of Generative AI',
                    'Fundamentals of RAG and Agents',
                    'The Large World of Language Models',
                    'Dive Into Generative AI',
                    'Model Studio Fundamentals',
                    'GPU-accelerated ECS',
                    'Getting to Know Generative AI',
                    'Alibaba Cloud PAI',
                    'Prompt Engineering Fundamentals',
                ],
            ],
            [
                'issuer' => 'Dicoding Indonesia',
                'color'  => 'var(--green)',
                'items'  => [
                    'Belajar Machine Learning untuk Pemula',
                    'Belajar Dasar Data Science',
                    'Belajar Dasar AI',
                    'Belajar Dasar SQL',
                    'Memulai Pemrograman dengan Python',
                    'Belajar Dasar Cloud dan Gen AI di AWS',
                    'Spec-Driven Development dengan Kiro',
                ],
            ],
        ];

        return view('portfolio', compact(
            'skills', 'projectGroups', 'experiences', 'certifications', 'githubRepos'
        ));
    }

    // ── Fetch GitHub repos (cached 1 jam) ────────
    public function fetchGithubRepos(): array
    {
        return Cache::remember('github_repos', 3600, function () {
            try {
                $response = Http::timeout(8)
                    ->withHeaders(['Accept' => 'application/vnd.github+json'])
                    ->get('https://api.github.com/users/' . self::GITHUB_USER . '/repos', [
                        'per_page' => 30,
                        'sort'     => 'updated',
                    ]);

                if ($response->successful()) {
                    return collect($response->json())
                        ->filter(fn($r) => !$r['fork'])
                        ->map(fn($r) => [
                            'name'        => $r['name'],
                            'description' => $r['description'] ?? '',
                            'url'         => $r['html_url'],
                            'language'    => $r['language'] ?? 'N/A',
                            'stars'       => $r['stargazers_count'],
                            'updated'     => \Carbon\Carbon::parse($r['updated_at'])->diffForHumans(),
                        ])
                        ->values()
                        ->toArray();
                }
            } catch (\Exception $e) {}
            return [];
        });
    }

    // ── GitHub repos JSON endpoint (untuk refresh) ─
    public function githubRepos()
    {
        Cache::forget('github_repos');
        return response()->json($this->fetchGithubRepos());
    }

    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string|min:3',
        ]);

        try {
            \Illuminate\Support\Facades\Mail::raw(
                "Pesan dari: {$validated['name']}\n" .
                "Email: {$validated['email']}\n" .
                "Keperluan: " . ($validated['subject'] ?? '-') . "\n\n" .
                "Pesan:\n{$validated['message']}",
                function ($m) use ($validated) {
                    $m->to(env('CONTACT_MAIL_TO'))
                    ->subject('[Portfolio] ' . ($validated['subject'] ?? 'Pesan dari ' . $validated['name']));
                }
            );

            return redirect()->route('portfolio')->with('success', 'Pesan berhasil dikirim! 🚀');

        } catch (\Exception $e) {
            return redirect()->route('portfolio')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
