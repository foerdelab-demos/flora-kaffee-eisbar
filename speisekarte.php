<?php 
$currentPage = 'speisekarte'; 
require 'includes/header.php'; 

// Menü-Daten
$menuCategories = [
    'neuheiten' => [
        'name' => 'Neuheiten',
        'icon' => '🆕',
        'items' => [
            ['name' => 'Grilled Cheese', 'price' => '5,50€', 'desc' => 'Klassiker mit geschmolzenem Käse-Trio', 'location' => 'nur Weiche'],
            ['name' => 'Hot Turkey', 'price' => '6,50€', 'desc' => 'Saftige Putenbrust mit Käse-Trio', 'location' => 'nur Weiche'],
            ['name' => 'Salami Melt', 'price' => '6,50€', 'desc' => 'Herzhaft mit Salami und drei Käsesorten', 'location' => 'nur Weiche']nur Weiche'],
            ['name' => 'Flora Dip', 'price' => '0,50€', 'desc' => 'Mittelscharf oder Knoblauch-Dip']
        ]
    ],
    'eis' => [
        'name' => 'Eisbecher & Gelato',
        'icon' => '🍨',
        'items' => [
            ['name' => 'Flora Signature Becher', 'price' => '8,90€', 'desc' => 'Hausgemachtes Vanille-Gelato mit warmen Brownies und Karamell-Swirl', 'fresh' => true],
            ['name' => 'Schokoladen-Träume', 'price' => '7,50€', 'desc' => 'Drei Kugeln Schoko-Gelato mit Haselnuss-Crunch', 'fresh' => true],
            ['name' => 'Saisonaler Fruchtbecher', 'price' => '6,90€', 'desc' => 'Wechselnde Früchte-Gelato mit frischen Beeren', 'seasonal' => true],
            ['name' => 'Einzelkugel Gelato', 'price' => '1,80€', 'desc' => 'Aus täglich 12 hausgemachten Sorten'],
            ['name' => 'Waffelbecher Klein', 'price' => '5,20€', 'desc' => 'Zwei Kugeln mit Sahne und Sauce'],
            ['name' => 'Waffelbecher Groß', 'price' => '7,40€', 'desc' => 'Vier Kugeln mit allem Drum und Dran']
        ]
    ],
    'waffeln' => [
        'name' => 'Frische Waffeln',
        'icon' => '🧇',
        'items' => [
            ['name' => 'Klassische Waffel', 'price' => '4,50€', 'desc' => 'Mit Puderzucker und Sahne'],
            ['name' => 'Waffel mit Früchten', 'price' => '6,20€', 'desc' => 'Saisonale Früchte und Vanille-Sauce'],
            ['name' => 'Schoko-Waffel', 'price' => '5,80€', 'desc' => 'Mit Nutella und gehackten Nüssen'],
            ['name' => 'Flora Special Waffel', 'price' => '7,90€', 'desc' => 'Mit zwei Kugeln Gelato und Toppings nach Wahl']
        ]
    ],
    'kaffee' => [
        'name' => 'Barista-Kaffee',
        'icon' => '☕',
        'items' => [
            ['name' => 'ONOMA Filterkaffee', 'price' => '3,00€', 'desc' => 'Single Origin, täglich frisch geröstet'],
            ['name' => 'Espresso', 'price' => '2,20€', 'desc' => 'Doppelter Ristretto aus der La Marzocco'],
            ['name' => 'Flat White', 'price' => '3,80€', 'desc' => 'Doppelter Ristretto mit seidigem Milchschaum'],
            ['name' => 'Cappuccino', 'price' => '4,00€', 'desc' => 'Klassiker mit cremigem Milchschaum'],
            ['name' => 'Latte Macchiato', 'price' => '4,20€', 'desc' => 'Geschichtet im hohen Glas'],
            ['name' => 'Chai Latte', 'price' => '4,20€', 'desc' => 'Würzig-süß mit Mandelmilch optional']
        ]
    ],
    'kalt' => [
        'name' => 'Kaltgetränke',
        'icon' => '🥤',
        'items' => [
            ['name' => 'Cold Brew Kaffee', 'price' => '3,50€', 'desc' => '12h kalt extrahiert, smooth und mild'],
            ['name' => 'Eiskaffee Flora', 'price' => '4,90€', 'desc' => 'Mit Vanille-Gelato und Sahne'],
            ['name' => 'Fritz-Kola', 'price' => '2,80€', 'desc' => 'Regional und authentisch'],
            ['name' => 'Milchshake', 'price' => '5,50€', 'desc' => 'Mit zwei Kugeln Gelato nach Wahl'],
            ['name' => 'Hausgemachte Limonade', 'price' => '3,20€', 'desc' => 'Zitrone-Minze oder Holunder'],
            ['name' => 'Stilles/Sprudel Wasser', 'price' => '2,00€', 'desc' => 'Regional aus Schleswig-Holstein']
        ]
    ],
    'snacks' => [
        'name' => 'Basics & Snacks',
        'icon' => '🥨',
        'items' => [
            ['name' => 'Butter-Croissant', 'price' => '2,50€', 'desc' => 'Täglich frisch vom Bäcker'],
            ['name' => 'Pain au Chocolat', 'price' => '3,20€', 'desc' => 'Mit echter belgischer Schokolade'],
            ['name' => 'Käsekuchen', 'price' => '4,20€', 'desc' => 'Hausgemacht nach Omas Rezept'],
            ['name' => 'Brownie', 'price' => '3,80€', 'desc' => 'Saftig-schokoladig, oft noch warm'],
            ['name' => 'Tee-Auswahl', 'price' => '2,00€', 'desc' => 'Earl Grey, Pfefferminz, Früchte, Grün- oder Schwarztee']
        ]
    ]
];

