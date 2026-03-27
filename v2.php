<?php 
$page_title = 'Colégio Conexão | Ensino Médio';
include 'header.php'; 
?>
<main>

<!-- Hero Banner Moderno -->
<section class="relative h-screen min-h-[600px] flex items-center justify-center overflow-hidden" data-aos="fade-in" data-aos-duration="1500">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 w-full h-full">
        <img src="https://colegioecursoconexao.com.br/uploads/banners/1690313395-c.png" alt="Ensino Médio" class="absolute w-full h-full object-cover object-center" />
        <!-- Edge vignette — gentle all-around darkening, no colour cast -->
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 100% 90% at 50% 50%, transparent 35%, rgba(0,0,0,.55) 100%);"></div>
        <!-- Bottom grounding — cinematic depth -->
        <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(0,0,0,.6) 0%, rgba(0,0,0,.15) 25%, transparent 50%);"></div>
        <!-- Top navbar shadow -->
        <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgba(0,0,0,.40) 0%, transparent 22%);"></div>
    </div>
    
    <!-- Content -->
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-xl" data-aos="fade-right" data-aos-duration="1000">
            <!-- Glassmorphism card: legibility without covering the photo -->
            <!-- Updated Hero Banner with Glassmorphism (Faça Parte style) -->
            <div class="group relative" data-aos="fade-up" data-aos-duration="1200">
                <!-- ambient hover glow -->
                <div class="absolute inset-0 bg-secondary/20 rounded-3xl blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                <div class="relative bg-[#080a28]/70 hover:bg-[#080a28]/80 border border-white/10 hover:border-secondary/40 backdrop-blur-xl p-10 md:p-12 rounded-3xl transition-all duration-500 max-w-2xl shadow-[0_8px_40px_rgba(0,0,0,0.4)] overflow-hidden">
                    <h1 class="text-5xl md:text-6xl font-black text-white leading-tight mb-3 font-headline uppercase tracking-tight" style="text-shadow: 0 2px 8px rgba(0,0,0,0.8), 0 6px 24px rgba(0,0,0,0.4);">
                        Ensino <span class="text-secondary">Médio</span>
                    </h1>
                    <h4 class="text-lg md:text-xl text-white font-semibold mb-8 leading-relaxed" style="text-shadow: 0 1px 4px rgba(0,0,0,0.8);">
                        Forte no ensino, sólido nos valores e único nos resultados.
                    </h4>
                    <div class="flex flex-wrap gap-4">
                        <a href="https://colegioecursoconexao.com.br/inscricao_em" class="bg-secondary hover:bg-orange-500 text-white px-8 py-3.5 rounded-full font-bold text-sm uppercase tracking-widest transition-all duration-300 shadow-lg hover:shadow-[0_0_30px_rgba(240,125,0,0.4)] flex items-center gap-2 group-hover:scale-105" style="color:#fff">
                            Inscreva-se
                            <i class="fas fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="https://colegioecursoconexao.com.br/faca_uma_visita?s=3" class="bg-white/10 hover:bg-white/20 text-white backdrop-blur-sm border border-white/25 hover:border-white px-8 py-3.5 rounded-full font-bold text-sm uppercase tracking-widest transition-all duration-300 flex items-center gap-2">
                            Agende sua visita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll down indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce z-10 text-white/50">
        <a href="#proposta" class="cursor-pointer hover:text-white transition-colors duration-300">
            <i class="fas fa-chevron-down text-2xl"></i>
        </a>
    </div>
</section>

<!-- Nossa Proposta -->
<section id="proposta" class="py-24 bg-surface relative overflow-hidden">
    <!-- Decorator shape -->
    <div class="absolute top-0 right-0 -mr-40 -mt-20 w-[600px] h-[600px] bg-secondary/5 rounded-full blur-3xl pointer-events-none"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Title Double Badge -->
        <div class="flex flex-col items-center justify-center mb-16" data-aos="fade-down">
            <div class="relative flex flex-col items-center z-10 w-full max-w-sm">
                <div class="bg-secondary text-white px-12 py-3 font-black tracking-widest text-lg md:text-xl uppercase skew-x-[-10deg] shadow-sm z-20">
                    <span class="inline-block skew-x-[10deg]">NOSSA</span>
                </div>
                <div class="bg-primary text-white px-10 py-3 font-black tracking-widest text-base md:text-lg uppercase skew-x-[8deg] shadow-sm -mt-2 z-10 relative">
                    <span class="inline-block skew-x-[-8deg]">PROPOSTA</span>
                </div>
            </div>
        </div>

        <!-- Content Grid (First block) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center max-w-6xl mx-auto mb-24">
            <!-- Text Side -->
            <div data-aos="fade-right">
                <p class="text-secondary font-bold text-sm uppercase tracking-widest mb-3">O fim e o começo para</p>
                <h3 class="text-primary font-black text-3xl md:text-4xl mb-6 leading-tight">A solidificação da identidade do aluno</h3>
                <p class="text-slate-600 text-[17px] leading-relaxed mb-6 font-medium text-justify md:text-left">
                    O Colégio Conexão entende que o Ensino Médio representa de certa forma um fim e um começo. Por um lado, é o fim da escolaridade regular básica, na qual os alunos formam o alicerce de todas as aprendizagens futuras, desenvolvem competências e habilidades, bem como lançam as raízes de seus projetos de vida pessoal e profissional.
                </p>
                <p class="text-slate-600 text-[17px] leading-relaxed mb-8 font-medium text-justify md:text-left">
                    Por outro lado, o Ensino Médio é um começo. O começo da vida adulta, preparação para a universidade e consequente inserção no mercado de trabalho e realização pessoal. O Colégio Conexão visa, em sua proposta pedagógica, atender a esses anseios, proporcionando uma educação equilibrada e facilitadora da solidificação da identidade do aluno.
                </p>
            </div>
            
            <!-- Image Side -->
            <div class="relative group mx-auto w-full max-w-md lg:max-w-full" data-aos="fade-left">
                <!-- Shadow effect block -->
                <div class="absolute inset-0 bg-secondary rounded-2xl rotate-3 scale-100 opacity-20 group-hover:rotate-6 group-hover:opacity-30 transition-all duration-500"></div>
                <!-- Main image block -->
                <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-white border-4 border-white">
                    <img src="https://colegioecursoconexao.com.br/assets/imgs/ensino_medio_01.png" alt="A solidificação da identidade" class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-700 aspect-square object-center">
                </div>
            </div>
        </div>

        <!-- Content Grid (Second block - mirrored) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center max-w-6xl mx-auto mb-16">
            <!-- Image Side (Left on desktop) -->
            <div class="order-2 lg:order-1 relative group mx-auto w-full max-w-md lg:max-w-full" data-aos="fade-right">
                <div class="absolute inset-0 bg-primary rounded-2xl -rotate-3 scale-100 opacity-10 group-hover:-rotate-6 group-hover:opacity-20 transition-all duration-500"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-white border-4 border-white">
                    <img src="https://colegioecursoconexao.com.br/assets/imgs/ensino_medio_enem.png" alt="Preparação Enem" class="w-full h-[500px] object-cover group-hover:scale-110 transition-transform duration-700 object-top">
                </div>
            </div>

            <!-- Text Side (Right on desktop) -->
            <div class="order-1 lg:order-2" data-aos="fade-left">
                <p class="text-secondary font-bold text-sm uppercase tracking-widest mb-3">Ensino Médio</p>
                <h4 class="text-primary font-black text-3xl md:text-4xl mb-6 leading-tight">Forte no ensino, sólido nos valores e único nos resultados</h4>
                <div class="space-y-5 text-slate-600 text-[17px] leading-relaxed font-medium text-justify md:text-left">
                    <p>
                        Valorizamos a afetividade no ambiente escolar, proporcionando segurança através da acolhida e do reconhecimento do aluno como indivíduo único. O desenvolvimento do aluno no espaço social e cultural é um desafio permanente da escola, na construção de valores e competências para atender a demanda do mundo contemporâneo.
                    </p>
                    <p>
                        Para construir estas bases sólidas, estimulamos o esforço e a dedicação, cultivamos a autodisciplina e mobilizamos a energia na aquisição de conhecimento consistente. O empenho permite explorar habilidades em um ambiente acolhedor e inspirador.
                    </p>
                    <p>
                        Em uma fase tão importante, é preciso confiar em uma escola que tenha foco na formação integral e prepare o aluno para superar as barreiras do <strong>ENEM</strong> e dos <strong>grandes vestibulares</strong>.
                    </p>
                </div>
            </div>
        </div>

        <!-- Informational Features Banner (Bottom of section) -->
        <div class="max-w-6xl mx-auto mt-20" data-aos="fade-up">
            <div class="bg-white rounded-[2rem] shadow-xl p-10 md:p-12 border border-slate-100 relative overflow-hidden group">
                <!-- Hover light effect -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl group-hover:bg-primary/10 transition-colors duration-500 pointer-events-none"></div>
                
                <div class="absolute top-0 left-0 w-[6px] h-full bg-secondary"></div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div>
                        <div class="flex items-center gap-4 mb-4 text-primary">
                            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">
                                <i class="fas fa-file-alt text-xl text-primary"></i>
                            </div>
                            <h5 class="font-bold text-xl uppercase tracking-wider">Simulados Constantes</h5>
                        </div>
                        <p class="text-slate-600 leading-relaxed font-medium">
                            Disponibilizamos ao longo do Ensino Médio simulados periódicos do <strong>ENEM</strong> e dos grandes vestibulares <strong>(FUVEST, UNESP e UNICAMP)</strong>. Promovemos oportunidades para o constante aprimoramento em parceria com o SISTEMA ETAPA, resultando em números expressivos de aprovações todos os anos.
                        </p>
                    </div>
                    <div>
                        <div class="flex items-center gap-4 mb-4 text-primary">
                            <div class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center">
                                <i class="fas fa-laptop-code text-xl text-secondary"></i>
                            </div>
                            <h5 class="font-bold text-xl uppercase tracking-wider">Recursos Digitais Extras</h5>
                        </div>
                        <p class="text-slate-600 leading-relaxed font-medium">
                            Para alunos do 3º ano, o SISTEMA ETAPA oferece aplicativos exclusivos de estudo, 3.000 videoaulas, curso completo com resoluções comentadas. Tudo apoiado pela organização do ensino em <strong>Espiral Crescente</strong>, método com eficiência comprovada por neurocientistas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Novo Ensino Médio -->
<section class="py-24 bg-surface-container-low relative overflow-hidden">
    <!-- Abstract Background Pattern -->
    <div class="absolute inset-0 opacity-5 pointer-events-none">
        <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1.5" fill="#1B1D57" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)" />
        </svg>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Badge Title -->
        <div class="flex flex-col items-center justify-center mb-16" data-aos="fade-down">
            <div class="relative flex flex-col items-center z-10 w-full max-w-sm">
                <div class="bg-secondary text-white px-10 py-3 font-black tracking-widest text-lg uppercase skew-x-[-10deg] shadow-sm z-20">
                    <span class="inline-block skew-x-[10deg]">NOVO</span>
                </div>
                <div class="bg-primary text-white px-8 py-3 font-black tracking-widest text-sm uppercase skew-x-[8deg] shadow-sm -mt-2 z-10 relative">
                    <span class="inline-block skew-x-[-8deg]">ENSINO MÉDIO</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-stretch max-w-6xl mx-auto mb-20">
            <div data-aos="fade-right" class="flex flex-col justify-center">
                <h4 class="text-primary font-black text-2xl md:text-3xl mb-6 leading-tight">Preparação atualizada conforme a BNCC e LDB</h4>
                <div class="space-y-5 text-slate-600 text-lg leading-relaxed font-medium">
                    <p>
                        O Novo Ensino Médio favorece a consolidação e aprofundamento dos conhecimentos adquiridos no Ensino Fundamental, possibilitando o prosseguimento nos estudos e preparo para o trabalho, conforme as novas diretrizes da Base Nacional Comum Curricular (BNCC).
                    </p>
                    <p class="font-bold text-primary mt-6">
                        A grade curricular é constituída por dois modelos educacionais obrigatórios:
                    </p>
                    <ul class="space-y-6 mt-4">
                        <li class="flex items-start gap-4 bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
                            <div class="w-12 h-12 bg-secondary/10 rounded-full flex items-center justify-center text-secondary text-xl shrink-0">
                                <i class="fas fa-book"></i>
                            </div>
                            <div>
                                <strong class="text-primary block text-lg mb-1">Formação Geral Básica</strong>
                                <span class="text-[15px] leading-relaxed block">Preparação intensiva para o Enem nas quatro áreas do conhecimento (Linguagens, Matemática, Ciências da Natureza e Ciências Humanas).</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary text-xl shrink-0">
                                <i class="fas fa-route"></i>
                            </div>
                            <div>
                                <strong class="text-primary block text-lg mb-1">Itinerários Formativos</strong>
                                <span class="text-[15px] leading-relaxed block">Aprofundamento garantido de aprendizado sobre as áreas do conhecimento, de acordo com os interesses e aptidões individuais.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="relative group mx-auto w-full max-w-md lg:max-w-full h-full flex" data-aos="fade-left">
                <div class="absolute inset-0 bg-secondary rounded-2xl rotate-3 scale-100 opacity-20 transition-all duration-500 group-hover:rotate-6 group-hover:opacity-30"></div>
                <img src="https://colegioecursoconexao.com.br/assets/imgs/novo-medio.png" alt="Novo Ensino Médio" class="relative w-full h-full object-cover rounded-2xl shadow-2xl border-4 border-white group-hover:scale-105 transition-transform duration-700">
            </div>
        </div>

        <!-- 4 Axes Cards -->
        <h4 class="text-center text-primary font-black text-2xl md:text-3xl mb-12 max-w-4xl mx-auto" data-aos="fade-up">
            Os Itinerários Formativos proporcionam vivências baseadas em experiências transdisciplinares:
        </h4>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-xl border-t-4 border-secondary p-8 transition-all duration-300 hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="0">
                <div class="w-16 h-16 bg-secondary/10 rounded-full flex items-center justify-center text-secondary text-2xl mb-6 group-hover:scale-110 group-hover:bg-secondary group-hover:text-white transition-all">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h5 class="text-primary font-bold text-lg uppercase tracking-wide mb-3">Empreendedorismo</h5>
                <p class="text-slate-500 text-[15px] leading-relaxed font-medium">Identificar um problema social ou oportunidade de mercado e propor uma solução viável nos aspectos econômicos e sociais.</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-xl border-t-4 border-primary p-8 transition-all duration-300 hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center text-primary text-2xl mb-6 group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all">
                    <i class="fas fa-microscope"></i>
                </div>
                <h5 class="text-primary font-bold text-lg uppercase tracking-wide mb-3">Investigação Científica</h5>
                <p class="text-slate-500 text-[15px] leading-relaxed font-medium">Participar de projetos de iniciação científica, formulando e testando hipóteses a respeito do objeto de pesquisa.</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-xl border-t-4 border-secondary p-8 transition-all duration-300 hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-secondary/10 rounded-full flex items-center justify-center text-secondary text-2xl mb-6 group-hover:scale-110 group-hover:bg-secondary group-hover:text-white transition-all">
                    <i class="fas fa-globe-americas"></i>
                </div>
                <h5 class="text-primary font-bold text-lg uppercase tracking-wide mb-3">Intervenção Sociocultural</h5>
                <p class="text-slate-500 text-[15px] leading-relaxed font-medium">Atuação na esfera pública, ampliando conhecimentos sobre questões locais, nacionais e globais que afetam nossa vida.</p>
            </div>
            <!-- Card 4 -->
            <div class="bg-white rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-xl border-t-4 border-primary p-8 transition-all duration-300 hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center text-primary text-2xl mb-6 group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h5 class="text-primary font-bold text-lg uppercase tracking-wide mb-3">Processos Criativos</h5>
                <p class="text-slate-500 text-[15px] leading-relaxed font-medium">Aprofundamento do aprendizado por meio da pesquisa e desenvolvimento de processos de criação autorais.</p>
            </div>
        </div>
        
        <div class="max-w-4xl mx-auto text-center mt-12 bg-white/60 p-6 rounded-2xl backdrop-blur-sm border border-slate-100 shadow-sm" data-aos="fade-up">
            <p class="text-primary font-bold text-lg">
                Orientação vocacional e Projeto de Vida para guiar o autoconhecimento e facilitar suas escolhas profissionais.
            </p>
        </div>
    </div>
</section>

<!-- Nossos Diferenciais Modern grid -->
<section id="diferenciais" class="pt-24 pb-32 bg-primary relative overflow-hidden text-white">
    <!-- Abstract pattern background -->
    <div class="absolute top-0 right-0 w-full h-full opacity-30 pointer-events-none overflow-hidden">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-secondary rounded-full blur-[100px]"></div>
        <div class="absolute bottom-10 left-10 w-80 h-80 bg-blue-500 rounded-full blur-[100px]"></div>
    </div>
    <!-- Watermark X -->
    <img src="https://colegioecursoconexao.com.br/assets/images/x-laranja.png" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] md:w-[800px] pointer-events-none z-0" style="filter: brightness(0) invert(1); opacity: 0.08;" alt="">

    <div class="container mx-auto px-6 relative z-10 mb-16">
        <!-- Badge Title -->
        <div class="flex flex-col items-center justify-center mb-16" data-aos="fade-down">
            <div class="relative flex flex-col items-center z-10 w-full max-w-sm">
                <!-- Orange Top Badge -->
                <div class="bg-secondary text-white px-10 py-3 font-black tracking-widest text-lg md:text-xl uppercase skew-x-[-10deg] shadow-lg z-20">
                    <span class="inline-block skew-x-[10deg]">NOSSOS</span>
                </div>
                <!-- White Bottom Badge -->
                <div class="bg-white text-primary px-10 py-3 font-black tracking-widest text-base md:text-lg uppercase skew-x-[8deg] shadow-lg -mt-2 z-10 relative">
                    <span class="inline-block skew-x-[-8deg]">DIFERENCIAIS</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
            <?php 
            $diferenciais = [
                'Turmas reduzidas para maior atenção ao aluno',
                'Equipe pedagógica altamente capacitada e comprometida',
                'Material didático de excelência (impresso e digital enriquecido)',
                'Sistema ETAPA completo com videoaulas atualizadas',
                'Ensino estruturado em Espiral Crescente (revisão constante)',
                'Plantão de dúvidas completo (presencial e remoto)',
                'Avaliação semanal e Simulados frequentes',
                'Feedback de evolução através de boletim eletrônico',
                'Aulas dinâmicas de laboratório em diversas ciências',
                'Visitas a laboratórios da Universidade de São Paulo (USP)',
                'Projetos de extensão e excursões monitoradas de estudo do meio',
                'Acompanhamento e orientação contínua nas redações',
                'Ampliação de repertório social, crítico e de comunicação',
                'Orientação de estudos focada na autodisciplina',
                'Diretoria e mantenedores com visão puramente educacional',
            ];
            
            foreach ($diferenciais as $index => $dif) {
                $delay = ($index % 3) * 50;
                echo '
                <div class="group relative h-full" data-aos="fade-up" data-aos-delay="'.$delay.'">
                    <!-- ambient hover glow -->
                    <div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                    <!-- glass card -->
                    <div class="relative flex items-center gap-4 p-6 rounded-2xl bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md transition-all duration-500 h-full">
                        <div class="w-12 h-12 rounded-xl bg-secondary/20 text-secondary flex shrink-0 items-center justify-center text-lg shadow-lg group-hover:bg-secondary group-hover:text-white group-hover:scale-110 group-hover:-rotate-12 transition-all duration-500">
                            <i class="fas fa-check"></i>
                        </div>
                        <p class="text-[15px] font-medium text-white/90 leading-relaxed m-0 group-hover:text-white transition-colors">
                            '.$dif.'
                        </p>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Projetos Pedagógicos -->
<section id="pedagogico" class="py-24 bg-surface relative overflow-hidden">
    <!-- Abstract shapes -->
    <div class="absolute -top-20 -left-20 w-[500px] h-[500px] bg-secondary/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/2 -right-20 w-[400px] h-[400px] bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Badge Title -->
        <div class="flex flex-col items-center justify-center mb-20" data-aos="fade-down">
            <div class="relative flex flex-col items-center z-10 w-full max-w-sm">
                <!-- Orange Top Badge -->
                <div class="bg-secondary text-white px-10 py-3 font-black tracking-widest text-lg uppercase skew-x-[-10deg] shadow-lg z-20">
                    <span class="inline-block skew-x-[10deg]">PROJETOS</span>
                </div>
                <!-- Blue Bottom Badge -->
                <div class="bg-primary text-white px-8 py-3 font-black tracking-widest text-sm uppercase skew-x-[8deg] shadow-lg -mt-2 z-10 relative">
                    <span class="inline-block skew-x-[-8deg]">PEDAGÓGICOS</span>
                </div>
            </div>
        </div>

        <div class="space-y-16 max-w-6xl mx-auto">
            <?php 
            $projetos = [
                [
                    'titulo' => 'Orientação Profissional',
                    'imagem' => 'https://colegioecursoconexao.com.br/assets/imgs/pre-orien.png',
                    'texto' => 'A escolha profissional é uma situação capaz de desestabilizar o jovem adolescente, devido às cobranças externas e internas, o que deixa difícil discriminar qual o caminho a seguir. É relevante investir no aluno do Ensino Médio para que este compreenda a dinâmica envolvida na tomada de decisão. Este projeto lançará luz a este terreno obscuro.'
                ],
                [
                    'titulo' => 'Orientação Educacional',
                    'imagem' => 'https://colegioecursoconexao.com.br/assets/imgs/pre-vestibular-apoio.png',
                    'texto' => 'A opção pela educação integral significa uma educação que capacite o aluno a ocupar com competência o seu lugar na sociedade. Procuramos experiências que estimulem o aluno a aprender a pensar, desenvolvendo capacidades como atenção, análise e criatividade, abrangendo todas as dimensões da pessoa: cognitivo, afetivo e comportamental.<br><br><strong class="text-primary">A orientação tem por objetivo:</strong><br>- Ajudar a realizar a proposta pedagógica.<br>- Contribuir para o desenvolvimento pessoal na solução de problemas de estudo.<br>- Promover a integração harmônica da comunidade escolar.<br>- Trabalhar em parceria com o professor.'
                ],
                [
                    'titulo' => 'Análise de Obras Literárias',
                    'imagem' => 'https://colegioecursoconexao.com.br/assets/imgs/pre-vestibular-analise.png',
                    'texto' => 'A leitura nunca se fez tão necessária. Através da leitura o ser humano consegue se transportar para o desconhecido e decifrar emoções. Esse projeto propicia ao aluno momentos que despertam o gosto pela leitura e o amor ao livro. Estimulando a leitura, faremos com que nossos alunos compreendam melhor o aprendizado na escola e o mundo em geral, entregando um horizonte novo.'
                ],
                [
                    'titulo' => 'Atualidades',
                    'imagem' => 'https://colegioecursoconexao.com.br/assets/imgs/pre-vestibular-news.png',
                    'texto' => 'A proposta em apresentar aulas sobre “Atualidades” está relacionada ao desenvolvimento de atitudes críticas, participativas e libertadoras de pré-noções, preparando-os por meio da investigação de fenômenos atuais nas diferentes esferas do saber. Com base na Nova Proposta do Exame Nacional do Ensino Médio (ENEM), está focado no progresso e na continuidade da aprendizagem.'
                ],
                [
                    'titulo' => 'Tecnoclube de Ciências',
                    'imagem' => 'https://colegioecursoconexao.com.br/assets/imgs/ensio_medio_lab.png',
                    'texto' => 'Traz ao aluno a possibilidade de vivenciar aplicações práticas dos conceitos estudados. Esse projeto ensina física, química e biologia sob o ponto de vista histórico e cultural, promovendo a integração e interdisciplinaridade. Torna a maneira de pensar mais ampla, desmistifica traumas por aulas tradicionais e ajuda a despertar futuras paixões científicas.'
                ],
                [
                    'titulo' => 'Oficina de Redação',
                    'imagem' => 'https://colegioecursoconexao.com.br/assets/imgs/pre-vestibular-resacao.png',
                    'texto' => 'Leva aos alunos temas atuais e diferentes repertórios socioculturais (Filosofia, Sociologia, Literatura e Arte) para auxiliar na composição de um texto consistente, coeso e coerente cobrado nos vestibulares. Busca desenvolver as habilidades interpretativas para a compreensão crítica da realidade por intermédio da apresentação de diferentes tipos de textos e produções textuais.'
                ]
            ];
            
            foreach ($projetos as $index => $proj) {
                // Alternating zig-zag logic
                $imgOrder = ($index % 2 === 0) ? 'md:order-1' : 'md:order-2';
                $textOrder = ($index % 2 === 0) ? 'md:order-2' : 'md:order-1';
                $fadeImg = ($index % 2 === 0) ? 'fade-right' : 'fade-left';
                $fadeText = ($index % 2 === 0) ? 'fade-left' : 'fade-right';
                $bgColor = ($index % 2 === 0) ? 'bg-secondary' : 'bg-primary';
                
                echo '
                <div class="grid grid-cols-1 md:grid-cols-12 gap-8 lg:gap-12 items-center group">
                    <div class="col-span-1 md:col-span-4 '.$imgOrder.'" data-aos="'.$fadeImg.'">
                        <div class="relative w-[220px] md:w-full mx-auto">
                            <div class="absolute inset-0 '.$bgColor.' rounded-2xl rotate-3 group-hover:rotate-6 opacity-20 transition-transform duration-500"></div>
                            <div class="relative rounded-2xl overflow-hidden shadow-xl bg-white border-4 border-white">
                                <img src="'.$proj['imagem'].'" alt="'.$proj['titulo'].'" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-500 aspect-square">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 md:col-span-8 '.$textOrder.'" data-aos="'.$fadeText.'">
                        <div class="bg-white p-8 md:p-10 rounded-3xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] border border-slate-50 hover:shadow-xl transition-shadow duration-300">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-10 h-10 rounded-full '.$bgColor.'/10 flex items-center justify-center shrink-0">
                                    <i class="fas fa-book-open text-'.$bgColor.'"></i>
                                </div>
                                <h4 class="text-primary font-black text-2xl group-hover:text-secondary transition-colors duration-300 uppercase tracking-wide">'.$proj['titulo'].'</h4>
                            </div>
                            <p class="text-slate-600 text-[16px] leading-relaxed font-medium pl-14">
                                '.$proj['texto'].'
                            </p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<section id="atividades-extracurriculares" class="pt-24 pb-32 bg-white" data-aos="fade-up">
    <div class="container mx-auto px-6 mb-16">
        
        <!-- Header Structure mimicking the screenshot -->
        <div class="flex flex-col items-center justify-center mb-16" data-aos="fade-down">
            <div class="relative flex flex-col items-center z-10 w-full max-w-sm">
                <!-- Orange Top Badge -->
                <div class="bg-secondary text-white px-10 py-3 font-black tracking-widest text-lg uppercase skew-x-[-10deg] shadow-sm z-20">
                    <span class="inline-block skew-x-[10deg]">ATIVIDADES</span>
                </div>
                <!-- Blue Bottom Badge -->
                <div class="bg-primary text-white px-8 py-3 font-black tracking-widest text-sm uppercase skew-x-[8deg] shadow-sm -mt-2 z-10 relative">
                    <span class="inline-block skew-x-[-8deg]">EXTRACURRICULARES</span>
                </div>
            </div>
            <!-- Subtitle -->
            <p class="text-primary font-bold mt-8 text-center md:text-lg max-w-2xl px-4">
                Complementando a formação com arte, esporte, tecnologia e cultura.
            </p>
        </div>

        <!-- Grid of Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            
            <!-- Artes Visuais -->
            <div class="relative group" data-aos="fade-up" data-aos-delay="0">
                <div class="absolute inset-0 bg-primary rounded-2xl rotate-3 group-hover:rotate-6 opacity-10 transition-transform duration-500"></div>
                <div class="absolute inset-0 bg-secondary rounded-2xl -rotate-3 group-hover:-rotate-6 opacity-10 transition-transform duration-500"></div>
                <div class="relative bg-white rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] border border-slate-50 hover:border-secondary transition-all duration-300 p-10 flex flex-col items-center text-center cursor-default h-full">
                    <div class="mb-5 text-primary group-hover:text-secondary group-hover:scale-110 transition-all duration-300 text-5xl">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h4 class="text-primary group-hover:text-secondary font-bold text-xl mb-4 transition-colors duration-300">Artes Visuais</h4>
                    <p class="text-slate-500 text-[15px] leading-relaxed font-medium">Estimulando a criatividade e a expressão artística através de diversas técnicas e materiais.</p>
                </div>
            </div>

            <!-- Xadrez -->
            <div class="relative group" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 bg-primary rounded-2xl rotate-3 group-hover:rotate-6 opacity-10 transition-transform duration-500"></div>
                <div class="absolute inset-0 bg-secondary rounded-2xl -rotate-3 group-hover:-rotate-6 opacity-10 transition-transform duration-500"></div>
                <div class="relative bg-white rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] border border-slate-50 hover:border-secondary transition-all duration-300 p-10 flex flex-col items-center text-center cursor-default h-full">
                    <div class="mb-5 text-primary group-hover:text-secondary group-hover:scale-110 transition-all duration-300 text-5xl">
                        <i class="fas fa-chess-knight"></i>
                    </div>
                    <h4 class="text-primary group-hover:text-secondary font-bold text-xl mb-4 transition-colors duration-300">Xadrez</h4>
                    <p class="text-slate-500 text-[15px] leading-relaxed font-medium">Desenvolvendo o raciocínio lógico, a concentração e a estratégia em um jogo milenar.</p>
                </div>
            </div>

            <!-- Robótica -->
            <div class="relative group" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute inset-0 bg-primary rounded-2xl rotate-3 group-hover:rotate-6 opacity-10 transition-transform duration-500"></div>
                <div class="absolute inset-0 bg-secondary rounded-2xl -rotate-3 group-hover:-rotate-6 opacity-10 transition-transform duration-500"></div>
                <div class="relative bg-white rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] border border-slate-50 hover:border-secondary transition-all duration-300 p-10 flex flex-col items-center text-center cursor-default h-full">
                    <div class="mb-5 text-primary group-hover:text-secondary group-hover:scale-110 transition-all duration-300 text-5xl">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h4 class="text-primary group-hover:text-secondary font-bold text-xl mb-4 transition-colors duration-300">Robótica</h4>
                    <p class="text-slate-500 text-[15px] leading-relaxed font-medium">Iniciação tecnológica e resolução de problemas através da montagem e programação.</p>
                </div>
            </div>

            <!-- Musicalização -->
            <div class="relative group" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-primary rounded-2xl rotate-3 group-hover:rotate-6 opacity-10 transition-transform duration-500"></div>
                <div class="absolute inset-0 bg-secondary rounded-2xl -rotate-3 group-hover:-rotate-6 opacity-10 transition-transform duration-500"></div>
                <div class="relative bg-white rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] border border-slate-50 hover:border-secondary transition-all duration-300 p-10 flex flex-col items-center text-center cursor-default h-full">
                    <div class="mb-5 text-primary group-hover:text-secondary group-hover:scale-110 transition-all duration-300 text-5xl">
                        <i class="fas fa-music"></i>
                    </div>
                    <h4 class="text-primary group-hover:text-secondary font-bold text-xl mb-4 transition-colors duration-300">Musicalização</h4>
                    <p class="text-slate-500 text-[15px] leading-relaxed font-medium">Explorando ritmos, sons e instrumentos para o desenvolvimento da sensibilidade auditiva.</p>
                </div>
            </div>

            <!-- Ed. Física -->
            <div class="relative group" data-aos="fade-up" data-aos-delay="400">
                <div class="absolute inset-0 bg-primary rounded-2xl rotate-3 group-hover:rotate-6 opacity-10 transition-transform duration-500"></div>
                <div class="absolute inset-0 bg-secondary rounded-2xl -rotate-3 group-hover:-rotate-6 opacity-10 transition-transform duration-500"></div>
                <div class="relative bg-white rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] border border-slate-50 hover:border-secondary transition-all duration-300 p-10 flex flex-col items-center text-center cursor-default h-full">
                    <div class="mb-5 text-primary group-hover:text-secondary group-hover:scale-110 transition-all duration-300 text-5xl">
                        <i class="fas fa-running"></i>
                    </div>
                    <h4 class="text-primary group-hover:text-secondary font-bold text-xl mb-4 transition-colors duration-300">Ed. Física</h4>
                    <p class="text-slate-500 text-[15px] leading-relaxed font-medium">Promoção da saúde, cooperação e desenvolvimento motor através de esportes e jogos.</p>
                </div>
            </div>

            <!-- Laboratório -->
            <div class="relative group" data-aos="fade-up" data-aos-delay="500">
                <div class="absolute inset-0 bg-primary rounded-2xl rotate-3 group-hover:rotate-6 opacity-10 transition-transform duration-500"></div>
                <div class="absolute inset-0 bg-secondary rounded-2xl -rotate-3 group-hover:-rotate-6 opacity-10 transition-transform duration-500"></div>
                <div class="relative bg-white rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.04)] border border-slate-50 hover:border-secondary transition-all duration-300 p-10 flex flex-col items-center text-center cursor-default h-full">
                    <div class="mb-5 text-primary group-hover:text-secondary group-hover:scale-110 transition-all duration-300 text-5xl">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h4 class="text-primary group-hover:text-secondary font-bold text-xl mb-4 transition-colors duration-300">Laboratório</h4>
                    <p class="text-slate-500 text-[15px] leading-relaxed font-medium">Experiências práticas que despertam a curiosidade científica e o espírito investigativo.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Estrutura -->
<section id="estrutura" class="pt-24 pb-32 bg-primary relative overflow-hidden">
    <!-- Animated X Background -->
    <style>
        @keyframes xf-a {
            0%   { transform: translateY(0px)    rotate(var(--r)) scale(1); }
            35%  { transform: translateY(-20px)  rotate(calc(var(--r) + 7deg)) scale(1.05); }
            65%  { transform: translateY(11px)   rotate(calc(var(--r) - 5deg)) scale(0.96); }
            100% { transform: translateY(0px)    rotate(var(--r)) scale(1); }
        }
        @keyframes xf-b {
            0%   { transform: translateY(0px)    translateX(0px)   rotate(var(--r)); }
            30%  { transform: translateY(-14px)  translateX(10px)  rotate(calc(var(--r) + 5deg)); }
            70%  { transform: translateY(14px)   translateX(-8px)  rotate(calc(var(--r) - 6deg)); }
            100% { transform: translateY(0px)    translateX(0px)   rotate(var(--r)); }
        }
        .xfloat   { animation: xf-a var(--dur) ease-in-out infinite; animation-delay: var(--del); }
        .xfloat.b { animation-name: xf-b; }
        /* Slow, dreamy cursor-follow transition */
        .xwrap    { position: absolute; transition: transform 3.5s cubic-bezier(0.2,1,0.3,1); }
        .xwrap img { display: block; width: 100%; height: 100%; }
    </style>
    <div id="estrutura-bg-x" class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="xwrap" data-d="0.25" style="left:3%;  top:8%;  width:62px;  height:62px;"><div class="xfloat"   style="--r:-20deg; --dur:14s; --del:0s;    opacity:.07;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.15" style="left:15%; top:70%; width:88px;  height:88px;"><div class="xfloat b" style="--r:10deg;  --dur:18s; --del:-5s;   opacity:.05;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.35" style="left:24%; top:30%; width:44px;  height:44px;"><div class="xfloat"   style="--r:-5deg;  --dur:11s; --del:-2s;   opacity:.08;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.20" style="left:40%; top:78%; width:70px;  height:70px;"><div class="xfloat b" style="--r:30deg;  --dur:16s; --del:-8s;   opacity:.05;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.30" style="left:54%; top:9%;  width:54px;  height:54px;"><div class="xfloat"   style="--r:-40deg; --dur:13s; --del:-3s;   opacity:.06;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.12" style="left:65%; top:50%; width:98px;  height:98px;"><div class="xfloat b" style="--r:15deg;  --dur:22s; --del:-12s;  opacity:.04;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.28" style="left:75%; top:22%; width:50px;  height:50px;"><div class="xfloat"   style="--r:-25deg; --dur:15s; --del:-7s;   opacity:.07;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.18" style="left:84%; top:60%; width:74px;  height:74px;"><div class="xfloat b" style="--r:5deg;   --dur:12s; --del:-1s;   opacity:.06;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.40" style="left:91%; top:14%; width:40px;  height:40px;"><div class="xfloat"   style="--r:-35deg; --dur:17s; --del:-9s;   opacity:.06;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.10" style="left:46%; top:42%; width:84px;  height:84px;"><div class="xfloat b" style="--r:20deg;  --dur:24s; --del:-15s;  opacity:.04;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.32" style="left:8%;  top:88%; width:54px;  height:54px;"><div class="xfloat"   style="--r:-12deg; --dur:10s; --del:-4s;   opacity:.06;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.22" style="left:72%; top:85%; width:64px;  height:64px;"><div class="xfloat b" style="--r:45deg;  --dur:19s; --del:-11s;  opacity:.05;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <!-- Large hero X — 80% opacity, very slow drift -->
        <div class="xwrap" data-d="0.05" style="left:50%; top:50%; width:500px; height:500px; transform:translate(-50%,-50%);">
            <div class="xfloat" style="--r:-8deg; --dur:30s; --del:0s; opacity:.80;">
                <img src="assets/images/x-laranja.png" alt="">
            </div>
        </div>
        <!-- Extra particles — varied sizes and opacities -->
        <div class="xwrap" data-d="0.38" style="left:18%; top:18%; width:38px;  height:38px;"><div class="xfloat b" style="--r:55deg;  --dur:9s;  --del:-3s;  opacity:.10;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.22" style="left:80%; top:40%; width:130px; height:130px;"><div class="xfloat"   style="--r:-18deg; --dur:26s; --del:-6s;  opacity:.06;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.45" style="left:60%; top:72%; width:32px;  height:32px;"><div class="xfloat b" style="--r:70deg;  --dur:8s;  --del:-1s;  opacity:.12;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.18" style="left:35%; top:60%; width:110px; height:110px;"><div class="xfloat"   style="--r:-30deg; --dur:28s; --del:-10s; opacity:.04;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.50" style="left:5%;  top:55%; width:28px;  height:28px;"><div class="xfloat b" style="--r:25deg;  --dur:7s;  --del:-2s;  opacity:.14;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.28" style="left:88%; top:80%; width:80px;  height:80px;"><div class="xfloat"   style="--r:-50deg; --dur:20s; --del:-14s; opacity:.06;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.40" style="left:42%; top:5%;  width:48px;  height:48px;"><div class="xfloat b" style="--r:12deg;  --dur:11s; --del:-5s;  opacity:.09;"><img src="assets/images/x-laranja.png" alt=""></div></div>
        <div class="xwrap" data-d="0.15" style="left:70%; top:5%;  width:95px;  height:95px;"><div class="xfloat"   style="--r:-62deg; --dur:23s; --del:-18s; opacity:.05;"><img src="assets/images/x-laranja.png" alt=""></div></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Badge Title -->
        <div class="flex flex-col items-center justify-center mb-16" data-aos="fade-down">
            <div class="relative flex flex-col items-center z-10 w-full max-w-sm">
                <!-- Orange Top Badge -->
                <div class="bg-secondary text-white px-10 py-3 font-black tracking-widest text-lg md:text-xl uppercase skew-x-[-10deg] shadow-lg z-20">
                    <span class="inline-block skew-x-[10deg]">NOSSA</span>
                </div>
                <!-- White Bottom Badge -->
                <div class="bg-white text-primary px-10 py-3 font-black tracking-widest text-base md:text-lg uppercase skew-x-[8deg] shadow-lg -mt-2 z-10 relative">
                    <span class="inline-block skew-x-[-8deg]">ESTRUTURA</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-7xl mx-auto mb-8">
            <?php 
            $estruturas = [
                '15961416460.jpeg', '15961416461.jpeg', '15961416462.jpeg', '15961416463.jpeg',
            ];
            
            foreach ($estruturas as $index => $img) {
                $delay = $index * 100;
                echo '
                <div class="group relative rounded-2xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.2)] border-2 border-white/20 aspect-video cursor-pointer" data-aos="fade-up" data-aos-delay="'.$delay.'">
                    <a href="https://colegioecursoconexao.com.br/uploads/album/'.$img.'" data-toggle="lightbox" data-gallery="structure">
                        <img src="https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/'.$img.'" alt="Estrutura" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-3xl"></i>
                        </div>
                    </a>
                </div>';
            }
            ?>
        </div>
        
        <div id="difen-more" class="collapse">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-7xl mx-auto mt-4 mb-8">
                <?php 
                $estruturas_mais = [
                    '15967207831.jpeg'
                ];
                
                foreach ($estruturas_mais as $index => $img) {
                    echo '
                    <div class="group relative rounded-2xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.2)] border-2 border-white/20 aspect-video cursor-pointer">
                        <a href="https://colegioecursoconexao.com.br/uploads/album/'.$img.'" data-toggle="lightbox" data-gallery="structure">
                            <img src="https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/'.$img.'" alt="Estrutura" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-primary/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <i class="fas fa-search-plus text-white text-3xl"></i>
                            </div>
                        </a>
                    </div>';
                }
                ?>
            </div>
        </div>

        <div class="flex justify-center mt-6">
            <button id="more-gallery" data-toggle="collapse" data-target="#difen-more" class="w-14 h-14 bg-white rounded-full flex items-center justify-center text-primary text-2xl shadow-[0_4px_20px_rgba(0,0,0,0.2)] hover:bg-secondary hover:text-white transition-all duration-300 hover:scale-110">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
</section>

<script>
(function(){
    var section = document.getElementById('estrutura');
    if (!section) return;
    var wraps = section.querySelectorAll('.xwrap');
    var ticking = false;

    section.addEventListener('mousemove', function(e){
        if (ticking) return;
        ticking = true;
        requestAnimationFrame(function(){
            var rect = section.getBoundingClientRect();
            var cx = (e.clientX - rect.left)  / rect.width  - 0.5;
            var cy = (e.clientY - rect.top)   / rect.height - 0.5;
            wraps.forEach(function(w){
                var d  = parseFloat(w.dataset.d  || 0.2);
                w.style.transform = 'translate(' + (cx*d*90) + 'px,' + (cy*d*55) + 'px)';
            });
            ticking = false;
        });
    });

    section.addEventListener('mouseleave', function(){
        wraps.forEach(function(w){ w.style.transform = 'translate(0,0)'; });
    });
})();
</script>

<!-- Galeria de Fotos -->
<section id="galeria_fotos" class="pt-24 pb-32 bg-surface-container relative overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <!-- Badge Title -->
        <div class="flex flex-col items-center justify-center mb-16" data-aos="fade-down">
            <div class="relative flex flex-col items-center z-10 w-full max-w-sm">
                <div class="bg-secondary text-white px-10 py-3 font-black tracking-widest text-lg md:text-xl uppercase skew-x-[-10deg] shadow-lg z-20">
                    <span class="inline-block skew-x-[10deg]">GALERIA</span>
                </div>
                <div class="bg-primary text-white px-8 py-3 font-black tracking-widest text-base md:text-lg uppercase skew-x-[8deg] shadow-lg -mt-2 z-10 relative">
                    <span class="inline-block skew-x-[-8deg]">DE FOTOS</span>
                </div>
            </div>
        </div>

        <?php
        $galerias = array (
  0 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/380',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/1747771383-c.jpeg',
    'date' => '18/05/2025',
    'title' => 'Alunos do Ensino Médio e Pré-Vestibular Participam de Workshop de Medicina da USP',
  ),
  1 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/368',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/1685469262-c.jpeg',
    'date' => '25/05/2023',
    'title' => 'Visita técnica na Faculdade de Ciências Farmacêuticas de Araraquara (UNESP).',
  ),
  2 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/367',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/1685469017-c.jpeg',
    'date' => '19/04/2023',
    'title' => 'Excursão Cultura - Museu da Língua Portuguesa, Pinacoteca e exposição de Michelangelo',
  ),
  3 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/366',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/1685468880-c.jpeg',
    'date' => '05/04/2023',
    'title' => 'ENAC 2023 - Exame Nacional de Aprendizagem de Conteúdo',
  ),
  4 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/357',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/1679402425-c.jpeg',
    'date' => '21/03/2023',
    'title' => 'Aprovados 2023',
  ),
  5 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/353',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/1668168625-c.jpeg',
    'date' => '22/10/2022',
    'title' => 'ConectShow 2022',
  ),
  6 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/350',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/1668167029-c.jpeg',
    'date' => '06/10/2022',
    'title' => '25ª Olimpíada Brasileira de Astronomia e Astronáutica (OBA)',
  ),
  7 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/351',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/1668167255-c.jpeg',
    'date' => '01/10/2022',
    'title' => 'Os alunos do Extensivo e Ensino Médio participaram do processo de renovação da parede dos APROVADOS para 2023.',
  ),
  8 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/340',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/1655216402-c.jpeg',
    'date' => '03/06/2022',
    'title' => 'X ARRAIÁ SOLIDÁRIO - ENSINO MÉDIO',
  ),
  9 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/335',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/1653680032-c.jpeg',
    'date' => '27/05/2022',
    'title' => 'JOGOS INTERCLASSE 2022',
  ),
  10 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/339',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/1653682252-c.jpeg',
    'date' => '24/05/2022',
    'title' => 'Concurso Noivo & Noiva - Festa Junina 2022',
  ),
  11 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/334',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/1652710467-c.jpeg',
    'date' => '15/05/2022',
    'title' => 'XXIII WORKSHOP DE MEDICINA DA USP',
  ),
  12 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/326',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/1643824136-c.jpeg',
    'date' => '02/02/2022',
    'title' => 'APROVADOS 2022',
  ),
  13 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/325',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/album/1643823730-c.jpeg',
    'date' => '10/04/2021',
    'title' => 'APROVADOS 2021',
  ),
  14 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/311',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/87987229_1844921632308538_9079246132835516416_o.jpg',
    'date' => '01/03/2020',
    'title' => 'LEONARDO DA VINCI – 500 ANOS DE UM GÊNIO',
  ),
  15 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/304',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/PHOTO-2019-11-01-14-18-49%20%281%29.jpg',
    'date' => '01/11/2019',
    'title' => 'Jogos da Primavera 2019',
  ),
  16 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/302',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/72378265_1699940793473290_6864609112089427968_o.jpg',
    'date' => '19/10/2019',
    'title' => 'CONECTSHOW 2019',
  ),
  17 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/300',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/70600404_1666913790109324_4955191640131108864_o_1.jpg',
    'date' => '23/09/2019',
    'title' => 'TECNOCLUBE DE CIÊNCIAS',
  ),
  18 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/296',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/66250497_1604065076394196_4857040251459207168_o.jpg',
    'date' => '07/07/2019',
    'title' => 'Exposição Tarsila do Amaral - MASP',
  ),
  19 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/291',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/59410776_1547751232025581_8485953833195798528_o_1.jpg',
    'date' => '30/04/2019',
    'title' => 'Programa Altas Horas',
  ),
  20 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/282',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/56640187_1527900540677317_4883175337908764672_o_1.jpg',
    'date' => '05/04/2019',
    'title' => 'Simulado Prova Geral - Ensino Médio',
  ),
  21 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/279',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/55845297_1524251034375601_1435894939572502528_o.jpg',
    'date' => '30/03/2019',
    'title' => 'Painel de Profissões  - ETAPA Valinhos',
  ),
  22 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/272',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/38894745_1343735542427152_3941470416429645824_o.jpg',
    'date' => '11/08/2018',
    'title' => 'Dia do Estudante',
  ),
  23 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/274',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_3129.JPG',
    'date' => '02/07/2018',
    'title' => 'Interclasse 2018 - Vôlei',
  ),
  24 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/273',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/35882199_1285301614937212_1695391151290318848_o.jpg',
    'date' => '16/06/2018',
    'title' => 'VIII Forró Solidário',
  ),
  25 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/264',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/22366827_1123308991136476_7132393043226652757_n.jpg',
    'date' => '07/10/2017',
    'title' => 'V Conect Show',
  ),
  26 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/262',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/19274904_1055448034589239_5614083861585684354_n.jpg',
    'date' => '03/06/2017',
    'title' => 'VII Forró Solidário',
  ),
  27 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/259',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/2.JPG',
    'date' => '15/05/2017',
    'title' => 'Interclasse 2017',
  ),
  28 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/257',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_3938.JPG',
    'date' => '07/04/2017',
    'title' => 'Aprovados 2017 - Único nos Resultados',
  ),
  29 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/253',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/15171114_917747115025999_1402319606655752095_n.jpg',
    'date' => '25/11/2016',
    'title' => 'Interclasse 2016',
  ),
  30 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/246',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/14572147_885956581538386_2291656820050960150_n.jpg',
    'date' => '11/10/2016',
    'title' => 'Laboratório Biologia',
  ),
  31 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/242',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/Coral%20Conex_o-90.jpg',
    'date' => '07/08/2016',
    'title' => 'Apresentação 05 anos de Coral Conexão',
  ),
  32 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/224',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/13428624_819387641528614_4955627915672793421_n.jpg',
    'date' => '09/06/2016',
    'title' => '2ª Prova Geral 2016',
  ),
  33 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/226',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/13346612_819780628155982_8491676230013328593_n.jpg',
    'date' => '04/06/2016',
    'title' => 'VI Forró Solidário - Festa Junina',
  ),
  34 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/222',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/13344694_817058948428150_8792967684632928945_n.jpg',
    'date' => '02/06/2016',
    'title' => 'Concurso Noivo e Noiva 2016',
  ),
  35 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/221',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/13322205_817966258337419_6932319449804569623_n.jpg',
    'date' => '30/05/2016',
    'title' => 'Aula prática de Biologia',
  ),
  36 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/218',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/13138973_802542879879757_2320346074147092520_n.jpg',
    'date' => '29/04/2016',
    'title' => 'Grupo Alquimia',
  ),
  37 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/216',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_8312.JPG',
    'date' => '20/04/2016',
    'title' => 'Show de Física e Butantan',
  ),
  38 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/215',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_4402.JPG',
    'date' => '20/04/2016',
    'title' => 'Rafting - Brotas',
  ),
  39 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/210',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/13015166_797323677068344_1557960950660631195_n.jpg',
    'date' => '20/04/2016',
    'title' => 'Brotas - Estudo do Meio Ambiente',
  ),
  40 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/209',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/13007214_795897160544329_7093146872537333927_n%20%281%29.jpg',
    'date' => '19/04/2016',
    'title' => 'Aula Prática: Permeabilidade da Membrana.',
  ),
  41 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/213',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/12987108_790976351036410_260150196909617425_n.jpg',
    'date' => '07/04/2016',
    'title' => 'Prova Geral',
  ),
  42 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/195',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/Untitled-1.png',
    'date' => '04/02/2016',
    'title' => 'APROVADOS 2016',
  ),
  43 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/191',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/Enem4.jpg',
    'date' => '09/12/2015',
    'title' => 'Vestibulares 2016',
  ),
  44 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/185',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/12079221_714259965374716_6247799538063533311_n.jpg',
    'date' => '03/10/2015',
    'title' => 'ConectShow - III Show de Talentos.',
  ),
  45 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/183',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/10351814_702847806515932_569770229143353250_n.jpg',
    'date' => '05/09/2015',
    'title' => 'Altas Horas - 2015',
  ),
  46 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/182',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/P1090500.JPG',
    'date' => '01/09/2015',
    'title' => 'Projeto de Estudo do Meio Ambiente - Ubatuba / Paraty',
  ),
  47 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/181',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/Coral35.jpg',
    'date' => '21/08/2015',
    'title' => 'Coral Conexão - Sesc Araraquara.',
  ),
  48 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/176',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/10985481_671204246346955_8324817349588355410_n.jpg',
    'date' => '20/06/2015',
    'title' => 'V Forró Solidário - Festa Junina',
  ),
  49 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/174',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/_-30.jpg',
    'date' => '14/06/2015',
    'title' => 'Passeio Ciclístico Solidário',
  ),
  50 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/173',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/11406958_666564050144308_2943558741775543342_n.jpg',
    'date' => '12/06/2015',
    'title' => 'Clima de Festa Junina!',
  ),
  51 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/168',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_3158.JPG',
    'date' => '11/05/2015',
    'title' => 'Anatomia interna e externa do peixe',
  ),
  52 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/165',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_3361.JPG',
    'date' => '07/05/2015',
    'title' => 'Rafting Brotas - 1º E.M.',
  ),
  53 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/155',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/1.JPG',
    'date' => '11/04/2015',
    'title' => 'Painel de Profissões 2015',
  ),
  54 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/154',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_3111.jpg',
    'date' => '02/04/2015',
    'title' => 'Morfologia de Anelídeos',
  ),
  55 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/153',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_2322.jpg',
    'date' => '04/02/2015',
    'title' => 'APROVADOS 2015',
  ),
  56 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/148',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_2030.jpg',
    'date' => '18/11/2014',
    'title' => 'Apresentação Coral - Shopping Jaraguá',
  ),
  57 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/146',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_1923.jpg',
    'date' => '04/11/2014',
    'title' => 'Aulas de Aprofundamento',
  ),
  58 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/147',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/10676146_549390978528283_7482305648601146132_n.jpg',
    'date' => '01/11/2014',
    'title' => 'II Show de Talentos',
  ),
  59 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/141',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_1810.jpg',
    'date' => '07/10/2014',
    'title' => 'Sistema Circulatório - 2º E.M.',
  ),
  60 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/140',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/10649743_533125990154782_2266249639003072057_n.jpg',
    'date' => '29/09/2014',
    'title' => 'CQC',
  ),
  61 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/138',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_1771.jpg',
    'date' => '06/09/2014',
    'title' => 'Vamos falar sobre medicina?',
  ),
  62 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/137',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/17.jpg',
    'date' => '30/08/2014',
    'title' => 'Show de Física - USP e Instituto Butantan',
  ),
  63 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/135',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_1656.jpg',
    'date' => '21/08/2014',
    'title' => 'Brotas - Estudo do meio ambiente',
  ),
  64 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/136',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/Conexao-50_1.jpg',
    'date' => '11/08/2014',
    'title' => 'Dia do Estudante',
  ),
  65 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/126',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/Festa%20Junina-60.jpg',
    'date' => '15/06/2014',
    'title' => 'IV Forró Solidário',
  ),
  66 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/120',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/2_2.jpg',
    'date' => '10/06/2014',
    'title' => 'Clima de festa junina!',
  ),
  67 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/119',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/2.jpg',
    'date' => '09/06/2014',
    'title' => 'Apresentação no colégio',
  ),
  68 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/115',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/10313379_636878176409206_8637995831335140892_n.jpg',
    'date' => '11/05/2014',
    'title' => 'Altas Horas',
  ),
  69 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/104',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_0867.jpg',
    'date' => '28/11/2013',
    'title' => 'Coral Conexão - Shopping Jaraguá',
  ),
  70 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/102',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_0764.jpg',
    'date' => '19/11/2013',
    'title' => 'Projeto de Cidadania e Ação Social',
  ),
  71 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/101',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/SDC12421.JPG',
    'date' => '10/11/2013',
    'title' => 'UNICAMP - 1ª Fase',
  ),
  72 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/98',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_0517.jpg',
    'date' => '08/11/2013',
    'title' => 'Interclasses',
  ),
  73 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/99',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/professoras.jpg',
    'date' => '05/11/2013',
    'title' => 'Ex-Combatente II Guerra Mundial',
  ),
  74 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/96',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/Campe_s%20jogos%20da%20primavera1.jpg',
    'date' => '01/11/2013',
    'title' => 'Final - Jogos da Primavera',
  ),
  75 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/89',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/DSC06503.JPG',
    'date' => '31/10/2013',
    'title' => 'Trabalho de Estatística',
  ),
  76 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/83',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/IMG_0331.jpg',
    'date' => '19/10/2013',
    'title' => '1º Show de Talentos',
  ),
  77 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/82',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/P1070656_1.JPG',
    'date' => '18/10/2013',
    'title' => 'O Fantástico Corpo Humano',
  ),
  78 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/79',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/resolve/square_medium/uploads/IMG_0053.jpg',
    'date' => '14/10/2013',
    'title' => 'Parede dos aprovados',
  ),
  79 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/73',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/1378495_368397219960994_666795191_n_1.jpg',
    'date' => '01/10/2013',
    'title' => 'Fase Final - JEESP',
  ),
  80 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/48',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/66778_352103278257055_1155281941_n_1.jpg',
    'date' => '29/08/2013',
    'title' => 'JEESP (Jogos Escolares do Estado de São Paulo)',
  ),
  81 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/42',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/DSC06277_2.JPG',
    'date' => '14/08/2013',
    'title' => 'Usina Santa Cruz',
  ),
  82 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/31',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/1058772_390059527766989_1457401386_n.jpg',
    'date' => '03/07/2013',
    'title' => 'Oficina de Redação',
  ),
  83 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/34',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/festajunina%20%2832%29_1.jpg',
    'date' => '29/06/2013',
    'title' => 'Festa Junina Beneficente',
  ),
  84 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/25',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/showdefisica%20%2818%29.jpg',
    'date' => '27/06/2013',
    'title' => 'Show de Física',
  ),
  85 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/23',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/laboratorioquimica%20%2816%29.jpg',
    'date' => '27/06/2013',
    'title' => 'Laboratório de Química',
  ),
  86 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/35',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/DSC01745.JPG',
    'date' => '12/06/2013',
    'title' => 'Shopping Jaraguá',
  ),
  87 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/21',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/coralnaescola%20%287%29.jpg',
    'date' => '12/06/2013',
    'title' => 'Coral Conexão',
  ),
  88 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/22',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/jocoara%20%2820%29.jpg',
    'date' => '19/04/2013',
    'title' => 'JOCOARA',
  ),
  89 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/15',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/altashoras%20%287%29.jpg',
    'date' => '05/04/2013',
    'title' => 'Altas Horas',
  ),
  90 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/24',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/primeirareuniao%20%283%29.jpg',
    'date' => '02/02/2013',
    'title' => 'Reunião de Pais',
  ),
  91 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/53',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/644412_274022459398471_1504896664_n_2.jpg',
    'date' => '01/02/2013',
    'title' => 'Aprovados 2013',
  ),
  92 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/17',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/visitadaae%20%283%29.jpg',
    'date' => '10/08/2012',
    'title' => 'Visita ao DAAE',
  ),
  93 => 
  array (
    'link' => 'https://colegioecursoconexao.com.br/galeria/16',
    'img' => 'https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/brotas%20%282%29.jpg',
    'date' => '26/05/2012',
    'title' => 'Brotas',
  ),
);
        ?>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto mb-10">
            <?php
            // Show only first 8 items
            foreach (array_slice($galerias, 0, 8) as $index => $item) {
                $delay = ($index % 4) * 100;
                echo '
                <div class="group relative bg-white rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_8px_30px_rgba(0,0,0,0.08)] transition-all duration-300 overflow-hidden border border-slate-100 flex flex-col" data-aos="fade-up" data-aos-delay="'.$delay.'">
                    <a href="'.$item["link"].'" class="block flex-1 flex flex-col">
                        <div class="overflow-hidden aspect-[4/3] relative">
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10 flex items-center justify-center">
                                <div class="w-12 h-12 bg-white/90 rounded-full flex items-center justify-center text-primary transform scale-50 group-hover:scale-100 transition-transform duration-300">
                                    <i class="fas fa-link text-xl"></i>
                                </div>
                            </div>
                            <img src="'.$item["img"].'" alt="'.$item["title"].'" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div class="inline-block text-secondary font-bold text-xs uppercase tracking-widest mb-2">'.$item["date"].'</div>
                            <h5 class="text-primary font-bold text-[15px] leading-snug group-hover:text-secondary transition-colors line-clamp-3">'.$item["title"].'</h5>
                        </div>
                    </a>
                </div>';
            }
            ?>
        </div>
        
        <div id="estrutura-more" class="collapse">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto mt-6 mb-10">
                <?php
                // Show the rest
                foreach (array_slice($galerias, 8) as $index => $item) {
                    echo '
                    <div class="group relative bg-white rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_8px_30px_rgba(0,0,0,0.08)] transition-all duration-300 overflow-hidden border border-slate-100 flex flex-col">
                        <a href="'.$item["link"].'" class="block flex-1 flex flex-col">
                            <div class="overflow-hidden aspect-[4/3] relative">
                                <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10 flex items-center justify-center">
                                    <div class="w-12 h-12 bg-white/90 rounded-full flex items-center justify-center text-primary transform scale-50 group-hover:scale-100 transition-transform duration-300">
                                        <i class="fas fa-link text-xl"></i>
                                    </div>
                                </div>
                                <img src="'.$item["img"].'" alt="'.$item["title"].'" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                            </div>
                            <div class="p-5 flex-1 flex flex-col justify-between">
                                <div class="inline-block text-secondary font-bold text-xs uppercase tracking-widest mb-2">'.$item["date"].'</div>
                                <h5 class="text-primary font-bold text-[15px] leading-snug group-hover:text-secondary transition-colors line-clamp-3">'.$item["title"].'</h5>
                            </div>
                        </a>
                    </div>';
                }
                ?>
            </div>
        </div>

        <div class="flex justify-center mt-8">
            <button id="more-gallery" data-toggle="collapse" data-target="#estrutura-more" class="group flex items-center gap-3 bg-white px-8 py-4 rounded-full text-primary font-bold shadow-[0_4px_20px_rgba(0,0,0,0.05)] hover:bg-secondary hover:text-white transition-all duration-300 hover:-translate-y-1">
                <span>Ver Todas as Fotos</span>
                <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-white group-hover:text-secondary transition-colors">
                    <i class="fas fa-plus text-sm"></i>
                </div>
            </button>
        </div>
    </div>
