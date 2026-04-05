<?php $currentPage = 'events'; require 'includes/header.php'; ?>

<?php
// Event-Services Daten
$eventServices = [
    [
        'title' => 'Individuelle Eistorten',
        'description' => 'Individuell konfigurierbar für Geburtstage, Feiern und besondere Momente. Wählen Sie aus unseren hausgemachten Gelato-Sorten aus der eigenen Manufaktur und lassen Sie uns Ihre Traumtorte kreieren.',
        'features' => ['Alle Gelato-Geschmäcker verfügbar', 'Individuelle Größen', 'Persönliche Dekoration', 'Allergiker-freundliche Optionen']
    ],
    [
        'title' => 'Eistresen für Events',
        'description' => 'Für Feiern, Firmen und Workshops – bringen Sie das Flora-Erlebnis aus Flensburg direkt zu Ihrer Veranstaltung. Unser Eistresen ist flexibel anfragbar für Events aller Art.',
        'features' => ['Mobiler Eistresen', 'Große Auswahl an Sorten', 'Professionelle Bedienung', 'Komplette Ausstattung inklusive']
    ],
    [
        'title' => 'Firmen-Catering',
        'description' => 'Überraschen Sie Ihre Mitarbeiter und Kunden mit unserem exklusiven Eis-Catering. Ideal für Firmenevents, Meetings und Betriebsfeiern.',
        'features' => ['Büro-Lieferservice', 'Portionierte Becher verfügbar', 'Vegetarische & vegane Optionen', 'Flexible Mengenstaffelung']
    ],
    [
        'title' => 'Workshop-Service',
        'description' => 'Lernen Sie die Kunst der Gelato-Herstellung! Unsere Workshops sind perfekt für Teambuilding-Events oder private Gruppen.',
        'features' => ['Gelato-Herstellung live', 'Alle Zutaten inklusive', 'Professionelle Anleitung', 'Take-Away für Teilnehmer']
    ]
];

$eventTypes = [
    'Geburtstagsfeiern',
    'Hochzeiten',
    'Firmenjubiläen',
    'Kindergeburtstage',
    'Vereinsfeste',
    'Stadtfeste',
    'Private Feiern',
    'Teambuilding-Events'
];

$customCakeOptions = [
    'Vanille-Bourbon Premium',
    'Schokolade mit Haselnuss',
    'Erdbeere mit frischen Früchten',
    'Pistazie Siziliana',
    'Stracciatella Classic',
    'Mango-Maracuja Sorbet',
    'Limoncello-Zitrone',
    'Tiramisu-Traum'
];
?>

