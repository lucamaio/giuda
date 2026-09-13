<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/components.php';

$pageTitle = $pageTitle ?? 'Guide operative';
$pageDescription = $pageDescription ?? 'Guide operative Point Service per la gestione dei siti istituzionali.';
$currentPage = $currentPage ?? '';
$isGuideMenuCurrent = in_array($currentPage, ['guide', 'publishing-rules', 'video-guide'], true);
?>
<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= ps_escape($pageDescription) ?>">
    <meta name="theme-color" content="#193C67">
    <title><?= ps_escape($pageTitle) ?> | Guide Point Service</title>
    <link rel="icon" type="image/png" href="<?= ps_escape(ps_url('assets/img/logo-point-service.png')) ?>">
    <link rel="stylesheet" href="<?= ps_escape(ps_url('assets/css/style.css')) ?>">
    <script src="<?= ps_escape(ps_url('assets/js/main.js')) ?>" defer></script>
</head>
<body>
<a class="skip-link" href="#main-content">Salta al contenuto principale</a>
<header class="site-header">
    <div class="container site-header__inner">
        <a class="brand" href="<?= ps_escape(ps_url('index.php')) ?>" aria-label="Point Service S.r.l. — Home guide">
            <img class="brand__logo" src="<?= ps_escape(ps_url('assets/img/logo-point-service.png')) ?>" width="52" height="52" alt="Logo Point Service S.r.l.">
            <span class="brand__text"><strong>Point Service S.r.l.</strong><span>Guide operative per i siti istituzionali</span></span>
        </a>
        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation">
            <span class="nav-toggle__label">Menu</span><?= ps_icon('menu') ?>
        </button>
        <nav class="site-nav" id="primary-navigation" aria-label="Navigazione principale">
            <a href="<?= ps_escape(ps_url('index.php')) ?>"<?= $currentPage === 'home' ? ' aria-current="page"' : '' ?>>Home</a>
            <details class="site-nav__group">
                <summary class="site-nav__parent<?= $isGuideMenuCurrent ? ' site-nav__parent--current' : '' ?>">
                    <span>Guide</span><?= ps_icon('chevron-right', 'site-nav__chevron') ?>
                </summary>
                <div class="site-nav__submenu">
                    <a href="<?= ps_escape(ps_url('index.php#guide-list')) ?>"<?= $currentPage === 'guide' ? ' aria-current="page"' : '' ?>><strong>Tutte le guide</strong><span>Consulta le procedure disponibili</span></a>
                    <a href="<?= ps_escape(ps_url('regole-pubblicazione.php')) ?>"<?= $currentPage === 'publishing-rules' ? ' aria-current="page"' : '' ?>><strong>Regole di pubblicazione</strong><span>Testi, immagini e documenti accessibili</span></a>
                    <a href="<?= ps_escape(ps_url('video-guide.php')) ?>"<?= $currentPage === 'video-guide' ? ' aria-current="page"' : '' ?>><strong>Video guide</strong><span>Rivedi i tutorial del vecchio portale</span></a>
                </div>
            </details>
            <a href="<?= ps_escape(ps_url('contatti.php')) ?>"<?= $currentPage === 'contatti' ? ' aria-current="page"' : '' ?>>Contatti</a>
        </nav>
    </div>
</header>