</section>

<section id="galeria_videos" class="bg_orange bar-right">
	<div class="skew-left-3 relative">
		<!-- Animated White X Cursor follower -->
		<div id="gv-x-follower" class="absolute pointer-events-none z-0 opacity-20 transition-transform duration-100 ease-out" style="width:500px; height:500px; left:50%; top:50%; margin-left:-250px; margin-top:-250px;">
			<img src="assets/images/x-laranja.png" style="width:100%; height:100%; filter: brightness(0) invert(1);" alt="">
		</div>
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-12">
					<div class="bg-title-white mb-5">
						<h4 class="font-weight-bold c_orange">Galeria</h4>
						de videos
					</div>
				</div>
			</div>
			<div id="banner_videos" class="carousel slide" data-interval="false"  data-aos="fade-up" data-aos-offset="300" data-aos-duration="2000">
			  <div class="carousel-inner">
			  						<div class="carousel-item active">
				    	<div class="embed-responsive embed-responsive-16by9">
				    	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xxVSdz7xqtg?rel=0" allowfullscreen></iframe>
				    	</div>
				    </div>
									<div class="carousel-item ">
				    	<div class="embed-responsive embed-responsive-16by9">
				    	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RKe2AxZffuU?rel=0" allowfullscreen></iframe>
				    	</div>
				    </div>
									<div class="carousel-item ">
				    	<div class="embed-responsive embed-responsive-16by9">
				    	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qrqU5Qe-ZAw?rel=0" allowfullscreen></iframe>
				    	</div>
				    </div>
									<div class="carousel-item ">
				    	<div class="embed-responsive embed-responsive-16by9">
				    	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ScGkfrImFXY?rel=0" allowfullscreen></iframe>
				    	</div>
				    </div>
									<div class="carousel-item ">
				    	<div class="embed-responsive embed-responsive-16by9">
				    	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fo8euKCi61k?rel=0" allowfullscreen></iframe>
				    	</div>
				    </div>
									<div class="carousel-item ">
				    	<div class="embed-responsive embed-responsive-16by9">
				    	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/CcEGk6JYLqY?rel=0" allowfullscreen></iframe>
				    	</div>
				    </div>
									<div class="carousel-item ">
				    	<div class="embed-responsive embed-responsive-16by9">
				    	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gm-Dy3-S68A?rel=0" allowfullscreen></iframe>
				    	</div>
				    </div>
									<div class="carousel-item ">
				    	<div class="embed-responsive embed-responsive-16by9">
				    	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rpsAzpCqHCU?rel=0" allowfullscreen></iframe>
				    	</div>
				    </div>
									<div class="carousel-item ">
				    	<div class="embed-responsive embed-responsive-16by9">
				    	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wIn69D5zYlw?rel=0" allowfullscreen></iframe>
				    	</div>
				    </div>
									<div class="carousel-item ">
				    	<div class="embed-responsive embed-responsive-16by9">
				    	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Y72D0eHA1jY?rel=0" allowfullscreen></iframe>
				    	</div>
				    </div>
							  </div>
			  <a class="carousel-control-prev" href="#banner_videos" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#banner_videos" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
