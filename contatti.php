<?php

declare(strict_types=1);

$pageTitle = 'Contatti e assistenza';
$pageDescription = 'Recapiti, sedi e collegamenti per contattare Point Service S.r.l. e richiedere assistenza.';
$currentPage = 'contatti';
$breadcrumbCurrent = 'Contatti';
$breadcrumbParents = [];

$companyWebsite = 'https://www.p-service.it/';
$supremoDownload = 'https://www.supremocontrol.com/it/supremo-download/windows/#download';

require __DIR__ . '/includes/header.php';
?>
<main id="main-content" class="contact-page">
    <div class="container contact-page__top">
        <?php require __DIR__ . '/includes/breadcrumb.php'; ?>

        <header class="contact-hero">
            <div class="contact-hero__content">
                <p class="eyebrow">Point Service S.r.l.</p>
                <h1>Parliamo del supporto di cui hai bisogno.</h1>
                <p class="contact-hero__lead">Contatta il nostro team per informazioni e assistenza sui servizi Point Service dedicati agli enti e ai siti istituzionali.</p>
                <div class="contact-hero__actions">
                    <a class="button button--primary" href="<?= ps_escape($companyWebsite) ?>" target="_blank" rel="noopener noreferrer">Visita il sito Point Service <?= ps_icon('external') ?></a>
                    <a class="button button--secondary" href="<?= ps_escape($supremoDownload) ?>" target="_blank" rel="noopener noreferrer">Scarica Supremo <?= ps_icon('download') ?></a>
                </div>
            </div>

            <aside class="contact-hero__card" aria-label="Contatto rapido">
                <span class="contact-hero__card-icon"><?= ps_icon('phone') ?></span>
                <p>Contatto rapido</p>
                <a href="tel:+390941802041">0941 802041</a>
                <span>Point Service S.r.l.<br>Furnari (ME)</span>
            </aside>
        </header>
    </div>

    <section class="contact-directory section" aria-labelledby="contact-directory-title">
        <div class="container">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">Recapiti aziendali</p>
                    <h2 id="contact-directory-title">Come contattarci</h2>
                    <p>Scegli il canale più comodo oppure consulta gli indirizzi delle sedi Point Service.</p>
                </div>
            </div>

            <div class="contact-grid">
                <article class="contact-card">
                    <span class="contact-card__icon"><?= ps_icon('phone') ?></span>
                    <div>
                        <p class="contact-card__label">Telefono</p>
                        <h2><a href="tel:+390941802041">0941 802041</a></h2>
                        <p>Chiama Point Service dal tuo telefono.</p>
                    </div>
                </article>

                <article class="contact-card">
                    <span class="contact-card__icon"><?= ps_icon('mail') ?></span>
                    <div>
                        <p class="contact-card__label">Email</p>
                        <h2><a href="mailto:contabilita@p-service.it?subject=Richiesta%20dal%20portale%20guide">contabilita@p-service.it</a></h2>
                        <p>Scrivi un messaggio tramite il tuo programma di posta.</p>
                    </div>
                </article>

                <article class="contact-card contact-card--location">
                    <span class="contact-card__icon"><?= ps_icon('pin') ?></span>
                    <div>
                        <p class="contact-card__label">Sede</p>
                        <h2>Via Orti, 53</h2>
                        <p>98054 Furnari (ME)</p>
                        <a class="contact-card__link" href="https://www.google.com/maps/search/?api=1&amp;query=Via+Orti+53+98054+Furnari+ME" target="_blank" rel="noopener noreferrer">Apri nella mappa <?= ps_icon('external') ?></a>
                    </div>
                </article>

                <article class="contact-card contact-card--location">
                    <span class="contact-card__icon"><?= ps_icon('institution') ?></span>
                    <div>
                        <p class="contact-card__label">Uffici</p>
                        <h2>Via Nuova Russo, 125</h2>
                        <p>98054 Furnari (ME)</p>
                        <a class="contact-card__link" href="https://www.google.com/maps/search/?api=1&amp;query=Via+Nuova+Russo+125+98054+Furnari+ME" target="_blank" rel="noopener noreferrer">Apri nella mappa <?= ps_icon('external') ?></a>
                    </div>
                </article>
            </div>

            <dl class="company-details" aria-label="Altri dati aziendali">
                <div><dt>Partita IVA</dt><dd>02627890839</dd></div>
                <div><dt>Fax</dt><dd>0941 802163</dd></div>
                <div><dt>Località</dt><dd>Furnari (ME)</dd></div>
            </dl>
        </div>
    </section>

    <section class="remote-support section" aria-labelledby="remote-support-title">
        <div class="container">
            <div class="remote-support__inner">
                <div class="remote-support__icon" aria-hidden="true"><?= ps_icon('download') ?></div>
                <div>
                    <p class="eyebrow">Assistenza remota</p>
                    <h2 id="remote-support-title">Scarica Supremo per Windows</h2>
                    <p>Supremo consente al nostro personale di fornirti supporto da remoto. Il collegamento apre la pagina ufficiale dalla quale puoi scaricare il programma.</p>
                </div>
                <a class="button button--primary" href="<?= ps_escape($supremoDownload) ?>" target="_blank" rel="noopener noreferrer">Vai al download <?= ps_icon('download') ?></a>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