<main class="main-content">
    <!-- Hero Section -->
    <section class="hero hero-events">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Events & Eistorten</h1>
                <p class="hero-subtitle">Machen Sie Ihre Feier unvergesslich mit unseren individuellen Eistorten und professionellem Event-Catering</p>
                <div class="hero-actions">
                    <a href="tel:01520 9861052" class="btn btn-primary">Jetzt anfragen</a>
                    <a href="#services" class="btn btn-secondary">Unsere Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section id="services" class="section section-services">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Unsere Event-Services</h2>
                <p class="section-subtitle">Von individuellen Eistorten bis hin zu kompletten Event-Lösungen - wir machen Ihre Feier zu einem besonderen Erlebnis</p>
            </div>

            <div class="services-grid">
                <?php foreach ($eventServices as $index => $service): ?>
                <article class="service-card card">
                    <div class="service-icon service-icon-<?php echo $index + 1; ?>"></div>
                    <div class="service-content">
                        <h3 class="service-title"><?php echo $service['title']; ?></h3>
                        <p class="service-description"><?php echo $service['description']; ?></p>
                        <ul class="service-features">
                            <?php foreach ($service['features'] as $feature): ?>
                            <li class="feature-item"><?php echo $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Custom Ice Cream Cakes -->
    <section class="section section-cakes">
        <div class="container">
            <div class="section-content">
                <div class="content-grid">
                    <div class="content-text">
                        <h2 class="section-title">Individuelle Eistorten</h2>
                        <p class="section-description">Jede Feier verdient eine besondere Torte! Unsere handwerklich hergestellten Eistorten werden nach Ihren Wünschen gefertigt und sind der perfekte Höhepunkt für jeden Anlass.</p>
                        
                        <div class="features-list">
                            <h3 class="features-title">Ihre Vorteile:</h3>
                            <ul class="features-items">
                                <li class="feature-item">100% hausgemachtes Gelato aus der eigenen Manufaktur</li>
                                <li class="feature-item">Individuelle Größen von 4 bis 20 Personen</li>
                                <li class="feature-item">Persönliche Dekoration nach Ihren Wünschen</li>
                                <li class="feature-item">Laktosefreie und vegane Varianten verfügbar</li>
                                <li class="feature-item">Frische Zubereitung am Bestelltag</li>
                                <li class="feature-item">Abholung in beiden Standorten möglich</li>
                            </ul>
                        </div>

                        <div class="action-buttons">
                            <a href="tel:015209861052" class="btn btn-primary">Eistorte bestellen</a>
                            <a href="speisekarte.php" class="btn btn-secondary">Gelato-Sorten ansehen</a>
                        </div>
                    </div>

                    <div class="content-visual">
                        <div class="cake-showcase">
                            <div class="cake-preview cake-preview-main"></div>
                            <div class="cake-options">
                                <div class="cake-option cake-option-1"></div>
                                <div class="cake-option cake-option-2"></div>
                                <div class="cake-option cake-option-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Flavor Selection -->
    <section class="section section-flavors">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Beliebte Eistorten-Kombinationen</h2>
                <p class="section-subtitle">Wählen Sie aus unseren bewährten Geschmackskombinationen oder stellen Sie Ihre eigene Kreation zusammen</p>
            </div>

            <div class="flavors-grid">
                <?php foreach ($customCakeOptions as $index => $flavor): ?>
                <div class="flavor-card">
                    <div class="flavor-visual flavor-visual-<?php echo $index + 1; ?>"></div>
                    <div class="flavor-info">
                        <h3 class="flavor-name"><?php echo $flavor; ?></h3>
                        <div class="flavor-indicator">
                            <?php if (strpos($flavor, 'Sorbet') !== false): ?>
                            <span class="badge badge-vegan">Vegan</span>
                            <?php endif; ?>
                            <?php if (in_array($index, [0, 2, 5])): ?>
                            <span class="badge badge-premium">Premium</span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Event Types -->
    <section class="section section-event-types">
        <div class="container">
            <div class="section-content">
                <div class="content-grid content-grid-reverse">
                    <div class="content-visual">
                        <div class="event-gallery">
                            <div class="event-image event-image-main"></div>
                            <div class="event-images-grid">
                                <div class="event-image event-image-1"></div>
                                <div class="event-image event-image-2"></div>
                                <div class="event-image event-image-3"></div>
                                <div class="event-image event-image-4"></div>
                            </div>
                        </div>
                    </div>

                    <div class="content-text">
                        <h2 class="section-title">Perfekt für jeden Anlass</h2>
                        <p class="section-description">Ob klein oder groß, privat oder geschäftlich - unsere Event-Services passen sich perfekt an Ihre Bedürfnisse an. Hier sind einige Anlässe, für die wir bereits erfolgreich Eis-Catering angeboten haben:</p>
                        
                        <div class="event-types-list">
                            <?php foreach ($eventTypes as $index => $eventType): ?>
                            <div class="event-type-item">
                                <span class="event-type-icon"></span>
                                <span class="event-type-name"><?php echo $eventType; ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="highlight-box">
                            <h3 class="highlight-title">Besondere Anfragen?</h3>
                            <p class="highlight-text">Haben Sie einen speziellen Anlass oder besondere Wünsche? Sprechen Sie uns gerne an - wir finden eine Lösung!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Process -->
    <section class="section section-booking">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">So einfach buchen Sie unsere Services</h2>
                <p class="section-subtitle">In nur wenigen Schritten zu Ihrem perfekten Event-Catering</p>
            </div>

            <div class="booking-process">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3 class="step-title">Anfrage stellen</h3>
                        <p class="step-description">Rufen Sie uns an oder besuchen Sie uns in einer unserer Eisbarstudios. Teilen Sie uns Ihre Wünsche und Vorstellungen mit.</p>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3 class="step-title">Beratung & Planung</h3>
                        <p class="step-description">Gemeinsam entwickeln wir das perfekte Konzept für Ihr Event. Wir beraten Sie zu Sorten, Mengen und besonderen Wünschen.</p>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3 class="step-title">Angebot & Buchung</h3>
                        <p class="step-description">Sie erhalten ein individuelles Angebot. Nach Ihrer Zusage kümmern wir uns um alle weiteren Details.</p>
                    </div>
                </div>

                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3 class="step-title">Genießen & Feiern</h3>
                        <p class="step-description">Ihr Event-Tag ist da! Wir liefern oder Sie holen ab - und Ihre Gäste werden von unserem Premium-Gelato begeistert sein.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing & Info -->
    <section class="section section-info">
        <div class="container">
            <div class="info-grid">
                <div class="info-card card">
                    <div class="info-icon info-icon-time"></div>
                    <h3 class="info-title">Vorlaufzeit</h3>
                    <p class="info-description">Eistorten: Mindestens 24 Stunden Vorlaufzeit</p>
                    <p class="info-description">Event-Catering: 3-5 Tage Vorlaufzeit empfohlen</p>
                    <p class="info-description">Workshops: Nach Vereinbarung</p>
                </div>

                <div class="info-card card">
                    <div class="info-icon info-icon-size"></div>
                    <h3 class="info-title">Mengenangaben</h3>
                    <p class="info-description">Eistorten: Ab 4 Personen bis 20+ Personen</p>
                    <p class="info-description">Event-Catering: Ab 20 Personen</p>
                    <p class="info-description">Workshops: 6-12 Teilnehmer optimal</p>
                </div>

                <div class="info-card card">
                    <div class="info-icon info-icon-delivery"></div>
                    <h3 class="info-title">Service-Optionen</h3>
                    <p class="info-description">Abholung in beiden Standorten</p>
                    <p class="info-description">Lieferung im Flensburger Stadtgebiet</p>
                    <p class="info-description">Vor-Ort-Service nach Absprache</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="section section-cta section-cta-events">
        <div class="container">
            <div class="cta-content text-center">
                <h2 class="cta-title">Bereit für Ihr unverg