<?php 
$currentPage = 'eismanufaktur'; 
require 'includes/header.php'; 

// Produktionsdaten
$produktionsSchritte = [
    ['nummer' => '01', 'titel' => 'Zutaten-Check', 'beschreibung' => 'Frische regionale Zutaten kommen rein - täglich kontrolliert'],
    ['nummer' => '02', 'titel' => 'Basis-Mix', 'beschreibung' => 'Milch, Sahne und natürliche Zutaten werden schonend vermischt'],
    ['nummer' => '03', 'titel' => 'Pasteurisierung', 'beschreibung' => 'Hygienische Erhitzung ohne Geschmacksverlust'],
    ['nummer' => '04', 'titel' => 'Reifeprozess', 'beschreibung' => '4-6 Stunden Ruhe für perfekte Konsistenz'],
    ['nummer' => '05', 'titel' => 'Gefrieren', 'beschreibung' => 'Schonende Kühlung für cremige Textur'],
    ['nummer' => '06', 'titel' => 'Gelato-Herstellung', 'beschreibung' => 'Frische Portionierung direkt in die Eisvitrinen']
];

$saisonSorten = [
    'März-Mai' => ['Rhabarber-Crumble', 'Frühlingsbeeren', 'Holunder'],
    'Juni-August' => ['Wassermelone', 'Pfirsich', 'Heidelbeer-Joghurt', 'Zitronenmelisse'],
    'September-November' => ['Kürbis-Zimt', 'Apfel-Calvados', 'Pflaumen-Kompott'],
    'Dezember-Februar' => ['Zimtstern', 'Bratapfel', 'Lebkuchen-Mousse']
];

$klassischeSorten = ['Vanille Madagascar', 'Schokolade Ecuador', 'Erdbeere', 'Haselnuss', 'Pistazie', 'Stracciatella'];

$transparenzDaten = [
    'Vanille Madagascar' => ['Milch (Hof Petersen, Glücksburg)', 'Madagascar Vanille', 'Bio-Sahne', 'Rohrzucker'],
    'Erdbeere' => ['Erdbeeren (Obsthof Hansen, Harrislee)', 'Milch regional', 'Rohrzucker', 'Zitronensaft'],
    'Schokolade Ecuador' => ['Ecuador Kakao 70%', 'Vollmilch', 'Bio-Sahne', 'Rohrzucker'],
    'Pistazie' => ['Sizilianische Pistazien', 'Vollmilch', 'Mandelmilch', 'Agavendicksaft']
];
?>

