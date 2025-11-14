<?php
/**
 * WhatsApp Float Button
 * Botón flotante optimizado para contacto por WhatsApp
 */

// Configuración
$config = [
    'telefono' => '5214491816083',
    'mensaje_default' => '¡Hola! Quisiera más información',
    'color_primario' => '#25D366', // Verde oficial de WhatsApp
    'color_hover' => '#20b955',
    'posicion' => 'bottom-right', // opciones: bottom-right, bottom-left
    'footer_selector' => '.footer',
    'offsets' => [
        'desktop' => 24,
        'tablet' => 18,
        'mobile' => 14,
    ],
    'breakpoints' => [
        'tablet' => 768,
        'mobile' => 480,
    ],
    'footer_safe_margin' => 12,
];

// Construir URL de WhatsApp
$mensaje_codificado = urlencode($config['mensaje_default']);
$whatsapp_url = "https://api.whatsapp.com/send?phone={$config['telefono']}&text={$mensaje_codificado}";

// Determinar posición
$position_class = str_replace('-', '_', $config['posicion']);
?>

<!-- Botón Flotante de WhatsApp con Tooltip -->
<div class="whatsapp-container whatsapp-<?php echo $position_class; ?>"
     style="--whatsapp-primary: <?php echo $config['color_primario']; ?>; --whatsapp-hover: <?php echo $config['color_hover']; ?>; --whatsapp-offset: <?php echo (int) $config['offsets']['desktop']; ?>px;"
     data-footer-selector="<?php echo htmlspecialchars($config['footer_selector'], ENT_QUOTES, 'UTF-8'); ?>"
     data-offset-desktop="<?php echo (int) $config['offsets']['desktop']; ?>"
     data-offset-tablet="<?php echo (int) $config['offsets']['tablet']; ?>"
     data-offset-mobile="<?php echo (int) $config['offsets']['mobile']; ?>"
     data-breakpoint-tablet="<?php echo (int) $config['breakpoints']['tablet']; ?>"
     data-breakpoint-mobile="<?php echo (int) $config['breakpoints']['mobile']; ?>"
     data-footer-safe-margin="<?php echo (int) $config['footer_safe_margin']; ?>">
  <a href="<?php echo htmlspecialchars($whatsapp_url, ENT_QUOTES, 'UTF-8'); ?>" 
     class="whatsapp-float" 
     target="_blank" 
     rel="noopener noreferrer" 
     aria-label="Contactar por WhatsApp"
     title="¿Necesitas ayuda? Escríbenos">
    <svg class="whatsapp-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" fill="currentColor"/>
    </svg>
    <span class="whatsapp-pulse"></span>
    <span class="whatsapp-pulse-delay"></span>
  </a>
  
  <!-- Tooltip animado -->
  <div class="whatsapp-tooltip">
    <span class="whatsapp-tooltip-text">💬 ¿Necesitas ayuda?</span>
    <button class="whatsapp-tooltip-close" aria-label="Cerrar">×</button>
  </div>
  
  <!-- Badge de notificación -->
  <span class="whatsapp-badge">1</span>
</div>

<style>
/* ===== WhatsApp Float Button Styles ===== */
.whatsapp-container {
  position: fixed;
  z-index: 9999;
  pointer-events: none;
  isolation: isolate;
  width: 60px;
  height: 60px;
  transition: opacity 0.25s ease;
  --whatsapp-primary-default: #25D366;
  --whatsapp-hover-default: #20b955;
  --whatsapp-offset-default: 24px;
}

.whatsapp-container,
.whatsapp-container * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.whatsapp-container.whatsapp-bottom_right {
  bottom: var(--whatsapp-offset, var(--whatsapp-offset-default));
  right: 20px;
}

.whatsapp-container.whatsapp-bottom_left {
  bottom: var(--whatsapp-offset, var(--whatsapp-offset-default));
  left: 20px;
}

.whatsapp-container.whatsapp-hidden {
  opacity: 0;
  visibility: hidden;
  pointer-events: none !important;
}

