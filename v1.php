<?php 
$page_title = 'Colégio Conexão - Sua conexão com o futuro';
include 'header.php'; 
?>
<main>
<!-- Hero Section -->
<section class="relative min-h-[640px] flex items-center bg-primary overflow-hidden">
<div class="absolute inset-0">
<img class="w-full h-full object-cover object-center" src="assets/images/hero_image.jpg" style="object-position: center; width: 100%; height: 100%; object-fit: cover;"/>
</div>
<div class="container mx-auto px-6 relative z-10">
<div class="max-w-2xl">
                    <div class="inline-block bg-secondary text-white px-4 py-1.5 rounded font-bold text-sm mb-6 tracking-wide" style="       margin-bottom: 440px !important;">
                        2142 APROVAÇÕES TOTAIS
                    </div>
                    <div class="flex flex-wrap gap-4 mt-8">
                        <a class="bg-secondary text-white px-8 py-4 rounded font-bold uppercase tracking-wider hover:bg-secondary/90 transition-all flex items-center gap-2" href="#">
                            Matrículas 2025
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                        <a class="bg-primary border-2 border-white/20 text-white px-8 py-4 rounded font-bold uppercase tracking-wider hover:bg-white hover:text-primary transition-all" href="#">
                            Nossos Resultados
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Segmentos -->
<section class="py-24 bg-slate-50" data-aos="fade-up">
<div class="container mx-auto px-6">
<!-- Badge Header -->
<div class="flex justify-center mb-12">
    <div class="relative flex items-center justify-center h-32 md:h-44 max-w-2xl">
        <img src="assets/images/tarja.png" class="absolute inset-0 w-full h-full object-contain">
<h2 class="relative z-10 text-white font-black text-2xl md:text-3xl uppercase italic px-12 text-center -mt-2" style="
    height: 130px;
    line-height: 90px !important;
    width: 220px;
">NOSSOS<span class="block text-lg md:text-xl not-italic tracking-widest -mt-1 opacity-90">SEGMENTOS</span>
        </h2>
    </div>