<main class="eismanufaktur-page">
    <!-- Hero Section -->
    <section class="hero-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="trust-element">Heute 12 Eissorten frisch verfügbar</span>
                </div>
                <h1 class="hero-title">Flora Eismanufaktur</h1>
                <p class="hero-subtitle">Hausgemachtes Gelato mit klaren Rezepturen und ehrlichem Geschmack. Keine Industrie-Masse, sondern echte Handwerkskunst aus der eigenen Manufaktur in Flensburg.</p>
                <div class="hero-stats stagger-container">
                    <div class="stat-item animate-on-scroll stagger-1">
                        <span class="stat-number count-up" data-target="15">0</span>
                        <span class="stat-label">Sorten täglich</span>
                    </div>
                    <div class="stat-item animate-on-scroll stagger-2">
                        <span class="stat-number count-up" data-target="100">0</span>
                        <span class="stat-label">% hausgemacht</span>
                    </div>
                    <div class="stat-item animate-on-scroll stagger-3">
                        <span class="stat-number count-up" data-target="2">0</span>
                        <span class="stat-label">Standorte beliefert</span>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <div class="img-hover-container">
                    <div class="hero-image-placeholder" style="background: linear-gradient(135deg, #e8f5e8, #c8e6c9, #81c784);">
                        <span class="image-text">Flora Eismanufaktur</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container main-container">
        <div class="sidebar-layout">
            <aside class="sidebar animate-on-scroll fade-in-left">
                <div class="sidebar-widget">
                    <h3>Aktuell verfügbar</h3>
                    <div class="verfuegbare-sorten">
                        <?php foreach($klassischeSorten as $sorte): ?>
                            <div class="sorte-item">
                                <span class="sorte-dot"></span>
                                <span><?php echo $sorte; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="sidebar-widget">
                    <h3>Öffnungszeiten</h3>
                    <div class="opening-hours">
                        <p><strong>März:</strong><br>Täglich 13-18 Uhr</p>
                        <p><strong>Ab April:</strong><br>Täglich 12-19 Uhr</p>
                    </div>
                </div>

                <div class="sidebar-widget">
                    <h3>Transparenz-Siegel</h3>
                    <div class="trust-badge">
                        <div class="badge-icon">🔍</div>
                        <p>Alle Zutaten transparent - keine Geheimnisse</p>
                    </div>
                </div>
            </aside>

            <div class="main-content">
                <!-- Unsere Eismanufaktur -->
                <section class="about-section animate-on-scroll fade-in-up">
                    <div class="section-header">
                        <h2>Unsere Eismanufaktur</h2>
                        <p>Eigene Produktion in Flensburg mit klaren Rezepturen ohne Schnickschnack. Frische Zutaten aus der Region für saisonale Highlights statt Standard-Sortiment.</p>
                    </div>
                    <div class="features-grid stagger-container">
                        <div class="feature-card animate-on-scroll stagger-1">
                            <div class="feature-icon">🏭</div>
                            <h3>Eigene Produktion</h3>
                            <p>Alles wird frisch in unserer Manufaktur in Flensburg hergestellt - keine Fertigmischungen.</p>
                        </div>
                        <div class="feature-card animate-on-scroll stagger-2">
                            <div class="feature-icon">📋</div>
                            <h3>Klare Rezepturen</h3>
                            <p>Ehrliche Zutaten ohne Schnickschnack - was draufsteht ist auch drin.</p>
                        </div>
                        <div class="feature-card animate-on-scroll stagger-3">
                            <div class="feature-icon">🌱</div>
                            <h3>Regional & Frisch</h3>
                            <p>Zutaten aus der Region, täglich frisch verarbeitet für beide Standorte.</p>
                        </div>
                        <div class="feature-card animate-on-scroll stagger-4">
                            <div class="feature-icon">🗓️</div>
                            <h3>Saisonale Highlights</h3>
                            <p>Keine Standard-Sorten das ganze Jahr - bei uns gibt's was die Saison hergibt.</p>
                        </div>
                    </div>
                </section>

                <!-- Produktionsprozess Timeline -->
                <section class="produktionsprozess-section animate-on-scroll fade-in-up">
                    <div class="section-header">
                        <h2>Wie entsteht unser Gelato?</h2>
                        <p>Von der frischen Zutat bis zum fertigen Eis - so läuft die Produktion in unserer Manufaktur ab. Kein Hexenwerk, sondern ehrliches Handwerk.</p>
                    </div>
                    <div class="timeline-container">
                        <?php foreach($produktionsSchritte as $index => $schritt): ?>
                            <div class="timeline-item animate-on-scroll stagger-<?php echo $index + 1; ?>">
                                <div class="timeline-number"><?php echo $schritt['nummer']; ?></div>
                                <div class="timeline-content">
                                    <h3><?php echo $schritt['titel']; ?></h3>
                                    <p><?php echo $schritt['beschreibung']; ?></p>
                                </div>
                                <div class="timeline-image">
                                    <div class="timeline-placeholder" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef, #dee2e6);">
                                        <span class="step-icon"><?php echo $schritt['nummer']; ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <!-- Saisonkalender -->
                <section class="saisonkalender-section animate-on-scroll fade-in-up">
                    <div class="section-header">
                        <h2>Saisonkalender - Was gibt's wann?</h2>
                        <p>Echte saisonale Sorten statt 08/15-Programm das ganze Jahr. Hier siehst du welche Highlights zu welcher Zeit bei uns laufen.</p>
                    </div>
                    <div class="saison-grid stagger-container">
                        <?php foreach($saisonSorten as $saison => $sorten): ?>
                            <div class="saison-card animate-on-scroll stagger-1">
                                <div class="saison-header">
                                    <h3><?php echo $saison; ?></h3>
                                    <div class="saison-icon">
                                        <?php 
                                        $icons = ['🌸', '☀️', '🍂', '❄️'];
                                        echo $icons[array_search($saison, array_keys($saisonSorten))];
                                        ?>
                                    </div>
                                </div>
                                <div class="sorten-liste">
                                    <?php foreach($sorten as $sorte): ?>
                                        <div class="sorte-tag"><?php echo $sorte; ?></div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="klassische-sorten animate-on-scroll fade-in-up">
                        <h3>Klassiker das ganze Jahr</h3>
                        <div class="klassiker-grid">
                            <?php foreach($klassischeSorten as $sorte): ?>
                                <div class="klassiker-item"><?php echo $sorte; ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>

                <!-- Transparenz Showcase -->
                <section class="transparenz-section animate-on-scroll fade-in-up">
                    <div class="section-header">
                        <h2>Transparenz-Glaskasten</h2>
                        <p>Was ist drin in unserem Eis? Hier stehen alle Hauptzutaten schwarz auf weiß - mit regionalen Lieferanten wo möglich.</p>
                    </div>
                    <div class="transparenz-grid stagger-container">
                        <?php foreach($transparenzDaten as $sorte => $zutaten): ?>
                            <div class="transparenz-card animate-on-scroll stagger-1">
                                <div class="sorte-header">
                                    <h3><?php echo $sorte; ?></h3>
                                    <div class="transparenz-badge">100% transparent</div>
                                </div>
                                <div class="zutaten-liste">
                                    <?php foreach($zutaten as $zutat): ?>
                                        <div class="zutat-item">
                                            <span class="zutat-dot"></span>
                                            <span class="zutat-text"><?php echo $zutat; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <!-- Flora-Qualität -->
                <section class="qualitaet-section animate-on-scroll fade-in-up">
                    <div class="section-header">
                        <h2>Flora-Qualität</h2>
                        <p>Wir reden nicht um den heißen Brei - Flora steht für echte Manufaktur-Qualität ohne Marketing-Blabla. Pure Leidenschaft für Geschmack.</p>
                    </div>
                    <div class="qualitaet-grid stagger-container">
                        <div class="qualitaet-card animate-on-scroll stagger-1">
                            <div class="qualitaet-icon">🚫</div>
                            <h3>Keine Fertigmischungen</h3>
                            <p>Alles wird von Grund auf selbst hergestellt - keine Industrie-Basis aus dem Großhandel.</p>
                        </div>
                        <div class="qualitaet-card animate-on-scroll stagger-2">
                            <div class="qualitaet-icon">🛠️</div>
                            <h3>Handwerkliche Produktion</h3>
                            <p>Jede Charge wird von Hand überwacht - Maschinen helfen, aber der Mensch entscheidet.</p>
                        </div>
                        <div class="qualitaet-card animate-on-scroll stagger-3">
                            <div class="qualitaet-icon">🏠</div>
                            <h3>Lokale Wurzeln</h3>
                            <p>Seit Jahren in Flensburg verwurzelt - echte Nachbarschafts-Eisdiele mit eigener Produktion.</p>
                        </div>
                        <div class="qualitaet-card animate-on-scroll stagger-4">
                            <div class="qualitaet-icon">🔍</div>
                            <h3>Transparente Herstellung</h3>
                            <p>Keine Geheimnisse - wer will kann gerne mal in die Produktion schauen.</p>
                        </div>
                    </div>
                </section>

                <!-- Social Proof -->
                <section class="social-proof-section animate-on-scroll fade-in-up">
                    <div class="bewertungs-snippet">
                        <div class="rating-stars">★★★★★</div>
                        <p class="rating-text">"Authentisches Eis wie früher" - Flensburger Kunden</p>
                    </div>
                </section>

                <!-- CTA Section -->
                <section class="cta-section animate-on-scroll fade-in-up">
                    <div class="cta-content">
                        <h2>Lust auf frisches Gelato?</h2>
                        <p>Komm vorbei und überzeug dich selbst von unserem hausgemachten Eis. Beide Standorte haben täglich frische Sorten.</p>
                        <div class="cta-buttons">
                            <a href="standorte.php" class="btn btn-primary hero-cta">Standorte anzeigen</a>
                            <a href="speisekarte.php" class="btn btn-secondary">Aktuelle Sorten</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Sticky Trust Badge -->
    <div class="sticky-trust-badge">
        <div class="trust-content">
            <span class="trust-icon">🏭</span>
            <span class="trust-text">Täglich frisch in eigener Manufaktur</span>
        </div>
    </div>
