<?php 
$currentPage = 'standorte'; 
require 'includes/header.php'; 

// Standortdaten
$standorte = [
    'weiche' => [
        'name' => 'Weiche',
        'address' => 'Alter Husumer Weg 260, 24943 Flensburg',
        'description' => 'Unser gemütlicher Ursprung, hier fühlt sich Nachbarschaft zuhause. Der authentische Flora-Spirit in vertrauter Atmosphäre.',
        'specialties' => ['Sandwich-Spezialitäten exklusiv', 'Gemütliche Nachbarschafts-Atmosphäre', 'Authentischer Flora-Ursprung'],
        'coordinates' => '54.7936, 9.4318',
        'status' => 'Heute geöffnet'
    ],
    'marrensdamm' => [
        'name' => 'Marrensdamm',
        'address' => 'Marrensdamm 4, 24944 Flensburg',
        'description' => 'Unser zweiter Standort im Herzen der Stadt.',
        'specialties' => ['Zentrale Lage', 'Erweiterte Öffnungszeiten'],
        'coordinates' => '54.7836, 9.4418',
        'status' => 'Heute geöffnet'
    ] => [
        'name' => 'Marrensdamm (Twedter Plack)',
        'address' => 'Marrensdamm 4, 24944 Flensburg',
        'description' => 'Modern & strukturiert - mit warmen Drinks, Eis und Waffeln. Hier verbinden sich zeitgemäße Ausstattung mit Flora-Tradition.',
        'specialties' => ['Moderne Ausstattung', 'Zentrale Lage am Twedter Plack', 'Vollsortiment Eis & Kaffee'],
        'coordinates' => '54.7836, 9.4369',
        'status' => 'Heute geöffnet'
    ]
];

$oeffnungszeiten = [
    'maerz' => 'März: Täglich 13-18 Uhr',
    'april' => 'Ab April: Täglich 12-19 Uhr'
];
?>

