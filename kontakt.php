<?php 
$currentPage = 'kontakt';

// Kontaktformular Handler
$message = '';
$messageType = '';

if ($_POST) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $messageText = htmlspecialchars($_POST['message'] ?? '');
    
    if ($name && $email && $messageText) {
        // Hier würde normalerweise die E-Mail verschickt werden
        $message = 'Danke für deine Nachricht! Das Flora-Team meldet sich binnen 24h bei dir.';
        $messageType = 'success';
        $messageType = 'success';
    } else {
        $message = 'Bitte fülle alle Pflichtfelder aus.';
        $messageType = 'error';
    }
}

// Firmen-Daten
$companyData = [
    'name' => 'Flora Kaffee & Eisbar Flensburg',
    'phone' => '01520 9861052',
    'locations' => [
        [
            'name' => 'Marrensdamm',
            'address' => 'Marrensdamm 4, 24944 Flensburg',
            'parking' => 'Kostenlose Parkplätze direkt vor dem Laden',
            'transport' => 'Bus Linie 1, 2 - Haltestelle Marrensdamm'
        ],
        [
            'name' => 'Weiche',
            'address' => 'Alter Husumer Weg 260, Flensburg',
            'parking' => 'Großer Parkplatz am Standort verfügbar',
            'transport' => 'Bus Linie 4 - Haltestelle Weiche Dorf'
        ]
    ],
    'hours' => [
        'march' => 'März: Täglich 13-18 Uhr',
        'april' => 'Ab April: Täglich 12-19 Uhr'
    ]
];

require 'includes/header.php'; 'includes/header.php'; 
?>