$freshToday = ['Vanille-Bourbon', 'Stracciatella', 'Pistazie', 'Erdbeere', 'Schokolade', 'Salted Caramel', 'Zitrone', 'Heidelbeere', 'Haselnuss', 'Cookies & Cream', 'Mango-Maracuja', 'Zimt'];
?>

<main class="menu-page">
    <!-- Hero Section mit Live-Verfügbarkeit -->
    <section class="hero-menu animate-on-scroll fade-in-up">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Echte Speisekarte</h1>
                <p class="hero-subtitle">Eine Karte für beide Standorte - entdecke alle Eisbecher, Waffeln, Drinks und Klassiker mit ehrlichen Preisen und authentischen Zutaten.</p>
                <div class="live-availability">
                    <span class="availability-badge">
                        <span class="pulse-dot"></span>
                        Heute <?php echo count($freshToday); ?> Eissorten frisch verfügbar
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof -->
    <section class="social-proof animate-on-scroll fade-in-up">
        <div class="container">
            <div class="review-snippet">
                <div class="stars">★★★★★</div>
                <p>"Authentisches Eis wie früher - endlich mal wieder echter Geschmack!" <span>- Flensburger Kunden</span></p>
            </div>
        </div>
    </section>

    <!-- Heute frisch Banner -->
    <section class="daily-fresh-banner animate-on-scroll fade-in-up">
        <div class="container">
            <div class="fresh-header">
                <h2>Heute frisch aus der Manufaktur</h2>
                <span class="fresh-count"><?php echo count($freshToday); ?> Sorten verfügbar</span>
            </div>
            <div class="fresh-flavors">
                <?php foreach($freshToday as $index => $flavor): ?>
                <span class="flavor-tag animate-on-scroll fade-in-up stagger-<?php echo ($index % 4) + 1; ?>">
                    <?php echo $flavor; ?>
                </span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Sticky Navigation -->
    <nav class="menu-nav sticky-nav" id="menuNav">
        <div class="container">
            <div class="nav-items">
                <?php foreach($menuCategories as $key => $category): ?>
                <a href="#<?php echo $key; ?>" class="nav-item" data-target="<?php echo $key; ?>">
                    <span class="nav-icon"><?php echo $category['icon']; ?></span>
                    <span class="nav-label"><?php echo $category['name']; ?></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </nav>

    <!-- Filter Section -->
    <section class="menu-filters animate-on-scroll fade-in-up">
        <div class="container">
            <div class="filter-row">
                <div class="filter-group">
                    <label>Preisklasse:</label>
                    <button class="filter-btn active" data-price="all">Alle</button>
                    <button class="filter-btn" data-price="budget">Bis 3€</button>
                    <button class="filter-btn" data-price="mid">3-6€</button>
                    <button class="filter-btn" data-price="premium">6€+</button>
                </div>
                <div class="filter-group">
                    <label>Besonders:</label>
                    <button class="filter-btn" data-special="fresh">Heute frisch</button>
                    <button class="filter-btn" data-special="seasonal">Saisonal</button>
                    <button class="filter-btn" data-special="signature">Signature</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Categories -->
    <div class="menu-sections">
        <?php foreach($menuCategories as $key => $category): ?>
        <section id="<?php echo $key; ?>" class="menu-category animate-on-scroll fade-in-up">
            <div class="container">
                <div class="category-header">
                    <h2 class="category-title">
                        <span class="category-icon"><?php echo $category['icon']; ?></span>
                        <?php echo $category['name']; ?>
                    </h2>
                    <?php if($key === 'neuheiten'): ?>
                    <span class="location-badge">Sandwiches nur in Weiche</span>
                    <?php endif; ?>
                </div>
                
                <div class="menu-grid stagger-container">
                    <?php foreach($category['items'] as $index => $item): ?>
                    <div class="menu-item animate-on-scroll fade-in-up stagger-<?php echo ($index % 3) + 1; ?>" 
                         data-price="<?php echo floatval(str_replace(['€', ','], ['.', ''], $item['price'])); ?>">
                        <div class="item-header">
                            <h3 class="item-name"><?php echo $item['name']; ?></h3>
                            <span class="item-price"><?php echo $item['price']; ?></span>
                        </div>
                        <p class="item-desc"><?php echo $item['desc']; ?></p>
                        
                        <div class="item-badges">
                            <?php if(isset($item['fresh']) && $item['fresh']): ?>
                            <span class="badge fresh">Heute frisch</span>
                            <?php endif; ?>
                            <?php if(isset($item['seasonal']) && $item['seasonal']): ?>
                            <span class="badge seasonal">Saisonal</span>
                            <?php endif; ?>
                            <?php if(isset($item['location'])): ?>
                            <span class="badge location"><?php echo $item['location']; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <?php if($key === 'kaffee'): ?>
                <div class="category-note">
                    <p>Alle Kaffeegetränke mit Sirup nach Wahl verfeinern: <strong>Karamell, Zimt, Vanille oder Lebkuchen +0,50€</strong></p>
                    <p>Echter Barista-Kaffee mit ONOMA-Röstung aus Hamburg</p>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <?php endforeach; ?>
    </div>

    <!-- Manufaktur Transparenz -->
    <section class="transparency-section animate-on-scroll fade-in-up">
        <div class="container">
            <div class="transparency-content">
                <h2>Transparenz ist unser Ding</h2>
                <p>Alle Zutaten transparent - keine Geheimnisse. Unser Gelato entsteht täglich frisch in der eigenen Manufaktur mit Zutaten, die wir auch selbst essen würden.</p>
                <div class="transparency-features">
                    <div class="feature">
                        <span class="feature-icon">🏭</span>
                        <span>Eigene Manufaktur</span>
                    </div>
                    <div class="feature">
                        <span class="feature-icon">📋</span>
                        <span>Offene Rezepturen</span>
                    </div>
                    <div class="feature">
                        <span class="feature-icon">🌱</span>
                        <span>Regionale Zutaten</span>
                    </div>
                </div>
                <a href="eismanufaktur.php" class="cta-button">Manufaktur entdecken</a>
            </div>
        </div>
    </section>

    <!-- Standort-Info -->
    <section class="location-info animate-on-scroll fade-in-up">
        <div class="container">
            <div class="location-grid">
                <div class="location-card">
                    <h3>Marrensdamm (Hauptfiliale)</h3>
                    <p>Komplettes Sortiment plus Eistorten-Konfigurator</p>
                    <p><strong>März:</strong> Täglich 13-18 Uhr<br><strong>Ab April:</strong> Täglich 12-19 Uhr</p>
                </div>
                <div class="location-card">
                    <h3>Weiche (Sandwich-Spezial)</h3>
                    <p>Alle Klassiker plus frische Grilled-Sandwiches</p>
                    <p><strong>März:</strong> Täglich 13-18 Uhr<br><strong>Ab April:</strong> Täglich 12-19 Uhr</p>
                </div>
            </div>
            <div class="location-cta">
                <a href="standorte.php" class="cta-button">Beide Standorte erkunden</a>
            </div>
        </div>
    </section>

    <!-- Kontakt CTA -->
    <section class="contact-cta animate-on-scroll fade-in-up">
        <div class="container">
            <div class="cta-content">
                <h2>Fragen zur Speisekarte?</h2>
                <p>Allergien, Sonderwünsche oder Bestellungen - wir sind da.</p>
                <div class="contact-options">
                    <a href="tel:015209861052" class="contact-option">
                        <span class="option-icon">📞</span>
                        <span>01520 9861052</span>
                    </a>
                    <a href="kontakt.php" class="contact-option">
                        <span class="option-icon">💬</span>
                        <span>Nachricht senden</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Handwerk Indicator (Sticky Badge) -->
