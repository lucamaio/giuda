<?php

declare(strict_types=1);

$guideNumber = '01';
$guideTitle = 'Come è strutturato il sito';
$pageTitle = $guideTitle;
$pageDescription = 'Guida Point Service per orientarsi nelle aree e nei contenuti del sito istituzionale comunale.';
$currentPage = 'guide';
$breadcrumbCurrent = 'Struttura del sito';
$guideIntroId = 'premessa-iniziale';
$guideIntroduction = [
    'I siti istituzionali realizzati con il modello Point Service organizzano le informazioni in aree riconoscibili e in schede collegate tra loro.',
    'Conoscere questa struttura aiuta a scegliere il contenuto corretto, evitare duplicati e rendere più semplice la consultazione da parte dei cittadini.',
];
$toc = [
    ['number' => '01', 'id' => 'premessa-iniziale', 'title' => 'Premessa iniziale'],
    [
        'number' => '02',
        'id' => 'orientarsi-nel-sito',
        'title' => 'Orientarsi nel sito',
        'children' => [
            ['number' => '01', 'id' => 'navigazione-principale', 'title' => 'La navigazione principale'],
            ['number' => '02', 'id' => 'homepage', 'title' => 'La homepage'],
            ['number' => '03', 'id' => 'amministrazione', 'title' => 'Amministrazione'],
            ['number' => '04', 'id' => 'novita', 'title' => 'Novità'],
            ['number' => '05', 'id' => 'servizi-area', 'title' => 'Servizi'],
            ['number' => '06', 'id' => 'vivere-comune', 'title' => 'Vivere il Comune'],
            ['number' => '07', 'id' => 'documenti-dati', 'title' => 'Documenti e dati'],
            ['number' => '08', 'id' => 'argomenti-ricerca', 'title' => 'Argomenti e ricerca'],
            ['number' => '09', 'id' => 'collegamenti-istituzionali', 'title' => 'Collegamenti istituzionali'],
        ],
    ],
    [
        'number' => '03',
        'id' => 'organizzare-contenuti',
        'title' => 'Organizzare i contenuti',
        'children' => [
            ['number' => '10', 'id' => 'schede-collegate', 'title' => 'Le schede collegate'],
            ['number' => '11', 'id' => 'ordine-creazione', 'title' => 'Ordine consigliato di creazione'],
            ['number' => '12', 'id' => 'controllo-struttura', 'title' => 'Controllo finale'],
        ],
    ],
];
$previousGuide = null;
$nextGuide = ['title' => 'Notizie', 'href' => 'guida/notizie.php'];

