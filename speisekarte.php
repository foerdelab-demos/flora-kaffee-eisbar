<?php $currentPage = 'speisekarte'; require 'includes/header.php'; ?>

<?php
// Speisekarte Daten
$neuheiten = [
    ['name' => 'Grilled Cheese Sandwich', 'price' => '5,50€', 'description' => 'Knusprig geröstetes Sandwich mit geschmolzenem Käse (nur in Weiche)'],
    ['name' => 'Hot Turkey Sandwich', 'price' => '6,50€', 'description' => 'Warmes Sandwich mit saftigem Truthahn, frischem Salat und hausgemachter Sauce'],
    ['name' => 'Avocado Toast', 'price' => '4,80€', 'description' => 'Geröstetes Brot mit cremiger Avocado, Tomaten und Gewürzen'],
    ['name' => 'Bagel mit Lachs', 'price' => '7,20€', 'description' => 'Frischer Bagel mit geräuchertem Lachs, Frischkäse und Kräutern']
];

$heissgetraenke = [
    ['name' => 'Flat White', 'price' => '3,80€', 'description' => 'Barista-Kaffee mit ONOMA-Röstung – doppelter Ristretto mit samtig aufgeschäumter Milch'],
    ['name' => 'Cappuccino', 'price' => '4,00€', 'description' => 'Klassischer Siebträger-Cappuccino mit ONOMA-Röstung – kräftig, ausgewogen und sorgfältig zubereitet'],
    ['name' => 'Latte Macchiato', 'price' => '4,20€', 'description' => 'Geschichteter Milchkaffee in hohem Glas'],
    ['name' => 'Espresso', 'price' => '2,80€', 'description' => 'Perfekt extrahierter italienischer Espresso'],
    ['name' => 'Americano', 'price' => '3,20€', 'description' => 'Espresso mit heißem Wasser verlängert'],
    ['name' => 'Heiße Schokolade', 'price' => '3,90€', 'description' => 'Cremige heiße Schokolade mit Sahne'],
    ['name' => 'Chai Latte', 'price' => '4,10€', 'description' => 'Gewürzter Tee mit aufgeschäumter Milch']
];

$waffeln = [
    ['name' => 'Klassische Waffel', 'price' => '3,50€', 'description' => 'Frisch gebackene belgische Waffel mit Puderzucker'],
    ['name' => 'Waffel mit Eis', 'price' => '5,80€', 'description' => 'Warme Waffel mit zwei Kugeln hausgemachtem Gelato'],
    ['name' => 'Waffel Flora Spezial', 'price' => '7,20€', 'description' => 'Waffel mit Eis, Sahne, frischen Früchten und Schokosoße'],
    ['name' => 'Waffel mit Nutella', 'price' => '4,90€', 'description' => 'Knusprige Waffel mit cremigem Nutella'],
    ['name' => 'Früchtewaffel', 'price' => '6,50€', 'description' => 'Waffel mit saisonalen Früchten und Sahne']
];

$eisbecher = [
    ['name' => 'Spaghetti Eis', 'price' => '4,80€', 'description' => 'Klassiker durch die Spätzlepresse mit Erdbeersoße'],
    ['name' => 'Heiße Liebe', 'price' => '5,20€', 'description' => 'Vanilleeis mit heißen Himbeeren und Sahne'],
    ['name' => 'Schwarzwälder Kirsch', 'price' => '6,80€', 'description' => 'Schokoladen- und Vanilleeis mit Kirschen und Sahne'],
    ['name' => 'Flora Becher Spezial', 'price' => '7,50€', 'description' => 'Drei Kugeln Eis mit Früchten, Sahne und Schokosoße'],
    ['name' => 'Bananensplit', 'price' => '6,20€', 'description' => 'Drei Kugeln Eis mit halber Banane und Toppings'],
    ['name' => 'Eiskaffee', 'price' => '4,90€', 'description' => 'Kalter Kaffee mit Vanilleeis und Sahne']
];

$kaltgetraenke = [
    ['name' => 'Cold Brew Coffee', 'price' => '3,60€', 'description' => 'Kalt gebrühter Kaffee, mild und aromatisch'],
    ['name' => 'Iced Latte', 'price' => '4,40€', 'description' => 'Espresso mit kalter Milch und Eis'],
    ['name' => 'Frappuccino', 'price' => '4,80€', 'description' => 'Cremiger Kaffee-Milchshake mit Sahne'],
    ['name' => 'Fresh Orange Juice', 'price' => '3,20€', 'description' => 'Frisch gepresster Orangensaft'],
    ['name' => 'Limonade', 'price' => '2,80€', 'description' => 'Hausgemachte Zitronenlimonade'],
    ['name' => 'Eistee', 'price' => '3,00€', 'description' => 'Verschiedene Sorten hausgemachter Eistee']
];

$basics = [
    ['name' => 'Croissant', 'price' => '2,20€', 'description' => 'Frisches französisches Croissant'],
    ['name' => 'Muffin', 'price' => '2,80€', 'description' => 'Hausgebackener Muffin verschiedener Sorten'],
    ['name' => 'Kuchen des Tages', 'price' => '3,50€', 'description' => 'Täglich wechselnde hausgemachte Kuchenauswahl'],
    ['name' => 'Pretzel', 'price' => '1,80€', 'description' => 'Frische Laugenbrezeln'],
    ['name' => 'Cookies', 'price' => '2,40€', 'description' => 'Hausgemachte Cookies verschiedener Sorten']
];
?>

