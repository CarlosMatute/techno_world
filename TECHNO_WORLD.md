# TECHNO WORLD — Landing Page

## Descripción
Página web corporativa estática tipo landing page para **TECHNO WORLD**, empresa ficticia de soluciones tecnológicas globales. Diseñada con Tailwind CSS (vía CDN) y vanilla JavaScript.

## Estructura de Archivos

| Archivo | Descripción |
|---|---|
| `index.html` | Página principal (única página, secciones por anclas) |
| `README.md` | README original (vacío, solo nombre) |
| `TECHNO_WORLD.md` | Este documento |
| `assets/img/logo.png` | Logotipo principal (copia de LOGO TW 2, usado en navbar y footer) |
| `assets/img/LOGO TW.png` | Variante original del logotipo |
| `assets/img/LOGO TW blanco.png` | Variante del logotipo en blanco |
| `assets/img/LOGO TW PORTADA.png` | Variante portada sin fondo |
| `assets/img/LOGO TW PORTADA con fondo.png` | Variante portada con fondo |
| `assets/img/LOGO TW PERFIL 2.png` | Versión perfil/cuadrada del logotipo (usada como favicon) |
| `assets/css/fuentes.css` | Import de Google Fonts (Inter + Plus Jakarta Sans) |
| `assets/css/estilos.css` | Estilos personalizados (hero-pattern, scroll reveal) |
| `assets/img/fondo.png` | Imagen de fondo para la sección Hero |

## Tecnologías Usadas
- **Tailwind CSS** vía CDN (configuración personalizada con colores y fuentes)
- **Ionicons** v7.1.0 (iconos SVG vía CDN)
- **Google Fonts**: Inter (sans-serif) y Plus Jakarta Sans (display)
- **Intersection Observer API** (animaciones scroll reveal)

## Secciones de la Página

### 1. Navbar (`<header>`)
- Logo + nombre "TECHNO WORLD"
- Navegación: Inicio, Servicios, Empresa, Cotizar (botón destacado)
- Fondo blanco semitransparente con efecto blur (`backdrop-blur-md`)
- Fijo en la parte superior (`fixed`)

### 2. Hero (`#inicio`)
- **Imagen de portada**: Foto de circuitos/tech vía Unsplash con overlay degradado azul-oscuro
- Badge "Excelencia Tecnológica" con borde azul
- Título principal: "Expertos en Sistemas y Soluciones TI"
- **Eslogan "TODO UN MUNDO EN TECNOLOGIA"** como subtítulo destacado en tipografía display
- Línea divisoria decorativa (gradiente azul)
- Dos CTA: "Nuestros Servicios" y "Solicitar Cotización"

### 3. Servicios (`#servicios`)
- Fondo con degradado blanco a gris claro, 3 tarjetas con sombras y hover elevado
- Tarjeta central ligeramente desplazada hacia abajo (`md:translate-y-8`) para efecto asimétrico
  1. **Reparación y Mantenimiento** — diagnóstico, reparación y mantenimiento preventivo de equipos, servidores y redes
  2. **Desarrollo de Sistemas** — aplicaciones web, móviles y sistemas a la medida
  3. **Soporte Técnico** — asistencia especializada, mesa de ayuda, monitoreo continuo
- Cada tarjeta incluye: icono en contenedor redondeado, título, línea decorativa, descripción, lista de checkmarks con iconos
- Animación hover: la tarjeta se eleva (`-8px`), sombra加深, el icono escala y rota

### 4. Clientes y Socios
- Fondo blanco con grid de hasta 4 columnas
- Logos reales desde `assets/img/clientes/` con nombre de cada empresa
- Efecto hover: elevación sutil (`-translate-y-1`) y sombra azul
- Clientes actuales: Centro Médico Díaz, Inversiones Rivera Carvajal

### 5. Empresa / ADN (`#empresa`)
- Fondo oscuro (`bg-twNegro`), grid de 2 columnas
- Título: "Más que Tecnología, somos Socios."
- **Misión**: "Ofrecer servicios de alta calidad en soporte técnico y en la venta de artículos, brindando seguridad y confianza a nuestros clientes en sus equipos tecnológicos, realizando diagnósticos profundos de sus problemas para ejecutar una solución fiable y segura."
- **Visión**: "Ser líderes en el campo de la tecnología siendo una empresa comprometida en sus ejecuciones y brindar el mejor servicio merecido a nuestros clientes. Lograr ser una entidad importante por la población y muchas empresas produciendo el apoyo que más demanden."
- Cada una con barra decorativa azul (`<span class="w-8 h-1 bg-twAzul">`)
- Indicador numérico "150+ Proyectos Exitosos" en card con fondo oscuro y borde
- Diseño con bordes redondeados (`rounded-[3rem]` y `rounded-[2rem]`) y capas superpuestas

### 6. Contacto (`#contacto`)
- Card dividida en 2 columnas dentro de un contenedor con sombra
- Lado izquierdo (fondo azul): título, descripción, email y ubicación
- Lado derecho (blanco): formulario con campos Nombre, Empresa, Requerimiento
- Botón "Enviar Solicitud"

### 7. Ubicación y Mapa
- Sección con grid `md:grid-cols-5`: mapa ocupa 3 columnas, tarjeta de dirección ocupa 2
- **Mapa**: Google Maps embebido con borde redondeado, sombra, altura fija de 380px
- **Tarjeta de dirección**: fondo blanco, icono de ubicación destacado, datos de contacto:
  - Dirección: Res. El Llano 2da. Etapa, 5ta. Calle Catacamas Olancho, 16201
  - Teléfono: +504 9209-3796 (horario Lun-Vie 8:00-18:00)
  - Email: technoworldhn@gmail.com
  - Cada línea con icono Ionicons y descripción

### 8. Footer
- Grid de 4 columnas: logo + descripción, navegación, servicios, legal
- Copyright 2026

## Animaciones
- **Scroll Reveal**: elementos con clase `.reveal` aparecen con desplazamiento vertical al hacer scroll, usando IntersectionObserver
- **Card Service**: hover con elevación (`translateY(-8px)`), sombra profunda y escalado del icono
- **Service Icon**: rotación leve (`-5deg`) y escala al hover de la tarjeta

## Paleta de Colores Personalizada (Tailwind)
| Clase | Color | Hex |
|---|---|---|
| `twAzul` | Azul corporativo | #3f5981 |
| `twNegro` | Negro texto | #323232 |
| `twBlanco` | Blanco fondo | #e6e6e6 |
| `twAccent` | Azul acento | #4A90E2 |

## Recursos Externos
- **Imagen Hero**: Unsplash (circuit board tech photo)
- **Google Fonts**: Inter + Plus Jakarta Sans vía `assets/css/fuentes.css`
- **Ionicons** v7.1.0 vía CDN (iconos SVG)
- **Tailwind CSS** vía CDN (framework utility-first)

## Rutas y Navegación
Página única con navegación por anclas (`#inicio`, `#servicios`, `#empresa`, `#contacto`). No hay enrutamiento ni páginas adicionales.