</div>
                 <!-- Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Card 1: Ensino Fundamental - Anos Iniciais -->
    <div class="flip-card" data-aos="fade-up" data-aos-delay="0">
        <div class="flip-card-inner">
            <div class="flip-card-front shadow-lg border-b-[6px] border-primary">
                <div class="w-24 h-24 bg-slate-100 rounded-full flex items-center justify-center mb-8">
                    <span class="material-symbols-outlined text-primary text-4xl" style="font-variation-settings: 'FILL' 1;">child_care</span>
                </div>
                <h3 class="text-primary font-black text-xl mb-1">Ensino Fundamental</h3>
                <p class="text-slate-400 font-bold text-xs uppercase mb-6">Anos Iniciais · 1º ao 5º ano</p>
                <p class="text-slate-600 text-sm leading-relaxed mb-10 flex-grow">
                    Base sólida para toda a vida acadêmica: leitura, escrita, raciocínio e valores em um ambiente acolhedor.
                </p>
                <div class="text-primary font-black text-sm uppercase flex items-center gap-2">
                    SAIBA MAIS <span class="material-symbols-outlined text-lg">arrow_forward</span>
                </div>
            </div>
            <div class="flip-card-back">
                <span class="material-symbols-outlined back-icon">child_care</span>
                <h3 class="text-white font-black text-2xl mb-4">Anos Iniciais</h3>
                <p class="text-sm mb-8 opacity-90">Foco no desenvolvimento cognitivo e socioemocional, com material didático Etapa e professores especialistas.</p>
                <a href="#" class="bg-secondary text-white px-8 py-3 rounded font-bold uppercase tracking-widest hover:brightness-110 transition-all shadow-lg">CONHECER MAIS</a>
            </div>
        </div>
    </div>

    <!-- Card 2: Ensino Fundamental - Anos Finais -->
    <div class="flip-card" data-aos="fade-up" data-aos-delay="100">
        <div class="flip-card-inner">
            <div class="flip-card-front shadow-lg border-b-[6px] border-primary">
                <div class="w-24 h-24 bg-slate-100 rounded-full flex items-center justify-center mb-8">
                    <span class="material-symbols-outlined text-primary text-4xl" style="font-variation-settings: 'FILL' 1;">menu_book</span>
                </div>
                <h3 class="text-primary font-black text-xl mb-1">Ensino Fundamental</h3>
                <p class="text-slate-400 font-bold text-xs uppercase mb-6">Anos Finais · 6º ao 9º ano</p>
                <p class="text-slate-600 text-sm leading-relaxed mb-10 flex-grow">
                    Desenvolvimento do projeto de vida, aprofundamento acadêmico e preparo para o Ensino Médio.
                </p>
                <div class="text-primary font-black text-sm uppercase flex items-center gap-2">
                    SAIBA MAIS <span class="material-symbols-outlined text-lg">arrow_forward</span>
                </div>
            </div>
            <div class="flip-card-back">
                <span class="material-symbols-outlined back-icon">menu_book</span>
                <h3 class="text-white font-black text-2xl mb-4">Anos Finais</h3>
                <p class="text-sm mb-8 opacity-90">Preparação para os desafios da adolescência e transição para o Ensino Médio com rigor acadêmico e suporte contínuo.</p>
                <a href="#" class="bg-secondary text-white px-8 py-3 rounded font-bold uppercase tracking-widest hover:brightness-110 transition-all shadow-lg">CONHECER MAIS</a>
            </div>
        </div>
    </div>

    <!-- Card 3: Ensino Médio -->
    <div class="flip-card" data-aos="fade-up" data-aos-delay="200">
        <div class="flip-card-inner">
            <div class="flip-card-front shadow-lg border-b-[6px] border-secondary">
                <div class="w-24 h-24 bg-orange-50 rounded-full flex items-center justify-center mb-8">
                    <span class="material-symbols-outlined text-secondary text-4xl" style="font-variation-settings: 'FILL' 1;">school</span>
                </div>
                <h3 class="text-primary font-black text-xl mb-1">Ensino Médio</h3>
                <p class="text-slate-400 font-bold text-xs uppercase mb-6">1ª à 3ª série</p>
                <p class="text-slate-600 text-sm leading-relaxed mb-10 flex-grow">
                    Esforço, autodisciplina e dedicação formam a base do Ensino Médio Conexão para sua aprovação.
                </p>
                <div class="text-secondary font-black text-sm uppercase flex items-center gap-2">
                    SAIBA MAIS <span class="material-symbols-outlined text-lg">arrow_forward</span>
                </div>
            </div>
            <div class="flip-card-back" style="background-color: #F07D00; border-color: #1B1D57;">
                <span class="material-symbols-outlined back-icon">school</span>
                <h3 class="text-white font-black text-2xl mb-4">Ensino Médio</h3>
                <p class="text-sm mb-8 opacity-90">Foco total em resultados, com simulados semanais, plantão de dúvidas e a melhor equipe de professores da região.</p>
                <a href="#" class="bg-primary text-white px-8 py-3 rounded font-bold uppercase tracking-wider hover:brightness-110 transition-all shadow-lg">CONHECER MAIS</a>
            </div>
        </div>
    </div>

    <!-- Card 4: Pré-Vestibular -->
    <div class="flip-card" data-aos="fade-up" data-aos-delay="300">
        <div class="flip-card-inner">
            <div class="flip-card-front shadow-lg border-b-[6px] border-secondary">
                <div class="w-24 h-24 bg-orange-50 rounded-full flex items-center justify-center mb-8">
                    <span class="material-symbols-outlined text-secondary text-4xl" style="font-variation-settings: 'FILL' 1;">emoji_events</span>
                </div>
                <h3 class="text-primary font-black text-xl mb-1">Pré-Vestibular</h3>
                <p class="text-slate-400 font-bold text-xs uppercase mb-6">Aprovação garantida</p>
                <p class="text-slate-600 text-sm leading-relaxed mb-10 flex-grow">
                    Professores de excelência, material didático forte e methodology comprovada para você conquistar sua vaga.
                </p>
                <div class="text-secondary font-black text-sm uppercase flex items-center gap-2">
                    SAIBA MAIS <span class="material-symbols-outlined text-lg">arrow_forward</span>
                </div>
            </div>
            <div class="flip-card-back" style="background-color: #F07D00; border-color: #1B1D57;">
                <span class="material-symbols-outlined back-icon">emoji_events</span>
                <h3 class="text-white font-black text-2xl mb-4">Pré-Vestibular</h3>
                <p class="text-sm mb-8 opacity-90">O cursinho que mais aprova. A conexão direta entre você e o curso dos seus sonhos nas melhores universidades.</p>
                <a href="#" class="bg-primary text-white px-8 py-3 rounded font-bold uppercase tracking-wider hover:brightness-110 transition-all shadow-lg">CONHECER MAIS</a>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Notícias e Recados -->
