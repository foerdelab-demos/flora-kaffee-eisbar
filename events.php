<?php 
$currentPage = 'events'; 
require 'includes/header.php'; 

// Variablen definieren
$phone = '01520 9861052';
$address = 'Marrensdamm 4, 24944 Flensburg';
$businessName = 'Flora Kaffee & Eisbar';
?>

<main class="page-content">
    <!-- Hero Section -->
    <section class="hero-section events-hero animate-on-scroll fade-in-up">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Flora kommt nach Flensburg und Umgebung</h1>
                <p class="hero-subtitle">Mobiler Eistresen für Events, Firmen-Catering und Eistorten nach Maß</p>. Hausgemachtes Gelato aus unserer Manufaktur - überall wo in Flensburg und der Region gefeiert wird.</p>
                <div class="hero-cta">
                    <a href="tel:<?php echo $phone; ?>" class="btn btn-primary">Event anfragen: <?php echo $phone; ?></a>
                </div>
                <!-- Live Verfügbarkeit Trust Element -->
                <div class="trust-badge live-availability">
                    <span class="status-dot"></span>
                    Heute 12 Eissorten frisch verfügbar
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof Trust Element -->
    <section class="social-proof animate-on-scroll fade-in-up">
        <div class="container">
            <div class="testimonial-snippet">
                ★★★★★ "Authentisches Gelato wie früher" - Flora Stammkunden aus Flensburg
            </div>
        </div>
    </section>

    <!-- Mobile Eistresen Services -->
    <section class="services-section animate-on-scroll fade-in-up" id="eistresen">
        <div class="container">
            <div class="section-header">
                <h2>Mobiler Eistresen</h2>
                <p>Dein Event wird zum Highlight - Flora bringt den Eistresen direkt zu dir. Authentisches Gelato aus unserer Manufaktur, frisch serviert wo immer gefeiert wird.</p>
            </div>
            
            <div class="services-grid stagger-container">
                <div class="service-card animate-on-scroll fade-in-up stagger-1">
                    <div class="service-icon">
                        <div class="gradient-placeholder" style="background: linear-gradient(135deg, #ff6b9d, #ffa726);"></div>
                    </div>
                    <h3>Mobile Eistresen für Events</h3>
                    <p>Komplette Eisbar auf Rädern - mit allem was dazu gehört. Kühlung, Ausstattung und natürlich unser hausgemachtes Gelato.</p>
                </div>
                
                <div class="service-card animate-on-scroll fade-in-up stagger-2">
                    <div class="service-icon">
                        <div class="gradient-placeholder" style="background: linear-gradient(135deg, #4fc3f7, #29b6f6);"></div>
                    </div>
                    <h3>Firmen-Catering</h3>
                    <p>Meetings werden cooler mit Flora-Eis. Perfekt für Firmen-Events, Team-Meetings oder einfach als besondere Überraschung fürs Büro.</p>
                </div>
                
                <div class="service-card animate-on-scroll fade-in-up stagger-3">
                    <div class="service-icon">
                        <div class="gradient-placeholder" style="background: linear-gradient(135deg, #81c784, #66bb6a);"></div>
                    </div>
                    <h3>Workshops & Gruppen</h3>
                    <p>Eis-Workshops für Schulen, Vereine oder private Gruppen. Schaut zu wie echtes Gelato entsteht und probiert euch durch die Sorten.</p>
                </div>
                
                <div class="service-card animate-on-scroll fade-in-up stagger-4">
                    <div class="service-icon">
                        <div class="gradient-placeholder" style="background: linear-gradient(135deg, #ba68c8, #ab47bc);"></div>
                    </div>
                    <h3>Flexible Buchung</h3>
                    <p>Jedes Event ist anders - deshalb gibt's keine Standardpakete. Ruf an, erzähl was du planst und wir finden die perfekte Lösung.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Galerie Signature Section -->
    <section class="event-gallery animate-on-scroll fade-in-up">
        <div class="container">
            <h2>Flora in Action</h2>
            <p>So sieht's aus wenn Flora zu deinem Event kommt - echter Eisgenuss für deine Gäste:</p>
            
            <div class="gallery-grid stagger-container">
                <div class="img-hover-container animate-on-scroll fade-in-up stagger-1">
                    <div class="gradient-placeholder gallery-item" style="background: linear-gradient(135deg, #ff9800, #f57c00);">
                        <span class="overlay-text">Firmen-Event Flensburg</span>
                    </div>
                </div>
                <div class="img-hover-container animate-on-scroll fade-in-up stagger-2">
                    <div class="gradient-placeholder gallery-item" style="background: linear-gradient(135deg, #e91e63, #c2185b);">
                        <span class="overlay-text">Geburtstagsfeier mobil</span>
                    </div>
                </div>
                <div class="img-hover-container animate-on-scroll fade-in-up stagger-3">
                    <div class="gradient-placeholder gallery-item" style="background: linear-gradient(135deg, #00acc1, #0097a7);">
                        <span class="overlay-text">Workshop Schule</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Eistorten Services -->
    <section class="services-section eistorten-section animate-on-scroll fade-in-up" id="eistorten">
        <div class="container">
            <div class="section-header">
                <h2>Eistorten nach Maß</h2>
                <p>Geburtstage, Jubiläen, besondere Momente - unsere Eistorten machen jede Feier unvergesslich. Mit dem Online-Konfigurator stellst du dir deine perfekte Torte zusammen.</p>
            </div>
            
            <div class="services-grid stagger-container">
                <div class="service-card animate-on-scroll fade-in-up stagger-1">
                    <h3>Online-Konfigurator</h3>
                    <p>Einfach online zusammenstellen: Größe wählen, Sorten aussuchen, Dekoration festlegen. So einfach geht individuelle Eistorte heute.</p>
                </div>
                
                <div class="service-card animate-on-scroll fade-in-up stagger-2">
                    <h3>Individuelle Gestaltung</h3>
                    <p>Deine Ideen, unser Handwerk. Besondere Wünsche, spezielle Farben oder ausgefallene Kombinationen - wir setzen um was möglich ist.</p>
                </div>
                
                <div class="service-card animate-on-scroll fade-in-up stagger-3">
                    <h3>Für jeden Anlass</h3>
                    <p>Kindergeburtstag, Hochzeit, Firmenfeier - jeder Anlass bekommt die passende Eistorte. Frisch gemacht mit unserem hausgemachten Gelato.</p>
                </div>
                
                <div class="service-card animate-on-scroll fade-in-up stagger-4">
                    <h3>Bestellung nach Maß</h3>
                    <p>Keine Lagerhaltung, keine vorgefertigten Torten. Jede Eistorte wird frisch für deinen Termin gemacht - so schmeckt's am besten.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Eistorten Showcase Signature Section -->
    <section class="eistorten-showcase animate-on-scroll fade-in-up">
        <div class="container">
            <h2>Unsere Eistorten-Kreationen</h2>
            <p>Jede Torte ein Unikat - hier siehst du was alles möglich ist:</p>
            
            <div class="showcase-grid stagger-container">
                <div class="showcase-item animate-on-scroll fade-in-up stagger-1">
                    <div class="img-hover-container">
                        <div class="gradient-placeholder" style="background: linear-gradient(135deg, #ff6b9d, #f06292);">
                            <span class="overlay-text">Geburtstags-Eistorte</span>
                        </div>
                    </div>
                    <h3>Klassische Geburtstagstorte</h3>
                    <p>Vanille-Basis mit Erdbeer-Schichten und individueller Dekoration</p>
                </div>
                
                <div class="showcase-item animate-on-scroll fade-in-up stagger-2">
                    <div class="img-hover-container">
                        <div class="gradient-placeholder" style="background: linear-gradient(135deg, #4fc3f7, #29b6f6);">
                            <span class="overlay-text">Firmen-Torte</span>
                        </div>
                    </div>
                    <h3>Corporate Design Torte</h3>
                    <p>Individuelle Gestaltung mit Firmenfarben und Logo</p>
                </div>
                
                <div class="showcase-item animate-on-scroll fade-in-up stagger-3">
                    <div class="img-hover-container">
                        <div class="gradient-placeholder" style="background: linear-gradient(135deg, #81c784, #66bb6a);">
                            <span class="overlay-text">Saisonale Torte</span>
                        </div>
                    </div>
                    <h3>Saisonale Spezialität</h3>
                    <p>Mit frischen Früchten der Saison und passenden Eissorten</p>
                </div>
            </div>
            
            <div class="cta-section">
                <a href="#konfigurator" class="btn btn-secondary">Eistorten-Konfigurator starten</a>
            </div>
        </div>
    </section>

    <!-- Paket Konfigurator Signature Section -->
    <section class="package-calculator animate-on-scroll fade-in-up" id="konfigurator">
        <div class="container">
            <div class="calculator-wrapper">
                <h2>Event-Rechner</h2>
                <p>Verschaff dir einen ersten Überblick - einfach Eckdaten eingeben und ungefähre Kosten erfahren:</p>
                
                <div class="calculator-form">
                    <div class="form-group">
                        <label>Anzahl Personen:</label>
                        <input type="range" id="persons" min="10" max="500" value="50" class="slider">
                        <span class="range-value" id="persons-value">50</span>
                    </div>
                    
                    <div class="form-group">
                        <label>Dauer in Stunden:</label>
                        <input type="range" id="duration" min="1" max="8" value="3" class="slider">
                        <span class="range-value" id="duration-value">3</span>
                    </div>
                    
                    <div class="form-group">
                        <label>Event-Typ:</label>
                        <select id="event-type">
                            <option value="private">Private Feier</option>
                            <option value="corporate">Firmen-Event</option>
                            <option value="wedding">Hochzeit</option>
                            <option value="workshop">Workshop</option>
                        </select>
                    </div>
                    
                    <div class="result-section">
                        <h3>Geschätzte Kosten:</h3>
                        <div class="price-display">
                            <span class="price" id="estimated-price">ab 150 €</span>
                        </div>
                        <p class="disclaimer">Unverbindliche Schätzung - finale Preise nach individueller Beratung</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section events-cta animate-on-scroll fade-in-up">
        <div class="container">
            <div class="cta-content">
                <h2>Event anfragen</h2>
                <p>Du planst eine Feier oder ein Firmen-Event? Ruf einfach an - wir machen dir ein ehrliches Angebot ohne Schnickschnack. Jedes Event ist anders, deshalb reden wir lieber persönlich.</p>
                
                <div class="cta-features stagger-container">
                    <div class="cta-feature animate-on-scroll fade-in-up stagger-1">
                        <h3>Telefonische Beratung</h3>
                        <p>Direkte Hotline unter <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a> - echte Menschen statt Warteschleife</p>
                    </div>
                    
                    <div class="cta-feature animate-on-scroll fade-in-up stagger-2">
                        <h3>Individuelle Lösungen</h3>
                        <p>Kein Event wie das andere - wir passen uns an deine Bedürfnisse an, nicht umgekehrt</p>
                    </div>
                    
                    <div class="cta-feature animate-on-scroll fade-in-up stagger-3">
                        <h3>Erfahrung die zählt</h3>
                        <p>Von der Kindergeburtstagsfeier bis zum Firmen-Jubiläum - wir haben schon alles gemacht</p>
                    </div>
                </div>
                
                <div class="cta-buttons">
                    <a href="tel:<?php echo $phone; ?>" class="btn btn-primary">Jetzt anrufen: <?php echo $phone; ?></a>
                    <a href="kontakt.php" class="btn btn-secondary">Kontaktformular</a>
                </div>
                
                <!-- Response Garantie Trust Element -->
                <div class="trust-badge response-guarantee">
                    Antwort binnen 24h garantiert
                </div>
            </div>
        </div>
    </section>

    <!-- Praktische Infos -->
    <section class="info-section animate-on-scroll fade-in-up">
        <div class="container">
            <h2>Gut zu wissen</h2>
            
            <div class="info-grid stagger-container">
                <div class="info-card animate-on-scroll fade-in-up stagger-1">
                    <h3>Buchungsvorlauf</h3>
                    <p>Plane am besten 2-3 Wochen im Voraus, besonders in der Hauptsaison. Spontane Anfragen schauen wir trotzdem gerne an.</p>
                </div>
                
                <div class="info-card animate-on-scroll fade-in-up stagger-2">
                    <h3>Einzugsgebiet</h3>
                    <p>Primär Flensburg und Umgebung - bei größeren Events auch weitere Strecken möglich. Einfach nachfragen!</p>
                </div>
                
                <div class="info-card animate-on-scroll fade-in-up stagger-3">
                    <h3>Was wir mitbringen</h3>
                    <p>Komplette Eisbar mit Kühlung, Geschirr, Löffeln und allem was dazu gehört. Du brauchst nur Strom und gute Laune.</p>
                </div>
                
                <div class="info-card animate-on-scroll fade-in-up stagger-4">
                    <h3>Wetter & Saisonalität</h3>
                    <p>Events sind ganzjährig möglich - auch im Winter schmeckt gutes Eis. Bei extremem Wetter finden wir gemeinsam Lösungen.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Lokale Navigation -->
    <section class="local-nav animate-on-scroll fade-in-up">
        <div class="container">
            <h2>Mehr Flora entdecken</h2>
            <div class="nav-cards stagger-container">
                <a href="eismanufaktur.php" class="nav-card animate-on-scroll fade-in-up stagger-1">
                    <div class="gradient-placeholder" style="background: linear-gradient(135deg, #ff6b9d, #ffa726);"></div>
                    <h3>Eismanufaktur</h3>
                    <p>Schau wie unser Gelato entsteht</p>
                </a>
                
                <a href="standorte.php" class="nav-card animate-on-scroll fade-in-up stagger-2">
                    <div class="gradient-placeholder" style="background: linear-gradient(135deg, #4fc3f7, #29b6f6);"></div>
                    <h3>Unsere Standorte</h3>
                    <p>Finde Flora in Flensburg</p>
                </a>
                
                <a href="speisekarte.php" class="nav-card animate-on-scroll fade-in-up stagger-3">
                    <div class="gradient-placeholder" style="background: linear-gradient(135deg, #81c784, #66bb6a);"></div>
                    <h3>Aktuelle Eissorten</h3>
                    <p>Was gibt's heute Leckeres?</p>
                </a>
            </div>
        </div>
    </section>
