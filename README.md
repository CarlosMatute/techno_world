<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECHNO WORLD | Soluciones Tecnológicas Globales</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        twAzul: "#3f5981",
                        twNegro: "#323232",
                        twBlanco: "#e6e6e6",
                        twAccent: "#4A90E2",
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                        display: ["Plus Jakarta Sans", "sans-serif"],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;700;800&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <style>
        .hero-pattern {
            background-image: url("imagenes/fondo.png");
            background-blend-mode: overlay;
            background-color: #323232;
        }
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-twBlanco text-twNegro font-sans">
    <!-- Navbar -->
    <header class="fixed top-0 w-full z-50 bg-twBlanco/90 backdrop-blur-md border-b border-twNegro/5 h-20 flex items-center">
        <nav class="container mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <img src="imagenes/logo.png" alt="TECHNO WORLD" class="h-12">
                <span class="text-xl font-display font-extrabold text-twAzul tracking-tight">TECHNO WORLD</span>
            </div>
            <ul class="hidden md:flex items-center gap-10 font-medium text-twNegro/70">
                <li><a href="#inicio" class="hover:text-twAzul transition-colors">Inicio</a></li>
                <li><a href="#servicios" class="hover:text-twAzul transition-colors">Servicios</a></li>
                <li><a href="#empresa" class="hover:text-twAzul transition-colors">Empresa</a></li>
                <li><a href="#contacto" class="bg-twAzul text-white px-8 py-2.5 rounded-lg hover:shadow-lg hover:shadow-twAzul/20 transition-all">Cotizar</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="inicio" class="hero-pattern pt-40 pb-32 text-white relative overflow-hidden">
            <div class="container mx-auto px-6 relative z-10 text-center">
                <h1 class="text-5xl md:text-7xl font-display font-extrabold mb-8 leading-tight">Expertos en <span class="text-twAzul">Sistemas</span> y Soluciones TI</h1>
                <p class="text-lg md:text-xl text-twBlanco/80 max-w-2xl mx-auto mb-12">Impulsamos la productividad de tu organización con infraestructura robusta y soporte técnico especializado de clase mundial.</p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="#servicios" class="bg-twAzul px-10 py-4 rounded-xl font-bold text-lg hover:bg-opacity-90 transition-all">Nuestras Soluciones</a>
                    <a href="#contacto" class="border-2 border-twBlanco/20 px-10 py-4 rounded-xl font-bold text-lg hover:bg-twBlanco/10 transition-all">Soporte Directo</a>
                </div>
            </div>
        </section>

        <!-- Solutions -->
        <section id="servicios" class="py-32 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-24 reveal">
                    <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">Verticales de Servicio</h2>
                    <p class="text-twNegro/60 text-lg">Soluciones integrales para la era de la transformación digital.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-12">
                    <div class="p-10 bg-twBlanco/30 rounded-3xl border border-twNegro/5 hover:border-twAzul/30 transition-all reveal">
                        <ion-icon name="hardware-chip-outline" class="text-5xl text-twAzul mb-8"></ion-icon>
                        <h3 class="text-2xl font-bold mb-4 text-twNegro">Infraestructura Crítica</h3>
                        <p class="text-twNegro/70 leading-relaxed">Instalación y mantenimiento de servidores, redes y centros de datos con estándares internacionales.</p>
                    </div>
                    <div class="p-10 bg-twBlanco/30 rounded-3xl border border-twNegro/5 hover:border-twAzul/30 transition-all reveal">
                        <ion-icon name="shield-checkmark-outline" class="text-5xl text-twAzul mb-8"></ion-icon>
                        <h3 class="text-2xl font-bold mb-4 text-twNegro">Seguridad de Red</h3>
                        <p class="text-twNegro/70 leading-relaxed">Blindaje digital y protocolos de protección para la integridad de la información corporativa.</p>
                    </div>
                    <div class="p-10 bg-twBlanco/30 rounded-3xl border border-twNegro/5 hover:border-twAzul/30 transition-all reveal">
                        <ion-icon name="headset-outline" class="text-5xl text-twAzul mb-8"></ion-icon>
                        <h3 class="text-2xl font-bold mb-4 text-twNegro">Outsourcing TI</h3>
                        <p class="text-twNegro/70 leading-relaxed">Soporte técnico especializado 24/7 para garantizar la continuidad operativa de su empresa.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- DNA Section -->
        <section id="empresa" class="py-32 bg-twNegro text-twBlanco">
            <div class="container mx-auto px-6 grid md:grid-cols-2 gap-20 items-center">
                <div class="reveal">
                    <h2 class="text-4xl md:text-5xl font-display font-bold mb-10">Más que Tecnología, somos <span class="text-twAzul">Socios.</span></h2>
                    <div class="space-y-12">
                        <div>
                            <h4 class="text-xl font-bold mb-4 flex items-center gap-3">
                                <span class="w-8 h-1 bg-twAzul"></span> Misión
                            </h4>
                            <p class="text-twBlanco/60 text-lg">Proveer soluciones tecnológicas vanguardistas que permitan a nuestros clientes alcanzar el máximo potencial competitivo en el mercado global.</p>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-4 flex items-center gap-3">
                                <span class="w-8 h-1 bg-twAzul"></span> Visión
                            </h4>
                            <p class="text-twBlanco/60 text-lg">Consolidarnos como la empresa líder en servicios tecnológicos integrales, reconocida por nuestra excelencia técnica y compromiso humano.</p>
                        </div>
                    </div>
                </div>
                <div class="relative reveal">
                    <div class="bg-twAzul/20 p-8 rounded-[3rem] border border-twAzul/30">
                        <div class="bg-twNegro p-12 rounded-[2rem] border border-twBlanco/10">
                            <span class="text-6xl font-extrabold text-twAzul block mb-4">150+</span>
                            <p class="text-xl font-bold mb-2">Proyectos Exitosos</p>
                            <p class="text-twBlanco/40 uppercase tracking-widest text-sm font-bold">Confianza Certificada</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contacto" class="py-32">
            <div class="container mx-auto px-6">
                <div class="max-w-5xl mx-auto bg-white rounded-[3rem] shadow-2xl shadow-twNegro/10 overflow-hidden grid md:grid-cols-2 reveal">
                    <div class="bg-twAzul p-16 text-white flex flex-col justify-center">
                        <h2 class="text-4xl font-display font-bold mb-8">Hablemos de tu Próximo Salto Tecnológico</h2>
                        <p class="text-twBlanco/80 mb-10">Agenda una consultoría técnica gratuita con nuestros especialistas senior.</p>
                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <ion-icon name="mail-outline" class="text-2xl"></ion-icon>
                                <span>contacto@technoworld.com</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <ion-icon name="location-outline" class="text-2xl"></ion-icon>
                                <span>Hub Tecnológico, Torre Norte</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-16">
                        <form action="#" class="space-y-8">
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-xs font-bold uppercase text-twNegro/40 mb-2">Nombre</label>
                                    <input type="text" class="w-full bg-twBlanco/50 border border-twNegro/10 rounded-xl px-4 py-4 outline-none focus:border-twAzul">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold uppercase text-twNegro/40 mb-2">Empresa</label>
                                    <input type="text" class="w-full bg-twBlanco/50 border border-twNegro/10 rounded-xl px-4 py-4 outline-none focus:border-twAzul">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase text-twNegro/40 mb-2">Requerimiento</label>
                                <textarea rows="4" class="w-full bg-twBlanco/50 border border-twNegro/10 rounded-xl px-4 py-4 outline-none focus:border-twAzul resize-none"></textarea>
                            </div>
                            <button class="w-full bg-twAzul text-white py-5 rounded-xl font-bold text-lg hover:shadow-xl hover:shadow-twAzul/30 transition-all">Enviar Solicitud</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-20 bg-twNegro text-twBlanco border-t border-twBlanco/5">
        <div class="container mx-auto px-6 grid md:grid-cols-4 gap-16 mb-20">
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center gap-3 mb-8">
                    <img src="imagenes/logo.png" alt="Logo" class="h-10">
                    <span class="text-xl font-display font-extrabold tracking-tight">TECHNO WORLD</span>
                </div>
                <p class="text-twBlanco/40 leading-relaxed">Liderando la innovación tecnológica con compromiso y excelencia técnica desde 2010.</p>
            </div>
            <div>
                <h4 class="font-bold mb-8 uppercase tracking-widest text-xs text-twAzul">Navegación</h4>
                <ul class="space-y-4 text-twBlanco/60">
                    <li><a href="#inicio" class="hover:text-twBlanco transition-colors">Inicio</a></li>
                    <li><a href="#servicios" class="hover:text-twBlanco transition-colors">Servicios</a></li>
                    <li><a href="#empresa" class="hover:text-twBlanco transition-colors">Nuestra Empresa</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-8 uppercase tracking-widest text-xs text-twAzul">Servicios</h4>
                <ul class="space-y-4 text-twBlanco/60">
                    <li>Hardware & Networking</li>
                    <li>Seguridad Digital</li>
                    <li>Cloud Solutions</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-8 uppercase tracking-widest text-xs text-twAzul">Legal</h4>
                <ul class="space-y-4 text-twBlanco/60">
                    <li>Privacidad</li>
                    <li>Términos de Uso</li>
                </ul>
            </div>
        </div>
        <div class="container mx-auto px-6 pt-12 border-t border-twBlanco/5 text-center text-twBlanco/20 text-xs font-bold uppercase tracking-[0.3em]">
            &copy; 2026 TECHNO WORLD. Todos los derechos reservados.
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const reveals = document.querySelectorAll(".reveal");
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) entry.target.classList.add("active");
                });
            }, { threshold: 0.1 });
            reveals.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>
