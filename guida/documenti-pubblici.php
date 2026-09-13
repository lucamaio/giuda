<?php

declare(strict_types=1);

$guideNumber = '05';
$guideTitle = 'Come pubblicare un documento pubblico';
$pageTitle = $guideTitle;
$pageDescription = 'Guida Point Service per pubblicare documenti, atti e modulistica in modo accessibile e completo.';
$currentPage = 'guide';
$breadcrumbCurrent = 'Documenti pubblici';
$guideIntroId = 'premessa-iniziale';
$guideIntroduction = [
    'La scheda Documento pubblico permette di presentare un atto o un file insieme alle informazioni necessarie per riconoscerlo, comprenderlo e utilizzarlo.',
    'Il documento deve essere inserito una sola volta e poi collegato a notizie, servizi, uffici o altri contenuti pertinenti.',
];
$toc = [
    ['number' => '01', 'id' => 'premessa-iniziale', 'title' => 'Premessa iniziale'],
    [
        'number' => '02',
        'id' => 'nuovo-documento',
        'title' => 'Nuovo documento pubblico',
        'children' => [
            ['number' => '01', 'id' => 'accesso-documenti', 'title' => 'Accedere ai Documenti pubblici'],
            ['number' => '02', 'id' => 'titolo-tipo', 'title' => 'Titolo e tipo di documento'],
            ['number' => '03', 'id' => 'protocollo', 'title' => 'Protocollo e dati identificativi'],
            ['number' => '04', 'id' => 'descrizione-breve', 'title' => 'Descrizione breve'],
            ['number' => '05', 'id' => 'file-collegamento', 'title' => 'File e collegamento esterno'],
            ['number' => '06', 'id' => 'descrizione-estesa', 'title' => 'Descrizione estesa'],
            ['number' => '07', 'id' => 'responsabile-autori', 'title' => 'Ufficio responsabile e autori'],
            ['number' => '08', 'id' => 'formati-licenza', 'title' => 'Formati e licenza'],
            ['number' => '09', 'id' => 'date-validita', 'title' => 'Date e validità'],
            ['number' => '10', 'id' => 'contenuti-collegati', 'title' => 'Contenuti collegati'],
            ['number' => '11', 'id' => 'accessibilita-privacy', 'title' => 'Accessibilità e dati personali'],
            ['number' => '12', 'id' => 'controllo-finale', 'title' => 'Controllo finale'],
        ],
    ],
    ['number' => '03', 'id' => 'modifica-documento', 'title' => 'Modifica di un documento'],
];
$previousGuide = ['title' => 'Luoghi', 'href' => 'guida/luoghi.php'];
$nextGuide = ['title' => 'Uffici, persone e incarichi', 'href' => 'guida/uffici-persone-incarichi.php'];