<main>
    <!-- Hero Section -->
    <section class="hero location-hero animate-on-scroll fade-in-up">
        <div class="hero-content">
            <div class="hero-badge">
                <span class="badge-icon">📍</span>
                <span>Zwei Standorte in Flensburg</span>
            </div>
            <h1 class="hero-title">Flora ist immer in deiner Nähe</h1>
            <p class="hero-subtitle">Ob gemütlicher Ursprung in Weiche oder moderne Struktur am Twedter Plack - echter Geschmack aus der eigenen Manufaktur wartet auf dich.</p>
            <div class="hero-features">
                <div class="feature-item">
                    <span class="feature-icon">🏪</span>
                    <span>Beide Standorte mit 3D-Rundgang</span>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">🍦</span>
                    <span>Einheitliche Manufaktur-Qualität</span>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">🎯</span>
                    <span>Individuelle Atmosphäre pro Ort</span>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="location-preview-grid">
                <div class="location-preview-card" style="background: linear-gradient(135deg, #E8F4FD, #B8E6B8);">
                    <h3>Weiche</h3>
                    <p>Gemütlicher Ursprung</p>
                </div>
                <div class="location-preview-card" style="background: linear-gradient(135deg, #FFF2E1, #FFE4B8);">
                    <h3>Marrensdamm</h3>
                    <p>Modern & strukturiert</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Live Verfügbarkeit Trust Element -->
    <section class="trust-banner animate-on-scroll fade-in">
        <div class="container">
            <div class="trust-content">
                <span class="trust-icon">✅</span>
                <span class="trust-text">Heute 12 Eissorten frisch verfügbar - beide Standorte geöffnet</span>
                <span class="live-indicator">●</span>
            </div>
        </div>
    </section>

    <!-- Interaktive Karte -->
    <section class="map-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2>Flora Standorte auf der Karte</h2>
                <p>Route planen, Öffnungszeiten checken und direkt vorbeikommen - so einfach findest du zu deinem Flora Eis.</p>
            </div>
            
            <div class="interactive-map-container">
                <div class="map-placeholder" style="background: linear-gradient(45deg, #E8F4FD, #B8E6B8); height: 400px; border-radius: 12px; display: flex; align-items: center; justify-content: center; position: relative;">
                    <div class="map-overlay">
                        <h3>Interaktive Google Maps</h3>
                        <p>Beide Flora Standorte mit Routenplaner</p>
                        <div class="map-controls">
                            <button class="map-btn" onclick="showRoute('weiche')">Route nach Weiche</button>
                            <button class="map-btn" onclick="showRoute('marrensdamm')">Route zu Marrensdamm</button>
                        </div>
                    </div>
                    
                    <!-- Standort Marker -->
                    <div class="map-marker marker-weiche" style="position: absolute; top: 30%; left: 25%;">
                        <div class="marker-icon">📍</div>
                        <div class="marker-label">Weiche</div>
                    </div>
                    <div class="map-marker marker-marrensdamm" style="position: absolute; top: 60%; left: 65%;">
                        <div class="marker-icon">📍</div>
                        <div class="marker-label">Marrensdamm</div>
                    </div>
                </div>
                
                <div class="map-quick-actions">
                    <a href="tel:015209861052" class="quick-action">
                        <span class="action-icon">📞</span>
                        <span>Anrufen</span>
                    </a>
                    <a href="#oeffnungszeiten" class="quick-action">
                        <span class="action-icon">🕐</span>
                        <span>Öffnungszeiten</span>
                    </a>
                    <button class="quick-action" onclick="navigator.share({title: 'Flora Standorte', url: window.location.href})">
                        <span class="action-icon">📤</span>
                        <span>Teilen</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Standort Vergleich -->
    <section class="locations-comparison animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2>Zwei Standorte - Eine Philosophie</h2>
                <p>Jeder Flora Standort hat seinen eigenen Charakter, aber das Eis kommt immer aus derselben Manufaktur.</p>
            </div>
            
            <div class="comparison-grid">
                <div class="location-card stagger-1">
                    <div class="location-header">
                        <div class="location-badge">
                            <span class="badge-icon">🏠</span>
                            <span>Ursprung seit Jahren</span>
                        </div>
                        <div class="location-status">
                            <span class="status-dot active"></span>
                            <span><?= $standorte['weiche']['status'] ?></span>
                        </div>
                    </div>
                    
                    <div class="img-hover-container">
                        <div class="location-image" style="background: linear-gradient(135deg, #E8F4FD, #B8E6B8); height: 200px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <span style="font-size: 3rem;">🏪</span>
                        </div>
                    </div>
                    
                    <div class="location-info">
                        <h3><?= $standorte['weiche']['name'] ?></h3>
                        <p class="location-address"><?= $standorte['weiche']['address'] ?></p>
                        <p class="location-description"><?= $standorte['weiche']['description'] ?></p>
                        
                        <div class="location-specialties">
                            <h4>Das gibts nur hier:</h4>
                            <ul>
                                <?php foreach($standorte['weiche']['specialties'] as $specialty): ?>
                                    <li><?= $specialty ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <div class="location-actions">
                            <button class="btn btn-primary" onclick="show3DTour('weiche')">
                                <span>🏠</span> 3D-Rundgang
                            </button>
                            <button class="btn btn-outline" onclick="planRoute('weiche')">
                                <span>🗺️</span> Route planen
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="location-card stagger-2">
                    <div class="location-header">
                        <div class="location-badge">
                            <span class="badge-icon">🏢</span>
                            <span>Modern am Twedter Plack</span>
                        </div>
                        <div class="location-status">
                            <span class="status-dot active"></span>
                            <span><?= $standorte['marrensdamm']['status'] ?></span>
                        </div>
                    </div>
                    
                    <div class="img-hover-container">
                        <div class="location-image" style="background: linear-gradient(135deg, #FFF2E1, #FFE4B8); height: 200px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <span style="font-size: 3rem;">🏪</span>
                        </div>
                    </div>
                    
                    <div class="location-info">
                        <h3><?= $standorte['marrensdamm']['name'] ?></h3>
                        <p class="location-address"><?= $standorte['marrensdamm']['address'] ?></p>
                        <p class="location-description"><?= $standorte['marrensdamm']['description'] ?></p>
                        
                        <div class="location-specialties">
                            <h4>Besonderheiten:</h4>
                            <ul>
                                <?php foreach($standorte['marrensdamm']['specialties'] as $specialty): ?>
                                    <li><?= $specialty ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <div class="location-actions">
                            <button class="btn btn-primary" onclick="show3DTour('marrensdamm')">
                                <span>🏠</span> 3D-Rundgang
                            </button>
                            <button class="btn btn-outline" onclick="planRoute('marrensdamm')">
                                <span>🗺️</span> Route planen
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3D Rundgang Teaser -->
    <section class="virtual-tour-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2>Schau dich um, bevor du kommst</h2>
                <p>Mit unseren 3D-Rundgängen kannst du beide Standorte virtuell erkunden - so weißt du schon vorher, wo dein Lieblingsplatz ist.</p>
            </div>
            
            <div class="tour-grid stagger-container">
                <div class="tour-card stagger-1">
                    <div class="tour-preview">
                        <div class="tour-thumbnail" style="background: linear-gradient(135deg, #E8F4FD, #B8E6B8); height: 180px; border-radius: 8px; display: flex; align-items: center; justify-content: center; position: relative;">
                            <div class="tour-play-button">
                                <span class="play-icon">▶️</span>
                            </div>
                            <div class="tour-overlay">
                                <h4>Flora Weiche</h4>
                                <p>Gemütlicher Rundgang</p>
                            </div>
                        </div>
                    </div>
                    <div class="tour-info">
                        <h3>Weiche 360° erleben</h3>
                        <p>Entdecke die gemütliche Atmosphäre unseres Ursprungs-Standorts. Von der Theke bis zum Sitzbereich - alles in 3D.</p>
                        <div class="tour-features">
                            <span class="feature-tag">🏠 Innenbereich</span>
                            <span class="feature-tag">☕ Theken-View</span>
                            <span class="feature-tag">🪑 Sitzplätze</span>
                        </div>
                        <button class="btn btn-primary tour-btn" onclick="launch3DTour('weiche')">
                            Tour starten
                        </button>
                    </div>
                </div>
                
                <div class="tour-card stagger-2">
                    <div class="tour-preview">
                        <div class="tour-thumbnail" style="background: linear-gradient(135deg, #FFF2E1, #FFE4B8); height: 180px; border-radius: 8px; display: flex; align-items: center; justify-content: center; position: relative;">
                            <div class="tour-play-button">
                                <span class="play-icon">▶️</span>
                            </div>
                            <div class="tour-overlay">
                                <h4>Flora Marrensdamm</h4>
                                <p>Moderner Rundgang</p>
                            </div>
                        </div>
                    </div>
                    <div class="tour-info">
                        <h3>Marrensdamm 360° erleben</h3>
                        <p>Moderne Ausstattung trifft Flora-Tradition. Erkunde die strukturierte Atmosphäre am Twedter Plack.</p>
                        <div class="tour-features">
                            <span class="feature-tag">🏢 Modern Design</span>
                            <span class="feature-tag">🍦 Eistheke</span>
                            <span class="feature-tag">☕ Kaffee-Bar</span>
                        </div>
                        <button class="btn btn-primary tour-btn" onclick="launch3DTour('marrensdamm')">
                            Tour starten
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Öffnungszeiten -->
    <section id="oeffnungszeiten" class="opening-hours-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="hours-header">
                <h2>Wann ist Flora für dich da?</h2>
                <p>Fast das ganze Jahr geöffnet - mit saisonalen Anpassungen die Sinn machen. Weil gutes Eis seine Zeit braucht.</p>
            </div>
            
            <div class="hours-grid">
                <div class="hours-card main-hours">
                    <div class="hours-icon">🕐</div>
                    <h3>Aktuelle Öffnungszeiten</h3>
                    <div class="current-hours">
                        <div class="hours-status">
                            <span class="status-dot active"></span>
                            <span class="status-text">Beide Standorte heute geöffnet</span>
                        </div>
                        <div class="hours-display">
                            <div class="season-hours">
                                <strong><?= $oeffnungszeiten['maerz'] ?></strong>
                            </div>
                            <div class="season-hours">
                                <strong><?= $oeffnungszeiten['april'] ?></strong>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="hours-card seasonal-info">
                    <div class="hours-icon">📅</div>
                    <h3>Saisonale Hinweise</h3>
                    <div class="seasonal-notes">
                        <div class="note-item">
                            <span class="note-icon">🌸</span>
                            <div>
                                <strong>Frühjahrs-Start</strong>
                                <p>Im März starten wir entspannt in die Saison - täglich ab 13 Uhr.</p>
                            </div>
                        </div>
                        <div class="note-item">
                            <span class="note-icon">☀️</span>
                            <div>
                                <strong>Haupt-Saison</strong>
                                <p>Ab April bis in den Herbst - täglich ab 12 Uhr für dich da.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="hours-card contact-quick">
                    <div class="hours-icon">📞</div>
                    <h3>Kurz nachfragen?</h3>
                    <p>Bei besonderen Terminen oder Events einfach anrufen - wir sind flexibel!</p>
                    <a href="tel:015209861052" class="contact-btn">
                        <span>📱</span>
                        <span>01520 9861052</span>
                    </a>
                    <div class="quick-links">
                        <a href="speisekarte.php">Zur Speisekarte</a>
                        <a href="events.php">Events buchen</a>
                    </div>
                </div>
            </div>
            
            <div class="hours-notice">
                <p><strong>Aktuelle Zeiten immer auf der Startseite:</strong> Wetter, Events oder spontane Änderungen kommunizieren wir transparent auf <a href="index.php">flora-kaffee.de</a></p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="cta-content">
                <h2>Welcher Flora Standort passt zu dir?</h2>
                <p>Gemütlich in Weiche oder modern am Marrensdamm - hauptsache das Eis kommt aus unserer eigenen Manufaktur.</p>
                <div class="cta-actions">
                    <a href="speisekarte.php" class="btn btn-primary">
                        <span>🍦</span> Speisekarte ansehen
                    </a>
                    <a href="kontakt.php" class="btn btn-outline">
                        <span>💬</span> Fragen stellen
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Sticky Handwerk Badge -->
<div class="handwerk-badge">
    <span class="badge-text">Täglich frisch in eigener Manufaktur</span>
</div>

<script>
function show3DTour(location) {
    alert('3D-Tour für ' + location + ' wird geladen...');
}

function planRoute(location) {
    const coordinates = location === 'weiche' ? '<?= $standorte["weiche"]["coordinates"] ?>' : '<?= $standorte["marrensdamm"]["coordinates"] ?>';
    window.open('https://maps.google.com/maps?q=' + coordinates, '_blank');
}

function launch3DTour(location) {
    alert('3D-Rundgang ' + location + ' wird in neuem Fenster geöffnet...');
}

function showRoute(location) {
    planRoute(location);
}

// Animation für Live-Indikator
setInterval(() => {
    const indicators = document.querySelectorAll('.live-indicator');
    indicators.forEach(indicator => {
        indicator.style.opacity = indicator.style.opacity === '0.3' ? '1' : '0.3';
    });
}, 1000);
</script>

<?php require 'includes/footer.php'; ?>