</section>

<script>
(function(){
	const gv = document.getElementById('galeria_videos');
	const xFol = document.getElementById('gv-x-follower');
	if(gv && xFol) {
		gv.addEventListener('mousemove', (e) => {
			const rect = gv.getBoundingClientRect();
			// calculate offset from center of section
			const x = (e.clientX - rect.left) - (rect.width / 2);
			const y = (e.clientY - rect.top) - (rect.height / 2);
			// move the X slightly towards cursor (-0.1 is opposite, 0.1 is towards. Let's do 0.08 towards)
			xFol.style.transform = `translate(${x * 0.08}px, ${y * 0.08}px) rotate(${x * 0.02}deg)`;
		});
		gv.addEventListener('mouseleave', () => {
			xFol.style.transform = `translate(0px, 0px) rotate(0deg)`;
		});
	}
})();
</script>

<section id="a_aprovados" class="bg_green bar-right relative overflow-hidden">
	<!-- Watermark X -->
	<img src="https://colegioecursoconexao.com.br/assets/images/x-laranja.png" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] md:w-[800px] pointer-events-none z-0" style="filter: brightness(0) invert(1); opacity: 0.08;" alt="">
	<div class="skew-left-3 relative z-10">
		<div class="container gray-bg">
			<div class="col-md-12">
				<div class="flex flex-col items-center justify-center mb-16" data-aos="fade-down">
					<div class="relative flex flex-col items-center z-10 w-full max-w-sm">
						<div class="bg-secondary text-white px-10 py-3 font-black tracking-widest text-lg uppercase skew-x-[-10deg] shadow-lg z-20">
							<span class="inline-block skew-x-[10deg]">GRANDES</span>
						</div>
						<div class="bg-primary text-white px-8 py-3 font-black tracking-widest text-sm uppercase skew-x-[8deg] shadow-lg -mt-2 z-10 relative">
							<span class="inline-block skew-x-[-8deg]">CONQUISTAS</span>
						</div>
					</div>
				</div>
				<div class="row my-5"  data-aos="fade-left" data-aos-offset="300" data-aos-duration="1000">
											<div class="col-md-4 mb-5">
							<a class="card c_alunos" href="https://colegioecursoconexao.com.br/alunos_aprovados?ano=2024">
								<div class="card-title text-center bg-card"><h4 class="mb-0">2024</h4>
								</div>
								<div class="img-card">
									<img src="https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/aprovados/1709913212-c.png" alt="" class="w-100" loading="lazy"/>
								</div>
							</a>
						</div>
											<div class="col-md-4 mb-5">
							<a class="card c_alunos" href="https://colegioecursoconexao.com.br/alunos_aprovados?ano=2023">
								<div class="card-title text-center bg-card"><h4 class="mb-0">2023</h4>
								</div>
								<div class="img-card">
									<img src="https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/aprovados/1679507249-c.jpeg" alt="" class="w-100" loading="lazy"/>
								</div>
							</a>
						</div>
											<div class="col-md-4 mb-5">
							<a class="card c_alunos" href="https://colegioecursoconexao.com.br/alunos_aprovados?ano=2022">
								<div class="card-title text-center bg-card"><h4 class="mb-0">2022</h4>
								</div>
								<div class="img-card">
									<img src="https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/aprovados/1679490456-c.jpeg" alt="" class="w-100" loading="lazy"/>
								</div>
							</a>
						</div>
									</div>

			</div>
			<div class="row mb-5">
				<div class="col-md-12 d-flex justify-content-center mt-4">
					<div class="btn btn-more btn-banner btn-orange text-white">
						<a href="https://colegioecursoconexao.com.br/alunos_aprovados" class="text-white text-decoration-none">Ver todos<i class="fas fa-chevron-right ml-1"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="prof_fundamental" class="bg-primary bar-right bg-scroll relative overflow-hidden py-12">
	<!-- Decorative Background Glows (same as FAÇA PARTE) -->
	<div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
		<!-- Watermark X -->
		<img src="https://colegioecursoconexao.com.br/assets/images/x-laranja.png" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] md:w-[800px] pointer-events-none" style="filter: brightness(0) invert(1); opacity: 0.08;" alt="">

		<div class="absolute -top-40 -left-40 w-[600px] h-[600px] bg-secondary/10 rounded-full blur-[120px]"></div>
		<div class="absolute top-[40%] -right-40 w-[500px] h-[500px] bg-blue-400/10 rounded-full blur-[100px]"></div>
		<div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 32px 32px;"></div>
	</div>

	<div class="container mx-auto px-6 relative z-10 skew-left-3">
		<div class="row mb-12">
			<div class="col-md-12 mb-5">
				<div class="flex flex-col items-center justify-center mb-16" data-aos="fade-down">
					<div class="relative flex flex-col items-center z-10 w-full max-w-sm">
						<div class="bg-secondary text-white px-10 py-3 font-black tracking-widest text-lg uppercase skew-x-[-10deg] shadow-lg z-20">
							<span class="inline-block skew-x-[10deg]">CORPO</span>
						</div>
						<div class="bg-white text-primary px-8 py-3 font-black tracking-widest text-sm uppercase skew-x-[8deg] shadow-lg -mt-2 z-10 relative">
							<span class="inline-block skew-x-[-8deg]">DOCENTE</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
							<div class="group relative" data-aos="fade-up" data-aos-duration="1000">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725995769-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Adriano Di Nardo</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Física</p>
									</div>
								</div>
							</div>
							<div class="group relative" data-aos="fade-up" data-aos-duration="1000">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725995782-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Arleise de Alencar</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Química</p>
									</div>
								</div>
							</div>
							<div class="group relative" data-aos="fade-up" data-aos-duration="1000">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1738271306-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Fábio Galvão</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Educação Física</p>
									</div>
								</div>
							</div>
							<div class="group relative" data-aos="fade-up" data-aos-duration="1000">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725995797-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Leonardo Viveiros (Bolinha)</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Matemática</p>
									</div>
								</div>
							</div>
							<div class="group relative" data-aos="fade-up" data-aos-duration="1000">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725995809-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Samir Mohamad</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Biologia</p>
									</div>
								</div>
							</div>
							<div class="group relative" data-aos="fade-up" data-aos-duration="1000">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1738271416-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Igor Guzzi</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Física</p>
									</div>
								</div>
							</div>
					</div>

