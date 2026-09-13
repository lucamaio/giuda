<?php

declare(strict_types=1);

$pageTitle = 'Video guide del portale precedente';
$pageDescription = 'Archivio delle video guide Point Service dedicate alla gestione della precedente versione del portale comunale.';
$currentPage = 'video-guide';
$breadcrumbCurrent = 'Video guide';

$videoGuides = [
    [
        'number' => '01',
        'title' => 'Il modello di sito comunale',
        'description' => 'Introduzione al modello realizzato secondo le linee guida di design per i siti dei Comuni.',
        'image' => 'assets/img/video-guide/comuni-pattern.png',
        'video' => 'assets/video/01_registrazione_wordpress.mov',
    ],
    [
        'number' => '02',
        'title' => 'Content type',
        'description' => 'Una panoramica delle tipologie di contenuto e delle relazioni che le collegano nel portale.',
        'image' => 'assets/img/video-guide/content-type.png',
        'video' => 'assets/video/02_registrazione_wordpress.mov',
    ],
    [
        'number' => '03',
        'title' => 'Punti di contatto',
        'description' => 'Come inserire e organizzare i recapiti utilizzati nei diversi contenuti del sito.',
        'image' => 'assets/img/video-guide/punti-contatto.png',
        'video' => 'assets/video/03_registrazione_wordpress.mov',
    ],
    [
        'number' => '04',
        'title' => 'Organizzazioni',
        'description' => 'Come gestire Giunta, Consiglio, uffici e le relative persone pubbliche.',
        'image' => 'assets/img/video-guide/organizzazioni.png',
        'video' => 'assets/video/04_registrazione_wordpress.mov',
    ],
    [
        'number' => '05',
        'title' => 'Notizie e documenti',
        'description' => 'Come aggiungere, modificare, eliminare e mettere in evidenza le notizie del portale.',
        'image' => 'assets/img/video-guide/notizie.png',
        'video' => 'assets/video/05_registrazione_wordpress.mov',
    ],
];

require __DIR__ . '/includes/header.php';
?>
<main id="main-content" class="video-library-page">
    <div class="container video-library-page__top">
        <?php require __DIR__ . '/includes/breadcrumb.php'; ?>

        <header class="video-library-hero">
            <div class="video-library-hero__content">
                <p class="eyebrow">Archivio video</p>
                <h1>Le guide del portale precedente, sempre disponibili.</h1>
                <p class="video-library-hero__lead">Cinque tutorial per ritrovare procedure e concetti della precedente versione del portale Point Service.</p>
                <div class="video-library-hero__meta" aria-label="Informazioni sulla raccolta">
                    <span><?= ps_icon('play') ?> 5 video</span>
                    <span>Modello Comuni 2023</span>
                </div>
            </div>
            <div class="video-library-hero__visual" aria-hidden="true">
                <img src="<?= ps_escape(ps_url('assets/img/video-guide/comuni-pattern.png')) ?>" alt="">
                <span class="video-library-hero__play"><?= ps_icon('play') ?></span>
            </div>
        </header>

        <aside class="video-archive-note">
            <span class="video-archive-note__icon"><?= ps_icon('document') ?></span>
            <p><strong>Contenuti di archivio.</strong> Questi filmati fanno riferimento alla versione precedente del portale. Per le procedure aggiornate consulta le <a href="<?= ps_escape(ps_url('index.php#guide-list')) ?>">guide operative 2026</a>.</p>
        </aside>
    </div>

    <section class="video-library section" id="raccolta-video" aria-labelledby="video-library-title">
        <div class="container">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">Raccolta completa</p>
                    <h2 id="video-library-title">Scegli un video</h2>
                    <p>Seleziona una card per avviare il tutorial. Il filmato viene caricato solamente quando lo apri.</p>
                </div>
            </div>

            <div class="video-grid">
                <?php foreach ($videoGuides as $videoGuide): ?>
                    <?php
                    $videoUrl = ps_url($videoGuide['video']);
                    $posterUrl = ps_url($videoGuide['image']);
                    ?>
                    <article class="video-card">
                        <a
                            class="video-card__media"
                            href="<?= ps_escape($videoUrl) ?>"
                            data-video-open
                            data-video-title="<?= ps_escape($videoGuide['title']) ?>"
                            data-video-description="<?= ps_escape($videoGuide['description']) ?>"
                            data-video-poster="<?= ps_escape($posterUrl) ?>"
                            aria-label="Riproduci il video <?= ps_escape($videoGuide['title']) ?>"
                        >
                            <img src="<?= ps_escape($posterUrl) ?>" alt="" loading="lazy" width="1600" height="960">
                            <span class="video-card__play" aria-hidden="true"><?= ps_icon('play') ?></span>
                        </a>
                        <div class="video-card__body">
                            <span class="video-card__number">Video <?= ps_escape($videoGuide['number']) ?></span>
                            <h2><?= ps_escape($videoGuide['title']) ?></h2>
                            <p><?= ps_escape($videoGuide['description']) ?></p>
                            <a
                                class="video-card__action"
                                href="<?= ps_escape($videoUrl) ?>"
                                data-video-open
                                data-video-title="<?= ps_escape($videoGuide['title']) ?>"
                                data-video-description="<?= ps_escape($videoGuide['description']) ?>"
                                data-video-poster="<?= ps_escape($posterUrl) ?>"
                            >Guarda il video <?= ps_icon('arrow-right') ?></a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <dialog class="video-dialog" data-video-dialog aria-labelledby="video-dialog-title">
        <div class="video-dialog__topbar">
            <span>Video guida</span>
            <button type="button" data-video-close aria-label="Chiudi il video"><span aria-hidden="true">&times;</span></button>
        </div>
        <video class="video-dialog__player" data-video-player controls playsinline preload="none">
            Il browser non riesce a riprodurre questo filmato.
        </video>
        <div class="video-dialog__content">
            <div>
                <h2 id="video-dialog-title" data-video-title></h2>
                <p data-video-description></p>
            </div>
            <a class="button button--secondary" href="#" data-video-direct-link target="_blank" rel="noopener">Apri il file video</a>
        </div>
    </dialog>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
