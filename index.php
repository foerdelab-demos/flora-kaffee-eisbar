<?php
// Firmendaten - hier können Sie Ihre Daten anpassen
$firmenname = "Flora Kaffee & Eisbar";
$telefon = "01520 9861052";
$adresse = "Marrensdamm 4";
$plz_ort = "24944 Flensburg";
$stadt = "Flensburg";
$land = "Deutschland";
$email = "info@flora-flensburg.de";

// Öffnungszeiten
$oeffnungszeiten = [
    "Montag - Freitag" => "8:00 - 18:00 Uhr",
    "Samstag" => "9:00 - 19:00 Uhr",
    "Sonntag" => "10:00 - 17:00 Uhr"
];

// Spezialitäten
$spezialitaeten = [
    "Premium Kaffeespezialitäten",
    "Hausgemachtes Eis in wechselnden Sorten",
    "Frische Kuchen und Snacks",
    "Saisonale Spezialitäten",
    "Catering für Events"
];

// Kontaktformular verarbeiten
$form_success = false;
$form_error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email_form = trim($_POST['email'] ?? '');
    $telefon_form = trim($_POST['telefon'] ?? '');
    $nachricht = trim($_POST['nachricht'] ?? '');
    
    if (empty($name) || empty($email_form) || empty($nachricht)) {
        $form_error = "Bitte füllen Sie alle Pflichtfelder aus.";
    } elseif (!filter_var($email_form, FILTER_VALIDATE_EMAIL)) {
        $form_error = "Bitte geben Sie eine gültige E-Mail-Adresse ein.";
    } else {
        // Hier würde normalerweise die E-Mail versendet werden
        $form_success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $firmenname ?> - Ihr Genussmoment in <?= $stadt ?></title>
    <meta name="description" content="Flora Kaffee & Eisbar Flensburg: Premium Kaffee, hausgemachtes Eis & gemütliche Atmosphäre am Marrensdamm. Reservierung: 01520 9861052">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #2c2c2c;
            background-color: #fafafa;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header & Navigation */
        header {
            background: linear-gradient(135deg, #8B4513, #A0522D);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(139, 69, 19, 0.3);
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #F4E4BC;
            text-decoration: none;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }
        
        .nav-links a {
            color: #F4E4BC;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 25px;
        }
        
        .nav-links a:hover {
            background-color: rgba(244, 228, 188, 0.2);
            transform: translateY(-2px);
        }
        
        .mobile-menu {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }
        
        .mobile-menu span {
            width: 25px;
            height: 3px;
            background-color: #F4E4BC;
            margin: 3px 0;
            transition: 0.3s;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 50%, #CD853F 100%);
            color: #F4E4BC;
            padding: 150px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 70%, rgba(244, 228, 188, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 70% 30%, rgba(244, 228, 188, 0.1) 0%, transparent 50%);
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: fadeInUp 1s ease-out;
        }
        
        .hero-subline {
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease-out 0.3s both;
        }
        
        .cta-button {
            display: inline-block;
            background: linear-gradient(45deg, #F4E4BC, #E6D3A3);
            color: #8B4513;
            padding: 15px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.3);
            animation: fadeInUp 1s ease-out 0.6s both;
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(139, 69, 19, 0.4);
            background: linear-gradient(45deg, #E6D3A3, #F4E4BC);
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Sections */
        section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: #8B4513;
            margin-bottom: 1rem;
            font-weight: bold;
        }
        
        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* About Section */
        .about {
            background: linear-gradient(135deg, #F4E4BC, #F0D5A0);
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }
        
        .about-text {
            font-size: 1.1rem;
            color: #5d4e37;
        }
        
        .about-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }
        
        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.1);
            transition: all 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(139, 69, 19, 0.2);
        }
        
        .feature-card::before {
            content: '☕';
            font-size: 2.5rem;
            display: block;
            margin-bottom: 1rem;
        }
        
        .feature-card:nth-child(2)::before { content: '🍨'; }
        .feature-card:nth-child(3)::before { content: '🏠'; }
        .feature-card:nth-child(4)::before { content: '❤️'; }
        
        .feature-card h3 {
            color: #8B4513;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        
        /* Services Section */
        .services {
            background: white;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .service-card {
            background: linear-gradient(135deg, #F4E4BC, #E6D3A3);
            padding: 2.5rem;
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(139, 69, 19, 0.1);
        }
        
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(139, 69, 19, 0.2);
        }
        
        .service-card h3 {
            color: #8B4513;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        
        .service-card p {
            color: #5d4e37;
            line-height: 1.8;
        }
        
        /* Hours Section */
        .hours {
            background: linear-gradient(135deg, #8B4513, #A0522D);
            color: #F4E4BC;
        }
        
        .hours .section-title,
        .hours .section-subtitle {
            color: #F4E4BC;
        }
        
        .hours-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .hours-card {
            background: rgba(244, 228, 188, 0.1);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(244, 228, 188, 0.2);
        }
        
        .hours-card h3 {
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .hours-list {
            list-style: none;
            padding: 0;
        }
        
        .hours-list li {
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(244, 228, 188, 0.2);
            display: flex;
            justify-content: space-between;
        }
        
        .hours-list li:last-child {
            border-bottom: none;
        }
        
        /* Location Section */
        .location {
            background: #F4E4BC;
        }
        
        .location-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }
        
        .location-info h3 {
            color: #8B4513;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        
        .location-info p {
            color: #5d4e37;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }
        
        .location-features {
            list-style: none;
            padding: 0;
        }
        
        .location-features li {
            padding: 0.8rem 0;
            color: #5d4e37;
            border-left: 3px solid #8B4513;
            padding-left: 1rem;
            margin-bottom: 0.5rem;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 5px;
        }
        
        .map-placeholder {
            background: linear-gradient(135deg, #8B4513, #A0522D);
            height: 300px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #F4E4BC;
            font-size: 1.2rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(139, 69, 19, 0.3);
        }
        
        /* Contact Section */
        .contact {
            background: white;
            padding: 100px 0;
        }
        
        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }
        
        .contact-info h3 {
            color: #8B4513;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: #F4E4BC;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        .contact-item:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
        }
        
        .contact-item strong {
            color: #8B4513;
            margin-right: 1rem;
            min-width: 80px;
        }
        
        .contact-item a {
            color: #5d4e37;
            text-decoration: none;
        }
        
        .contact-item a:hover {
            color: #8B4513;
        }
        
        /* Contact Form */
        .contact-form {
            background: linear-gradient(135deg, #F4E4BC, #E6D3A3);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(139, 69, 19, 0.1);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #8B4513;
            font-weight: 600;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid rgba(139, 69, 19, 0.2);
            border-radius: 10px;
            font-size: 1rem;
            background: white;
            transition: all 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #8B4513;
            box-shadow: 0 0 10px rgba(139, 69, 19, 0.2);
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .form-button {
            background: linear-gradient(45deg, #8B4513, #A0522D);
            color: white;
            padding: 15px 35px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.3);
        }
        
        .form-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(139, 69, 19, 0.4);
        }
        
        .form-success,
        .form-error {
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            text-align: center;
            font-weight: 600;
        }
        
        .form-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .form-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        /* Footer */
        footer {
            background: linear-gradient(135deg, #2c2c2c, #1a1a1a);
            color: #F4E4BC;
            text-align: center;
            padding: 3rem 0;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-section h3 {
            margin-bottom: 1rem;
            color: #F4E4BC;
        }
        
        .footer-section p,
        .footer-section a {
            color: #ccc;
            text-decoration: none;
            line-height: 1.8;
        }
        
        .footer-section a:hover {
            color: #F4E4BC;
        }
        
        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 2rem;
            color: #999;
        }
        
        .footer-bottom p {
            margin-bottom: 0.5rem;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .mobile-menu {
                display: flex;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero-subline {
                font-size: 1.1rem;
            }
            
            .about-content,
            .location-content,
            .contact-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .about-features {
                grid-template-columns: 1fr;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .hours-grid {
                grid-template-columns: 1fr;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .container {
                padding: 0 15px;
            }
        }
        
        @media (max-width: 480px) {
            .hero {
                padding: 120px 0 60px;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero-subline {
                font-size: 1rem;
            }
            
            section {
                padding: 60px 0;
            }
            
            .contact-form {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <a href="#" class="logo"><?= $firmenname ?></a>
            <ul class="nav-links">
                <li><a href="#about">Über uns</a></li>
                <li><a href="#services">Spezialitäten</a></li>
                <li><a href="#hours">Öffnungszeiten</a></li>
                <li><a href="#location">Standort</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
            <div class="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1><?= $firmenname ?> - Ihr Genussmoment in <?= $stadt ?></h1>
                    <p class="hero-subline">Erstklassiger Kaffee, hausgemachtes Eis und entspannte Atmosphäre am Marrensdamm</p>
                    <a href="#contact" class="cta-button">Platz reservieren</a>
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container">
                <h2 class="section-title">Willkommen bei Flora</h2>
                <p class="section-subtitle">In unserem gemütlichen Café am Marrensdamm verbinden wir Kaffeekultur mit hausgemachten Eiskreationen. Seit Jahren sind wir der Treffpunkt für Flensburger und Besucher, die Qualität und Atmosphäre schätzen.</p>
                
                <div class="about-content">
                    <div class="about-text">
                        <p>Unser familiengeführtes Café ist mehr als nur ein Ort zum Kaffeetrinken - es ist ein Zuhause für Genießer, ein Treffpunkt für Freunde und ein Rückzugsort für alle, die das Besondere schätzen.</p>
                        
                        <p>Mit viel Liebe zum Detail kreieren wir täglich frische Eisspezialitäten und servieren Ihnen Kaffee von höchster Qualität. Unsere gemütliche Atmosphäre lädt zum Verweilen ein und macht jeden Besuch zu einem kleinen Urlaub vom Alltag.</p>
                        
                        <p>Besuchen Sie uns und erleben Sie, wie Tradition und Innovation eine perfekte Harmonie eingehen. Wir freuen uns darauf, Sie in unserer <?= $firmenname ?> begrüßen zu dürfen!</p>
                    </div>
                    
                    <div class="about-features">
                        <div class="feature-card">
                            <h3>Familiengeführtes Café</h3>
                            <p>Mit Herz und Leidenschaft für unsere Gäste</p>
                        </div>
                        <div class="feature-card">
                            <h3>Hausgemachte Eisspezialitäten</h3>
                            <p>Täglich frisch und in wechselnden Sorten</p>
                        </div>
                        <div class="feature-card">
                            <h3>Gemütliche Atmosphäre</h3>
                            <p>Ihr Rückzugsort mitten in <?= $stadt ?></p>
                        </div>
                        <div class="feature-card">
                            <h3>Lokale Verbundenheit</h3>
                            <p>Teil der Flensburger Café-Kultur</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="services">
            <div class="container">
                <h2 class="section-title">Unsere Spezialitäten</h2>
                <p class="section-subtitle">Von aromatischem Filterkaffee bis zu kreativen Eisvariationen - bei uns finden Sie für jeden Geschmack das Richtige. Saisonale Highlights und besondere Events machen jeden Besuch zu einem Erlebnis.</p>
                
                <div class="services-grid">
                    <?php foreach ($spezialitaeten as $spezialitaet): ?>
                    <div class="service-card">
                        <h3><?= $spezialitaet ?></h3>
                        <p>Genießen Sie unsere sorgfältig ausgewählten und mit viel Liebe zubereiteten Spezialitäten. Jedes Produkt spiegelt unsere Leidenschaft für Qualität und Geschmack wider.</p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="hours" class="hours">
            <div class="container">
                <h2 class="section-title">Öffnungszeiten</h2>
                <p class="section-subtitle">Besuchen Sie uns zu unseren regulären Öffnungszeiten oder kontaktieren Sie uns für Sonderveranstaltungen. Wir freuen uns auf Ihren Besuch in der <?= $adresse ?>.</p>
                
                <div class="hours-grid">
                    <div class="hours-card">
                        <h3>Reguläre Öffnungszeiten</h3>
                        <ul class="hours-list">
                            <?php foreach ($oeffnungszeiten as $tag => $zeit): ?>
                            <li>
                                <span><?= $tag ?></span>
                                <span><?= $zeit ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <div class="hours-card">
                        <h3>Besondere Hinweise</h3>
                        <ul class="hours-list">
                            <li><span>Täglich geöffnet</span></li>
                            <li><span>Flexible Zeiten je nach Saison</span></li>
                            <li><span>Reservierung empfohlen</span></li>
                            <li><span>Gruppenanfragen willkommen</span></li>
                        </ul>
                    </div>
                    
                    <div class="hours-card">
                        <h3>Saisonale Anpassungen</h3>
                        <p>Unsere Öffnungszeiten können je nach Saison variieren. In den Sommermonaten haben wir oft länger geöffnet, um Ihnen mehr Zeit für den Genuss zu geben. Kontaktieren Sie uns gerne für aktuelle Informationen.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="location" class="location">
            <div class="container">
                <h2 class="section-title">Besuchen Sie uns</h2>
                <p class="section-subtitle">Zentral gelegen am Marrensdamm in <?= $stadt ?> sind wir sowohl für Einheimische als auch Touristen leicht erreichbar. Kommen Sie vorbei und genießen Sie unsere entspannte Atmosphäre.</p>
                
                <div class="location-content">
                    <div class="location-info">
                        <h3>Unser Standort</h3>
                        <p><strong>Adresse:</strong><br><?= $adresse ?><br><?= $plz_ort ?>, <?= $land ?></p>
                        
                        <h3>Warum bei uns?</h3>
                        <ul class="location-features">
                            <li><?= $adresse ?>, <?= $plz_ort ?></li>
                            <li>Zentrale Lage in <?= $stadt ?></li>
                            <li>Gute Erreichbarkeit mit öffentlichen Verkehrsmitteln</li>
                            <li>Gemütliche Sitzplätze drinnen und draußen</li>
                        </ul>
                        
                        <p>Unser Café liegt im Herzen von <?= $stadt ?> und ist sowohl zu Fuß als auch mit öffentlichen Verkehrsmitteln gut zu erreichen. Die zentrale Lage macht uns zum perfekten Stopp während Ihres Stadtbummels oder als Treffpunkt mit Freunden und Familie.</p>
                    </div>
                    
                    <div class="map-placeholder">
                        <div>
                            <h3>Kartenansicht</h3>
                            <p><?= $adresse ?><br><?= $plz_ort ?></p>
                            <p style="margin-top: 1rem; font-size: 0.9rem; opacity: 0.8;">Hier würde eine interaktive Karte unseren Standort zeigen</p>
                        </div>
                    </div>
                </div>
</html>