<!-- 

		<div id="prof-more" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto collapse mt-6">


							<div class="group relative">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725995863-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Mateus Ibanhi Pires</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">História</p>
									</div>
								</div>
							</div>
							<div class="group relative">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725995903-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Sandro Manoel</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Literatura</p>
									</div>
								</div>
							</div>
							<div class="group relative">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725995917-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Luana Moretti</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Matemática</p>
									</div>
								</div>
							</div>
							<div class="group relative">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725995930-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Carlos Teixeira (Cacá)</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Matemática</p>
									</div>
								</div>
							</div>
							<div class="group relative">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725995944-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Bruna Fernanda de Simone</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Redação</p>
									</div>
								</div>
							</div>
							<div class="group relative">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725995958-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Marcel Loyo Moitas</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Biologia</p>
									</div>
								</div>
							</div>
							<div class="group relative">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725995971-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Gustavo Fiacadori</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Literatura</p>
									</div>
								</div>
							</div>
							<div class="group relative">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725995982-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Yuri Suzumura</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Física</p>
									</div>
								</div>
							</div>
							<div class="group relative">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-4 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-16 h-16 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725995994-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Leonardo Basso</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Biologia</p>
									</div>
								</div>
							</div>
							<div class="group relative">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-6 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-20 h-20 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1738271464-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Luís Felipe de Assis Pinheiro</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Inglês</p>
									</div>
								</div>
							</div>
							<div class="group relative">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-6 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-20 h-20 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725996009-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Alex Rodrigues Rocha</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">Química</p>
									</div>
								</div>
							</div>
							<div class="group relative">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-6 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-20 h-20 shrink-0">
										<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725996036-c.jpeg" class="w-full h-full object-cover rounded-xl border border-white/20 shadow-lg group-hover:scale-105 transition-transform duration-500" alt="" loading="lazy"/>
									</div>
									<div>
										<h5 class="mb-1 text-white font-bold text-lg leading-tight group-hover:text-secondary transition-colors">Jeferson Grillo</h5>
										<p class="m-0 text-white/50 text-sm uppercase tracking-wider font-semibold">História</p>
									</div>
								</div>
							</div>
							<div class="group relative">
								<div class="absolute inset-0 bg-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
								<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-6 rounded-2xl transition-all duration-500 flex items-center gap-5">
									<div class="w-20 h-20 shrink-0">
						<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1738271519-c.jpeg" class="effect-circle w-100 rounded-circle" alt="" loading="lazy"/>
					</div>
					<div class="col-md-8 my-auto">
						<h5 class="mb-1 c_orange">Sabrina Monteiro</h5>
						<p class="m-0">Matemática</p>
					</div>
				</div>
							<div class="col-md-4 col-sm-6 d-flex mb-5">
					<div class="col-md-4">
						<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725996051-c.jpeg" class="effect-circle w-100 rounded-circle" alt="" loading="lazy"/>
					</div>
					<div class="col-md-8 my-auto">
						<h5 class="mb-1 c_orange">Isabel Roncato</h5>
						<p class="m-0">Matemática</p>
					</div>
				</div>
							<div class="col-md-4 col-sm-6 d-flex mb-5">
					<div class="col-md-4">
						<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1738271388-c.jpeg" class="effect-circle w-100 rounded-circle" alt="" loading="lazy"/>
					</div>
					<div class="col-md-8 my-auto">
						<h5 class="mb-1 c_orange">Hugo Marinho Breda</h5>
						<p class="m-0">Filosofia e Sociologia</p>
					</div>
				</div>
							<div class="col-md-4 col-sm-6 d-flex mb-5">
					<div class="col-md-4">
						<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725996062-c.jpeg" class="effect-circle w-100 rounded-circle" alt="" loading="lazy"/>
					</div>
					<div class="col-md-8 my-auto">
						<h5 class="mb-1 c_orange">Janaina Corteze</h5>
						<p class="m-0">História da Arte</p>
					</div>
				</div>
							<div class="col-md-4 col-sm-6 d-flex mb-5">
					<div class="col-md-4">
						<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1738271349-c.jpeg" class="effect-circle w-100 rounded-circle" alt="" loading="lazy"/>
					</div>
					<div class="col-md-8 my-auto">
						<h5 class="mb-1 c_orange">Guilherme de Matos Floriano</h5>
						<p class="m-0">Geografia</p>
					</div>
				</div>
							<div class="col-md-4 col-sm-6 d-flex mb-5">
					<div class="col-md-4">
						<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725996077-c.jpeg" class="effect-circle w-100 rounded-circle" alt="" loading="lazy"/>
					</div>
					<div class="col-md-8 my-auto">
						<h5 class="mb-1 c_orange">Carlos Augusto Rodrigues (Guto)</h5>
						<p class="m-0">História</p>
					</div>
				</div>
							<div class="col-md-4 col-sm-6 d-flex mb-5">
					<div class="col-md-4">
						<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725996158-c.jpeg" class="effect-circle w-100 rounded-circle" alt="" loading="lazy"/>
					</div>
					<div class="col-md-8 my-auto">
						<h5 class="mb-1 c_orange">Tarso Bortolucci Ferrari</h5>
						<p class="m-0">Química</p>
					</div>
				</div>
							<div class="col-md-4 col-sm-6 d-flex mb-5">
					<div class="col-md-4">
						<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725996182-c.jpeg" class="effect-circle w-100 rounded-circle" alt="" loading="lazy"/>
					</div>
					<div class="col-md-8 my-auto">
						<h5 class="mb-1 c_orange">Danilo Defina</h5>
						<p class="m-0">Geografia</p>
					</div>
				</div>
							<div class="col-md-4 col-sm-6 d-flex mb-5">
					<div class="col-md-4">
						<img src="https://colegioecursoconexao.com.br/media/cache/square_small/uploads/staff/1725996268-c.jpeg" class="effect-circle w-100 rounded-circle" alt="" loading="lazy"/>
					</div>
					<div class="col-md-8 my-auto">
						<h5 class="mb-1 c_orange">Bruno da Silva Souza</h5>
						<p class="m-0">Robótica</p>
					</div>
				</div>
					</div>



           -->
		<div class="col-md-12 d-flex justify-content-center">
			<button id="more-prof" data-toggle="collapse" data-target="#prof-more" class="navbar-toggler more-tabs">
				<i class="fas fa-plus text-white fas-blue"></i>
			</button>
		</div>

	</div>


