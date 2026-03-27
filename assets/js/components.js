class AppHeader extends HTMLElement { connectedCallback() { this.innerHTML = `
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
<button class="flex items-center gap-1 text-secondary font-bold text-sm tracking-wide uppercase bg-secondary/5 px-4 py-2 rounded">
                        SEGMENTOS
                        <span class="material-symbols-outlined text-sm">keyboard_arrow_down</span>
</button>
<!-- Dropdown Content -->
<div class="dropdown-menu hidden absolute top-[96px] left-1/2 -translate-x-1/2 w-[340px] bg-white border-t-4 border-secondary shadow-2xl rounded-b-lg overflow-hidden">
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
<span class="material-symbols-outlined text-[18px]">edit</span>
                    INSCREVA-SE
                </a>
</div>
</nav>
</header>
`; } }
customElements.define('app-header', AppHeader);
class AppFooter extends HTMLElement { connectedCallback() { this.innerHTML = `
<footer class="text-white font-body">
    <!-- Part 1: Links -->
    <div class="bg-[#1B1D57] pt-24 pb-12">
        <div class="container mx-auto px-6 text-light">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12">
                <!-- O Conexão -->
                <div>
                    <h5 class="text-[#F07D00] font-black text-xl mb-6 uppercase tracking-tight">O Conexão</h5>
                    <ul class="space-y-3 text-slate-300 font-medium">
                        <li><a href="#" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">A escola</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Eventos</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Notícias</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Trabalhe Conosco</a></li>
                    </ul>
                </div>
                <!-- Fundamental - Anos iniciais -->
                <div>
                    <h5 class="text-[#F07D00] font-black text-xl mb-6 uppercase tracking-tight">Fundamental <span class="block text-sm">Anos iniciais</span></h5>
                    <ul class="space-y-3 text-slate-300 font-medium">
                        <li><a href="#" class="hover:text-white transition-colors">Sobre</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Diferenciais</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Inscreva-se</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Depoimentos</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Conheça a escola</a></li>
                    </ul>
                </div>
                <!-- Fundamental - Anos finais -->
                <div>
                    <h5 class="text-[#F07D00] font-black text-xl mb-6 uppercase tracking-tight">Fundamental <span class="block text-sm">Anos finais</span></h5>
                    <ul class="space-y-3 text-slate-300 font-medium">
                        <li><a href="#" class="hover:text-white transition-colors">Sobre</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Diferenciais</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Inscreva-se</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Depoimentos</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Conheça a escola</a></li>
                    </ul>
                </div>
                <!-- Ensino Médio -->
                <div>
                    <h5 class="text-[#F07D00] font-black text-xl mb-6 uppercase tracking-tight">Ensino Médio</h5>
                    <ul class="space-y-3 text-slate-300 font-medium">
                        <li><a href="#" class="hover:text-white transition-colors">Sobre</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Alunos Aprovados</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Inscreva-se</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Depoimentos</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Conheça a escola</a></li>
                    </ul>
                </div>
                <!-- Pré-Vestibular -->
                <div>
                    <h5 class="text-[#F07D00] font-black text-xl mb-6 uppercase tracking-tight">Pré-Vestibular</h5>
                    <ul class="space-y-3 text-slate-300 font-medium">
                        <li><a href="#" class="hover:text-white transition-colors">Sobre</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Alunos Aprovados</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Inscreva-se</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Depoimentos</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Conheça a escola</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Part 2: Contact & Units (Darker) -->
    <div class="bg-[#151744] py-16">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Info Unidades -->
                <div class="lg:col-span-9">
                    <div class="flex items-center gap-2 text-slate-300 mb-10 font-bold">
                        <i class="fas fa-clock text-[#F07D00]"></i> 
                        De Seg a Sex - das 7h00 às 18h00
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <div>
                            <span class="text-[#F07D00] font-black block mb-2 uppercase text-sm tracking-wider">Unidade I - Ensino Médio | Pré-Vestibular</span>
                            <div class="text-lg font-bold mb-1">(16) 3301.5800</div>
                            <div class="text-slate-400 text-sm">Av. Dom Pedro II, nº 60 - Centro - Araraquara/SP</div>
                        </div>
                        <div>
                            <span class="text-[#F07D00] font-black block mb-2 uppercase text-sm tracking-wider">Unidade II - Ensino Fundamental II</span>
                            <div class="text-lg font-bold mb-1">(16) 3303.9060</div>
                            <div class="text-slate-400 text-sm">Rua Major Carvalho Filho, nº 980 - Centro - Araraquara/SP</div>
                        </div>
                    </div>
                </div>
                <!-- Redes Sociais -->
                <div class="lg:col-span-3">
                    <div class="space-y-4">
                        <a href="#" class="flex items-center gap-3 text-slate-300 hover:text-white transition-colors font-semibold group">
                            <i class="fab fa-instagram text-xl text-[#F07D00] group-hover:scale-110 transition-transform"></i>
                            @conexaoetapa
                        </a>
                        <a href="#" class="flex items-center gap-3 text-slate-300 hover:text-white transition-colors font-semibold group">
                            <i class="fab fa-instagram text-xl text-[#F07D00] group-hover:scale-110 transition-transform"></i>
                            @colegioconexaofundamental
                        </a>
                        <a href="#" class="flex items-center gap-3 text-slate-300 hover:text-white transition-colors font-semibold group">
                            <i class="fab fa-facebook text-xl text-[#F07D00] group-hover:scale-110 transition-transform"></i>
                            /colegioecursoconexao
                        </a>
                        <a href="#" class="flex items-center gap-3 text-slate-300 hover:text-white transition-colors font-semibold group">
                            <i class="fab fa-facebook text-xl text-[#F07D00] group-hover:scale-110 transition-transform"></i>
                            /colegioconexaofundamental
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Part 3: Credits (Darkest) -->
    <div class="bg-[#0F1031] py-8 border-t border-white/5">
        <div class="container mx-auto px-6 text-center">
            <a href="https://wab.com.br" class="text-[#F07D00] font-black hover:brightness-110 transition-all text-sm uppercase tracking-widest" target="_blank">Desenvolvido por WAB</a>
        </div>
    </div>
</footer>
<!-- Floating WhatsApp -->
    <a href="https://wa.me/551633015800" class="whatsapp-float pulse-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
`;
    setTimeout(() => { if(typeof AOS !== "undefined") AOS.refresh(); }, 100);
  } }
customElements.define('app-footer', AppFooter);
