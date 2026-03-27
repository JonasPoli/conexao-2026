<!DOCTYPE html>
<html class="light" lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colégio Conexão - Sua conexão com o futuro</title>
    
    <!-- CDNs (Restored for layout stability) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    
    <!-- Added from v2.php for legacy layout compatibility -->
    <link rel="stylesheet" type="text/css" href="https://colegioecursoconexao.com.br/assets/css/front_conec.css?0702" />
    <link rel="stylesheet" href="https://colegioecursoconexao.com.br/assets/css/vanilla-calendar-min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

    <script id="tailwind-config">
        tailwind.config = {
            important: true, /* Overrides bootstrap/legacy css */
            corePlugins: { preflight: false }, /* Prevents tailwind from breaking bootstrap */
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "secondary-fixed": "#ffdbcb",
                        "surface-bright": "#ffffff",
                        "on-surface": "#0b1c30",
                        "tertiary-container": "#002131",
                        "surface-container-highest": "#d3e4fe",
                        "primary-container": "#1a1a40",
                        "surface-container-high": "#dce9ff",
                        "on-primary-container": "#8382af",
                        "on-primary": "#ffffff",
                        "surface-tint": "#5a5a84",
                        "outline-variant": "#c8c5cf",
                        "on-surface-variant": "#47464e",
                        "surface-variant": "#d3e4fe",
                        "on-secondary-fixed": "#341000",
                        "surface-container-low": "#eff4ff",
                        "on-error-container": "#93000a",
                        "inverse-primary": "#c3c2f2",
                        "on-tertiary-fixed": "#001e2d",
                        "tertiary-fixed": "#c5e7ff",
                        "primary-fixed": "#e2dfff",
                        "secondary": "#F07D00",
                        "on-secondary-fixed-variant": "#7a3000",
                        "primary-fixed-dim": "#c3c2f2",
                        "surface": "#f8f9ff",
                        "outline": "#78767f",
                        "on-tertiary-container": "#008fc5",
                        "on-tertiary-fixed-variant": "#004c6a",
                        "secondary-fixed-dim": "#ffb693",
                        "on-secondary": "#ffffff",
                        "error": "#ba1a1a",
                        "primary": "#1B1D57",
                        "background": "#f8f9ff",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#80cfff",
                        "on-secondary-container": "#5d2300",
                        "on-error": "#ffffff",
                        "surface-dim": "#cbdbf5",
                        "on-primary-fixed": "#17173d",
                        "inverse-surface": "#213145",
                        "inverse-on-surface": "#eaf1ff",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#fc7728",
                        "surface-container": "#e5eeff",
                        "on-background": "#0b1c30",
                        "on-primary-fixed-variant": "#43436b",
                        "error-container": "#ffdad6",
                        "tertiary": "#00060b"
                    },
                    fontFamily: {
                        "headline": ["Plus Jakarta Sans", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                        "label": ["Inter", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "8px", "lg": "12px", "xl": "16px", "full": "9999px"},
                }
            }
        }
    </script>

    <style>
        /* Scoped Preflight and Global Resets */
        header.font-headline *, footer.font-body *, .flip-card *, .news-card-overlay *, .bg-secondary *, .bg-primary *, .relative.flex.items-center.justify-center.h-32 *, .relative.flex.items-center.justify-center.h-44 * {
            box-sizing: border-box;
        }
        header.font-headline ul, footer.font-body ul {
            margin: 0 !important;
            padding: 0 !important;
            list-style: none !important;
        }
        header.font-headline a, footer.font-body a {
            color: inherit !important;
            text-decoration: inherit !important;
        }
        header.font-headline a:hover, footer.font-body a:hover {
            text-decoration: none !important;
        }
        header.font-headline p, header.font-headline h1, header.font-headline h2, header.font-headline h3, header.font-headline h4, header.font-headline h5, header.font-headline h6,
        footer.font-body p, footer.font-body h1, footer.font-body h2, footer.font-body h3, footer.font-body h4, footer.font-body h5, footer.font-body h6,
        .relative.flex.items-center.justify-center.h-32 h2, .relative.flex.items-center.justify-center.h-44 h2,
        .flip-card h3, .flip-card p {
            margin: 0 !important;
            padding: 0 !important;
        }
        
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        .nav-link { transition: all 0.3s ease; }

        /* News and Background Effects */
        .news-carousel-container {
            mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
        }
        .news-card-overlay {
            background: linear-gradient(to bottom, transparent 40%, rgba(13, 22, 54, 0.95) 100%);
        }
        @keyframes circle-grow {
            0% { r: 0; opacity: 0.8; stroke-width: 2; }
            100% { r: 1000; opacity: 0; stroke-width: 0.5; }
        }
        .animated-circle { animation: circle-grow 15s linear infinite; }
        
        /* Flip Card Effect */
        .flip-card { background-color: transparent; height: 480px; perspective: 1000px; }
        .flip-card-inner { position: relative; width: 100%; height: 100%; text-align: center; transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1); transform-style: preserve-3d; }
        .flip-card:hover .flip-card-inner { transform: rotateY(180deg); }
        .flip-card-front, .flip-card-back { position: absolute; width: 100%; height: 100%; -webkit-backface-visibility: hidden; backface-visibility: hidden; border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; align-items: center; padding: 2rem; }
        .flip-card-front { background-color: white; z-index: 2; }
        .flip-card-back { background-color: #1B1D57; color: white; transform: rotateY(180deg); z-index: 1; justify-content: center; border: 4px solid #F07D00; position: relative; }
        .back-icon { position: absolute; top: 50%; left: 50%; transform: translate(100%, -50%) scale(8); opacity: 0; transition: all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) 0.2s; pointer-events: none; color: white; z-index: 0; }
        .flip-card:hover .back-icon { transform: translate(-50%, -50%) scale(8); opacity: 0.1; }
        .flip-card-back > * { position: relative; z-index: 1; }

        /* WhatsApp Floating Button */
        .whatsapp-float { position: fixed; bottom: 30px; right: 30px; width: 60px; height: 60px; background-color: #25d366; color: #fff; border-radius: 50px; text-align: center; font-size: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); z-index: 1000; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; text-decoration: none !important; }
        .whatsapp-float:hover { transform: scale(1.1); background-color: #128c7e; box-shadow: 0 6px 20px rgba(0,0,0,0.4); }
        .whatsapp-float i { margin: 0; }
        .pulse-whatsapp { animation: pulse-green 2s infinite; }
        @keyframes pulse-green {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 15px rgba(37, 211, 102, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
        }

        /* Force white text on orange CTA buttons — overrides front_conec.css */
        a.bg-secondary,
        a.bg-secondary:visited,
        a.bg-secondary:hover,
        a.bg-secondary:focus { color: #fff !important; }
    </style>
    
    <link rel="manifest" href="manifest.json">
    <script>
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
          navigator.serviceWorker.register('./sw.js')
            .then(reg => console.log('Service Worker registered', reg))
            .catch(err => console.error('Service Worker registration failed', err));
        });
      }
    </script>
</head>
<body class="bg-background font-body text-on-background antialiased">

<header class="sticky top-0 w-full z-50 bg-white shadow-md font-headline">
    <!-- Orange Top Accent -->
    <div class="h-1 w-full bg-secondary"></div>
    <!-- Navigation Container -->
    <nav class="container mx-auto px-6 h-24 flex items-center justify-between" data-aos="fade-down" data-aos-duration="1000">
        <!-- Logo Left -->
        <div class="flex items-center shrink-0">
            <a href="#">
                <img alt="Conexão Logo" class="h-12 w-auto" src="assets/images/logo.png"/>
            </a>
        </div>
        <!-- Center Menu -->
        <div class="hidden lg:flex items-center gap-10">
            <a class="text-primary font-bold text-sm tracking-wide hover:text-secondary transition-colors uppercase" href="#">A ESCOLA</a>
            <!-- Segmentos Dropdown -->
            <div class="relative group h-24 flex items-center">
                <button class="flex items-center gap-1 text-secondary font-bold text-sm tracking-wide uppercase bg-secondary/5 px-4 py-2 rounded border-none outline-none">
                    SEGMENTOS
                    <span class="material-symbols-outlined text-sm">keyboard_arrow_down</span>
                </button>
                <!-- Dropdown Content -->
                <div class="dropdown-menu hidden group-hover:block absolute top-[96px] left-1/2 -translate-x-1/2 w-[340px] bg-white border-t-4 border-secondary shadow-2xl rounded-b-lg overflow-hidden">
                    <!-- Item 1 -->
                    <a class="flex items-center gap-4 p-5 hover:bg-slate-50 border-b border-gray-100 transition-colors" href="#">
                        <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary text-xl" style="font-variation-settings: 'FILL' 1;">child_care</span>
                        </div>
                        <div>
                            <div class="text-primary font-bold text-sm leading-tight uppercase">ENSINO FUNDAMENTAL</div>
                            <div class="text-[10px] text-gray-400 font-semibold uppercase mt-1">ANOS INICIAIS · 1º AO 5º ANO</div>
                        </div>
                    </a>
                    <!-- Item 2 -->
                    <a class="flex items-center gap-4 p-5 hover:bg-slate-50 border-b border-gray-100 transition-colors" href="#">
                        <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary text-xl" style="font-variation-settings: 'FILL' 1;">menu_book</span>
                        </div>
                        <div>
                            <div class="text-primary font-bold text-sm leading-tight uppercase">ENSINO FUNDAMENTAL</div>
                            <div class="text-[10px] text-gray-400 font-semibold uppercase mt-1">ANOS FINAIS · 6º AO 9º ANO</div>
                        </div>
                    </a>
                    <!-- Item 3 -->
                    <a class="flex items-center gap-4 p-5 hover:bg-slate-50 border-b border-gray-100 transition-colors" href="#">
                        <div class="w-10 h-10 rounded-full bg-orange-50 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-secondary text-xl" style="font-variation-settings: 'FILL' 1;">school</span>
                        </div>
                        <div>
                            <div class="text-primary font-bold text-sm leading-tight uppercase">ENSINO MÉDIO</div>
                            <div class="text-[10px] text-gray-400 font-semibold uppercase mt-1">1ª À 3ª SÉRIE</div>
                        </div>
                    </a>
                    <!-- Item 4 -->
                    <a class="flex items-center gap-4 p-5 hover:bg-slate-50 transition-colors" href="#">
                        <div class="w-10 h-10 rounded-full bg-orange-50 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-secondary text-xl" style="font-variation-settings: 'FILL' 1;">emoji_events</span>
                        </div>
                        <div>
                            <div class="text-primary font-bold text-sm leading-tight uppercase">PRÉ-VESTIBULAR</div>
                            <div class="text-[10px] text-gray-400 font-semibold uppercase mt-1">APROVAÇÃO GARANTIDA</div>
                        </div>
                    </a>
                </div>
            </div>
            <a class="text-primary font-bold text-sm tracking-wide hover:text-secondary transition-colors uppercase" href="#">GALERIA</a>
            <a class="text-primary font-bold text-sm tracking-wide hover:text-secondary transition-colors uppercase" href="#">NOTÍCIAS</a>
            <a class="text-primary font-bold text-sm tracking-wide hover:text-secondary transition-colors uppercase" href="#">CONTATO</a>
        </div>
        <!-- Right Side: Social & Button -->
        <div class="flex items-center gap-6">
            <div class="hidden md:flex items-center gap-4">
                <a class="text-primary/70 hover:text-secondary transition-colors" href="#">
                    <svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
                </a>
                <a class="text-primary/70 hover:text-secondary transition-colors" href="#">
                    <svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"></path></svg>
                </a>
            </div>
            <a class="bg-secondary text-white px-6 py-3 rounded-lg text-xs font-black uppercase tracking-widest hover:brightness-110 transition-all shadow-md flex items-center gap-2" href="#">
                <span class="material-symbols-outlined text-[18px]">edit</span> INSCREVA-SE
            </a>
        </div>
    </nav>
</header>