<section class="py-24 bg-slate-200 relative overflow-hidden" data-aos="fade-up">
<!-- Background Pattern Placeholder -->
<div id="news-bg-container" class="absolute inset-0 opacity-10 pointer-events-none transition-transform duration-500 ease-out">
<svg height="100%" viewbox="0 0 1000 1000" width="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
<circle class="animated-circle" cx="500" cy="500" fill="none" stroke="#1B1D57" style="animation-delay: 0s;"></circle>
<circle class="animated-circle" cx="500" cy="500" fill="none" stroke="#1B1D57" style="animation-delay: -2s;"></circle>
<circle class="animated-circle" cx="500" cy="500" fill="none" stroke="#1B1D57" style="animation-delay: -4s;"></circle>
<circle class="animated-circle" cx="500" cy="500" fill="none" stroke="#1B1D57" style="animation-delay: -6s;"></circle>
<circle class="animated-circle" cx="500" cy="500" fill="none" stroke="#1B1D57" style="animation-delay: -8s;"></circle>
<circle class="animated-circle" cx="500" cy="500" fill="none" stroke="#1B1D57" style="animation-delay: -10s;"></circle>
<circle class="animated-circle" cx="500" cy="500" fill="none" stroke="#1B1D57" style="animation-delay: -12s;"></circle>
<circle class="animated-circle" cx="500" cy="500" fill="none" stroke="#1B1D57" style="animation-delay: -14s;"></circle>
</svg>
</div>
<div class="container mx-auto px-6 relative z-10">
<div class="flex justify-center mb-12" data-aos="fade-down">
    <div class="relative flex items-center justify-center h-32 md:h-44 max-w-2xl">
        <img src="assets/images/tarja.png" class="absolute inset-0 w-full h-full object-contain">
<h2 class="relative z-10 text-white font-black text-2xl md:text-3xl uppercase italic px-12 text-center -mt-2" style="
    height: 130px;
    line-height: 90px !important;
    width: 220px;
">ÚLTIMAS<span class="block text-lg md:text-xl not-italic tracking-widest -mt-1 opacity-90">NOTÍCIAS</span>
        </h2>
    </div>
</div>





<!-- Carousel Wrapper -->
<div class="relative">
<div class="flex gap-4 overflow-x-hidden pb-12">
<!-- Card 1 -->
<div class="min-w-[400px] h-[360px] relative rounded-sm overflow-hidden group cursor-pointer shadow-xl">
<img alt="Viagem Cultural" class="absolute inset-0 w-full h-full object-cover text-white" src="assets/images/noticias/1758908644-c.jpeg"/>
<div class="absolute inset-0 news-card-overlay flex flex-col justify-end p-6">
<span class="text-[#F07D00] font-bold text-sm mb-2">Institucional</span>
<h4 class="text-white font-bold text-lg leading-tight group-hover:underline">
                                    Viagem Cultural leva alunos do Ensino Médio e Pré-Vestibular a São Paulo
                                </h4>