</section>


<section id="depoimentos" class="bg_orange bar-right relative overflow-hidden">
	<!-- Watermark X -->
	<img src="https://colegioecursoconexao.com.br/assets/images/x-laranja.png" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] md:w-[800px] pointer-events-none z-0" style="filter: brightness(0) invert(1); opacity: 0.08;" alt="">
	<div class="skew-left-3 relative z-10">
		<div class="container mx-auto px-6 py-24">
			<div class="flex flex-col items-center justify-center mb-16" data-aos="fade-down">
				<div class="relative flex flex-col items-center z-10 w-full max-w-sm">
					<div class="bg-secondary text-white px-10 py-3 font-black tracking-widest text-lg uppercase skew-x-[-10deg] shadow-lg z-20">
						<span class="inline-block skew-x-[10deg]">VOZES</span>
					</div>
					<div class="bg-primary text-white px-8 py-3 font-black tracking-widest text-sm uppercase skew-x-[8deg] shadow-lg -mt-2 z-10 relative">
						<span class="inline-block skew-x-[-8deg]">DO CONEXÃO</span>
					</div>
				</div>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
				<!-- Testimonial Card 1 -->
				<div class="bg-white p-10 rounded-lg relative shadow-xl" data-aos="fade-right">
					<span class="material-symbols-outlined text-secondary/20 text-6xl absolute top-6 right-8" style="font-variation-settings: 'FILL' 1;">format_quote</span>
					<div class="flex gap-1 mb-6">
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
					</div>
					<p class="text-slate-600 italic leading-relaxed mb-8">
						"Estudar no Conexão foi algo incrível e que me ajudou a conquistar o meu sonho de passar na USP. Tudo muito acolhedor, já estou até com saudades."
					</p>
					<div class="flex items-center gap-4 mt-auto">
						<img class="w-12 h-12 rounded-full object-cover" src="https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/depoimentos/1741801206-c.jpeg"/>
						<div>
							<h6 class="font-bold text-primary">Gustavo Repele Duch</h6>
							<span class="text-xs text-slate-400 font-medium">Aluno do 3º EM</span>
						</div>
					</div>
				</div>

				<!-- Testimonial Card 2 -->
				<div class="bg-white p-10 rounded-lg relative shadow-xl" data-aos="fade-up" data-aos-delay="100">
					<span class="material-symbols-outlined text-secondary/20 text-6xl absolute top-6 right-8" style="font-variation-settings: 'FILL' 1;">format_quote</span>
					<div class="flex gap-1 mb-6">
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
					</div>
					<p class="text-slate-600 italic leading-relaxed mb-8">
						"O diferencial do Conexão é o acolhimento entre alunos e professores. Todo o time faz da escola um espaço de muito suporte e parceria."
					</p>
					<div class="flex items-center gap-4 mt-auto">
						<img class="w-12 h-12 rounded-full object-cover" src="https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/depoimentos/1741800868-c.jpeg"/>
						<div>
							<h6 class="font-bold text-primary">Laura Farizato Silva</h6>
							<span class="text-xs text-slate-400 font-medium">Aluna do 3º EM</span>
						</div>
					</div>
				</div>

				<!-- Testimonial Card 3 -->
				<div class="bg-white p-10 rounded-lg relative shadow-xl" data-aos="fade-left" data-aos-delay="200">
					<span class="material-symbols-outlined text-secondary/20 text-6xl absolute top-6 right-8" style="font-variation-settings: 'FILL' 1;">format_quote</span>
					<div class="flex gap-1 mb-6">
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
						<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
					</div>
					<p class="text-slate-600 italic leading-relaxed mb-8">
						"Consegui aprender muito por causa do carinho dos professores! A ótima equipe pedagógica me acolheu e me fez sentir em casa."
					</p>
					<div class="flex items-center gap-4 mt-auto">
						<img class="w-12 h-12 rounded-full object-cover" src="https://colegioecursoconexao.com.br/media/cache/square_medium/uploads/depoimentos/1741800590-c.jpeg"/>
						<div>
							<h6 class="font-bold text-primary">Sofia Fadel Carneiro</h6>
							<span class="text-xs text-slate-400 font-medium">Aluna do 3º EM</span>
						</div>
					</div>
				</div>
			</div>

			<div class="flex justify-center" data-aos="fade-up">
				<a href="https://colegioecursoconexao.com.br/depoimentos/3" class="inline-flex items-center gap-2 bg-primary hover:bg-secondary text-white px-8 py-3.5 rounded-full font-bold text-sm uppercase tracking-widest transition-all duration-300 shadow-lg">
					Ver todos <i class="fas fa-chevron-right text-[10px]"></i>
				</a>
			</div>
		</div>
	</div>
