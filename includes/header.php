<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>Flora Kaffee &amp; Eisbar</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <a href="index.php">Flora Kaffee &amp; Eisbar</a>
                </div>
                
                <input type="checkbox" id="nav-toggle" class="nav-toggle">
                <label for="nav-toggle" class="nav-toggle-label">
                    <span></span>
                </label>
                
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link<?php echo (isset($currentPage) && $currentPage === 'index') ? ' active' : ''; ?>">Startseite</a>
                    </li>
                    <li class="nav-item">
                        <a href="speisekarte.php" class="nav-link<?php echo (isset($currentPage) && $currentPage === 'speisekarte') ? ' active' : ''; ?>">Speisekarte</a>
                    </li>
                    <li class="nav-item">
                        <a href="standorte.php" class="nav-link<?php echo (isset($currentPage) && $currentPage === 'standorte') ? ' active' : ''; ?>">Standorte</a>
                    </li>
                    <li class="nav-item">
                        <a href="eismanufaktur.php" class="nav-link<?php echo (isset($currentPage) && $currentPage === 'eismanufaktur') ? ' active' : ''; ?>">Eismanufaktur</a>
                    </li>
                    <li class="nav-item">
                        <a href="events.php" class="nav-link<?php echo (isset($currentPage) && $currentPage === 'events') ? ' active' : ''; ?>">Events &amp; Eistorten</a>
                    </li>
                    <li class="nav-item">
                        <a href="kontakt.php" class="nav-link<?php echo (isset($currentPage) && $currentPage === 'kontakt') ? ' active' : ''; ?>">Kontakt</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <main>