</div>
</div>
<!-- Card 2 -->
<div class="min-w-[400px] h-[360px] relative rounded-sm overflow-hidden group cursor-pointer shadow-xl">
<img alt="Vivência Prática" class="absolute inset-0 w-full h-full object-cover text-white" src="assets/images/noticias/1758908791-c.jpeg"/>
<div class="absolute inset-0 news-card-overlay flex flex-col justify-end p-6">
<span class="text-[#F07D00] font-bold text-sm mb-2">Institucional</span>
<h4 class="text-white font-bold text-lg leading-tight group-hover:underline">
                                    Vivência Prática - 7º Ano | Parque do Basalto
                                </h4>
</div>
</div>
<!-- Card 3 -->
<div class="min-w-[400px] h-[360px] relative rounded-sm overflow-hidden group cursor-pointer shadow-xl">
<img alt="Câmara Municipal" class="absolute inset-0 w-full h-full object-cover text-white" src="assets/images/noticias/1758911488-c.jpeg"/>
<div class="absolute inset-0 news-card-overlay flex flex-col justify-end p-6">
<span class="text-[#F07D00] font-bold text-sm mb-2">Institucional</span>
<h4 class="text-white font-bold text-lg leading-tight group-hover:underline">
                                    Visita à Câmara Municipal - 9º Ano
                                </h4>
</div>
</div>
<!-- Card 4 -->
<div class="min-w-[400px] h-[360px] relative rounded-sm overflow-hidden group cursor-pointer shadow-xl">
<img alt="Beach Tennis" class="absolute inset-0 w-full h-full object-cover text-white" src="assets/images/noticias/1758908644-c.jpeg"/>
<div class="absolute inset-0 news-card-overlay flex flex-col justify-end p-6">
<span class="text-[#F07D00] font-bold text-sm mb-2">Institucional</span>
<h4 class="text-white font-bold text-lg leading-tight group-hover:underline">
                                    Torneio de Beach Tennis no Interclasse
                                </h4>