<main class="page-content">
    <!-- Trust Element: Response Garantie -->
    <div class="trust-badge response-guarantee animate-on-scroll fade-in-up">
        <div class="container">
            <span class="trust-icon">⚡</span>
            <span>Antwort binnen 24h garantiert</span>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section contact-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll fade-in-up">
                <h1 class="hero-title">Lass uns reden</h1>
                <p class="hero-subtitle">Fragen, Wünsche oder Lust auf ein Gespräch? Flora ist für dich da - direkt, ehrlich und ohne Umschweife.</p>
                <div class="trust-element live-availability">
                    <span class="status-dot"></span>
                    <span>Heute 12 Eissorten frisch verfügbar</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontakt Hub Section -->
    <section class="contact-hub animate-on-scroll fade-in-up">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-card phone-card stagger-1">
                    <div class="contact-icon">📞</div>
                    <h3>Direkt anrufen</h3>
                    <p>Am schnellsten erreichst du uns telefonisch</p>
                    <a href="tel:01520 9861052" class="cta-button primary">
                        <strong>01520 9861052</strong>
                    </a>
                    <div class="response-indicator">
                        <span class="indicator-dot active"></span>
                        <span>Meist sofort erreichbar</span>
                    </div>
                </div>

                <div class="contact-card location-card stagger-2">
                    <div class="contact-icon">📍</div>
                    <h3>Einfach vorbeikommen</h3>
                    <p>Zwei Standorte - beide mit dem vollen Flora-Erlebnis</p>
                    <a href="#standorte" class="cta-button secondary">Standorte anzeigen</a>
                    <div class="response-indicator">
                        <span class="indicator-dot active"></span>
                        <span>Immer persönlich vor Ort</span>
                    </div>
                </div>

                <div class="contact-card message-card stagger-3">
                    <div class="contact-icon">✉️</div>
                    <h3>Nachricht schreiben</h3>
                    <p>Für ausführliche Anfragen oder Event-Planung</p>
                    <a href="#kontaktformular" class="cta-button secondary">Formular nutzen</a>
                    <div class="response-indicator">
                        <span class="indicator-dot active"></span>
                        <span>Antwort binnen 24h</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Standorte Section -->
    <section id="standorte" class="locations-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="section-header">
                <h2>Unsere Standorte</h2>
                <p class="section-subtitle">Komm einfach vorbei - in Weiche oder am Marrensdamm. Flora ist immer nah, immer authentisch.</p>
            </div>

            <div class="locations-grid">
                <?php foreach ($companyData['locations'] as $index => $location): ?>
                <div class="location-card stagger-<?php echo $index + 1; ?>">
                    <div class="location-header">
                        <h3><?php echo $location['name']; ?></h3>
                        <div class="location-status active">
                            <span class="status-dot"></span>
                            <span>Geöffnet</span>
                        </div>
                    </div>
                    
                    <div class="location-details">
                        <div class="detail-item">
                            <strong>Adresse:</strong>
                            <span><?php echo $location['address']; ?></span>
                        </div>
                        <div class="detail-item">
                            <strong>Parken:</strong>
                            <span><?php echo $location['parking']; ?></span>
                        </div>
                        <div class="detail-item">
                            <strong>ÖPNV:</strong>
                            <span><?php echo $location['transport']; ?></span>
                        </div>
                    </div>

                    <div class="location-actions">
                        <a href="tel:01520 9861052" class="location-btn primary">
                            <span>📞</span> Anrufen
                        </a>
                        <a href="standorte.php" class="location-btn secondary">
                            <span>🏪</span> Details & 3D-Tour
                        </a>
                        <a href="https://maps.google.com/?q=<?php echo urlencode($location['address']); ?>" 
                           target="_blank" class="location-btn secondary">
                            <span>🗺️</span> Route planen
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Öffnungszeiten Section -->
    <section class="opening-hours animate-on-scroll fade-in-up">
        <div class="container">
            <div class="hours-content">
                <div class="hours-info">
                    <h2>Öffnungszeiten</h2>
                    <p>Flora öffnet saisonal angepasst - weil das einfach Sinn macht. Frisches Eis braucht die richtige Zeit.</p>
                    
                    <div class="hours-grid">
                        <div class="hours-card current-season">
                            <div class="season-badge">Aktuell</div>
                            <h3>März</h3>
                            <div class="hours-time">Täglich 13-18 Uhr</div>
                            <p>Perfekt für den Nachmittags-Eis-Moment</p>
                        </div>
                        
                        <div class="hours-card upcoming-season">
                            <div class="season-badge">Ab April</div>
                            <h3>Hauptsaison</h3>
                            <div class="hours-time">Täglich 12-19 Uhr</div>
                            <p>Volles Programm für echte Eis-Liebhaber</p>
                        </div>
                    </div>

                    <div class="hours-notice">
                        <strong>Aktuelle Zeiten immer auf der <a href="index.php">Startseite</a></strong>
                        <br>Bei besonderen Anlässen oder Wetter können sich die Zeiten ändern
                    </div>
                </div>

                <div class="hours-visual">
                    <div class="clock-display">
                        <div class="current-time">
                            <span class="time-label">Heute geöffnet bis</span>
                            <span class="time-value">19:00</span>
                        </div>
                        <div class="next-opening">
                            <span>Morgen wieder ab 12:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontaktformular Section -->
    <section id="kontaktformular" class="contact-form-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="form-wrapper">
                <div class="form-header">
                    <h2>Schreib uns</h2>
                    <p>Egal ob Fragen zum Eis, Event-Anfrage oder einfach mal Lust auf ein Gespräch über guten Geschmack.</p>
                </div>

                <?php if ($message): ?>
                <div class="form-message <?php echo $messageType; ?>">
                    <?php echo $message; ?>
                </div>
                <?php endif; ?>

                <form method="POST" class="contact-form">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" require 'includes/header.php';d 
                                   value="<?php echo $_POST['name'] ?? ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="email">E-Mail *</label>
                            <input type="email" id="email" name="email" require 'includes/header.php';d
                                   value="<?php echo $_POST['email'] ?? ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="tel" id="phone" name="phone"
                                   value="<?php echo $_POST['phone'] ?? ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="subject">Betreff</label>
                            <select id="subject" name="subject">
                                <option value="">Thema wählen</option>
                                <option value="allgemeine-frage">Allgemeine Frage</option>
                                <option value="event-catering">Event & Catering</option>
                                <option value="eistorte">Eistorten-Bestellung</option>
                                <option value="feedback">Feedback</option>
                                <option value="sonstiges">Sonstiges</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="message">Deine Nachricht *</label>
                        <textarea id="message" name="message" rows="6" require 'includes/header.php';d 
                                  placeholder="Erzähl uns, womit wir dir helfen können..."><?php echo $_POST['message'] ?? ''; ?></textarea>
                    </div>

                    <div class="form-submit">
                        <button type="submit" class="cta-button primary large">
                            <span>📨</span> Nachricht senden
                        </button>
                        <div class="form-info">
                            <span class="response-time">⚡ Antwort binnen 24h garantiert</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Anfahrt Widget Section -->
    <section class="directions-widget animate-on-scroll fade-in-up">
        <div class="container">
            <div class="widget-header">
                <h2>Anfahrt & Parken</h2>
                <p>So findest du uns am schnellsten - egal ob mit dem Auto, Bus oder Fahrrad.</p>
            </div>

            <div class="directions-grid">
                <div class="direction-method stagger-1">
                    <div class="method-icon">🚗</div>
                    <h3>Mit dem Auto</h3>
                    <ul>
                        <li><strong>Marrensdamm:</strong> Kostenlose Parkplätze direkt vor dem Laden</li>
                        <li><strong>Weiche:</strong> Großer Parkplatz am Standort verfügbar</li>
                        <li>Beide Standorte gut mit dem Auto erreichbar</li>
                    </ul>
                    <a href="https://maps.google.com/?q=Flora+Kaffee+Eisbar+Flensburg" 
                       target="_blank" class="direction-btn">
                        <span>🗺️</span> Route planen
                    </a>
                </div>

                <div class="direction-method stagger-2">
                    <div class="method-icon">🚌</div>
                    <h3>Mit Bus & Bahn</h3>
                    <ul>
                        <li><strong>Marrensdamm:</strong> Bus Linie 1, 2 - Haltestelle Marrensdamm</li>
                        <li><strong>Weiche:</strong> Bus Linie 4 - Haltestelle Weiche Dorf</li>
                        <li>Beide nur wenige Gehminuten von der Haltestelle</li>
                    </ul>
                    <a href="https://www.nah.sh" target="_blank" class="direction-btn">
                        <span>🚌</span> Fahrplan NAH.SH
                    </a>
                </div>

                <div class="direction-method stagger-3">
                    <div class="method-icon">🚴</div>
                    <h3>Mit dem Fahrrad</h3>
                    <ul>
                        <li>Fahrradständer an beiden Standorten vorhanden</li>
                        <li>Gut über Flensburger Radwege erreichbar</li>
                        <li>Perfect für die Eis-Tour durch die Stadt</li>
                    </ul>
                    <a href="standorte.php" class="direction-btn">
                        <span>📍</span> Standort-Details
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Actions -->
    <section class="quick-actions animate-on-scroll fade-in-up">
        <div class="container">
            <div class="actions-grid">
                <a href="tel:01520 9861052" class="quick-action call-action stagger-1">
                    <div class="action-icon">📞</div>
                    <div class="action-content">
                        <h3>Jetzt anrufen</h3>
                        <p>01520 9861052</p>
                    </div>
                </a>

                <a href="events.php" class="quick-action event-action stagger-2">
                    <div class="action-icon">🎉</div>
                    <div class="action-content">
                        <h3>Event planen</h3>
                        <p>Catering & Mobile Eistresen</p>
                    </div>
                </a>

                <a href="eismanufaktur.php" class="quick-action manufactory-action stagger-3">
                    <div class="action-icon">🏭</div>
                    <div class="action-content">
                        <h3>Manufaktur besuchen</h3>
                        <p>Erlebe wie Eis entsteht</p>
                    </div>
                </a>

                <a href="standorte.php" class="quick-action tour-action stagger-4">
                    <div class="action-icon">🏪</div>
                    <div class="action-content">
                        <h3>3D-Rundgang</h3>
                        <p>Virtuell durch unsere Läden</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
</main>

<!-- Sticky Trust Badge -->
<div class="sticky-trust-badge">
    <span class="badge-icon">🏭</span>
    <span class="badge-text">Täglich frisch in eigener Manufaktur</span>
</div>

<?php require 'includes/header.php'; 'includes/footer.php'; ?>