require __DIR__ . '/../includes/header.php';
?>
<main id="main-content" class="guide-page">
    <div class="container">
        <?php require __DIR__ . '/../includes/guide-intro.php'; ?>

        <article class="guide-content" aria-label="Struttura del sito istituzionale">
            <h2 class="guide-chapter-title" id="orientarsi-nel-sito">Orientarsi nel sito</h2>

            <section class="guide-section" aria-labelledby="navigazione-principale">
                <?php ps_section_heading('01', 'navigazione-principale', 'La navigazione principale'); ?>
                <p>La navigazione del sito è organizzata nelle quattro aree principali previste dal modello dei siti comunali:</p>
                <ul>
                    <li><strong>Amministrazione</strong>, per organi, uffici, persone e organizzazione;</li>
                    <li><strong>Novità</strong>, per notizie, comunicati ed eventi;</li>
                    <li><strong>Servizi</strong>, per ciò che il cittadino può richiedere o utilizzare;</li>
                    <li><strong>Vivere il Comune</strong>, per luoghi, iniziative e informazioni sul territorio.</li>
                </ul>
                <p>Le voci possono essere accompagnate da <strong>Argomenti</strong> e dalla ricerca, che permettono di raggiungere lo stesso contenuto seguendo percorsi diversi.</p>
                <?php ps_screenshot_placeholder('Menu principale del sito', 'Intestazione del sito pubblico con Amministrazione, Novità, Servizi, Vivere il Comune, Argomenti e ricerca.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="homepage">
                <?php ps_section_heading('02', 'homepage', 'La homepage'); ?>
                <p>La homepage presenta i contenuti più utili o recenti senza sostituire le sezioni interne. In genere raccoglie notizie in evidenza, appuntamenti, argomenti, servizi e collegamenti utili.</p>
                <p>Prima di aggiungere un contenuto in homepage, pubblicalo nella sua sezione corretta. L'evidenza è una modalità di presentazione, non una nuova tipologia di contenuto.</p>
                <aside class="callout"><?= ps_icon('check') ?><p><strong>Una notizia in evidenza rimane una Notizia; un evento in evidenza rimane un Evento.</strong></p></aside>
                <?php ps_screenshot_placeholder('Struttura della homepage', 'Vista della homepage con contenuti in evidenza, notizie, appuntamenti, argomenti e collegamenti utili.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="amministrazione">
                <?php ps_section_heading('03', 'amministrazione', 'Amministrazione'); ?>
                <p>Quest'area descrive come è organizzato il Comune. Comprende, in base ai contenuti disponibili, organi di governo, aree amministrative, uffici, persone pubbliche, incarichi e sedi.</p>
                <p>Le informazioni non devono essere ripetute in ogni pagina: una persona, un ufficio o un luogo vengono creati una sola volta e poi collegati alle altre schede.</p>
                <?php ps_screenshot_placeholder('Pagina Amministrazione', 'Pagina pubblica con le principali categorie dell’organizzazione comunale e le relative schede.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="novita">
                <?php ps_section_heading('04', 'novita', 'Novità'); ?>
                <p>L'area Novità raccoglie contenuti legati all'attualità del Comune, come notizie ed eventi. Queste schede devono riportare date chiare, informazioni aggiornate e collegamenti ai luoghi, agli uffici o ai documenti pertinenti.</p>
                <p>Per scegliere il tipo corretto chiediti se stai comunicando un aggiornamento oppure un appuntamento con data, orario e luogo.</p>
                <?php ps_screenshot_placeholder('Pagina Novità', 'Pagina pubblica con notizie ed eventi in evidenza e i collegamenti agli elenchi completi.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="servizi-area">
                <?php ps_section_heading('05', 'servizi-area', 'Servizi'); ?>
                <p>La sezione Servizi spiega cosa offre il Comune e come accedervi. Ogni scheda deve accompagnare il cittadino dalla comprensione del servizio fino all'avvio della procedura, online o presso un ufficio.</p>
                <p>Un avviso relativo a un servizio va pubblicato come Notizia e collegato al Servizio esistente, senza riscrivere l'intera procedura nella notizia.</p>
                <?php ps_screenshot_placeholder('Pagina Servizi', 'Pagina pubblica con i servizi in evidenza, l’elenco completo e le categorie disponibili.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="vivere-comune">
                <?php ps_section_heading('06', 'vivere-comune', 'Vivere il Comune'); ?>
                <p>Questa area valorizza il territorio e la vita della comunità. Raccoglie soprattutto luoghi ed eventi, con eventuali gallerie e approfondimenti tematici.</p>
                <p>Le schede Luogo possono essere riutilizzate come sedi di eventi o uffici: per questo indirizzo, mappa, accessibilità e contatti devono essere gestiti nella scheda del luogo.</p>
                <?php ps_screenshot_placeholder('Pagina Vivere il Comune', 'Pagina pubblica con eventi, luoghi, argomenti, gallerie e mappa del territorio.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="documenti-dati">
                <?php ps_section_heading('07', 'documenti-dati', 'Documenti e dati'); ?>
                <p>L'area Documenti e dati rende consultabili atti, modulistica, documenti pubblici e altri materiali informativi. Un file non dovrebbe essere caricato senza contesto: titolo, descrizione, responsabile e periodo di validità aiutano il cittadino a comprenderlo.</p>
                <p>Quando un documento è utile a un servizio o a una notizia, collegalo alla relativa scheda invece di pubblicarne copie diverse.</p>
            </section>

            <section class="guide-section" aria-labelledby="argomenti-ricerca">
                <?php ps_section_heading('08', 'argomenti-ricerca', 'Argomenti e ricerca'); ?>
                <p>Gli Argomenti collegano contenuti appartenenti a sezioni differenti ma riferiti alla stessa materia, ad esempio scuola, ambiente o tributi.</p>
                <p>Seleziona pochi argomenti realmente pertinenti. Titoli, descrizioni brevi e testi chiari migliorano anche i risultati della ricerca interna.</p>
            </section>

            <section class="guide-section" aria-labelledby="collegamenti-istituzionali">
                <?php ps_section_heading('09', 'collegamenti-istituzionali', 'Collegamenti istituzionali'); ?>
                <p>Nel sito possono essere presenti collegamenti ad Albo pretorio, Amministrazione trasparente, area personale e portali esterni. Questi strumenti hanno finalità specifiche e non sostituiscono i contenuti informativi del sito.</p>
                <p>Verifica periodicamente che i collegamenti siano aggiornati, riconoscibili e aperti nella destinazione corretta.</p>
            </section>

            <h2 class="guide-chapter-title" id="organizzare-contenuti">Organizzare i contenuti</h2>

            <section class="guide-section" aria-labelledby="schede-collegate">
                <?php ps_section_heading('10', 'schede-collegate', 'Le schede collegate'); ?>
                <p>Il sito funziona come una rete di informazioni. Un ufficio può essere responsabile di servizi e documenti; una persona può avere un incarico presso un ufficio; un luogo può ospitare uffici ed eventi.</p>
                <aside class="callout"><?= ps_icon('sitemap') ?><p><strong>Collegare una scheda esistente mantiene i dati coerenti e riduce il lavoro di aggiornamento.</strong></p></aside>
            </section>

            <section class="guide-section" aria-labelledby="ordine-creazione">
                <?php ps_section_heading('11', 'ordine-creazione', 'Ordine consigliato di creazione'); ?>
                <p>Quando devi popolare più sezioni, prepara prima i contenuti che verranno richiamati dagli altri:</p>
                <p class="guide-path">Punti di contatto → Persone → Luoghi → Uffici → Documenti, eventi, notizie e servizi</p>
                <p>Questo ordine consente di selezionare relazioni già disponibili durante la compilazione e limita la creazione di duplicati.</p>
            </section>

            <section class="guide-section" aria-labelledby="controllo-struttura">
                <?php ps_section_heading('12', 'controllo-struttura', 'Controllo finale'); ?>
                <?php ps_checklist(['Contenuto nella sezione corretta', 'Nessuna scheda duplicata', 'Relazioni tra contenuti complete', 'Argomenti pertinenti', 'Collegamenti funzionanti', 'Informazioni visibili da smartphone']); ?>
                <p>Al termine percorri il sito come farebbe un cittadino: dalla homepage alla scheda, dalla scheda ai contatti e agli eventuali documenti.</p>
            </section>
        </article>

        <?php require __DIR__ . '/../includes/guide-navigation.php'; ?>
    </div>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