<div class="handwork-badge">
    <span class="badge-text">Täglich frisch in eigener Manufaktur</span>
    <span class="badge-icon">🏭</span>
</div>

<style>
.menu-page {
    padding-top: 0;
}

.hero-menu {
    background: linear-gradient(135deg, #2c5f41 0%, #1a3a28 100%);
    color: white;
    padding: 8rem 0 4rem;
    position: relative;
}

.hero-menu::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20"><circle cx="10" cy="10" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="30" cy="5" r="0.5" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="15" r="1.5" fill="rgba(255,255,255,0.1)"/><circle cx="70" cy="8" r="0.8" fill="rgba(255,255,255,0.1)"/><circle cx="90" cy="12" r="1.2" fill="rgba(255,255,255,0.1)"/></svg>');
    animation: float 20s ease-in-out infinite;
}

.hero-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 900;
    margin-bottom: 1rem;
    line-height: 1.1;
}

.hero-subtitle {
    font-size: 1.3rem;
    margin-bottom: 2rem;
    opacity: 0.9;
    line-height: 1.6;
}

.live-availability {
    margin-top: 2rem;
}

.availability-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255,255,255,0.15);
    padding: 0.8rem 1.5rem;
    border-radius: 50px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
}

.pulse-dot {
    width: 8px;
    height: 8px;
    background: #4ade80;
    border-radius: 50%;
    animation: pulse 2s infinite;
}