</section>

<section id="mapa-fund" >
	<div class="col-md-12">
		<div class="map-title bg-title-blue">
			<h4 class="font-weight-bold">Localização</h4>
		</div>
	</div>
	<a href="https://goo.gl/maps/P8uaaNnSix7ufk6LA" target="_blank"><img src="https://colegioecursoconexao.com.br/assets/imgs/mapa-em.png" class="w-100" alt="Mapa conexão"></a>
</section>

<section id="down-estude" class="py-28 bg-primary relative overflow-hidden mt-12">
	<!-- Decorative Background Glows -->
	<div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
		<!-- Watermark X -->
		<img src="https://colegioecursoconexao.com.br/assets/images/x-laranja.png" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] md:w-[800px] pointer-events-none" style="filter: brightness(0) invert(1); opacity: 0.08;" alt="">

		<div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-secondary/10 rounded-full blur-[120px]"></div>
		<div class="absolute -bottom-40 -left-40 w-[500px] h-[500px] bg-blue-400/10 rounded-full blur-[100px]"></div>
		<!-- Subtle dot pattern -->
		<div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 32px 32px;"></div>
	</div>

	<div class="container mx-auto px-6 relative z-10">
		<!-- New Modern Header -->
		<div class="flex flex-col items-center justify-center text-center mb-16" data-aos="fade-down">
			<div class="relative flex flex-col items-center z-10 w-full max-w-sm mb-6">
				<div class="bg-secondary text-white px-10 py-3 font-black tracking-widest text-lg uppercase skew-x-[-10deg] shadow-lg z-20">
					<span class="inline-block skew-x-[10deg]">FAÇA PARTE</span>
				</div>
				<div class="bg-white text-primary px-8 py-3 font-black tracking-widest text-sm uppercase skew-x-[8deg] shadow-lg -mt-2 z-10 relative">
					<span class="inline-block skew-x-[-8deg]">DO CONEXÃO</span>
				</div>
			</div>
			<p class="text-white/60 text-lg max-w-2xl font-light leading-relaxed">
				Dê o próximo passo rumo a uma educação ética, tecnológica e voltada para grandes resultados. Escolha o seu caminho abaixo.
			</p>
		</div>

		<!-- Two Modern Cards Action Grid -->
		<div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
			
			<!-- Card 1: Inscrições -->
			<div class="group relative" data-aos="fade-right" data-aos-duration="1000">
				<!-- ambient hover glow -->
				<div class="absolute inset-0 bg-secondary/20 rounded-3xl blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
				<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-secondary/40 backdrop-blur-md p-10 md:p-12 rounded-3xl transition-all duration-500 overflow-hidden flex flex-col">
					<!-- Top Icon -->
					<div class="w-16 h-16 bg-secondary/20 text-secondary rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:scale-110 group-hover:bg-secondary group-hover:text-white transition-all duration-500">
						<i class="fas fa-file-signature"></i>
					</div>
					<!-- Content -->
					<div>
						<span class="text-secondary font-bold text-xs tracking-[0.2em] uppercase block mb-3">Estude conosco</span>
						<h3 class="text-white font-black text-3xl md:text-4xl mb-4 leading-tight">Inscrições<br>Abertas</h3>
						<p class="text-white/60 text-base leading-relaxed mb-8">
							Faça sua inscrição para a prova de bolsas e concorra a descontos de até 50%. Avaliação em ambiente seguro e preparado para receber você rumo à aprovação.
						</p>
					</div>
					<!-- Bottom CTA -->
					<div class="mt-auto pt-4 flex">
						<a href="https://colegioecursoconexao.com.br/inscricao_em" class="inline-flex items-center gap-4 bg-secondary text-white px-8 py-4 rounded-full font-bold uppercase tracking-widest text-sm hover:shadow-[0_0_30px_rgba(240,125,0,0.4)] transition-all duration-300">
							Inscreva-se Agora
							<i class="fas fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
						</a>
					</div>
				</div>
			</div>

			<!-- Card 2: Agendar Visita -->
			<div class="group relative" data-aos="fade-left" data-aos-duration="1000">
				<!-- ambient hover glow -->
				<div class="absolute inset-0 bg-white/10 rounded-3xl blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
				<div class="relative h-full bg-white/[0.03] hover:bg-white/[0.06] border border-white/10 hover:border-white/30 backdrop-blur-md p-10 md:p-12 rounded-3xl transition-all duration-500 overflow-hidden flex flex-col">
					<!-- Top Icon -->
					<div class="w-16 h-16 bg-white/10 text-white rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:scale-110 group-hover:bg-white group-hover:text-primary transition-all duration-500">
						<i class="fas fa-school"></i>
					</div>
					<!-- Content -->
					<div>
						<span class="text-blue-300 font-bold text-xs tracking-[0.2em] uppercase block mb-3">Conheça nossa estrutura</span>
						<h3 class="text-white font-black text-3xl md:text-4xl mb-4 leading-tight">Quero conhecer<br>a escola</h3>
						<p class="text-white/60 text-base leading-relaxed mb-8">
							Uma boa escolha requer identificação com a proposta pedagógica, equipe e ambiente. Agende sua visita e descubra de perto o que faz do Conexão uma escola única.
						</p>
					</div>
					<!-- Bottom CTA -->
					<div class="mt-auto pt-4 flex">
						<a href="https://colegioecursoconexao.com.br/faca_uma_visita" class="inline-flex items-center gap-4 bg-white/10 border border-white/20 hover:border-white text-white hover:bg-white hover:text-primary px-8 py-4 rounded-full font-bold uppercase tracking-widest text-sm transition-all duration-300">
							Agendar Visita
							<i class="fas fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<script>
	AOS.init({
	   once: true
	});