</div>
</div>
</div>
</div>
<!-- Pagination and Navigation -->
<div class="flex items-center justify-between mt-8">
<!-- Dots -->
<div class="flex gap-2 mx-auto">
<span class="w-2.5 h-2.5 rounded-full bg-[#F07D00]"></span>
<span class="w-2.5 h-2.5 rounded-full bg-white border border-slate-300"></span>
<span class="w-2.5 h-2.5 rounded-full bg-white border border-slate-300"></span>
<span class="w-2.5 h-2.5 rounded-full bg-white border border-slate-300"></span>
<span class="w-2.5 h-2.5 rounded-full bg-white border border-slate-300"></span>
<span class="w-2.5 h-2.5 rounded-full bg-white border border-slate-300"></span>
</div>
<!-- Arrows at bottom right -->
<div class="flex gap-3 absolute right-0 bottom-12">
<button class="w-12 h-12 rounded-full bg-white shadow-lg flex items-center justify-center text-primary hover:bg-secondary hover:text-white transition-all">
<span class="material-symbols-outlined">arrow_forward</span>
</button>
<button class="w-12 h-12 rounded-full bg-slate-300/50 flex items-center justify-center text-slate-500 hover:bg-slate-400 transition-all">
<span class="material-symbols-outlined rotate-180">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
</section>
<!-- Agenda Escolar -->
<section class="bg-secondary py-20" data-aos="fade-up">
<div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
<div class="text-white">
<h2 class="text-3xl md:text-5xl font-black font-headline mb-8 uppercase tracking-tight">Agenda Escolar</h2>
<div class="space-y-6">
<div class="flex gap-6 items-start bg-white/10 p-4 rounded hover:bg-white/20 transition-colors">
<div class="bg-white text-secondary w-14 h-14 rounded-full flex flex-col items-center justify-center font-bold shrink-0">
<span class="text-xl">28</span>
<span class="text-[10px] uppercase">Out</span>
</div>
<div>
<h5 class="font-bold text-lg">Início do Período de Revisão ENEM</h5>
<p class="text-white/80 text-sm">Preparação intensiva para alunos do 3º ano e Pré-Vestibular.</p>
</div>
</div>
<div class="flex gap-6 items-start bg-white/10 p-4 rounded hover:bg-white/20 transition-colors">
<div class="bg-white text-secondary w-14 h-14 rounded-full flex flex-col items-center justify-center font-bold shrink-0">
<span class="text-xl">31</span>
<span class="text-[10px] uppercase">Out</span>
</div>
<div>
<h5 class="font-bold text-lg">Feira de Ciências 2024</h5>
<p class="text-white/80 text-sm">Apresentação de projetos experimentais do Fundamental II.</p>
</div>
</div>
<div class="flex gap-6 items-start bg-white/10 p-4 rounded hover:bg-white/20 transition-colors">
<div class="bg-white text-secondary w-14 h-14 rounded-full flex flex-col items-center justify-center font-bold shrink-0">
<span class="text-xl">05</span>
<span class="text-[10px] uppercase">Nov</span>
</div>
<div>
<h5 class="font-bold text-lg">Workshop: Carreiras do Futuro</h5>
<p class="text-white/80 text-sm">Palestra especial com profissionais convidados.</p>
</div>
</div>
</div>
</div>
<div class="bg-white rounded p-8 shadow-2xl">
<div class="flex justify-between items-center mb-8">
<h4 class="font-black text-primary font-headline uppercase text-xl">Outubro 2024</h4>
<div class="flex gap-4">
<button class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center hover:bg-slate-50">
<span class="material-symbols-outlined text-slate-400">chevron_left</span>
</button>
<button class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center hover:bg-slate-50">
<span class="material-symbols-outlined text-slate-400">chevron_right</span>
</button>
</div>
</div>
<div class="grid grid-cols-7 text-center text-xs font-bold text-slate-400 uppercase mb-4">
<div>Dom</div><div>Seg</div><div>Ter</div><div>Qua</div><div>Qui</div><div>Sex</div><div>Sáb</div>
</div>
<div class="grid grid-cols-7 gap-1 text-center font-medium">
<div class="py-3 text-slate-300">29</div><div class="py-3 text-slate-300">30</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">1</div><div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">2</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">3</div><div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">4</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">5</div><div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">6</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">7</div><div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">8</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">9</div><div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">10</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">11</div><div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">12</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">13</div><div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">14</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">15</div><div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">16</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">17</div><div class="py-3 hover:bg-secondary/10 cursor-pointer rounded bg-primary/5 text-primary">18</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">19</div><div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">20</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">21</div><div class="py-3 hover:bg-secondary/10 cursor-pointer rounded bg-primary/5 text-primary">22</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">23</div><div class="py-3 hover:bg-secondary/10 cursor-pointer rounded bg-primary/5 text-primary">24</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">25</div><div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">26</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">27</div><div class="py-3 bg-secondary text-white font-bold rounded">28</div>
<div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">29</div><div class="py-3 hover:bg-secondary/10 cursor-pointer rounded">30</div>
<div class="py-3 bg-secondary/20 text-secondary font-bold rounded">31</div>
</div>
</div>
</div>
</section>
<!-- Alunos Aprovados Section -->
<section class="py-24 bg-slate-200 relative overflow-hidden" data-aos="fade-up">
<!-- Concentric Circles Background Pattern -->
<div class="absolute inset-0 opacity-10 pointer-events-none">
<svg height="100%" viewbox="0 0 1000 1000" width="100%" xmlns="http://www.w3.org/2000/svg">
<circle cx="500" cy="500" fill="none" r="100" stroke="#1B1D57" stroke-width="2"></circle>
<circle cx="500" cy="500" fill="none" r="200" stroke="#1B1D57" stroke-width="2"></circle>
<circle cx="500" cy="500" fill="none" r="300" stroke="#1B1D57" stroke-width="2"></circle>
<circle cx="500" cy="500" fill="none" r="400" stroke="#1B1D57" stroke-width="2"></circle>
<circle cx="500" cy="500" fill="none" r="500" stroke="#1B1D57" stroke-width="2"></circle>
<circle cx="500" cy="500" fill="none" r="600" stroke="#1B1D57" stroke-width="2"></circle>
<circle cx="500" cy="500" fill="none" r="700" stroke="#1B1D57" stroke-width="2"></circle>
</svg>
</div>
<div class="container mx-auto px-6 relative z-10">
<!-- Header Badge -->

