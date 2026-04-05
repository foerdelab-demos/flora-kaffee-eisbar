<?php
$firmendaten = [
    "name" => "Flora Kaffee & Eisbar",
    "phone" => "01520 9861052",
    "address" => "Marrensdamm 4, 24944 Flensburg, Germany",
    "city" => "Flensburg",
    "opening_hours" => "März: Täglich 13–18 Uhr, Ab April: Täglich 12–19 Uhr",
    "specialties" => ["Hausgemachtes Gelato", "Barista-Kaffee mit ONOMA-Röstung", "Frische Waffeln", "Zwei Standorte", "Eistorten", "3D-Rundgänge", "Event-Catering"]
];

$navigation = [
    ["label" => "Startseite", "href" => "index.php"],
    ["label" => "Speisekarte", "href" => "speisekarte.php"],
    ["label" => "Standorte", "href" => "standorte.php"],
    ["label" => "Eismanufaktur", "href" => "eismanufaktur.php"],
    ["label" => "Events & Eistorten", "href" => "events.php"],
    ["label" => "Kontakt", "href" => "kontakt.php"]
];
?>

</main>

<footer class="bg-dark text-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="text-primary mb-3"><?= $firmendaten['name'] ?></h5>
                <p class="mb-2">
                    <i class="fas fa-map-marker-alt me-2"></i>
                    <?= $firmendaten['address'] ?>
                </p>
                <p class="mb-2">
                    <i class="fas fa-phone me-2"></i>
                    <a href="tel:<?= $firmendaten['phone'] ?>" class="text-light text-decoration-none">
                        <?= $firmendaten['phone'] ?>
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="text-primary mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <?php foreach ($navigation as $item): ?>
                    <li class="mb-2">
                        <a href="<?= $item['href'] ?>" class="text-light text-decoration-none">
                            <i class="fas fa-chevron-right me-2"></i>
                            <?= $item['label'] ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="text-primary mb-3">Öffnungszeiten</h5>
                <p class="mb-3"><?= $firmendaten['opening_hours'] ?></p>
                <p class="text-info mb-0">
                    <i class="fas fa-info-circle me-2"></i>
                    Aktuelle Öffnungszeiten können saisonal variieren
                </p>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="text-primary mb-3">Unsere Spezialitäten</h5>
                <ul class="list-unstyled">
                    <?php foreach (array_slice($firmendaten['specialties'], 0, 5) as $specialty): ?>
                    <li class="mb-1">
                        <i class="fas fa-star text-warning me-2"></i>
                        <?= $specialty ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <hr class="my-4 border-secondary">
        
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="mb-0">
                    &copy; <?= date('Y') ?> <?= $firmendaten['name'] ?>. Alle Rechte vorbehalten.
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <small class="text-muted">
                    Demo erstellt von <strong>FördeLab</strong>
                </small>
            </div>
        </div>
    </div>
</footer>

</body>
</html>