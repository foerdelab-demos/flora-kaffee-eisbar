<?php $currentPage = 'standorte'; require 'includes/header.php'; ?>

<?php
// Standort-Daten
$standorte = [
    'weiche' => [
        'name' => 'Flora Weiche',
        'address' => 'Alter Husumer Weg 260',
        'city' => '24943 Flensburg',
        'description' => 'Unser gemütlicher Ursprung in Weiche – hier fühlt sich Nachbarschaft zuhause. Hier begann unsere Flora-Geschichte und hier erleben Sie noch heute die authentische, familiäre Atmosphäre unserer Anfänge.',
        'features' => ['Gemütliche Atmosphäre', 'Stammkunden-Feeling', 'Traditioneller Charme', 'Parkplätze vorhanden'],
        'gradient' => 'linear-gradient(135deg, #8B4513, #D2691E)'
    ],
    'marrensdamm' => [
        'name' => 'Flora Marrensdamm',
        'address' => 'Marrensdamm 4',
        'city' => '24944 Flensburg',
        'description' => 'Modern & strukturiert – unser Standort am Twedter Plack (Marrensdamm 4) bietet zeitgemäßes Design mit warmen Drinks, hausgemachtem Eis und frischen Waffeln. Perfekt für alle, die modernes Ambiente mit Flora-Qualität verbinden möchten.',
        'features' => ['Modernes Design', 'Zentrale Lage', 'Barrierefreier Zugang', 'Große Auswahl'],
        'gradient' => 'linear-gradient(135deg, #2C3E50, #3498DB)'
    ]
];

$oeffnungszeiten = [
    'maerz' => 'Täglich 13–18 Uhr',
    'ab_april' => 'Täglich 12–19 Uhr'
];
?>

