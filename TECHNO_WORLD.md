# TECHNO WORLD — Landing Page

## Descripción
Página web corporativa estática tipo landing page para **TECHNO WORLD**, empresa de soluciones tecnológicas. Diseñada con Tailwind CSS (vía CDN) y vanilla JavaScript. Sistema de diseño completo con paletas tonales, modo oscuro, animaciones y formulario funcional.

## Ubicaciones del Proyecto
| Ruta | Propósito |
|---|---|
| `C:\Users\Carlos Matute\Documents\techno_world\` | Versión principal (completa) |
| `C:\xampp\htdocs\technoworld\` | Versión servidor local XAMPP |

## Estructura de Archivos

| Archivo | Descripción |
|---|---|
| `index.html` | Página principal |
| `TECHNO_WORLD.md` | Este documento |
| `send.php` | Manejador del formulario de contacto (PHP mail()) |
| `assets/css/fuentes.css` | Import Google Fonts |
| `assets/css/estilos.css` | Design system + estilos personalizados |
| `assets/img/portada.gif` | GIF animado hero (119 MB original, reemplazado por MP4) |
| `assets/img/portada.mp4` | Video hero comprimido (1.8 MB) |
| `assets/img/LOGO TW PERFIL 2.png` | Logotipo principal |
| `assets/img/clientes/` | Logos de clientes y socios |
| `assets/Colores.txt` | Paleta original (#3f5981, #323232, #e6e6e6) |

## Tecnologías
- **Tailwind CSS** vía CDN (config personalizada + design system CSS variables)
- **Ionicons** v7.1.0 (iconos SVG vía CDN)
- **Google Fonts**: Inter (sans-serif) + Plus Jakarta Sans (display)
- **Intersection Observer API** (scroll reveal animations)
- **Canvas API** (red tecnológica animada en hero)
- **PHP mail()** (formulario de contacto)

## Secciones

### 1. Navbar (`<header>`)
- Logo + nombre "TECHNO WORLD"
- Navegación completa: Inicio, Servicios, Clientes, Empresa, [Ubicación], **[Contacto]** (botón destacado gradiente)
- Toggle modo oscuro/claro con persistencia en localStorage + detección de preferencia del sistema
- Fondo semitransparente con blur (`backdrop-blur-md`), fijo arriba

### 2. Hero (`#inicio`)
- Video background (`portada.mp4`) autoplay loop muted con overlay degradado
- Canvas con animación de red tecnológica
- Elementos decorativos: grid pulsante, scan line, formas flotantes, twinkling dots, mouse glow
- Badge "Excelencia Tecnológica"
- Título: "Expertos en Sistemas y Soluciones TI"
- Eslogan "TODO UN MUNDO EN TECNOLOGIA"
- CTAs: "Nuestros Servicios" (gradiente) y "Contacto" (outline)

### 3. Servicios (`#servicios`)
- 3 tarjetas asimétricas con hover elevado y glow
  1. **Reparación y Mantenimiento** — diagnóstico, reparación, mantenimiento preventivo
  2. **Desarrollo de Sistemas** — apps web, móviles, sistemas a la medida
  3. **Soporte Técnico** — asistencia especializada, mesa de ayuda, monitoreo

### 4. Clientes y Socios (`#clientes`)
- Clientes: Centro Médico Díaz, Inversiones Rivera Carvajal
- Socios Estratégicos: DEVCO, SYNTAX
- Tarjetas con hover elevación y sombra

### 5. Empresa / ADN (`#empresa`)
- Fondo oscuro con misión, visión y contador "150+ Proyectos Exitosos"

### 6. Contacto (`#contacto`)
- Panel izquierdo azul con datos de contacto y redes sociales (Facebook, Instagram)
- Panel derecho con formulario: Nombre, Correo, Teléfono, Tipo de Consulta, Mensaje
- Envío vía fetch AJAX a `send.php` con feedback visual