<div class="flex justify-center mb-12" data-aos="fade-down">
    <div class="relative flex items-center justify-center h-32 md:h-44 max-w-2xl">
        <img src="assets/images/tarja.png" class="absolute inset-0 w-full h-full object-contain">
        <h2 class="relative z-10 text-white font-black text-2xl md:text-3xl uppercase italic px-12 text-center -mt-2" style="

    height: 130px;
    line-height: 90px !important;
    width: 220px;

">Alunos<span class="block text-lg md:text-xl not-italic tracking-widest -mt-1 opacity-90">Aprovados</span>
        </h2>
    </div>
</div>



<!-- Students Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
<!-- Student 1 -->
<div class="relative group" data-aos="fade-up" data-aos-delay="0">
<div class="absolute -top-4 left-1/2 -translate-x-1/2 z-20">
<div class="bg-[#F07D00] text-white px-8 py-2 font-black text-xl italic skew-x-[-10deg] shadow-md">
<span class="inline-block skew-x-[10deg]">2026</span>
</div>
</div>
<div class="bg-white p-2 rounded-sm shadow-2xl transition-transform hover:-translate-y-2 duration-300 border border-slate-300">
<div class="aspect-[4/5] overflow-hidden"><img alt="Aprovada 2026" class="w-full h-full object-cover" src="assets/images/aprovados/1709913212-c.png"/></div>
</div>
</div>
<!-- Student 2 -->
<div class="relative group" data-aos="fade-up" data-aos-delay="100">
<div class="absolute -top-4 left-1/2 -translate-x-1/2 z-20">
<div class="bg-[#F07D00] text-white px-8 py-2 font-black text-xl italic skew-x-[-10deg] shadow-md">
<span class="inline-block skew-x-[10deg]">2025</span>
</div>
</div>
<div class="bg-white p-2 rounded-sm shadow-2xl transition-transform hover:-translate-y-2 duration-300 border border-slate-300">
<div class="aspect-[4/5] overflow-hidden"><img alt="Aprovado 2025" class="w-full h-full object-cover" src="assets/images/aprovados/1772629132-c.jpeg"/></div>
</div>
</div>
<!-- Student 3 -->
<div class="relative group" data-aos="fade-up" data-aos-delay="200">
<div class="absolute -top-4 left-1/2 -translate-x-1/2 z-20">
<div class="bg-[#F07D00] text-white px-8 py-2 font-black text-xl italic skew-x-[-10deg] shadow-md">
<span class="inline-block skew-x-[10deg]">2024</span>
</div>
</div>
<div class="bg-white p-2 rounded-sm shadow-2xl transition-transform hover:-translate-y-2 duration-300 border border-slate-300">
<div class="aspect-[4/5] overflow-hidden"><img alt="Aprovada 2024" class="w-full h-full object-cover" src="assets/images/aprovados/1772629180-c.jpeg"/></div>
</div>
</div>
</div>
<!-- CTA Button -->
<div class="flex justify-center" data-aos="fade-up" data-aos-delay="300">
<a class="bg-[#F07D00] text-white px-10 py-3 rounded-md font-bold uppercase tracking-wider hover:brightness-110 transition-all shadow-lg" href="#">
                    Ver todos
                </a>
</div>
</div>
</section>
<!-- Depoimentos -->
<section class="py-24 bg-surface-container-low" data-aos="fade-up">
<div class="container mx-auto px-6">
<div class="flex flex-col items-center justify-center mb-16" data-aos="fade-down">
    <div class="relative flex flex-col items-center z-10 w-full max-w-sm">
        <div class="bg-secondary text-white px-10 py-3 font-black tracking-widest text-lg uppercase skew-x-[-10deg] shadow-lg z-20">
            <span class="inline-block skew-x-[10deg]">O QUE DIZEM</span>
        </div>
        <div class="bg-primary text-white px-8 py-3 font-black tracking-widest text-sm uppercase skew-x-[8deg] shadow-lg -mt-2 z-10 relative">
            <span class="inline-block skew-x-[-8deg]">SOBRE NÓS</span>
        </div>
    </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Testimonial Card 1 -->