/* Botón principal */
.whatsapp-float {
  position: relative;
  width: 60px;
  height: 60px;
  background: linear-gradient(
    135deg,
    var(--whatsapp-primary, var(--whatsapp-primary-default)) 0%,
    var(--whatsapp-hover, var(--whatsapp-hover-default)) 100%
  );
  border-radius: 50%;
  box-shadow: 0 4px 20px rgba(37, 211, 102, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  text-decoration: none;
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1),
              box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1),
              background 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  color: #fff;
  animation: whatsapp-bounce 3s ease-in-out infinite;
  pointer-events: auto !important;
  will-change: transform;
}

/* Animación de rebote sutil */
@keyframes whatsapp-bounce {
  0%, 20%, 50%, 80%, 100% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-10px);
  }
  60% {
    transform: translateY(-5px);
  }
}

/* Icono SVG */
.whatsapp-icon {
  width: 32px;
  height: 32px;
  position: relative;
  z-index: 2;
  filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
}

/* Efecto de pulso doble */
.whatsapp-pulse,
.whatsapp-pulse-delay {
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: var(--whatsapp-primary, var(--whatsapp-primary-default));
  opacity: 0.6;
  animation: whatsapp-pulse 2.5s ease-out infinite;
}

.whatsapp-pulse-delay {
  animation-delay: 1.25s;
}

@keyframes whatsapp-pulse {
  0% {
    transform: scale(1);
    opacity: 0.7;
  }
  50% {
    transform: scale(1.4);
    opacity: 0.4;
  }
  100% {
    transform: scale(1.8);
    opacity: 0;
  }
}

/* Tooltip animado */
.whatsapp-tooltip {
  position: absolute;
  bottom: 70px;
  right: 0;
  --whatsapp-tooltip-bg: #fff;
  --whatsapp-tooltip-fg: #333;
  background: var(--whatsapp-tooltip-bg);
  color: var(--whatsapp-tooltip-fg);
  padding: 12px 16px;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
  white-space: nowrap;
  font-size: 14px;
  font-weight: 500;
  opacity: 0;
  visibility: hidden;
  transform: translateY(10px);
  transition: opacity 0.3s ease, visibility 0.3s ease, transform 0.3s ease;
  animation: whatsapp-tooltip-show 0.5s ease 2s forwards, 
             whatsapp-tooltip-hide 0.3s ease 8s forwards;
  display: flex;
  align-items: center;
  gap: 8px;
  pointer-events: auto !important;
  z-index: 1;
}

.whatsapp-container.whatsapp-bottom_left .whatsapp-tooltip {
  right: auto;
  left: 0;
}

.whatsapp-tooltip::after {
  content: '';
  position: absolute;
  bottom: -8px;
  right: 20px;
  width: 0;
  height: 0;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-top: 8px solid var(--whatsapp-tooltip-bg);
}

.whatsapp-container.whatsapp-bottom_left .whatsapp-tooltip::after {
  right: auto;
  left: 20px;
}

@keyframes whatsapp-tooltip-show {
  to {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }
}

@keyframes whatsapp-tooltip-hide {
  to {
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
  }
}

.whatsapp-tooltip-text {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

.whatsapp-tooltip-close {
  background: none;
  border: none;
  color: #999;
  font-size: 20px;
  cursor: pointer;
  padding: 0;
  width: 20px;
  height: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: color 0.2s ease;
}

.whatsapp-tooltip-close:hover {
  color: #333;
}

/* Badge de notificación */
.whatsapp-badge {
  position: absolute;
  top: -4px;
  right: -4px;
  background: linear-gradient(135deg, #ff3b3b 0%, #ff1744 100%);
  color: #fff;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  font-weight: 700;
  box-shadow: 0 2px 8px rgba(255, 23, 68, 0.4);
  animation: whatsapp-badge-pulse 2s ease infinite;
  z-index: 3;
}

@keyframes whatsapp-badge-pulse {
  0%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.15);
  }
}

/* Hover effect mejorado */
.whatsapp-float:hover {
  background: linear-gradient(
    135deg,
    var(--whatsapp-hover, var(--whatsapp-hover-default)) 0%,
    var(--whatsapp-hover, var(--whatsapp-hover-default)) 100%
  );
  transform: scale(1.15) translateY(-3px);
  box-shadow: 0 8px 30px rgba(37, 211, 102, 0.7);
  animation: none;
}

.whatsapp-float:active {
  transform: scale(1.05);
}