</main>

<style>
.eismanufaktur-page .hero-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    padding: 120px 0 80px;
    position: relative;
    overflow: hidden;
}

.hero-content {
    max-width: 600px;
}

.hero-badge .trust-element {
    background: #28a745;
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 500;
}

.hero-stats {
    display: flex;
    gap: 30px;
    margin-top: 30px;
}

.stat-item {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 2.5rem;
    font-weight: 700;
    color: #28a745;
    line-height: 1;
}

.stat-label {
    font-size: 14px;
    color: #666;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.timeline-container {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
}

.timeline-item {
    display: flex;
    align-items: center;
    margin-bottom: 60px;
    position: relative;
}

.timeline-item:nth-child(even) {
    flex-direction: row-reverse;
}

.timeline-number {
    width: 60px;
    height: 60px;
    background: #28a745;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    font-weight: 700;
    flex-shrink: 0;
    z-index: 2;
    position: relative;
}

.timeline-content {
    flex: 1;
    padding: 0 40px;
    max-width: 300px;
}

.timeline-image {
    width: 200px;
    height: 150px;
    flex-shrink: 0;
}

.timeline-placeholder {
    width: 100%;
    height: 100%;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.step-icon {
    font-size: 48px;
    font-weight: 700;
    color: #666;
}

.saison-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-bottom: 50px;
}

.saison-card {
    background: white;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    border: 1px solid #e9ecef;
}

.saison-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.saison-icon {
    font-size: 2rem;
}

.sorten-liste {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.sorte-tag {
    background: #f8f9fa;
    border: 1px solid #dee2e6;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 14px;
    color: #495057;
}

.klassische-sorten {
    background: #f8f9fa;
    padding: 40px;
    border-radius: 16px;
    text-align: center;
}

.klassiker-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
    margin-top: 20px;
}

.klassiker-item {
    background: #28a745;
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 500;
}

.transparenz-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.transparenz-card {
    background: white;
    border: 2px solid #28a745;
    border-radius: 16px;
    padding: 30px;
}

.sorte-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.transparenz-badge {
    background: #28a745;
    color: white;
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 12px;
    font-weight: 500;
}

.zutaten-liste {
    space-y: 12px;
}

.zutat-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 8px 0;
}

.zutat-dot {
    width: 6px;
    height: 6px;
    background: #28a745;
    border-radius: 50%;
}

.qualitaet-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.qualitaet-card {
    text-align: center;
    padding: 30px 20px;
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.qualitaet-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.social-proof