<div class="bg-white p-10 rounded-lg relative" data-aos="fade-right">
<span class="material-symbols-outlined text-secondary/20 text-6xl absolute top-6 right-8" style="font-variation-settings: 'FILL' 1;">format_quote</span>
<div class="flex gap-1 mb-6">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="text-slate-600 italic leading-relaxed mb-8">
                            "A methodology do Conexão transformou o aprendizado do meu filho. O suporte dos professores é impecável e os resultados vieram naturalmente."
                        </p>
<div class="flex items-center gap-4">
<img class="w-12 h-12 rounded-full object-cover" src="assets/images/depoimento/1741800590-c.jpeg"/>
<div>
<h6 class="font-bold text-primary">Mariana Silva</h6>
<span class="text-xs text-slate-400 font-medium">Mãe do Pedro, 9º ano</span>
</div>
</div>
</div>
<!-- Testimonial Card 2 -->
<div class="bg-white p-10 rounded-lg relative" data-aos="fade-up" data-aos-delay="100">
<span class="material-symbols-outlined text-secondary/20 text-6xl absolute top-6 right-8" style="font-variation-settings: 'FILL' 1;">format_quote</span>
<div class="flex gap-1 mb-6">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="text-slate-600 italic leading-relaxed mb-8">
                            "O material didático é muito completo e o ambiente do colégio me motiva a estudar cada vez mais. Sinto que estou pronto para qualquer vestibular."
                        </p>
<div class="flex items-center gap-4">
<img class="w-12 h-12 rounded-full object-cover" src="assets/images/depoimento/1741800868-c.jpeg"/>
<div>
<h6 class="font-bold text-primary">Ricardo Santos</h6>
<span class="text-xs text-slate-400 font-medium">Aluno do 3º ano</span>
</div>
</div>
</div>
<!-- Testimonial Card 3 -->
<div class="bg-white p-10 rounded-lg relative" data-aos="fade-left" data-aos-delay="200">
<span class="material-symbols-outlined text-secondary/20 text-6xl absolute top-6 right-8" style="font-variation-settings: 'FILL' 1;">format_quote</span>
<div class="flex gap-1 mb-6">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="text-slate-600 italic leading-relaxed mb-8">
                            "Escolher o Conexão foi a melhor decisão para o futuro da minha filha. O acolhimento emocional e o rigor acadêmico caminham juntos."
                        </p>
<div class="flex items-center gap-4">
<img class="w-12 h-12 rounded-full object-cover" src="assets/images/depoimento/1741801206-c.jpeg"/>
<div>
<h6 class="font-bold text-primary">Letícia Oliveira</h6>
<span class="text-xs text-slate-400 font-medium">Mãe da Ana, 1º ano</span>
</div>
</div>
</div></div></div></section>
<!-- Mapa Section -->
<section class="bg-white w-full overflow-hidden" data-aos="fade-up">
<div class="flex flex-col items-center justify-center mb-16" data-aos="fade-down">
    <div class="relative flex flex-col items-center z-10 w-full max-w-sm">
        <div class="bg-secondary text-white px-10 py-3 font-black tracking-widest text-lg uppercase skew-x-[-10deg] shadow-lg z-20">
            <span class="inline-block skew-x-[10deg]">COMO</span>
        </div>
        <div class="bg-primary text-white px-8 py-3 font-black tracking-widest text-sm uppercase skew-x-[8deg] shadow-lg -mt-2 z-10 relative">
            <span class="inline-block skew-x-[-8deg]">CHEGAR</span>
        </div>
    </div>
</div>
    <div class="w-full" data-aos="zoom-in" data-aos-duration="1000">
        <img src="assets/images/mapa.png" alt="Mapa de localização" class="w-full h-auto block">
    </div>
</section>

</main>
<?php include 'footer.php'; ?>