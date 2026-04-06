</main>

<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Firmeninfo -->
            <div>
                <h3 class="text-xl font-bold mb-4">Flora Kaffee & Eisbar</h3>
                <p class="mb-2">Marrensdamm 4</p>
                <p class="mb-2">24944 Flensburg, Germany</p>
                <p class="mb-2">
                    <a href="tel:015209861052" class="hover:text-yellow-300">
                        📞 01520 9861052
                    </a>
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="index.php" class="hover:text-yellow-300">Startseite</a></li>
                    <li><a href="speisekarte.php" class="hover:text-yellow-300">Speisekarte</a></li>
                    <li><a href="standorte.php" class="hover:text-yellow-300">Standorte</a></li>
                    <li><a href="eismanufaktur.php" class="hover:text-yellow-300">Eismanufaktur</a></li>
                    <li><a href="events.php" class="hover:text-yellow-300">Events & Catering</a></li>
                    <li><a href="kontakt.php" class="hover:text-yellow-300">Kontakt</a></li>
                </ul>
            </div>

            <!-- Öffnungszeiten -->
            <div>
                <h3 class="text-xl font-bold mb-4">Öffnungszeiten</h3>
                <div class="space-y-1">
                    <p><strong>März:</strong></p>
                    <p>Täglich 13-18 Uhr</p>
                    <p><strong>Ab April:</strong></p>
                    <p>Täglich 12-19 Uhr</p>
                </div>
            </div>

            <!-- Spezialitäten -->
            <div>
                <h3 class="text-xl font-bold mb-4">Unsere Spezialitäten</h3>
                <ul class="space-y-1 text-sm">
                    <li>🍦 Hausgemachtes Gelato</li>
                    <li>☕ ONOMA-Röstung Kaffee</li>
                    <li>🧇 Frische Waffeln</li>
                    <li>🎂 Eistorten-Konfigurator</li>
                    <li>🚚 Mobile Eistresen</li>
                    <li>📱 3D-Rundgänge</li>
                </ul>
            </div>
        </div>

        <hr class="my-8 border-gray-600">
        
        <div class="flex flex-col md:flex-row justify-between items-center">
            <p>&copy; <?= date('Y') ?> Flora Kaffee & Eisbar. Alle Rechte vorbehalten.</p>
            <p class="text-sm text-gray-400 mt-2 md:mt-0">
                Demo erstellt von <a href="#" class="text-yellow-300 hover:text-yellow-200">FördeLab</a>
            </p>
        </div>
    </div>
</footer>

    <script src="assets/js/animations.js"></script>

<!-- Sticky Contact Bar (Mobile) -->
<div class="sticky-contact-bar">
  <a href="tel:015209861052" class="sticky-btn sticky-btn--call">
    📞 Anrufen
  </a>
  <a href="kontakt.php" class="sticky-btn sticky-btn--contact">
    ✉️ Kontakt
  </a>
</div>

<!-- Floating Action Button (Desktop) -->
<div class="fab-container">
  <button class="fab-main" aria-label="Kontakt">💬</button>
  <div class="fab-options">
    <a href="tel:015209861052" class="fab-option" aria-label="Anrufen">📞</a>
    <a href="kontakt.php" class="fab-option" aria-label="Kontakt">✉️</a>
  </div>
</div>

<!-- Exit Intent Popup -->
<div id="exit-popup" class="exit-popup" style="display:none">
  <div class="exit-popup__inner">
    <button class="exit-popup__close" aria-label="Schliessen">&times;</button>
    <h3>Bevor Sie gehen...</h3>
    <p>Haben Sie Fragen? Wir rufen Sie kostenlos zurueck.</p>
    <form class="exit-popup__form" method="post" action="kontakt.php">
      <input type="tel" name="callback_phone" placeholder="Ihre Telefonnummer" required>
      <button type="submit" class="btn btn-primary cta-primary">Jetzt zurueckrufen lassen</button>
    </form>
  </div>
</div>
</body>
</html>