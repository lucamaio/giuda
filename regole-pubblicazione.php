<?php

declare(strict_types=1);

$pageTitle = 'Regole di pubblicazione accessibile';
$pageDescription = 'Regole operative per creare testi, immagini, documenti e contenuti accessibili nei siti istituzionali comunali.';
$currentPage = 'publishing-rules';
$breadcrumbCurrent = 'Regole di pubblicazione';
$breadcrumbParents = [];

require __DIR__ . '/includes/header.php';
?>
<main id="main-content" class="rules-page">
    <div class="container">
        <?php require __DIR__ . '/includes/breadcrumb.php'; ?>

        <header class="rules-hero">
            <div class="rules-hero__content">
                <p class="eyebrow">Accessibilità editoriale</p>
                <h1>Regole di pubblicazione</h1>
                <p class="rules-hero__lead">Indicazioni pratiche per pubblicare contenuti comunali chiari, comprensibili e utilizzabili dal maggior numero possibile di persone, comprese quelle che navigano con tecnologie assistive.</p>
                <div class="rules-hero__actions">
                    <a class="button button--primary" href="#controllo-finale">Vai alla lista di controllo <?= ps_icon('arrow-right') ?></a>
                    <a class="button button--secondary" href="#strumenti-verifica">Strumenti di verifica</a>
                </div>
            </div>
            <aside class="rules-hero__note">
                <?= ps_icon('shield') ?>
                <div>
                    <strong>Accessibile non significa soltanto conforme.</strong>
                    <p>Un contenuto deve essere anche comprensibile, aggiornato e facile da trovare. I validatori automatici aiutano, ma non sostituiscono il controllo umano.</p>
                </div>
            </aside>
        </header>

        <nav class="rules-toc" aria-labelledby="rules-toc-title">
            <div>
                <p class="eyebrow">Indice</p>
                <h2 id="rules-toc-title">Consulta le regole</h2>
            </div>
            <ul>
                <li><a href="#scrittura"><span>01</span>Scrittura e struttura</a></li>
                <li><a href="#immagini-media"><span>02</span>Immagini e media</a></li>
                <li><a href="#documenti-dati"><span>03</span>Documenti e dati</a></li>
                <li><a href="#gestione-contenuti"><span>04</span>Gestione dei contenuti</a></li>
                <li><a href="#controllo-finale"><span>05</span>Controllo finale</a></li>
                <li><a href="#strumenti-verifica"><span>06</span>Validatori e riferimenti</a></li>
            </ul>
        </nav>

        <article class="rules-content">
            <section class="rules-chapter" id="scrittura" aria-labelledby="scrittura-title">
                <header class="rules-chapter__heading">
                    <span>01</span>
                    <div><p class="eyebrow">Contenuti testuali</p><h2 id="scrittura-title">Scrittura e struttura</h2></div>
                </header>
                <div class="rule-grid">
                    <section class="rule-card" id="titoli-chiari">
                        <span class="rule-card__icon"><?= ps_icon('news') ?></span>
                        <h3>Titoli chiari e specifici</h3>
                        <p>Il titolo deve anticipare il contenuto della pagina anche quando viene letto fuori contesto, nei risultati di ricerca o da uno screen reader.</p>
                        <div class="rule-example"><span>Da evitare</span><del>AVVISO IMPORTANTE</del><span>Preferibile</span><strong>Iscrizione al trasporto scolastico 2026/2027</strong></div>
                        <ul>
                            <li>usa una sola formulazione comprensibile;</li>
                            <li>evita tutto maiuscolo, sigle non spiegate e punteggiatura decorativa;</li>
                            <li>non inserire nel titolo informazioni disponibili in campi dedicati.</li>
                        </ul>
                    </section>

                    <section class="rule-card" id="descrizioni-utili">
                        <span class="rule-card__icon"><?= ps_icon('document') ?></span>
                        <h3>Descrizioni utili, non duplicate</h3>
                        <p>La descrizione breve deve completare il titolo e aiutare a decidere se aprire il contenuto. Il testo esteso deve fornire dettagli e istruzioni.</p>
                        <p class="rule-card__note"><strong>Titolo, descrizione breve e testo completo devono avere funzioni diverse.</strong></p>
                    </section>

                    <section class="rule-card" id="linguaggio-semplice">
                        <span class="rule-card__icon"><?= ps_icon('people') ?></span>
                        <h3>Linguaggio semplice</h3>
                        <ul>
                            <li>scrivi frasi brevi e in forma diretta;</li>
                            <li>spiega sigle e termini tecnici al primo utilizzo;</li>
                            <li>indica subito cosa deve fare il cittadino, entro quando e a chi rivolgersi;</li>
                            <li>evita formule burocratiche quando esiste un equivalente comune.</li>
                        </ul>
                    </section>

                    <section class="rule-card" id="paragrafi-intestazioni">
                        <span class="rule-card__icon"><?= ps_icon('sitemap') ?></span>
                        <h3>Paragrafi e intestazioni</h3>
                        <p>Dividi i testi lunghi in paragrafi e usa intestazioni descrittive in ordine gerarchico. Non scegliere un livello di titolo per ottenere soltanto un effetto grafico.</p>
                        <ul>
                            <li>mantieni un titolo principale chiaramente identificabile;</li>
                            <li>non saltare livelli senza motivo;</li>
                            <li>usa elenchi veri per sequenze e gruppi di elementi;</li>
                            <li>allinea normalmente il testo a sinistra.</li>
                        </ul>
                    </section>

                    <section class="rule-card" id="date-recapiti">
                        <span class="rule-card__icon"><?= ps_icon('calendar') ?></span>
                        <h3>Date, orari e recapiti</h3>
                        <p>Scrivi date complete e non affidarti a espressioni relative come “domani” o “la prossima settimana”. Specifica gli orari e verifica che scadenze e recapiti coincidano con quelli degli allegati.</p>
                    </section>

                    <section class="rule-card" id="collegamenti-descrittivi">
                        <span class="rule-card__icon"><?= ps_icon('external') ?></span>
                        <h3>Collegamenti descrittivi</h3>
                        <p>Il testo del collegamento deve dichiarare la destinazione. Evita “clicca qui”, “leggi” o URL completi usati come etichetta.</p>
                        <div class="rule-example"><span>Da evitare</span><del>Clicca qui</del><span>Preferibile</span><strong>Consulta il regolamento del servizio</strong></div>
                        <p>Per file e siti esterni indica, quando utile, formato, dimensione o destinazione.</p>
                    </section>
                </div>
            </section>

            <section class="rules-chapter" id="immagini-media" aria-labelledby="immagini-media-title">
                <header class="rules-chapter__heading">
                    <span>02</span>
                    <div><p class="eyebrow">Contenuti non testuali</p><h2 id="immagini-media-title">Immagini e media</h2></div>
                </header>
                <div class="rule-grid">
                    <section class="rule-card" id="testo-alternativo">
                        <span class="rule-card__icon"><?= ps_icon('image') ?></span>
                        <h3>Testo alternativo delle immagini</h3>
                        <p>Descrivi l'informazione o la funzione dell'immagine nel contesto della pagina. Non limitarti al nome del file e non iniziare automaticamente con “immagine di”.</p>
                        <ul>
                            <li><strong>Informativa:</strong> descrivi ciò che serve a comprendere il contenuto;</li>
                            <li><strong>Funzionale:</strong> indica l'azione o la destinazione;</li>
                            <li><strong>Decorativa:</strong> usa un'alternativa vuota, se il sistema lo consente correttamente;</li>
                            <li><strong>Complessa:</strong> aggiungi anche una spiegazione testuale estesa.</li>
                        </ul>
                        <p class="rule-card__note">Non inserire informazioni essenziali soltanto dentro locandine, infografiche o fotografie.</p>
                    </section>

                    <section class="rule-card" id="immagini-appropriate">
                        <span class="rule-card__icon"><?= ps_icon('gallery') ?></span>
                        <h3>Immagini appropriate</h3>
                        <p>Usa fotografie pertinenti, aggiornate e sufficientemente leggibili. Evita immagini puramente decorative quando rallentano la pagina senza aggiungere informazioni.</p>
                        <p>Non usare un'immagine al posto di un titolo, di una tabella o di un testo che può essere pubblicato in formato HTML.</p>
                    </section>

                    <section class="rule-card" id="video-audio">
                        <span class="rule-card__icon"><?= ps_icon('play') ?></span>
                        <h3>Video e audio</h3>
                        <p>Fornisci sottotitoli accurati per il parlato e una trascrizione per le informazioni sonore. Quando le immagini comunicano contenuti non espressi dall'audio, prevedi una descrizione equivalente.</p>
                        <p>Evita la riproduzione automatica e controlla che comandi e player siano utilizzabili anche da tastiera.</p>
                    </section>

                    <section class="rule-card" id="colori-contrasto">
                        <span class="rule-card__icon"><?= ps_icon('shield') ?></span>
                        <h3>Colori e contrasto</h3>
                        <p>Non usare il solo colore per comunicare stato, errore o importanza. Abbina sempre testo, simboli o forme comprensibili e verifica il contrasto tra primo piano e sfondo.</p>
                    </section>
                </div>
            </section>

            <section class="rules-chapter" id="documenti-dati" aria-labelledby="documenti-dati-title">
                <header class="rules-chapter__heading">
                    <span>03</span>
                    <div><p class="eyebrow">File e informazioni strutturate</p><h2 id="documenti-dati-title">Documenti e dati</h2></div>
                </header>
                <div class="rule-grid">
                    <section class="rule-card" id="nomi-documenti">
                        <span class="rule-card__icon"><?= ps_icon('document') ?></span>
                        <h3>Titoli e nomi dei documenti</h3>
                        <p>Il titolo visibile e il nome del file devono spiegare il contenuto e, quando utile, anno o versione.</p>
                        <div class="rule-example"><span>Da evitare</span><del>scan001_def.pdf</del><span>Preferibile</span><strong>modulo-iscrizione-trasporto-scolastico-2026.pdf</strong></div>
                        <p>Nel testo del collegamento indica il formato e, quando disponibile, la dimensione del file.</p>
                    </section>

                    <section class="rule-card" id="documenti-accessibili">
                        <span class="rule-card__icon"><?= ps_icon('download') ?></span>
                        <h3>Documenti accessibili</h3>
                        <ul>
                            <li>parti dal documento originale, non da una scansione;</li>
                            <li>usa titoli, elenchi e tabelle strutturati;</li>
                            <li>imposta lingua, titolo del documento e ordine di lettura;</li>
                            <li>aggiungi alternative alle immagini;</li>
                            <li>verifica che il testo sia selezionabile e ricercabile.</li>
                        </ul>
                        <p class="rule-card__note">Quando possibile pubblica le informazioni principali anche nella pagina HTML, non soltanto nel PDF.</p>
                    </section>

                    <section class="rule-card" id="tabelle">
                        <span class="rule-card__icon"><?= ps_icon('services') ?></span>
                        <h3>Tabelle comprensibili</h3>
                        <p>Usa le tabelle solo per dati che richiedono righe e colonne. Indica chiaramente intestazioni e significato dei dati; evita celle vuote usate per creare spazi o impaginazioni.</p>
                        <p>Per tabelle complesse valuta una versione semplificata o una spiegazione testuale equivalente.</p>
                    </section>

                    <section class="rule-card" id="moduli">
                        <span class="rule-card__icon"><?= ps_icon('requests') ?></span>
                        <h3>Moduli e istruzioni</h3>
                        <p>Ogni campo deve avere un'etichetta comprensibile. Indica quali dati sono obbligatori, fornisci istruzioni prima dell'inserimento e scrivi messaggi di errore che spieghino come correggere il problema.</p>
                    </section>
                </div>
            </section>

            <section class="rules-chapter" id="gestione-contenuti" aria-labelledby="gestione-contenuti-title">
                <header class="rules-chapter__heading">
                    <span>04</span>
                    <div><p class="eyebrow">Qualità nel tempo</p><h2 id="gestione-contenuti-title">Gestione dei contenuti</h2></div>
                </header>
                <div class="rule-grid">
                    <section class="rule-card" id="contenuti-duplicati">
                        <span class="rule-card__icon"><?= ps_icon('sitemap') ?></span>
                        <h3>Non duplicare i contenuti</h3>
                        <p>Prima di creare persone, uffici, luoghi, documenti o servizi, cerca la scheda esistente. Aggiornala e collegala agli altri contenuti invece di crearne una copia.</p>
                        <p class="rule-card__note"><strong>Una sola fonte aggiornata è più accessibile di più pagine con informazioni discordanti.</strong></p>
                    </section>

                    <section class="rule-card" id="contenuti-aggiornati">
                        <span class="rule-card__icon"><?= ps_icon('calendar') ?></span>
                        <h3>Contenuti aggiornati</h3>
                        <p>Controlla periodicamente scadenze, orari, recapiti, incarichi, responsabili e collegamenti. Per un aggiornamento usa la scheda esistente e verifica anche allegati e contenuti collegati.</p>
                    </section>

                    <section class="rule-card" id="dati-personali">
                        <span class="rule-card__icon"><?= ps_icon('shield') ?></span>
                        <h3>Dati personali e informazioni necessarie</h3>
                        <p>Prima di pubblicare controlla documenti e immagini per evitare la diffusione impropria di firme, recapiti privati, dati sanitari o altre informazioni non necessarie.</p>
                        <p>L'accessibilità non elimina gli obblighi relativi a riservatezza, trasparenza e conservazione.</p>
                    </section>

                    <section class="rule-card" id="anteprima-pubblica">
                        <span class="rule-card__icon"><?= ps_icon('search') ?></span>
                        <h3>Controllare la pagina pubblica</h3>
                        <p>Non fermarti al pannello di amministrazione. Apri la pagina pubblica, prova collegamenti e download, controlla la lettura da smartphone e verifica che l'informazione principale sia facile da individuare.</p>
                    </section>
                </div>
            </section>

            <section class="rules-check" id="controllo-finale" aria-labelledby="controllo-finale-title">
                <div class="rules-check__intro">
                    <p class="eyebrow">Prima di pubblicare</p>
                    <h2 id="controllo-finale-title">Lista di controllo essenziale</h2>
                    <p>Questi controlli non sostituiscono una verifica completa, ma aiutano a prevenire gli errori editoriali più frequenti.</p>
                </div>
                <?php ps_checklist([
                    'Titolo specifico e comprensibile',
                    'Descrizione breve non duplicata',
                    'Paragrafi e intestazioni ordinati',
                    'Collegamenti con etichette descrittive',
                    'Testi alternativi appropriati',
                    'Informazioni non affidate al solo colore',
                    'Documenti nominati e accessibili',
                    'Date, recapiti e scadenze verificati',
                    'Nessun contenuto duplicato',
                    'Nessun dato personale improprio',
                    'Pagina controllata da smartphone',
                    'Navigazione e azioni provate da tastiera',
                ]); ?>
            </section>

            <section class="validators" id="strumenti-verifica" aria-labelledby="strumenti-verifica-title">
                <header class="validators__heading">
                    <p class="eyebrow">Verifica e approfondimento</p>
                    <h2 id="strumenti-verifica-title">Validatori e riferimenti</h2>
                    <p>Usa più strumenti e completa sempre l'analisi automatica con controlli manuali. Un risultato senza errori non garantisce da solo che il sito sia accessibile.</p>
                </header>
                <div class="validator-grid">
                    <article class="validator-card validator-card--featured">
                        <span class="validator-card__icon"><?= ps_icon('institution') ?></span>
                        <div><span class="validator-card__type">Comuni e scuole</span><h3>App di valutazione dei modelli</h3><p>Strumento del Dipartimento per la trasformazione digitale per controllare qualità e criteri di conformità dei siti di Comuni e scuole.</p></div>
                        <a href="https://innovazione.gov.it/notizie/articoli/app-di-valutazione-per-i-siti-di-comuni-e-scuole-pubblicata-la-versione-2-0/">Consulta l'App di valutazione <?= ps_icon('external') ?><span class="sr-only"> sul sito del Dipartimento per la trasformazione digitale</span></a>
                    </article>

                    <article class="validator-card">
                        <span class="validator-card__icon"><?= ps_icon('shield') ?></span>
                        <div><span class="validator-card__type">Accessibilità WCAG</span><h3>MAUVE++ del CNR</h3><p>Valuta singole pagine, siti e documenti PDF secondo le linee guida WCAG e restituisce un rapporto delle verifiche.</p></div>
                        <a href="https://mauve.isti.cnr.it/">Apri MAUVE++ <?= ps_icon('external') ?><span class="sr-only"> sul sito CNR</span></a>
                    </article>

                    <article class="validator-card">
                        <span class="validator-card__icon"><?= ps_icon('document') ?></span>
                        <div><span class="validator-card__type">Codice HTML</span><h3>W3C HTML Checker</h3><p>Controlla la correttezza della struttura HTML e segnala errori che possono interferire con browser e tecnologie assistive.</p></div>
                        <a href="https://validator.w3.org/nu/">Valida il codice HTML <?= ps_icon('external') ?><span class="sr-only"> con il servizio W3C</span></a>
                    </article>

                    <article class="validator-card">
                        <span class="validator-card__icon"><?= ps_icon('services') ?></span>
                        <div><span class="validator-card__type">Fogli di stile</span><h3>W3C CSS Validator</h3><p>Controlla la conformità dei fogli di stile CSS agli standard del Web.</p></div>
                        <a href="https://jigsaw.w3.org/css-validator/">Valida i fogli di stile <?= ps_icon('external') ?><span class="sr-only"> con il servizio W3C</span></a>
                    </article>

                    <article class="validator-card">
                        <span class="validator-card__icon"><?= ps_icon('search') ?></span>
                        <div><span class="validator-card__type">Scelta degli strumenti</span><h3>Elenco W3C WAI</h3><p>Catalogo di strumenti per valutazioni automatiche, manuali e guidate dell'accessibilità.</p></div>
                        <a href="https://www.w3.org/WAI/test-evaluate/tools/list/">Consulta gli strumenti WAI <?= ps_icon('external') ?><span class="sr-only"> sul sito W3C</span></a>
                    </article>

                    <article class="validator-card">
                        <span class="validator-card__icon"><?= ps_icon('institution') ?></span>
                        <div><span class="validator-card__type">Riferimento italiano</span><h3>Linee guida AgID</h3><p>Raccolta ufficiale delle linee guida e degli allegati applicabili all'accessibilità degli strumenti informatici della Pubblica Amministrazione.</p></div>
                        <a href="https://www.agid.gov.it/it/linee-guida">Consulta le linee guida AgID <?= ps_icon('external') ?><span class="sr-only"> sul sito AgID</span></a>
                    </article>
                </div>
                <aside class="validators__warning"><?= ps_icon('check') ?><p><strong>Completa i test automatici con verifiche manuali:</strong> navigazione da tastiera, ingrandimento, lettura con tecnologie assistive e prove con persone che utilizzano il servizio.</p></aside>
            </section>
        </article>
    </div>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
