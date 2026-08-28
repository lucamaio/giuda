<?php

declare(strict_types=1);

$pageTitle = 'Guide operative per i siti istituzionali';
$pageDescription = 'Consulta le guide Point Service 2026 per pubblicare e gestire correttamente i contenuti dei siti istituzionali comunali.';
$currentPage = 'home';

require __DIR__ . '/includes/header.php';
?>
<main id="main-content">
    <section class="home-hero" aria-labelledby="hero-title">
        <div class="container home-hero__grid">
            <div class="home-hero__content">
                <p class="eyebrow">Guide operative</p>
                <h1 id="hero-title">Gestione del sito istituzionale, passo dopo passo.</h1>
                <p class="home-hero__lead">Consulta le guide dedicate alla pubblicazione e alla gestione dei contenuti dei siti comunali realizzati con il modello WordPress Point Service.</p>
                <div class="home-hero__actions">
                    <a class="button button--primary" href="#guide-list">Consulta le guide <?= ps_icon('arrow-right') ?></a>
                    <a class="button button--secondary" href="#publishing-rules">Regole di pubblicazione</a>
                </div>
                <span class="version-badge">Versione 2026</span>
            </div>
            <div class="hero-visual" aria-hidden="true">
                <div class="hero-visual__window">
                    <div class="hero-visual__bar"><i></i><i></i><i></i></div>
                    <div class="hero-visual__body">
                        <div class="hero-visual__sidebar"><span></span><span></span><span></span><span></span></div>
                        <div class="hero-visual__page">
                            <span class="hero-visual__tag">Comune</span>
                            <strong>Un contenuto chiaro<br>è un servizio migliore.</strong>
                            <div class="hero-visual__line hero-visual__line--long"></div>
                            <div class="hero-visual__line"></div>
                            <div class="hero-visual__cards"><i></i><i></i><i></i></div>
                        </div>
                    </div>
                </div>
                <div class="hero-visual__floating hero-visual__floating--one"><?= ps_icon('check') ?><span>Contenuto completo</span></div>
                <div class="hero-visual__floating hero-visual__floating--two"><span>03</span><strong>Guide disponibili</strong></div>
            </div>
        </div>
    </section>

    <section class="guide-catalog section" id="guide-list" aria-labelledby="guide-list-title">
        <div class="container">
            <div class="section-heading">
                <div><p class="eyebrow">Guide Point Service</p><h2 id="guide-list-title">Scegli una guida</h2><p>Consulta la procedura relativa al contenuto che devi pubblicare.</p></div>
                <label class="guide-search"><span class="sr-only">Cerca una guida</span><?= ps_icon('search') ?><input type="search" placeholder="Cerca una guida" autocomplete="off" data-guide-search></label>
            </div>
            <p class="search-status sr-only" role="status" aria-live="polite" data-search-status></p>
            <div class="guide-grid" data-guide-grid>
                <?php foreach ($guides as $guide): ?>
                    <?php require __DIR__ . '/includes/guide-card.php'; ?>
                <?php endforeach; ?>
            </div>
            <div class="empty-state" data-empty-state hidden><span><?= ps_icon('search') ?></span><h3>Nessuna guida trovata</h3><p>Prova con un termine diverso.</p></div>
        </div>
    </section>

    <section class="publishing-rules section" id="publishing-rules" aria-labelledby="publishing-rules-title">
        <div class="container">
            <div class="section-heading section-heading--compact"><div><p class="eyebrow">Qualità dei contenuti</p><h2 id="publishing-rules-title">Prima di pubblicare</h2><p>Quattro controlli aiutano a rendere ogni informazione più utile e accessibile.</p></div></div>
            <ol class="principles" role="list">
                <li><span>01</span><h3>Titoli chiari</h3><p>Utilizza titoli specifici e comprensibili. Evita titoli generici e testi interamente in maiuscolo.</p></li>
                <li><span>02</span><h3>Contenuti non duplicati</h3><p>Titolo, descrizione breve e contenuto completo devono fornire informazioni differenti.</p></li>
                <li><span>03</span><h3>Documenti accessibili</h3><p>Pubblica documenti correttamente denominati e, quando possibile, accessibili.</p></li>
                <li><span>04</span><h3>Riutilizza i contenuti</h3><p>Prima di creare nuovi uffici, persone o luoghi verifica sempre che non siano già presenti.</p></li>
            </ol>
        </div>
    </section>

    <section class="help-banner section">
        <div class="container"><div class="help-banner__inner"><div><p class="eyebrow">Un metodo condiviso</p><h2>Pubblicare bene significa aiutare i cittadini.</h2></div><p>Usa le guide come lista di controllo durante l’inserimento dei contenuti e verifica sempre il risultato sul sito pubblico.</p></div></div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
