<?php 
$currentPage = 'kontakt';

// Kontaktformular verarbeiten
$formSubmitted = false;
$formErrors = [];
$formSuccess = false;

if ($_POST) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validierung
    if (empty($name)) {
        $formErrors[] = 'Name ist erforderlich';
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formErrors[] = 'Gültige E-Mail-Adresse ist erforderlich';
    }
    if (empty($subject)) {
        $formErrors[] = 'Betreff ist erforderlich';
    }
    if (empty($message)) {
        $formErrors[] = 'Nachricht ist erforderlich';
    }
    
    // Wenn keine Fehler, dann erfolgreich verarbeitet
    if (empty($formErrors)) {
        $formSuccess = true;
        // Hier würde normalerweise die E-Mail versendet werden
    }
    
    $formSubmitted = true;
}

// Firmendaten
$businessName = 'Flora Kaffee & Eisbar';
$businessPhone = '01520 9861052';
$businessAddress = 'Marrensdamm 4, 24944 Flensburg';
$businessCity = 'Flensburg';
$openingHours = 'März: Täglich 13–18 Uhr, Ab April: Täglich 12–19 Uhr';

// Standorte
$locations = [
    [
        'name' => 'Standort Twedter Plack',
        'address' => 'Marrensdamm 4, 24944 Flensburg',
        'description' => 'Modern & strukturiert – unser Standort am Twedter Plack bietet das volle Flora-Sortiment: hausgemachtes Gelato aus eigener Manufaktur, Barista-Kaffee mit ONOMA-Röstung und frische Waffeln. Hier können Sie auch individuelle Eistorten bestellen.'
    ],
    [
        'name' => 'Standort Weiche',
        'address' => 'Alter Husumer Weg 260, 24943 Flensburg',
        'description' => 'Unser gemütlicher Ursprung in Weiche – hier fühlt sich Nachbarschaft zuhause. Auch hier servieren wir unser komplettes Flora-Angebot. Ideal für entspannte Genussmomente mit Familie und Freunden.'
    ]
];

require 'includes/header.php'; 
?>

