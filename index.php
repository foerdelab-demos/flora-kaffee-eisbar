<?php 
$currentPage = 'index'; 
require 'includes/header.php'; 

// Firmen-Daten
$company_name = "Flora Kaffee & Eisbar";
$phone = "01520 9861052";
$address_main = "Marrensdamm 4, 24944 Flensburg";
$address_weiche = "Alter Husumer Weg 260, Flensburg";
$hours_march = "Täglich 13-18 Uhr";
$hours_april = "Täglich 12-19 Uhr";

// Aktuelle Eissorten (simuliert für heute)
$todays_flavors = [
    "Vanille Madagascar", "Stracciatella", "Pistazie", "Salted Caramel",
    "Dunkle Schokolade", "Himbeer-Sorbet", "Zitronen-Basilikum", "Cookies & Cream",
    "Haselnuss-Krokant", "Mango-Maracuja", "Erdbeere", "Joghurt-Honig"
];

// USPs für Value-First Hero
$main_usps = [
    "Täglich frisch produziert",
    "Transparente Rezepturen", 
    "Zwei Standorte in Flensburg"
];
?>

<main class="fullwidth-layout">
    <!-- A/B Testing Hero -->
    <div id="hero-a" class="hero-variant" data-variant="a">
        <section class="hero hero-emotion animate-on-scroll fade-in-up">
            <div class="hero-bg">
                <div class="hero-image" style="background: linear-gradient(135deg, #8B4513 0%, #DEB887 50%, #F5DEB3 100%);"></div>
            </div>
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Flora. Flensburgs Eisliebe.</h1>
                    <p class="hero-subtitle">Hausgemachtes Gelato, echter Barista-Kaffee. Ein Ort, der Eindruck hinterlässt.</p>
                    <div class="hero-status">
                        <span class="status-badge live">Heute <?php echo count($todays_flavors); ?> Eissorten frisch verfügbar</span>days_flavors); ?> Eissorten frisch verfügbar</span>
                    </div>
                </div>
                <div class="hero-actions">
                    <a href="standorte.php" class="btn btn-primary hero-cta">Zu unseren Flensburger Standorten</a>
                    <a href="speisekarte.php" class="btn btn-secondary">Aktuelle Eissorten & Speisekarte</a>
                </div>
            </div>
        </section>
    </div>

    <div id="hero-b" class="hero-variant" data-variant="b" style="display:none">
        <section class="hero hero-value animate-on-scroll fade-in-up">
            <div class="container">
                <div class="hero-grid">
                    <div class="hero-text">
                        <h1 class="hero-title">Hausgemachtes Gelato aus eigener Flensburger Manufaktur</h1>
                        <div class="usp-list">
                            <?php foreach($main_usps as $index => $usp): ?>
                                <div class="usp-item animate-on-scroll fade-in-up stagger-<?php echo $index + 1; ?>">
                                    <span class="usp-checkmark">✓</span>
                                    <span class="usp-text"><?php echo $usp; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <p class="hero-description">
                            Klare Rezepturen ohne Geheimnisse, frisch produziert in unserer offenen Manufaktur. 
                            Flora steht für echten Geschmack - das merkst du beim ersten Löffel.
                        </p>
                        <div class="hero-status">
                            <span class="status-badge live">Täglich frisch in eigener Manufaktur</span>
                        </div>
                    </div>
                    <div class="hero-visual">
                        <div class="production-showcase" style="background: linear-gradient(45deg, #F5DEB3 0%, #DEB887 100%); border-radius: 12px; height: 400px;"></div>
                    </div>
                </div>
                <div class="hero-actions">
                    <a href="eismanufaktur.php" class="btn btn-primary">Manufaktur entdecken</a>
                    <a href="standorte.php" class="btn btn-secondary">Standorte besuchen</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Social Proof -->
    <section class="social-proof animate-on-scroll fade-in-up">
        <div class="container">
            <div class="review-snippet">
                <div class="stars">★★★★★</div>
                <p class="review-text">"Authentisches Eis wie früher" - Flensburger Kunden</p>
            </div>
        </div>
    </section>

    <!-- Signature Dishes - Heute frische Eissorten -->
    <section class="signature-dishes animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Heute frisch produziert</h2>
                <p class="section-subtitle">
                    Alle <?php echo count($todays_flavors); ?> Sorten direkt aus unserer Manufaktur - 
                    täglich neue Kreationen neben bewährten Klassikern.
                </p>
            </div>
            <div class="flavors-grid stagger-container">
                <?php foreach(array_slice($todays_flavors, 0, 8) as $index => $flavor): ?>
                    <div class="flavor-card animate-on-scroll fade-in-up stagger-<?php echo ($index % 4) + 1; ?>">
                        <div class="flavor-visual">
                            <div class="flavor-image" style="background: linear-gradient(135deg, #FFB6C1 0%, #F0E68C 100%);"></div>
                            <span class="fresh-indicator">Frisch</span>
                        </div>
                        <div class="flavor-info">
                            <h3 class="flavor-name"><?php echo $flavor; ?></h3>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="section-actions">
                <a href="speisekarte.php" class="btn btn-outline">Alle Sorten entdecken</a>
            </div>
        </div>
    </section>

    <!-- Features / Genussmomente -->
    <section class="features animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Genussmomente</h2>
                <p class="section-subtitle">
                    Frisch aus unserer Manufaktur, mit Siebträger-Technik und handwerklicher Präzision - 
                    Flora steht für echte Qualität ohne Kompromisse.
                </p>
            </div>
            <div class="features-grid">
                <div class="feature-card animate-on-scroll fade-in-up stagger-1">
                    <div class="feature-icon">
                        <div class="icon-placeholder" style="background: linear-gradient(45deg, #DEB887 0%, #F5DEB3 100%);"></div>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Hausgemachtes Gelato</h3>
                        <p class="feature-description">
                            Frisch aus unserer Manufaktur mit klaren Rezepturen. 
                            Keine Geheimnisse, nur ehrlicher Geschmack.
                        </p>
                    </div>
                </div>
                <div class="feature-card animate-on-scroll fade-in-up stagger-2">
                    <div class="feature-icon">
                        <div class="icon-placeholder" style="background: linear-gradient(45deg, #8B4513 0%, #CD853F 100%);"></div>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Barista-Kaffee</h3>
                        <p class="feature-description">
                            Siebträger-Kaffee mit ONOMA-Röstung, kräftig und ausgewogen. 
                            Echte Barista-Kultur, die man schmeckt.
                        </p>
                    </div>
                </div>
                <div class="feature-card animate-on-scroll fade-in-up stagger-3">
                    <div class="feature-icon">
                        <div class="icon-placeholder" style="background: linear-gradient(45deg, #F0E68C 0%, #FFB6C1 100%);"></div>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Waffeln & Snacks</h3>
                        <p class="feature-description">
                            Frisch gebacken, perfekt für den schnellen Genuss. 
                            Knusprig, warm, genau richtig.
                        </p>
                    </div>
                </div>
                <div class="feature-card animate-on-scroll fade-in-up stagger-4">
                    <div class="feature-icon">
                        <div class="icon-placeholder" style="background: linear-gradient(45deg, #98FB98 0%, #87CEEB 100%);"></div>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Zwei Standorte</h3>
                        <p class="feature-description">
                            Weiche und Marrensdamm/Twedter Plack, immer nah. 
                            Verschiedene Atmosphären, gleiche Qualität.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Atmosphären-Galerie - Beide Standorte -->
    <section class="atmosphaeren-galerie animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Zwei Standorte, ein Gefühl</h2>
                <p class="section-subtitle">
                    Entdecke beide Flora-Welten: gemütlicher Ursprung in der Weiche, 
                    modernes Flair am Marrensdamm. Inklusive 3D-Rundgängen.
                </p>
            </div>
            <div class="locations-showcase">
                <div class="location-card animate-on-scroll fade-in-up stagger-1">
                    <div class="location-visual img-hover-container">
                        <div class="location-image" style="background: linear-gradient(135deg, #F5DEB3 0%, #DEB887 50%, #CD853F 100%);"></div>
                        <div class="location-overlay">
                            <button class="btn btn-ghost tour-btn">3D-Rundgang starten</button>
                        </div>
                    </div>
                    <div class="location-info">
                        <h3 class="location-name">Flora Weiche</h3>
                        <p class="location-address"><?php echo $address_weiche; ?></p>
                        <p class="location-character">Unser gemütlicher Ursprung mit authentischem Flair</p>
                        <div class="location-actions">
                            <a href="tel:<?php echo $phone; ?>" class="btn btn-sm btn-outline">
                                <span><?php echo $phone; ?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="location-card animate-on-scroll fade-in-up stagger-2">
                    <div class="location-visual img-hover-container">
                        <div class="location-image" style="background: linear-gradient(135deg, #87CEEB 0%, #98FB98 50%, #F0E68C 100%);"></div>
                        <div class="location-overlay">
                            <button class="btn btn-ghost tour-btn">3D-Rundgang starten</button>
                        </div>
                    </div>
                    <div class="location-info">
                        <h3 class="location-name">Flora Marrensdamm</h3>
                        <p class="location-address"><?php echo $address_main; ?></p>
                        <p class="location-character">Modern & strukturiert mit offener Manufaktur</p>
                        <div class="location-actions">
                            <a href="tel:<?php echo $phone; ?>" class="btn btn-sm btn-outline">
                                <span><?php echo $phone; ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location / Öffnungszeiten -->
    <section class="location-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Standorte & Öffnungszeiten</h2>
                <p class="section-subtitle">
                    Zwei Standorte, eine Philosophie - Flora ist immer in deiner Nähe 
                    mit authentischem Geschmack und gemütlicher Atmosphäre.
                </p>
            </div>
            <div class="opening-hours-grid">
                <div class="hours-card animate-on-scroll fade-in-up stagger-1">
                    <div class="hours-period">
                        <h3 class="period-title">März</h3>
                        <p class="period-hours"><?php echo $hours_march; ?></p>
                        <span class="period-status">Winteröffnung</span>
                    </div>
                </div>
                <div class="hours-card animate-on-scroll fade-in-up stagger-2">
                    <div class="hours-period">
                        <h3 class="period-title">Ab April</h3>
                        <p class="period-hours"><?php echo $hours_april; ?></p>
                        <span class="period-status current">Aktuelle Öffnung</span>
                    </div>
                </div>
            </div>
            <div class="current-status">
                <div class="status-indicator open">
                    <span class="status-dot"></span>
                    <span class="status-text">Heute geöffnet bis 19 Uhr</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA / Beliebte Einstiege -->
    <section class="cta-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Beliebte Einstiege</h2>
                <p class="section-subtitle">
                    Alles Wichtige in einem Klick - klar priorisiert für echte Gäste die wissen was sie wollen.
                </p>
            </div>
            <div class="cta-grid">
                <a href="speisekarte.php" class="cta-card animate-on-scroll fade-in-up stagger-1">
                    <div class="cta-visual">
                        <div class="cta-image" style="background: linear-gradient(135deg, #FFB6C1 0%, #F0E68C 100%);"></div>
                    </div>
                    <div class="cta-content">
                        <h3 class="cta-title">Unsere Eissorten</h3>
                        <p class="cta-description">
                            Frisch produziert von Klassik bis Saisonhighlight - 
                            täglich neue Kreationen entdecken.
                        </p>
                    </div>
                </a>
                <a href="speisekarte.php" class="cta-card animate-on-scroll fade-in-up stagger-2">
                    <div class="cta-visual">
                        <div class="cta-image" style="background: linear-gradient(135deg, #8B4513 0%, #DEB887 100%);"></div>
                    </div>
                    <div class="cta-content">
                        <h3 class="cta-title">Speisekarte</h3>
                        <p class="cta-description">
                            Eis, Kaffee, Waffeln und Specials kompakt - 
                            alles auf einen Blick.
                        </p>
                    </div>
                </a>
                <a href="events.php" class="cta-card animate-on-scroll fade-in-up stagger-3">
                    <div class="cta-visual">
                        <div class="cta-image" style="background: linear-gradient(135deg, #98FB98 0%, #87CEEB 100%);"></div>
                    </div>
                    <div class="cta-content">
                        <h3 class="cta-title">Eistorten</h3>
                        <p class="cta-description">
                            Individuell konfigurierbar für besondere Momente - 
                            online bestellen, abholen.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter/Updates -->
    <section class="newsletter-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="newsletter-card">
                <div class="newsletter-content">
                    <h3 class="newsletter-title">Neue Sorten zuerst erfahren</h3>
                    <p class="newsletter-description">
                        Bekomme Updates zu saisonalen Highlights und besonderen Aktionen - 
                        kein Spam, nur das Wichtigste.
                    </p>
                </div>
                <div class="newsletter-form">
                    <form class="subscribe-form">
                        <input type="email" placeholder="Deine E-Mail" class="newsletter-input" required>
                        <button type="submit" class="btn btn-primary">Updates bekommen</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Handwerk Badge - Sticky -->
<div class="handwerk-badge">
    <span class="badge-text">Täglich frisch in eigener Manufaktur</span>
</div>

<?php require 'includes/footer.php'; ?>