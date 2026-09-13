<?php

declare(strict_types=1);

$pageTitle = 'Guide operative per i siti istituzionali';
$pageDescription = 'Consulta le guide Point Service 2026 per pubblicare e gestire correttamente i contenuti dei siti istituzionali comunali.';
$currentPage = 'home';

require __DIR__ . '/includes/header.php';
$availableGuideCount = count(array_filter($guides, static fn (array $guide): bool => (bool) ($guide['available'] ?? false)));
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
                    <a class="button button--publication" href="<?= ps_escape(ps_url('regole-pubblicazione.php')) ?>"><?= ps_icon('shield') ?> Regole di pubblicazione</a>
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
                <div class="hero-visual__floating hero-visual__floating--two"><span><?= str_pad((string) $availableGuideCount, 2, '0', STR_PAD_LEFT) ?></span><strong>Guide disponibili</strong></div>
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

    <section class="video-archive-teaser section" aria-labelledby="video-archive-title">
        <div class="container">
            <div class="video-archive-teaser__inner">
                <span class="video-archive-teaser__icon"><?= ps_icon('play') ?></span>
                <div>
                    <p class="eyebrow">Archivio video</p>
                    <h2 id="video-archive-title">Le video guide del portale precedente</h2>
                    <p>Rivedi i tutorial dedicati al modello dei siti comunali, ai contenuti, ai punti di contatto, alle organizzazioni e alle notizie.</p>
                </div>
                <a class="button button--primary" href="<?= ps_escape(ps_url('video-guide.php')) ?>">Guarda i video <?= ps_icon('arrow-right') ?></a>
            </div>
        </div>
    </section>

    <section class="accessibility-teaser section" aria-labelledby="accessibility-teaser-title">
        <div class="container">
            <div class="accessibility-teaser__inner">
                <span class="accessibility-teaser__icon"><?= ps_icon('shield') ?></span>
                <div>
                    <p class="eyebrow">Accessibilità editoriale</p>
                    <h2 id="accessibility-teaser-title">Contenuti chiari e accessibili per tutti.</h2>
                    <p>Consulta le regole per testi, immagini, documenti, collegamenti e controlli prima della pubblicazione.</p>
                </div>
                <a class="button button--light" href="<?= ps_escape(ps_url('regole-pubblicazione.php')) ?>">Consulta le regole <?= ps_icon('arrow-right') ?></a>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