### 7. Ubicación (`#ubicacion`)
- Google Maps embed + tarjeta informativa con dirección, teléfono, email

### 8. Footer
- Logo + descripción, navegación completa, servicios, legal
- Redes sociales, copyright 2026

## Componentes UI

| Componente | Descripción |
|---|---|
| `.btn-primary` | Botón gradiente azul→accent con hover elevación |
| `.btn-outline-light` | Botón outline claro para hero |
| `.card-service` | Tarjeta con gradiente, hover elevación y glow |
| `.glass-card` | Panel con glassmorphism (contacto) |
| `.section-divider` | Línea divisoria decorativa gradiente |
| `#scrollTop` | Botón flotante volver arriba |
| `.whatsapp-float` | Botón flotante WhatsApp con glow |

## Sistema de Diseño

### Paletas Tonales
| Paleta | Base | Tonos |
|---|---|---|
| `azul` | #3f5981 | 50→900 (10 tonos) |
| `accent` | #4A90E2 | 50→900 (10 tonos) |
| `neutro` | #323232 | 50→950 (11 tonos) |
| `blanco` | #e6e6e6 | 50→400 (5 tonos) |

### Tokens de Superficie (Light / Dark)
| Token | Light | Dark |
|---|---|---|
| `--bg-body` | #f4f4f4 | #0f0f0f |
| `--bg-card` | #ffffff | #1a1a28 |
| `--bg-card-alt` | #fafafa | #1f1f2e |
| `--text-body` | #323232 | #e0e0e6 |
| `--text-muted` | rgba(50,50,50,0.6) | rgba(224,224,230,0.55) |

### Gradientes
- `--gradient-primary`: 135deg, #3f5981 → #4A90E2
- `--gradient-hero`: 135deg, rgba(15,15,25,0.7) → rgba(63,89,129,0.45)
- `--gradient-card`: suave para fondos de tarjeta

## Animaciones
- **Scroll Reveal**: `.reveal` con IntersectionObserver, desplazamiento vertical + opacidad
- **Tech Hero**: grid pulsante, scan line, formas flotantes, dots parpadeantes, mouse glow
- **Canvas**: red de nodos conectados animados
- **Card hover**: elevación (`-10px`), sombra profunda, glow en borde, icono escala+rota
- **Title glow**: text-shadow pulsante en hero title
- **WhatsApp**: glow pulsante verde

## Modo Oscuro
- Toggle con icono luna/sol
- Persistencia en localStorage (`theme` key)
- Detección de preferencia del sistema (`prefers-color-scheme`)
- Cards oscuras con texto claro en dark mode

## Formulario de Contacto
- **Método**: POST vía fetch API
- **Endpoint**: `send.php` (usa PHP mail())
- **Campos**: nombre, email, teléfono, tipo de consulta, mensaje
- **Feedback**: muestra mensaje de éxito/error sin recargar página
- **Destino**: technoworldhn@gmail.com

## Colores Clase Tailwind
| Clase | Propósito |
|---|---|
| `twAzul` | Azul corporativo #3f5981 |
| `twNegro` | Negro base #323232 |
| `twBlanco` | Blanco base #e6e6e6 |
| `twAccent` | Azul acento #4A90E2 |
| `twText` | Color texto (variable) |
| `twBg` | Color fondo (variable) |
| `twCard` | Color tarjeta (variable) |
| `twMuted` | Texto atenuado (variable) |
| `twBorder` | Borde sutil (variable) |
| `azul-{50..900}` | Tonalidades azul |
| `accent-{50..900}` | Tonalidades acento |
| `neutro-{50..950}` | Tonalidades neutro |

## Próximos Pasos
- Configurar PHPMailer + SMTP para envío de correos en producción
- Optimizar portada.gif → convertir a WebM para mejor compresión
- Implementar lazy loading en imágenes de clientes
- Agregar sección de testimonios