<main>
    <section class="hero hero-menu">
        <div class="container">
            <div class="hero-content">
                <h1>Unsere Speisekarte</h1>
                <p class="hero-subtitle">Eine Karte für beide Standorte: Entdecken Sie alle Eisbecher, Waffeln, Drinks und Klassiker der Flora Kaffee & Eisbar. Von Neuheiten wie Grilled Cheese Sandwiches bis hin zu klassischen Eisbechern.</p>
            </div>
        </div>
    </section>

    <section class="menu-highlights">
        <div class="container">
            <h2>Highlights unserer Karte</h2>
            <p>Probieren Sie unsere neuen Grilled Cheese Sandwiches (nur in Weiche), genießen Sie klassische Eisbecher oder unseren perfekt zubereiteten Flat White mit doppeltem Ristretto.</p>
            <div class="highlights-grid">
                <div class="highlight-card">
                    <div class="highlight-icon"></div>
                    <h3>Grilled Cheese</h3>
                    <span class="price">5,50€</span>
                    <p>Knusprig geröstetes Sandwich mit geschmolzenem Käse</p>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon"></div>
                    <h3>Hot Turkey</h3>
                    <span class="price">6,50€</span>
                    <p>Warmes Sandwich mit saftigem Truthahn</p>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon"></div>
                    <h3>Flat White</h3>
                    <span class="price">3,80€</span>
                    <p>Doppelter Ristretto mit cremiger Milch</p>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon"></div>
                    <h3>Cappuccino</h3>
                    <span class="price">4,00€</span>
                    <p>Klassisch mit ONOMA-Röstung</p>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-section">
        <div class="container">
            <div class="menu-category">
                <h2>Neuheiten</h2>
                <p class="category-description">Entdecken Sie unsere neuesten Kreationen - von herzhaften Sandwiches bis zu innovativen Getränken.</p>
                <div class="menu-items">
                    <?php foreach($neuheiten as $item): ?>
                        <div class="menu-item">
                            <div class="item-header">
                                <h3><?php echo $item['name']; ?></h3>
                                <span class="price"><?php echo $item['price']; ?></span>
                            </div>
                            <p class="item-description"><?php echo $item['description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="menu-category">
                <h2>Heißgetränke</h2>
                <p class="category-description">Perfekt zubereitete Kaffeespezialitäten mit unserer exklusiven ONOMA-Röstung.</p>
                <div class="menu-items">
                    <?php foreach($heissgetraenke as $item): ?>
                        <div class="menu-item">
                            <div class="item-header">
                                <h3><?php echo $item['name']; ?></h3>
                                <span class="price"><?php echo $item['price']; ?></span>
                            </div>
                            <p class="item-description"><?php echo $item['description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="menu-category">
                <h2>Waffeln</h2>
                <p class="category-description">Frisch gebackene belgische Waffeln - klassisch oder mit besonderen Toppings.</p>
                <div class="menu-items">
                    <?php foreach($waffeln as $item): ?>
                        <div class="menu-item">
                            <div class="item-header">
                                <h3><?php echo $item['name']; ?></h3>
                                <span class="price"><?php echo $item['price']; ?></span>
                            </div>
                            <p class="item-description"><?php echo $item['description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="menu-category">
                <h2>Eisbecher</h2>
                <p class="category-description">Klassische und besondere Eisbecher mit unserem hausgemachten Gelato.</p>
                <div class="menu-items">
                    <?php foreach($eisbecher as $item): ?>
                        <div class="menu-item">
                            <div class="item-header">
                                <h3><?php echo $item['name']; ?></h3>
                                <span class="price"><?php echo $item['price']; ?></span>
                            </div>
                            <p class="item-description"><?php echo $item['description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="menu-category">
                <h2>Kaltgetränke</h2>
                <p class="category-description">Erfrischende Getränke für warme Tage - von Cold Brew bis zu frischen Säften.</p>
                <div class="menu-items">
                    <?php foreach($kaltgetraenke as $item): ?>
                        <div class="menu-item">
                            <div class="item-header">
                                <h3><?php echo $item['name']; ?></h3>
                                <span class="price"><?php echo $item['price']; ?></span>
                            </div>
                            <p class="item-description"><?php echo $item['description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="menu-category">
                <h2>Basics & Snacks</h2>
                <p class="category-description">Kleine Leckereien und Gebäck für den süßen oder herzhaften Hunger zwischendurch.</p>
                <div class="menu-items">
                    <?php foreach($basics as $item): ?>
                        <div class="menu-item">
                            <div class="item-header">
                                <h3><?php echo $item['name']; ?></h3>
                                <span class="price"><?php echo $item['price']; ?></span>
                            </div>
                            <p class="item-description"><?php echo $item['description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-info">
        <div class="container">
            <div class="info-grid">
                <div class="info-card">
                    <h3>Allergene & Unverträglichkeiten</h3>
                    <p>Informieren Sie unser Team gerne über Allergien oder Unverträglichkeiten. Wir beraten Sie gerne zu den Inhaltsstoffen unserer Produkte und finden gemeinsam eine passende Alternative.</p>
                </div>
                <div class="info-card">
                    <h3>Saisonale Spezialitäten</h3>
                    <p>Unsere Karte erweitert sich regelmäßig um saisonale Highlights. Fragen Sie nach aktuellen Eissorten, besonderen Getränkevariationen oder limitierten Speisen der Saison.</p>
                </div>
                <div class="info-card">
                    <h3>Standort-Besonderheiten</h3>
                    <p>Einige Neuheiten wie unsere Grilled Cheese Sandwiches sind derzeit nur an unserem Standort in Weiche verfügbar. Informieren Sie sich vor Ihrem Besuch über standortspezifische Angebote.</p>