</script>


        <script>
                /*--- carousel noticia home ----*/

                var swiper = new Swiper('.swiper-container', {
                  slidesPerView: '5',
                  centeredSlides: false,
                  spaceBetween: 15,
                  pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                  },
                  navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                  },
                  breakpoints: {

                            0: {
                              slidesPerView: 1,
                              spaceBetweenSlides: 100,
                          },
                          599: {
                            slidesPerView: 3,
                            spaceBetweenSlides: 15
                          },
                          1199: {
                            slidesPerView: 4,
                            spaceBetweenSlides: 15
                          },
                          1499: {
                            slidesPerView: 5,
                            spaceBetweenSlides: 15
                          }
                  }
                });


                /*--- fade animations ------*/

                  AOS.init();

                  /*----- circulos layout ------ */

                  $(document).ready(function () {
                      var $horizontal = $('.circle-out');
                      var startPosition = $horizontal.position().left;
                      var speed = 14;
                      $(window).scroll(function () {
                          var st = $(this).scrollTop();
                          var newPos = (st * (speed/50)) + startPosition;
                          $horizontal.css({
                              'left': newPos
                          });
                      });
                  });

                  $(document).ready(function () {
                      var $horizontal = $('.circle-in');
                      var startPosition = $horizontal.position().left;
                      var speed = 14;
                      $(window).scroll(function () {
                          var st = $(this).scrollTop();
                          var newPos = (st * (speed/50)) + startPosition;
                          $horizontal.css({
                              'left': newPos
                          });
                      });
                  });


                    /*---- lightbox galeria -----*/


                   $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                       event.preventDefault();
                       $(this).ekkoLightbox();
                   });

                     $("body").on('click','.more-tabs',function(){ $(this).addClass('hidden'); });

                /*-- swipe start --*/

                    $(".carousel").swipe({
                        swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
                            if (direction == 'left') $(this).carousel('next');
                            if (direction == 'right') $(this).carousel('prev');
                        },
                        allowPageScroll: "vertical"
                    });


        </script>
		</main>
<?php include 'footer.php'; ?>