<main class="main-content">
    <section class="hero hero-standorte">
        <div class="hero-background" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), linear-gradient(135deg, #8B4513, #2C3E50);"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Standorte & Öffnungszeiten in Flensburg</h1>
                <p class="hero-subtitle">Flora ist an zwei besonderen Orten in Flensburg zuhause. In Weiche finden Sie unseren gemütlichen Ursprung, während der Standort am Marrensdamm modern und strukturiert gestaltet ist.</p>
                <div class="hero-buttons">
                    <a href="#standorte-uebersicht" class="btn btn-primary">Standorte entdecken</a>
                    <a href="#oeffnungszeiten" class="btn btn-secondary">Öffnungszeiten</a>
                </div>
            </div>
        </div>
    </section>

    <section id="standorte-uebersicht" class="section section-padding">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Zwei Standorte, ein Konzept</h2>
                <p class="section-subtitle">Jeder unserer Standorte hat seinen eigenen Charakter, aber beide bieten Ihnen die gleiche Flora-Qualität und Leidenschaft für perfektes Gelato und erstklassigen Kaffee.</p>
            </div>

            <div class="locations-grid">
                <?php foreach ($standorte as $key => $standort): ?>
                <div class="location-card">
                    <div class="location-image" style="background: <?php echo $standort['gradient']; ?>;"></div>
                    <div class="location-content">
                        <h3 class="location-name"><?php echo $standort['name']; ?></h3>
                        <div class="location-address">
                            <p class="address-line"><?php echo $standort['address']; ?></p>
                            <p class="address-line"><?php echo $standort['city']; ?></p>
                        </div>
                        <p class="location-description"><?php echo $standort['description']; ?></p>
                        <div class="location-features">
                            <?php foreach ($standort['features'] as $feature): ?>
                            <span class="feature-tag"><?php echo $feature; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="location-actions">
                            <a href="#rundgang-<?php echo $key; ?>" class="btn btn-outline">3D-Rundgang</a>
                            <a href="kontakt.php" class="btn btn-primary">Route planen</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="oeffnungszeiten" class="section section-gray section-padding">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Öffnungszeiten</h2>
                <p class="section-subtitle">Beide Standorte haben identische Öffnungszeiten für Ihren Komfort. Im März täglich von 13-18 Uhr, ab April täglich von 12-19 Uhr geöffnet.</p>
            </div>

            <div class="hours-container">
                <div class="hours-card">
                    <div class="hours-icon" style="background: linear-gradient(135deg, #E74C3C, #C0392B);"></div>
                    <h3 class="hours-title">März</h3>
                    <div class="hours-time"><?php echo $oeffnungszeiten['maerz']; ?></div>
                    <p class="hours-note">Winteröffnungszeiten mit gemütlicher Atmosphäre</p>
                </div>
                <div class="hours-card">
                    <div class="hours-icon" style="background: linear-gradient(135deg, #27AE60, #2ECC71);"></div>
                    <h3 class="hours-title">Ab April</h3>
                    <div class="hours-time"><?php echo $oeffnungszeiten['ab_april']; ?></div>
                    <p class="hours-note">Erweiterte Öffnungszeiten für die warme Saison</p>
                </div>
            </div>

            <div class="hours-info">
                <div class="info-box">
                    <h4 class="info-title">Wichtige Hinweise</h4>
                    <ul class="info-list">
                        <li>Beide Standorte haben identische Öffnungszeiten</li>
                        <li>Auch an Sonn- und Feiertagen geöffnet</li>
                        <li>Bei besonderen Anlässen können die Zeiten variieren</li>
                        <li>Aktuelle Informationen finden Sie auf unserer Website</li>
                    </ul>
                </div>
                <div class="contact-box">
                    <h4 class="contact-title">Fragen zu den Öffnungszeiten?</h4>
                    <p class="contact-text">Rufen Sie uns gerne an oder besuchen Sie uns vor Ort.</p>
                    <a href="tel:015209861052" class="btn btn-primary">01520 9861052</a>
                </div>
            </div>
        </div>
    </section>

    <section id="rundgaenge" class="section section-padding">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">3D-Rundgänge</h2>
                <p class="section-subtitle">Schauen Sie sich unsere Standorte digital an, bevor Sie uns besuchen. Mit unseren 3D-Rundgängen können Sie die Atmosphäre beider Flora-Standorte vorab erleben.</p>
            </div>

            <div class="virtual-tours">
                <div id="rundgang-weiche" class="tour-card">
                    <div class="tour-preview" style="background: linear-gradient(135deg, #8B4513, #D2691E);"></div>
                    <div class="tour-content">
                        <h3 class="tour-title">3D-Rundgang Weiche</h3>
                        <p class="tour-description">Entdecken Sie die gemütliche Atmosphäre unseres Ursprungsstandorts in Weiche. Erleben Sie den traditionellen Charme und die warme Ausstrahlung, die Flora ausmacht.</p>
                        <div class="tour-features">
                            <span class="tour-feature">360° Ansicht</span>
                            <span class="tour-feature">Interaktiv</span>
                            <span class="tour-feature">HD-Qualität</span>
                        </div>
                        <button class="btn btn-primary tour-btn">Rundgang starten</button>
                    </div>
                </div>

                <div id="rundgang-marrensdamm" class="tour-card">
                    <div class="tour-preview" style="background: linear-gradient(135deg, #2C3E50, #3498DB);"></div>
                    <div class="tour-content">
                        <h3 class="tour-title">3D-Rundgang Marrensdamm</h3>
                        <p class="tour-description">Erkunden Sie unser modernes Café am Marrensdamm. Erleben Sie das strukturierte Design und die zeitgemäße Ausstattung unseres zweiten Standorts.</p>
                        <div class="tour-features">
                            <span class="tour-feature">360° Ansicht</span>
                            <span class="tour-feature">Interaktiv</span>
                            <span class="tour-feature">HD-Qualität</span>
                        </div>
                        <button class="btn btn-primary tour-btn">Rundgang starten</button>
                    </div>
                </div>
            </div>

            <div class="tour-benefits">
                <h3 class="benefits-title">Vorteile der 3D-Rundgänge</h3>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon" style="background: linear-gradient(135deg, #9B59B6, #8E44AD);"></div>
                        <h4 class="benefit-title">Vorab erkunden</h4>
                        <p class="benefit-text">Machen Sie sich mit unseren Räumlichkeiten vertraut, bevor Sie uns besuchen.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon" style="background: linear-gradient(135deg, #F39C12, #E67E22);"></div>
                        <h4 class="benefit-title">Platz finden</h4>
                        <p class="benefit-text">Finden Sie den perfekten Sitzplatz für Ihren Besuch bei Flora.</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon" style="background: linear-gradient(135deg, #1ABC9C, #16A085);"></div>
                        <h4 class="benefit-title">Atmosphäre spüren</h4>
                        <p class="benefit-text">Erleben Sie die einzigartige Atmosphäre beider Standorte digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-gray section-padding">
        <div class="container">
            <div class="location-comparison">
                <div class="comparison-header">
                    <h2 class="comparison-title">Standort-Vergleich</h2>
                    <p class="comparison-subtitle">Beide Standorte bieten Flora-Qualität, aber jeder hat seine Besonderheiten.</p>
                </div>

                <div class="comparison-table">
                    <div class="comparison-row comparison-header-row">
                        <div class="comparison-cell"></div>
                        <div class="comparison-cell">Flora Weiche</div>
                        <div class="comparison-cell">Flora Marrensdamm</div>
                    </div>
                    <div class="comparison-row">
                        <div class="comparison-cell comparison-label">Atmosphäre</div>
                        <div class="comparison-cell">Gemütlich & traditionell</div>
                        <div class="comparison-cell">Modern & strukturiert</div>
                    </div>
                    <div class="comparison-row">
                        <div class="comparison-cell comparison-label">Parkplätze</div>
                        <div class="comparison-cell">Direkt vor Ort</div>
                        <div class="comparison-cell">Öffentliche Parkplätze</div>
                    </div>
                    <div class="comparison-row">
                        <div class="comparison-cell comparison-label">Barrierefrei</div>
                        <div class="comparison-cell">Teilweise</div>
                        <div class="comparison-cell">Vollständig</div>
                    </div>
                    <div class="comparison-row">
                        <div class="comparison-cell comparison-label">Sitzplätze</div>
                        <div class="comparison-cell">Ca. 25 Plätze</div>
                        <div class="comparison-cell">Ca. 35 Plätze</div>
                    </div>
                    <div class="comparison-row">
                        <div class="comparison-cell comparison-label">Besonderheit</div>
                        <div class="comparison-cell">Stammkunden-Treff</div>
                        <div class="comparison-cell">Business-freundlich</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-padding cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Besuchen Sie uns</h2>
                <p class="cta-text">Egal für welchen Standort Sie sich entscheiden – Flora bietet Ihnen überall die gleiche Qualität und Leidenschaft für perfektes Gelato und erstklassigen Kaffee.</p>
                <div class="cta-buttons">
                    <a href="speisekarte.php" class="btn btn-primary">Unsere Speisekarte</a>
                    <a href="kontakt.php" class="btn btn-secondary">Kontakt & Anfahrt</a>
                    <a href="events.php" class="btn btn-outline">Events planen</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require 'includes/footer.php'; ?>