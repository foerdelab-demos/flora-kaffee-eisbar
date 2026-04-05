<?php 
$currentPage = 'eismanufaktur'; 
require 'includes/header.php'; 

// Firmendaten
$firmeName = "Flora Kaffee & Eisbar";
$telefon = "01520 9861052";
$adresse = "Marrensdamm 4, 24944 Flensburg";

// Eissorten Daten
$klassischeSorten = [
    "Vanille Madagascar",
    "Schokolade Ecuador",
    "Erdbeere",
    "Pistazie Sizilien",
    "Stracciatella",
    "Haselnuss",
    "Zitrone",
    "Joghurt"
];

$saisonaleSorten = [
    "Rhabarber-Erdbeer",
    "Holunder-Limette",
    "Apfel-Zimt",
    "Kürbis-Gewürz",
    "Lebkuchen",
    "Glühwein"
];

$besonderheiten = [
    "Vegane Sorten auf Mandel- und Kokosbasis",
    "Zuckerfreie Varianten mit Stevia",
    "Glutenfreie Optionen",
    "Lactosefreie Alternativen"
];
?>

<main class="main-content">
    <!-- Hero Section -->
    <section class="hero hero-secondary">
        <div class="hero-bg" style="background: linear-gradient(135deg, #ff6b6b, #4ecdc4, #ffe66d);"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Unsere Eismanufaktur in Flensburg</h1>
                <p class="hero-subtitle">Frisch produziert in unserer eigenen Manufaktur – hausgemachtes Gelato mit klaren Rezepturen und ehrlichem Geschmack</p>
            </div>
        </div>
    </section>

    <!-- About Eismanufaktur Section -->
    <section class="section section-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Handwerk trifft Leidenschaft</h2>
                <p class="section-subtitle">In unserer eigenen Eismanufaktur in Flensburg entstehen täglich frische Gelato-Kreationen – von zeitlosen Klassikern bis hin zu saisonalen Highlights. Mit klaren Rezepturen, ehrlichem Geschmack und echter Handwerkskunst.</p>
            </div>

            <div class="grid grid-2">
                <div class="card">
                    <div class="card-image" style="background: linear-gradient(135deg, #667eea, #764ba2); height: 250px;"></div>
                    <div class="card-content">
                        <h3 class="card-title">Hausgemachtes Gelato</h3>
                        <p class="card-text">Jeden Tag produzieren wir unser Gelato frisch in kleinen Chargen. Dabei verwenden wir nur beste Zutaten und verzichten auf künstliche Zusatzstoffe.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image" style="background: linear-gradient(135deg, #f093fb, #f5576c); height: 250px;"></div>
                    <div class="card-content">
                        <h3 class="card-title">Ehrlicher Geschmack</h3>
                        <p class="card-text">Klare Rezepturen ohne versteckte Zusätze - bei uns schmeckt Vanille nach Vanille und Erdbeere nach echter Frucht.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produktionsprozess Section -->
    <section class="section section-primary">
        <div class="container">
            <div class="section-header text-center text-white">
                <h2 class="section-title">Unser Produktionsprozess</h2>
                <p class="section-subtitle">Von der Zutat bis zum fertigen Gelato - Qualität in jedem Schritt</p>
            </div>

            <div class="grid grid-4">
                <div class="feature-card text-center">
                    <div class="feature-icon" style="background: linear-gradient(135deg, #84fab0, #8fd3f4); width: 80px; height: 80px; margin: 0 auto 20px; border-radius: 50%;"></div>
                    <h4 class="feature-title">1. Zutatenauswahl</h4>
                    <p class="feature-text">Beste Rohstoffe von ausgewählten Lieferanten</p>
                </div>

                <div class="feature-card text-center">
                    <div class="feature-icon" style="background: linear-gradient(135deg, #a8edea, #fed6e3); width: 80px; height: 80px; margin: 0 auto 20px; border-radius: 50%;"></div>
                    <h4 class="feature-title">2. Mischung</h4>
                    <p class="feature-text">Sorgfältige Zubereitung nach bewährten Rezepturen</p>
                </div>

                <div class="feature-card text-center">
                    <div class="feature-icon" style="background: linear-gradient(135deg, #ffecd2, #fcb69f); width: 80px; height: 80px; margin: 0 auto 20px; border-radius: 50%;"></div>
                    <h4 class="feature-title">3. Gefrieren</h4>
                    <p class="feature-text">Langsames Gefrieren für optimale Textur</p>
                </div>

                <div class="feature-card text-center">
                    <div class="feature-icon" style="background: linear-gradient(135deg, #ff9a9e, #fecfef); width: 80px; height: 80px; margin: 0 auto 20px; border-radius: 50%;"></div>
                    <h4 class="feature-title">4. Servieren</h4>
                    <p class="feature-text">Frisch portioniert in unseren Eisbars</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Eissorten Section -->
    <section class="section section-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Unsere Eissorten</h2>
                <p class="section-subtitle">Frisch produziert in unserer Eismanufaktur finden Sie bei uns eine vielfältige Auswahl von klassischen Sorten bis hin zu besonderen Saisonhighlights.</p>
            </div>

            <div class="grid grid-3">
                <!-- Klassische Sorten -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-image" style="background: linear-gradient(135deg, #667eea, #764ba2); height: 200px;"></div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Klassische Sorten</h3>
                        <p class="card-text">Bewährte Favoriten, die niemals aus der Mode kommen:</p>
                        <ul class="list list-bullets">
                            <?php foreach($klassischeSorten as $sorte): ?>
                                <li><?= $sorte ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- Saisonale Sorten -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-image" style="background: linear-gradient(135deg, #f093fb, #f5576c); height: 200px;"></div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Saisonale Highlights</h3>
                        <p class="card-text">Besondere Kreationen je nach Jahreszeit:</p>
                        <ul class="list list-bullets">
                            <?php foreach($saisonaleSorten as $sorte): ?>
                                <li><?= $sorte ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- Besondere Sorten -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-image" style="background: linear-gradient(135deg, #84fab0, #8fd3f4); height: 200px;"></div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Besondere Optionen</h3>
                        <p class="card-text">Für jeden Geschmack und jede Ernährungsform:</p>
                        <ul class="list list-bullets">
                            <?php foreach($besonderheiten as $besonderheit): ?>
                                <li><?= $besonderheit ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Qualitätsversprechen Section -->
    <section class="section section-dark">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Unser Qualitätsversprechen</h2>
                <p class="section-subtitle">Was uns von anderen unterscheidet</p>
            </div>

            <div class="grid grid-2">
                <div class="content-block">
                    <h3 class="content-title">Natürliche Zutaten</h3>
                    <p class="content-text">Wir verwenden ausschließlich natürliche Zutaten ohne künstliche Aromen, Farbstoffe oder Konservierungsmittel. Unsere Früchte beziehen wir von regionalen Lieferanten, unsere Milch und Sahne kommen von Höfen aus der Umgebung.</p>
                    
                    <h3 class="content-title">Handwerkliche Tradition</h3>
                    <p class="content-text">Jede Charge wird von Hand gerührt und überwacht. Wir folgen traditionellen italienischen Gelato-Rezepturen, die wir über Jahre perfektioniert haben. Dabei achten wir auf die richtige Balance zwischen Süße, Säure und Textur.</p>
                </div>

                <div class="content-block">
                    <h3 class="content-title">Tägliche Frische</h3>
                    <p class="content-text">Jeden Morgen beginnt die Produktion für den Tag. So garantieren wir, dass Sie immer frisches Gelato bekommen. Was nicht verkauft wird, kommt nicht in den nächsten Tag - Qualität vor Quantität.</p>
                    
                    <h3 class="content-title">Transparenz</h3>
                    <p class="content-text">Wir verstecken nichts vor unseren Kunden. Fragen Sie gerne nach Zutaten oder Allergenen - wir geben Ihnen gerne Auskunft über jeden Bestandteil unseres Gelatos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Innovation Section -->
    <section class="section section-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Innovation & Tradition</h2>
                <p class="section-subtitle">Wie wir Bewährtes mit Neuem verbinden</p>
            </div>

            <div class="grid grid-3">
                <div class="feature-box text-center">
                    <div class="feature-icon" style="background: linear-gradient(135deg, #667eea, #764ba2); width: 100px; height: 100px; margin: 0 auto 30px; border-radius: 50%;"></div>
                    <h4 class="feature-title">Neue Geschmacksrichtungen</h4>
                    <p class="feature-text">Regelmäßig entwickeln wir neue Sorten und testen ungewöhnliche Kombinationen. Unsere Kunden sind dabei unsere wichtigsten Geschmackstester.</p>
                </div>

                <div class="feature-box text-center">
                    <div class="feature-icon" style="background: linear-gradient(135deg, #f093fb, #f5576c); width: 100px; height: 100px; margin: 0 auto 30px; border-radius: 50%;"></div>
                    <h4 class="feature-title">Moderne Technik</h4>
                    <p class="feature-text">Wir nutzen moderne Eismaschinen und Kühlverfahren, um die perfekte Konsistenz zu erreichen, ohne dabei den handwerklichen Charakter zu verlieren.</p>
                </div>

                <div class="feature-box text-center">
                    <div class="feature-icon" style="background: linear-gradient(135deg, #84fab0, #8fd3f4); width: 100px; height: 100px; margin: 0 auto 30px; border-radius: 50%;"></div>
                    <h4 class="feature-title">Nachhaltigkeit</h4>
                    <p class="feature-text">Wir achten auf umweltfreundliche Verpackungen und beziehen unsere Zutaten so regional wie möglich. Nachhaltigkeit ist Teil unserer Philosophie.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section section-primary">
        <div class="container">
            <div class="cta-content text-center">
                <h2 class="cta-title">Besuchen Sie unsere Eismanufaktur</h2>
                <p class="cta-text">Erleben Sie selbst den Unterschied von handgemachtem Gelato. Besuchen Sie uns an einem unserer beiden Standorte in Flensburg und lassen Sie sich von der Vielfalt und Qualität überzeugen.</p>
                <div class="cta-buttons">
                    <a href="standorte.php" class="btn btn-secondary btn-large">Unsere Standorte</a>
                    <a href="speisekarte.php" class="btn btn-outline btn-large">Zur Speisekarte</a>
                </div>
                <div class="contact-info">
                    <p class="contact-phone">
                        <a href="tel:<?= $telefon ?>"><?= $telefon ?></a>
                    </p>
                    <p class="contact-address"><?= $adresse ?></p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require 'includes/footer.php'; ?>