require __DIR__ . '/../includes/header.php';
?>
<main id="main-content" class="guide-page">
    <div class="container">
        <?php require __DIR__ . '/../includes/guide-intro.php'; ?>

        <article class="guide-content" aria-label="Procedura per pubblicare un documento pubblico">
            <h2 class="guide-chapter-title" id="nuovo-documento">Nuovo documento pubblico</h2>

            <section class="guide-section" aria-labelledby="accesso-documenti">
                <?php ps_section_heading('01', 'accesso-documenti', 'Accedere ai Documenti pubblici'); ?>
                <p>Accedi all'area riservata e dal menu laterale seleziona:</p>
                <p class="guide-path">Documenti pubblici → Tutti i documenti pubblici</p>
                <p>Cerca per titolo, protocollo o tipologia per verificare che il documento non sia già presente. Se non esiste, seleziona <strong>Aggiungi un documento pubblico</strong>.</p>
                <?php ps_screenshot_placeholder('Menu Documenti pubblici', 'Elenco dei documenti nel pannello WordPress con il comando per aggiungere una nuova scheda evidenziato.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="titolo-tipo">
                <?php ps_section_heading('02', 'titolo-tipo', 'Titolo e tipo di documento'); ?>
                <p>Inserisci un titolo che descriva il documento senza obbligare il cittadino ad aprire il file. Evita formule generiche come “Allegato” o “Documento”.</p>
                <div class="comparison" aria-label="Confronto fra un titolo da evitare e uno preferibile">
                    <div class="comparison__item comparison__item--avoid"><span class="comparison__label">Da evitare</span><strong>MODULO.pdf</strong></div>
                    <div class="comparison__item comparison__item--prefer"><span class="comparison__label">Preferibile</span><strong>Modulo di domanda per il trasporto scolastico 2026/2027</strong></div>
                </div>
                <p>Seleziona poi il tipo di documento più adatto, distinguendo ad esempio modulistica, atti, regolamenti o altre categorie disponibili.</p>
                <?php ps_screenshot_placeholder('Titolo e tipologia del documento', 'Parte iniziale della scheda con un titolo descrittivo e il tipo di documento selezionato.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="protocollo">
                <?php ps_section_heading('03', 'protocollo', 'Protocollo e dati identificativi'); ?>
                <p>Quando previsti, compila numero e data di protocollo. Per gli atti soggetti a pubblicazione specifica seleziona anche la corretta tipologia di Albo pretorio.</p>
                <p>I dati inseriti devono corrispondere a quelli riportati nel documento. Non utilizzare il protocollo come titolo della scheda.</p>
            </section>

            <section class="guide-section" aria-labelledby="descrizione-breve">
                <?php ps_section_heading('04', 'descrizione-breve', 'Descrizione breve'); ?>
                <p>Riassumi in una o due frasi la funzione del documento e, se utile, a chi è rivolto. La descrizione breve viene usata nelle anteprime e dovrebbe rimanere sintetica.</p>
                <div class="example-box">
                    <div class="example-box__item"><span class="example-box__label">Titolo</span><strong>Modulo di domanda per il trasporto scolastico 2026/2027</strong></div>
                    <div class="example-box__item"><span class="example-box__label">Descrizione breve</span><p>Modulo per richiedere il contributo comunale destinato alle spese di trasporto degli studenti.</p></div>
                </div>
            </section>

            <section class="guide-section" aria-labelledby="file-collegamento">
                <?php ps_section_heading('05', 'file-collegamento', 'File e collegamento esterno'); ?>
                <p>Carica uno o più file scaricabili oppure indica il collegamento alla risorsa ufficiale, in base ai campi disponibili. Usa nomi file descrittivi, senza sigle incomprensibili o numerazioni di scansione.</p>
                <div class="comparison" aria-label="Confronto fra nomi file">
                    <div class="comparison__item comparison__item--avoid"><span class="comparison__label">Da evitare</span><strong>scan003_def2.pdf</strong></div>
                    <div class="comparison__item comparison__item--prefer"><span class="comparison__label">Preferibile</span><strong>domanda-trasporto-scolastico-2026-2027.pdf</strong></div>
                </div>
                <p>Verifica che ogni collegamento apra il documento corretto e che il file non sia protetto da password.</p>
                <?php ps_screenshot_placeholder('Caricamento del file', 'Sezione per aggiungere il file scaricabile o il collegamento alla risorsa ufficiale.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="descrizione-estesa">
                <?php ps_section_heading('06', 'descrizione-estesa', 'Descrizione estesa'); ?>
                <p>Spiega il contenuto, la finalità e le modalità di utilizzo del documento. Indica eventuali istruzioni essenziali, senza duplicare integralmente il testo del file.</p>
                <p>Se il documento appartiene a un procedimento, collega il Servizio corrispondente e lascia nella scheda del servizio le istruzioni complete per il cittadino.</p>
            </section>

            <section class="guide-section" aria-labelledby="responsabile-autori">
                <?php ps_section_heading('07', 'responsabile-autori', 'Ufficio responsabile e autori'); ?>
                <p>Seleziona l'ufficio responsabile della pubblicazione o del procedimento e, quando previsto, le persone o gli enti autori del documento.</p>
                <p>Riutilizza uffici e persone già presenti. Creare una nuova scheda con una denominazione simile genera duplicati e collegamenti incoerenti.</p>
                <?php ps_screenshot_placeholder('Responsabile e autori', 'Campi di ricerca per collegare l’ufficio responsabile e gli autori già presenti nel sito.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="formati-licenza">
                <?php ps_section_heading('08', 'formati-licenza', 'Formati e licenza'); ?>
                <p>Indica i formati effettivamente disponibili, ad esempio PDF, ODT o CSV, e seleziona la licenza quando il campo è previsto e applicabile.</p>
                <p>Per modulistica da compilare, valuta la disponibilità di un formato editabile accessibile oltre al PDF.</p>
            </section>

            <section class="guide-section" aria-labelledby="date-validita">
                <?php ps_section_heading('09', 'date-validita', 'Date e validità'); ?>
                <p>Compila la data di inizio e l'eventuale data di fine validità. Una scadenza amministrativa riportata nel file deve essere coerente con le date della scheda e dei contenuti collegati.</p>
                <p>Quando sostituisci un documento, verifica se la versione precedente deve rimanere consultabile per finalità storiche o se deve essere indicata come non più valida.</p>
            </section>

            <section class="guide-section" aria-labelledby="contenuti-collegati">
                <?php ps_section_heading('10', 'contenuti-collegati', 'Contenuti collegati'); ?>
                <p>Collega servizi, documenti correlati, dataset, riferimenti normativi ed eventuali eventi della vita o dell'attività di impresa quando sono realmente pertinenti.</p>
                <aside class="callout"><?= ps_icon('sitemap') ?><p><strong>Un collegamento strutturato è preferibile a un semplice richiamo scritto nel testo.</strong></p></aside>
                <?php ps_screenshot_placeholder('Contenuti collegati al documento', 'Area della scheda dedicata a servizi, documenti correlati, dataset e riferimenti normativi.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="accessibilita-privacy">
                <?php ps_section_heading('11', 'accessibilita-privacy', 'Accessibilità e dati personali'); ?>
                <p>Pubblica, quando possibile, file digitali con testo selezionabile, titoli corretti, ordine di lettura e descrizioni delle immagini. Evita scansioni quando è disponibile il file originale.</p>
                <p>Prima della pubblicazione controlla la presenza di firme autografe, dati sanitari, recapiti privati o altre informazioni personali non destinate alla diffusione.</p>
            </section>

            <section class="guide-section" aria-labelledby="controllo-finale">
                <?php ps_section_heading('12', 'controllo-finale', 'Controllo finale'); ?>
                <?php ps_checklist(['Titolo comprensibile', 'Tipo corretto', 'Protocollo verificato', 'File corretto e accessibile', 'Ufficio responsabile', 'Date coerenti', 'Collegamenti pertinenti', 'Nessun dato personale improprio']); ?>
                <p>Dopo la pubblicazione scarica il file dalla pagina pubblica e controlla che si apra correttamente.</p>
            </section>

            <section class="guide-section" aria-labelledby="modifica-documento">
                <?php ps_section_heading('13', 'modifica-documento', 'Modifica di un documento'); ?>
                <p>Apri <strong>Documenti pubblici → Tutti i documenti pubblici</strong>, individua la scheda e seleziona <strong>Modifica</strong>.</p>
                <p>Aggiorna la scheda esistente se cambia il file o una sua informazione. Prima di sostituire un atto, verifica gli obblighi di conservazione e la necessità di mantenere disponibile la versione precedente.</p>
                <p>Salva e prova nuovamente il download dal sito pubblico.</p>
                <?php ps_screenshot_placeholder('Modifica di un documento pubblico', 'Elenco dei documenti con la scheda da aggiornare e il comando “Modifica” evidenziati.'); ?>
            </section>
        </article>

        <?php require __DIR__ . '/../includes/guide-navigation.php'; ?>
    </div>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