.whatsapp-container:hover .whatsapp-tooltip {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
  animation: none;
}

/* Responsive */
@media (max-width: 768px) {
  .whatsapp-container {
    --whatsapp-offset-default: 18px;
  }
  
  .whatsapp-container.whatsapp-bottom_right {
    right: 16px;
  }
  
  .whatsapp-container.whatsapp-bottom_left {
    left: 16px;
  }
  
  .whatsapp-float {
    width: 56px;
    height: 56px;
  }
  
  .whatsapp-icon {
    width: 28px;
    height: 28px;
  }
  
  .whatsapp-tooltip {
    font-size: 13px;
    padding: 10px 14px;
    bottom: 65px;
  }
  
  .whatsapp-badge {
    width: 22px;
    height: 22px;
    font-size: 11px;
  }
}

@media (max-width: 480px) {
  .whatsapp-container {
    --whatsapp-offset-default: 14px;
  }

  .whatsapp-container.whatsapp-bottom_right {
    right: 12px;
  }

  .whatsapp-container.whatsapp-bottom_left {
    left: 12px;
  }
}

/* Accesibilidad */
.whatsapp-float:focus-visible {
  outline: 3px solid var(--whatsapp-primary, var(--whatsapp-primary-default));
  outline-offset: 4px;
}

@media (prefers-reduced-motion: reduce) {
  .whatsapp-float,
  .whatsapp-pulse,
  .whatsapp-pulse-delay,
  .whatsapp-badge,
  .whatsapp-tooltip {
    animation: none !important;
    transition: none !important;
  }
}