.social-proof {
    padding: 2rem 0;
    background: #f8fafc;
    text-align: center;
}

.review-snippet {
    max-width: 600px;
    margin: 0 auto;
}

.stars {
    color: #fbbf24;
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.daily-fresh-banner {
    background: linear-gradient(135deg, #fef3c7 0%, #f59e0b 100%);
    padding: 3rem 0;
}

.fresh-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
}

.fresh-header h2 {
    font-size: 2.5rem;
    color: #92400e;
}

.fresh-count {
    background: rgba(255,255,255,0.8);
    padding: 0.5rem 1rem;
    border-radius: 25px;
    color: #92400e;
    font-weight: 600;
}

.fresh-flavors {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.flavor-tag {
    background: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    color: #92400e;
    font-weight: 500;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.flavor-tag:hover {
    transform: translateY(-2px);
}

.menu-nav {
    background: white;
    border-bottom: 2px solid #e5e7eb;
    padding: 1rem 0;
    z-index: 100;
}

.menu-nav.sticky-nav {
    position: sticky;
    top: 80px;
}

.nav-items {
    display: flex;
    gap: 2rem;
    overflow-x: auto;
    padding-bottom: 0.5rem;
}

.nav-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
    text-decoration: none;
    color: #6b7280;
    transition: all 0.3s ease;
    white-space: nowrap;
    padding: 0.5rem 1rem;
    border-radius: 12px;
}

.nav-