<main>
    <!-- Hero Section -->
    <section class="hero hero-contact">
        <div class="hero-content" style="background: linear-gradient(135deg, #8B4513 0%, #D2691E 100%);">
            <div class="container">
                <h1>Kontakt</h1>
                <p class="hero-subtitle">Wir freuen uns auf Ihre Nachricht und beantworten gerne alle Fragen rund um unser hausgemachtes Gelato, Events und Eistorten</p>
            </div>
        </div>
    </section>

    <!-- Kontakt Hauptinformation -->
    <section class="section">
        <div class="container">
            <div class="grid grid-2">
                <div class="contact-info">
                    <h2>Haben Sie Fragen?</h2>
                    <p class="section-intro">Haben Sie Fragen zu unseren Produkten, möchten eine Eistorte bestellen oder ein Event planen? Kontaktieren Sie uns gerne telefonisch oder besuchen Sie uns direkt in einem unserer beiden Standorte.</p>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <h3>Telefon</h3>
                            <p><a href="tel:<?php echo $businessPhone; ?>" class="contact-link"><?php echo $businessPhone; ?></a></p>
                            <p class="contact-note">Täglich während der Öffnungszeiten erreichbar</p>
                        </div>
                        
                        <div class="contact-item">
                            <h3>Hauptstandort</h3>
                            <p><?php echo $businessAddress; ?></p>
                            <p class="contact-note">Twedter Plack - Unser Hauptstandort mit vollstem Angebot</p>
                        </div>
                        
                        <div class="contact-item">
                            <h3>Öffnungszeiten</h3>
                            <p><?php echo $openingHours; ?></p>
                            <p class="contact-note">Beide Standorte haben die gleichen Öffnungszeiten</p>
                        </div>
                        
                        <div class="contact-item">
                            <h3>Spezialitäten</h3>
                            <ul class="specialty-list">
                                <li>Hausgemachtes Gelato in über 20 Sorten</li>
                                <li>Barista-Kaffee mit ONOMA-Röstung</li>
                                <li>Frische Waffeln täglich gebacken</li>
                                <li>Individuelle Eistorten auf Bestellung</li>
                                <li>Event-Catering und mobile Eisbar</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Kontaktformular -->
                <div class="contact-form-container">
                    <div class="card">
                        <h3>Schreiben Sie uns</h3>
                        
                        <?php if ($formSubmitted && $formSuccess): ?>
                            <div class="form-success">
                                <p>Vielen Dank für Ihre Nachricht! Wir melden uns so schnell wie möglich bei Ihnen zurück.</p>
                            </div>
                        <?php elseif ($formSubmitted && !empty($formErrors)): ?>
                            <div class="form-errors">
                                <p>Bitte korrigieren Sie folgende Fehler:</p>
                                <ul>
                                    <?php foreach ($formErrors as $error): ?>
                                        <li><?php echo htmlspecialchars($error); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        
                        <form method="POST" class="contact-form">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="email">E-Mail-Adresse *</label>
                                <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">Telefonnummer</label>
                                <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="subject">Betreff *</label>
                                <select id="subject" name="subject" required>
                                    <option value="">Bitte wählen...</option>
                                    <option value="eistorte" <?php echo ($_POST['subject'] ?? '') === 'eistorte' ? 'selected' : ''; ?>>Eistorte bestellen</option>
                                    <option value="event" <?php echo ($_POST['subject'] ?? '') === 'event' ? 'selected' : ''; ?>>Event-Catering</option>
                                    <option value="produkte" <?php echo ($_POST['subject'] ?? '') === 'produkte' ? 'selected' : ''; ?>>Fragen zu Produkten</option>
                                    <option value="allergie" <?php echo ($_POST['subject'] ?? '') === 'allergie' ? 'selected' : ''; ?>>Allergien/Unverträglichkeiten</option>
                                    <option value="sonstiges" <?php echo ($_POST['subject'] ?? '') === 'sonstiges' ? 'selected' : ''; ?>>Sonstiges</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Ihre Nachricht *</label>
                                <textarea id="message" name="message" rows="5" required placeholder="Teilen Sie uns mit, wie wir Ihnen helfen können..."><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Nachricht senden</button>
                            
                            <p class="form-note">* Pflichtfelder. Ihre Daten werden vertraulich behandelt und nicht an Dritte weitergegeben.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Standorte -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header">
                <h2>So finden Sie uns</h2>
                <p class="section-intro">Flora Kaffee & Eisbar ist an zwei Standorten in Flensburg für Sie da. Hauptstandort am Marrensdamm 4 und in Weiche am Alter Husumer Weg 260. Beide Standorte sind gut erreichbar und bieten Parkplätze.</p>
            </div>
            
            <div class="grid grid-2">
                <?php foreach ($locations as $location): ?>
                    <div class="card location-card">
                        <div class="location-image" style="background: linear-gradient(45deg, #DEB887 0%, #F4A460 100%); height: 200px;"></div>
                        <div class="card-content">
                            <h3><?php echo $location['name']; ?></h3>
                            <p class="location-address"><?php echo $location['address']; ?></p>
                            <p><?php echo $location['description']; ?></p>
                            
                            <div class="location-features">
                                <h4>Ausstattung & Services:</h4>
                                <ul>
                                    <li>Hausgemachtes Gelato in über 20 Sorten</li>
                                    <li>Barista-Kaffee mit ONOMA-Röstung</li>
                                    <li>Frische Waffeln täglich gebacken</li>
                                    <li>Parkplätze vorhanden</li>
                                    <li>Bestellannahme für Eistorten</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="section-cta">
                <p>Möchten Sie mehr über unsere Standorte erfahren und sogar einen virtuellen Rundgang machen?</p>
                <a href="standorte.php" class="btn btn-primary">Standorte entdecken</a>
            </div>
        </div>
    </section>

    <!-- Service-Informationen -->
    <section class="section">
        <div class="container">
            <div class="grid grid-3">
                <div class="card service-card">
                    <div class="service-icon" style="background: linear-gradient(135deg, #FF6B6B 0%, #FF8E8E 100%); height: 80px; width: 80px; margin: 0 auto 20px;"></div>
                    <h3>Eistorten auf Bestellung</h3>
                    <p>Planen Sie eine Feier? Wir kreieren individuelle Eistorten nach Ihren Wünschen. Von klassischen Geschmacksrichtungen bis hin zu ausgefallenen Kreationen.</p>
                    <p class="service-note">Bestellung mindestens 48 Stunden im Voraus</p>
                    <a href="events.php" class="btn btn-secondary">Mehr erfahren</a>
                </div>
                
                <div class="card service-card">
                    <div class="service-icon" style="background: linear-gradient(135deg, #4ECDC4 0%, #6ED5CD 100%); height: 80px; width: 80px; margin: 0 auto 20px;"></div>
                    <h3>Event-Catering</h3>
                    <p>Wir bringen unser hausgemachtes Gelato zu Ihrer Veranstaltung. Mobile Eisbar für Hochzeiten, Firmenfeiern und private Events.</p>
                    <p class="service-note">Buchung nach Verfügbarkeit</p>
                    <a href="events.php" class="btn btn-secondary">Event planen</a>
                </div>
                
                <div class="card service-card">
                    <div class="service-icon" style="background: linear-gradient(135deg, #FFE66D 0%, #FFED84 100%); height: 80px; width: 80px; margin: 0 auto 20px;"></div>
                    <h3>Allergien & Unverträglichkeiten</h3>
                    <p>Wir beraten Sie gerne zu Inhaltsstoffen und Allergenen. Viele unserer Gelato-Sorten sind auch für Menschen mit Unverträglichkeiten geeignet.</p>
                    <p class="service-note">Sprechen Sie uns einfach an</p>
                    <a href="tel:<?php echo $businessPhone; ?>" class="btn btn-secondary">Jetzt anrufen</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header">
                <h2>Häufige Fragen</h2>
                <p class="section-intro">Hier finden Sie Antworten auf die wichtigsten Fragen rund um Flora Kaffee & Eisbar</p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item">
                    <h3>Wie lange im Voraus muss ich eine Eistorte bestellen?</h3>
                    <p>Eistorten sollten mindestens 48 Stunden im Voraus bestellt werden. Für komplexe Designs oder größere Mengen empfehlen wir eine Vorlaufzeit von einer Woche.</p>
                </div>
                
                <div class="faq-item">
                    <h3>Haben Sie auch vegane oder laktosefreie Optionen?</h3>
                    <p>Ja! Wir