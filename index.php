<?php 
$currentPage = 'index'; 
require 'includes/header.php'; 

// Firmendaten als PHP-Variablen
$businessName = "Flora Kaffee & Eisbar";
$phone = "01520 9861052";
$address = "Marrensdamm 4, 24944 Flensburg";
$openingHours = "März: Täglich 13–18 Uhr, Ab April: Täglich 12–19 Uhr";
$specialties = [
    "Hausgemachtes Gelato aus eigener Manufaktur",
    "Barista-Kaffee mit ONOMA-Röstung",
    "Frisch gebackene Waffeln",
    "Zwei gemütliche Standorte",
    "Individuelle Eistorten",
    "3D-Rundgänge verfügbar"
];
?>

<main>
    <!-- Hero Section -->
    <section class="hero hero-primary">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Flora – Flensburgs Eisliebe</h1>
                <p class="hero-subtitle">
                    Hausgemachtes Gelato aus unserer eigenen Manufaktur, echter Siebträger-Kaffee mit ONOMA-Röstung 
                    und frisch gebackene Waffeln. Ein Ort, der Eindruck hinterlässt und echte Genussmomente schafft. 
                    Besuchen Sie uns an zwei gemütlichen Standorten in Flensburg.
                </p>
                <div class="hero-features">
                    <div class="feature-item">
                        <span class="feature-icon">🕒</span>
                        <span>Täglich geöffnet</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">📍</span>
                        <span>Zwei Standorte</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">🏠</span>
                        <span>3D-Rundgänge verfügbar</span>
                    </div>
                </div>
                <div class="hero-actions">
                    <a href="standorte.php" class="btn btn-primary">Standorte entdecken</a>
                    <a href="speisekarte.php" class="btn btn-secondary">Speisekarte ansehen</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="image-placeholder" style="background: linear-gradient(135deg, #ff6b9d 0%, #ffa726 100%); height: 400px; border-radius: 12px;"></div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Genussmomente bei Flora</h2>
                <p class="section-subtitle">
                    Von frischem Gelato aus unserer Manufaktur bis hin zu perfekt zubereitetem Barista-Kaffee – 
                    bei Flora erleben Sie echten Geschmack mit klaren Rezepturen und ehrlichen Zutaten.
                </p>
            </div>
            
            <div class="grid grid-4">
                <div class="card service-card">
                    <div class="card-icon">
                        <div class="icon-placeholder" style="background: linear-gradient(45deg, #ffa726 0%, #ff8f65 100%); width: 60px; height: 60px; border-radius: 50%;"></div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Hausgemachtes Gelato</h3>
                        <p class="card-text">
                            Täglich frisch in unserer eigenen Manufaktur hergestellt. Mit besten Zutaten und 
                            traditionellen italienischen Rezepturen für authentischen Geschmack.
                        </p>
                        <a href="eismanufaktur.php" class="btn btn-outline">Mehr erfahren</a>
                    </div>
                </div>

                <div class="card service-card">
                    <div class="card-icon">
                        <div class="icon-placeholder" style="background: linear-gradient(45deg, #8d6e63 0%, #5d4037 100%); width: 60px; height: 60px; border-radius: 50%;"></div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Barista-Kaffee</h3>
                        <p class="card-text">
                            Echter Siebträger-Kaffee mit ONOMA-Röstung. Jede Tasse wird von unseren erfahrenen 
                            Baristas mit Leidenschaft und Präzision zubereitet.
                        </p>
                        <a href="speisekarte.php" class="btn btn-outline">Kaffeekarte</a>
                    </div>
                </div>

                <div class="card service-card">
                    <div class="card-icon">
                        <div class="icon-placeholder" style="background: linear-gradient(45deg, #ffb74d 0%, #ffa726 100%); width: 60px; height: 60px; border-radius: 50%;"></div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Waffeln & Snacks</h3>
                        <p class="card-text">
                            Frisch gebackene Waffeln, knusprig und warm. Perfekt kombiniert mit unserem Gelato 
                            oder als süße Begleitung zum Kaffee.
                        </p>
                        <a href="speisekarte.php" class="btn btn-outline">Speisekarte</a>
                    </div>
                </div>

                <div class="card service-card">
                    <div class="card-icon">
                        <div class="icon-placeholder" style="background: linear-gradient(45deg, #66bb6a 0%, #43a047 100%); width: 60px; height: 60px; border-radius: 50%;"></div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Zwei Standorte</h3>
                        <p class="card-text">
                            Gemütlich in Weiche und modern am Twedter Plack. Jeder Standort mit eigenem Charme 
                            und der gleichen Qualität, die Sie von Flora erwarten.
                        </p>
                        <a href="standorte.php" class="btn btn-outline">Standorte</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="section location-section bg-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Standorte & Öffnungszeiten</h2>
                <p class="section-subtitle">
                    Besuchen Sie uns in Weiche am Alter Husumer Weg 260 - unser gemütlicher Ursprung, wo sich 
                    Nachbarschaft zuhause fühlt. Oder am modernen Standort Marrensdamm 4 am Twedter Plack 
                    mit warmen Drinks, Eis und Waffeln.
                </p>
            </div>

            <div class="grid grid-2">
                <div class="card location-card">
                    <div class="card-image">
                        <div class="image-placeholder" style="background: linear-gradient(135deg, #4fc3f7 0%, #29b6f6 100%); height: 200px; border-radius: 8px 8px 0 0;"></div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Flora Weiche</h3>
                        <p class="card-address">Alter Husumer Weg 260<br>24941 Flensburg</p>
                        <div class="opening-hours">
                            <h4>Öffnungszeiten:</h4>
                            <p><strong>März:</strong> Täglich 13–18 Uhr</p>
                            <p><strong>Ab April:</strong> Täglich 12–19 Uhr</p>
                        </div>
                        <div class="card-actions">
                            <a href="standorte.php#weiche" class="btn btn-primary">Details & Route</a>
                            <a href="#" class="btn btn-outline">3D-Rundgang</a>
                        </div>
                    </div>
                </div>

                <div class="card location-card">
                    <div class="card-image">
                        <div class="image-placeholder" style="background: linear-gradient(135deg, #81c784 0%, #66bb6a 100%); height: 200px; border-radius: 8px 8px 0 0;"></div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Flora Twedter Plack</h3>
                        <p class="card-address"><?php echo $address; ?></p>
                        <div class="opening-hours">
                            <h4>Öffnungszeiten:</h4>
                            <p><strong>März:</strong> Täglich 13–18 Uhr</p>
                            <p><strong>Ab April:</strong> Täglich 12–19 Uhr</p>
                        </div>
                        <div class="card-actions">
                            <a href="standorte.php#twedter-plack" class="btn btn-primary">Details & Route</a>
                            <a href="#" class="btn btn-outline">3D-Rundgang</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="location-features">
                <div class="feature-grid">
                    <div class="feature-item">
                        <span class="feature-icon">⏰</span>
                        <span>März: Täglich 13–18 Uhr</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">🌞</span>
                        <span>Ab April: Täglich 12–19 Uhr</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">🏠</span>
                        <span>3D-Rundgänge verfügbar</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">📞</span>
                        <span><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specialties Showcase -->
    <section class="section specialties">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Unsere Spezialitäten</h2>
                <p class="section-subtitle">
                    Was macht Flora so besonders? Entdecken Sie unsere handwerklichen Köstlichkeiten und 
                    erfahren Sie mehr über die Qualität, die in jedem Detail steckt.
                </p>
            </div>

            <div class="specialties-grid">
                <?php foreach($specialties as $index => $specialty): ?>
                <div class="specialty-item">
                    <div class="specialty-icon">
                        <div class="icon-placeholder" style="background: linear-gradient(45deg, <?php 
                        $colors = ['#ff6b9d, #ffa726', '#8d6e63, #5d4037', '#ffb74d, #ffa726', '#66bb6a, #43a047', '#4fc3f7, #29b6f6', '#ab47bc, #8e24aa'];
                        echo $colors[$index % count($colors)]; 
                        ?>); width: 50px; height: 50px; border-radius: 50%;"></div>
                    </div>
                    <h3 class="specialty-title"><?php echo $specialty; ?></h3>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="specialties-showcase">
                <div class="showcase-item">
                    <div class="showcase-image">
                        <div class="image-placeholder" style="background: linear-gradient(135deg, #ff6b9d 0%, #ffa726 100%); height: 300px; border-radius: 12px;"></div>
                    </div>
                    <div class="showcase-content">
                        <h3>Eismanufaktur</h3>
                        <p>
                            In unserer eigenen Manufaktur entstehen täglich frische Gelato-Kreationen. 
                            Mit traditionellen italienischen Rezepturen und besten regionalen Zutaten 
                            schaffen wir authentische Geschmackserlebnisse.
                        </p>
                        <a href="eismanufaktur.php" class="btn btn-primary">Manufaktur entdecken</a>
                    </div>
                </div>

                <div class="showcase-item">
                    <div class="showcase-content">
                        <h3>Events & Eistorten</h3>
                        <p>
                            Machen Sie Ihre besonderen Momente noch süßer. Wir kreieren individuelle 
                            Eistorten für Geburtstage, Hochzeiten und andere Anlässe. Auch Event-Catering 
                            gehört zu unserem Service.
                        </p>
                        <a href="events.php" class="btn btn-primary">Events planen</a>
                    </div>
                    <div class="showcase-image">
                        <div class="image-placeholder" style="background: linear-gradient(135deg, #ab47bc 0%, #8e24aa 100%); height: 300px; border-radius: 12px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Heute Lust auf echten Genuss?</h2>
                <p class="cta-subtitle">
                    Entdecken Sie unsere aktuellen Eissorten, genießen Sie frisch gerösteten Kaffee oder 
                    gönnen Sie sich eine knusprige Waffel. Flora – immer nah, immer frisch.
                </p>
                
                <div class="cta-features">
                    <div class="cta