/* Modo oscuro */
@media (prefers-color-scheme: dark) {
  .whatsapp-float {
    box-shadow: 0 4px 20px rgba(37, 211, 102, 0.6);
  }
  
  .whatsapp-float:hover {
    box-shadow: 0 8px 30px rgba(37, 211, 102, 0.8);
  }
  
  .whatsapp-tooltip {
    --whatsapp-tooltip-bg: #2d2d2d;
    --whatsapp-tooltip-fg: #fff;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
  }
  
  .whatsapp-tooltip::after {
    border-top-color: var(--whatsapp-tooltip-bg);
  }
  
  .whatsapp-tooltip-close {
    color: #aaa;
  }
  
  .whatsapp-tooltip-close:hover {
    color: #fff;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const container = document.querySelector('.whatsapp-container');
  if (!container) {
    return;
  }

  const tooltip = container.querySelector('.whatsapp-tooltip');
  const tooltipClose = container.querySelector('.whatsapp-tooltip-close');

  if (tooltip && tooltipClose) {
    tooltipClose.addEventListener('click', function (event) {
      event.preventDefault();
      event.stopPropagation();
      tooltip.style.animation = 'none';
      tooltip.style.opacity = '0';
      tooltip.style.visibility = 'hidden';
    });
  }

  const parseNumber = (value, fallback) => {
    const parsed = parseInt(value, 10);
    return Number.isFinite(parsed) ? parsed : fallback;
  };

  const dataset = container.dataset;
  const offsets = {
    desktop: parseNumber(dataset.offsetDesktop, 24),
    tablet: parseNumber(dataset.offsetTablet, 18),
    mobile: parseNumber(dataset.offsetMobile, 14),
  };

  const breakpoints = {
    tablet: parseNumber(dataset.breakpointTablet, 768),
    mobile: parseNumber(dataset.breakpointMobile, 480),
  };

  const safeMargin = parseNumber(dataset.footerSafeMargin, 12);
  const footerSelector = dataset.footerSelector || '.footer';

  const setOffset = (value) => {
    container.style.setProperty('--whatsapp-offset', `${Math.max(value, 0)}px`);
  };

  const getBaseOffset = (width) => {
    if (width <= breakpoints.mobile) {
      return offsets.mobile;
    }
    if (width <= breakpoints.tablet) {
      return offsets.tablet;
    }
    return offsets.desktop;
  };

  const computeFooters = () => {
    if (!footerSelector) {
      return [];
    }

    try {
      return Array.from(document.querySelectorAll(footerSelector)).filter(
        (node) => node instanceof Element
      );
    } catch (_error) {
      return [];
    }
  };

  let lastAppliedOffset = -1;

  const adjustPosition = () => {
    const viewportHeight = window.innerHeight || 0;
    const viewportWidth = window.innerWidth || 0;

    let offset = getBaseOffset(viewportWidth);
    let hideButton = false;

    const buttonRect = container.getBoundingClientRect();
    const buttonHeight = buttonRect.height || container.offsetHeight || 60;

    const footers = computeFooters();

    footers.forEach((footer) => {
      const rect = footer.getBoundingClientRect();
      if (rect.height <= 0 || rect.bottom <= 0 || rect.top >= viewportHeight) {
        return;
      }

      const safeTop = rect.top - safeMargin;
      const proposedOffset = Math.ceil(viewportHeight - safeTop);

      if (proposedOffset > offset) {
        offset = proposedOffset;
      }
    });

    const maxOffset = Math.max(0, viewportHeight - buttonHeight - safeMargin);
    if (offset > maxOffset) {
      hideButton = viewportHeight <= buttonHeight + safeMargin * 2;
      offset = maxOffset;
    }

    container.classList.toggle('whatsapp-hidden', hideButton);

    if (offset !== lastAppliedOffset) {
      lastAppliedOffset = offset;
      setOffset(offset);
    }
  };

  const scheduleFrame =
    typeof window.requestAnimationFrame === 'function'
      ? window.requestAnimationFrame.bind(window)
      : function (callback) {
          return window.setTimeout(callback, 16);
        };

  let scheduled = false;
  const scheduleAdjust = () => {
    if (scheduled) {
      return;
    }
    scheduled = true;
    scheduleFrame(() => {
      scheduled = false;
      adjustPosition();
    });
  };

  scheduleAdjust();

  window.addEventListener('scroll', scheduleAdjust, { passive: true });
  window.addEventListener('resize', scheduleAdjust, { passive: true });

  const initialFooters = computeFooters();
  const observedFooters = new Set(initialFooters);
  let resizeObserver = null;

  const attachFooterObserver = (footer) => {
    if (!footer) {
      return;
    }
    if (!observedFooters.has(footer)) {
      observedFooters.add(footer);
    }
    if (resizeObserver && typeof resizeObserver.observe === 'function') {
      resizeObserver.observe(footer);
    }
  };

  if (typeof ResizeObserver !== 'undefined') {
    resizeObserver = new ResizeObserver(scheduleAdjust);
    resizeObserver.observe(container);
    initialFooters.forEach((footer) => attachFooterObserver(footer));
  }

  if (typeof MutationObserver !== 'undefined') {
    const mutationObserver = new MutationObserver((mutations) => {
      let shouldAdjust = false;

      mutations.forEach((mutation) => {
        if (shouldAdjust) {
          return;
        }

        if (mutation.type === 'attributes') {
          shouldAdjust = true;
          return;
        }

        if (mutation.type === 'childList') {
          const processNode = (node) => {
            if (!(node instanceof Element) || !footerSelector) {
              return;
            }

            const matchesSelector = typeof node.matches === 'function' && node.matches(footerSelector);

            if (matchesSelector) {
              attachFooterObserver(node);
              mutationObserver.observe(node, {
                attributes: true,
                childList: true,
                subtree: true,
              });
              shouldAdjust = true;
              return;
            }

            if (typeof node.querySelectorAll === 'function') {
              const nestedFooters = node.querySelectorAll(footerSelector);
              nestedFooters.forEach((nested) => {
                attachFooterObserver(nested);
                mutationObserver.observe(nested, {
                  attributes: true,
                  childList: true,
                  subtree: true,
                });
              });
              if (nestedFooters.length) {
                shouldAdjust = true;
              }
            }
          };

          mutation.addedNodes.forEach(processNode);

          if (!shouldAdjust && mutation.removedNodes.length) {
            shouldAdjust = true;
          }
        }
      });

      if (shouldAdjust) {
        scheduleAdjust();
      }
    });

    observedFooters.forEach((footer) =>
      mutationObserver.observe(footer, {
        attributes: true,
        childList: true,
        subtree: true,
      })
    );

    if (document.body) {
      mutationObserver.observe(document.body, {
        childList: true,
        subtree: true,
      });
    }
  }
});
</script>