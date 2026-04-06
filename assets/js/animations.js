document.addEventListener('DOMContentLoaded', function() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    let scrollTicking = false;
    let exitShown = false;
    const isDesktop = window.matchMedia('(min-width: 1024px)').matches;

    // A/B Testing Engine
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    function setCookie(name, value, days) {
        const expires = new Date(Date.now() + days * 864e5).toUTCString();
        document.cookie = `${name}=${value}; expires=${expires}; path=/`;
    }

    let variant = getCookie('hero_variant');
    if (!variant) {
        variant = Math.random() < 0.5 ? 'a' : 'b';
        setCookie('hero_variant', variant, 30);
    }

    window.flAB = {
        variant: variant,
        trackEvent: function(action) {
            console.log(`AB Test Event: ${action}, Variant: ${variant}`);
            if (typeof gtag !== 'undefined') {
                gtag('event', action, {
                    custom_parameter_1: variant
                });
            }
        }
    };

    document.querySelectorAll('.hero-variant').forEach(el => {
        if (el.classList.contains(`hero-variant--${variant}`)) {
            el.style.display = 'block';
        } else {
            el.style.display = 'none';
        }
    });

    document.querySelectorAll('.cta-primary').forEach(btn => {
        btn.addEventListener('click', () => {
            window.flAB.trackEvent('cta_click');
        });
    });

    if (prefersReducedMotion) return;

    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px'
    };

    const animateObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                
                if (entry.target.classList.contains('stagger-container')) {
                    const children = entry.target.children;
                    Array.from(children).forEach((child, index) => {
                        setTimeout(() => {
                            child.classList.add('visible');
                        }, index * 100);
                    });
                }
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        animateObserver.observe(el);
    });

    // Counter Animation
    function easeOutQuart(t) {
        return 1 - (--t) * t * t * t;
    }

    function animateCounter(element, target) {
        const duration = 2000;
        const startTime = performance.now();

        function update(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased = easeOutQuart(progress);
            const current = Math.round(eased * target);
            
            element.textContent = current;
            
            if (progress < 1) {
                requestAnimationFrame(update);
            }
        }
        
        requestAnimationFrame(update);
    }

    const counterObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.dataset.target);
                animateCounter(entry.target, target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.count-up').forEach(el => {
        counterObserver.observe(el);
    });

    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Navbar Scroll
    const navbar = document.querySelector('header, nav');
    function updateNavbar() {
        if (navbar) {
            if (window.scrollY > 80) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }
        scrollTicking = false;
    }

    // Parallax Hero
    const parallaxElements = document.querySelectorAll('.parallax-js');
    function updateParallax() {
        if (isDesktop && parallaxElements.length) {
            const scrolled = window.pageYOffset;
            parallaxElements.forEach(el => {
                const rate = scrolled * -0.5;
                el.style.transform = `translateY(${rate}px)`;
            });
        }
    }

    function onScroll() {
        if (!scrollTicking) {
            requestAnimationFrame(() => {
                updateNavbar();
                updateParallax();
            });
            scrollTicking = true;
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });

    // Lazy Loading
    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
    if ('loading' in HTMLImageElement.prototype) {
        lazyImages.forEach(img => {
            img.addEventListener('load', () => {
                img.parentElement.classList.remove('skeleton');
            });
        });
    } else {
        const imageObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.addEventListener('load', () => {
                        img.parentElement.classList.remove('skeleton');
                    });
                    imageObserver.unobserve(img);
                }
            });
        });

        lazyImages.forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Form Micro-interactions
    document.querySelectorAll('.form-group input, .form-group textarea').forEach(input => {
        input.addEventListener('focus', () => {
            input.closest('.form-group').classList.add('focused');
        });
        
        input.addEventListener('blur', () => {
            if (!input.value) {
                input.closest('.form-group').classList.remove('focused');
            }
        });

        if (input.value) {
            input.closest('.form-group').classList.add('focused');
        }
    });

    // Exit Intent (Desktop only)
    if (isDesktop) {
        document.addEventListener('mouseleave', (e) => {
            if (e.clientY < 0 && !exitShown) {
                const exitPopup = document.querySelector('#exit-popup');
                if (exitPopup) {
                    exitPopup.style.display = 'flex';
                    exitShown = true;
                    window.flAB.trackEvent('exit_intent_shown');
                }
            }
        });

        document.querySelectorAll('.exit-popup__close').forEach(btn => {
            btn.addEventListener('click', () => {
                const exitPopup = document.querySelector('#exit-popup');
                if (exitPopup) {
                    exitPopup.style.display = 'none';
                }
            });
        });
    }

    // FAB Toggle
    const fabMain = document.querySelector('.fab-main');
    if (fabMain) {
        fabMain.addEventListener('click', () => {
            const fabContainer = document.querySelector('.fab-container');
            if (fabContainer) {
                fabContainer.classList.toggle('open');
            }
        });
    }
});