</main>

<!-- Sticky Handwerk Badge Trust Element -->
<div class="sticky-badge handwerk-badge">
    Täglich frisch in eigener Manufaktur
</div>

<script>
// Calculator functionality
document.addEventListener('DOMContentLoaded', function() {
    const personsSlider = document.getElementById('persons');
    const durationSlider = document.getElementById('duration');
    const eventType = document.getElementById('event-type');
    const personsValue = document.getElementById('persons-value');
    const durationValue = document.getElementById('duration-value');
    const estimatedPrice = document.getElementById('estimated-price');
    
    function updateCalculator() {
        const persons = parseInt(personsSlider.value);
        const duration = parseInt(durationSlider.value);
        const type = eventType.value;
        
        personsValue.textContent = persons;
        durationValue.textContent = duration;
        
        // Simple pricing calculation
        let basePrice = 80;
        let personPrice = 2.5;
        let hourPrice = 30;
        
        // Type modifiers
        const typeModifiers = {
            'private': 1.0,
            'corporate': 1.3,
            'wedding': 1.5,
            'workshop': 1.2
        };
        
        const totalPrice = Math.round((basePrice + (persons * personPrice) + (duration * hourPrice)) * typeModifiers[type]);
        
        estimatedPrice.textContent = `ab ${totalPrice} €`;
    }
    
    personsSlider.addEventListener('input', updateCalculator);
    durationSlider.addEventListener('input', updateCalculator);
    eventType.addEventListener('change', updateCalculator);
    
    // Initialize
    updateCalculator();
});
</script>

<?php require 'includes/footer.php'; ?>