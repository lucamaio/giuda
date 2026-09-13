<?php

declare(strict_types=1);

$guideNumber = '06';
$guideTitle = 'Come gestire uffici, persone e incarichi';
$pageTitle = $guideTitle;
$pageDescription = 'Guida Point Service per collegare correttamente uffici, persone pubbliche, incarichi, contatti e sedi.';
$currentPage = 'guide';
$breadcrumbCurrent = 'Uffici, persone e incarichi';
$guideIntroId = 'premessa-iniziale';
$guideIntroduction = [
    "Uffici, persone pubbliche e incarichi descrivono l'organizzazione del Comune e devono essere costruiti come schede distinte ma collegate.",
    'Compilare prima gli elementi di base permette di riutilizzare informazioni già presenti e di aggiornare i dati in un solo punto.',
];
$toc = [
    ['number' => '01', 'id' => 'premessa-iniziale', 'title' => 'Premessa iniziale'],
    [
        'number' => '02',
        'id' => 'preparazione',
        'title' => 'Preparazione',
        'children' => [
            ['number' => '01', 'id' => 'ordine-lavoro', 'title' => 'Ordine di lavoro consigliato'],
            ['number' => '02', 'id' => 'verifica-contenuti', 'title' => 'Verificare i contenuti esistenti'],
        ],
    ],
    [
        'number' => '03',
        'id' => 'persone-pubbliche',
        'title' => 'Persone pubbliche',
        'children' => [
            ['number' => '03', 'id' => 'creare-persona', 'title' => 'Creare una persona pubblica'],
            ['number' => '04', 'id' => 'profilo-persona', 'title' => 'Profilo, competenze e deleghe'],
            ['number' => '05', 'id' => 'contatti-documenti-persona', 'title' => 'Contatti e documenti'],
        ],
    ],
    [
        'number' => '04',
        'id' => 'incarichi',
        'title' => 'Incarichi',
        'children' => [
            ['number' => '06', 'id' => 'creare-incarico', 'title' => 'Creare un incarico'],
            ['number' => '07', 'id' => 'collegare-incarico', 'title' => 'Collegare persona e organizzazione'],
            ['number' => '08', 'id' => 'date-atti-incarico', 'title' => 'Date, atto e informazioni economiche'],
        ],
    ],
    [
        'number' => '05',
        'id' => 'uffici',
        'title' => 'Uffici e unità organizzative',
        'children' => [
            ['number' => '09', 'id' => 'creare-ufficio', 'title' => 'Creare un ufficio'],
            ['number' => '10', 'id' => 'organizzazione-responsabili', 'title' => 'Organizzazione e responsabili'],
            ['number' => '11', 'id' => 'sedi-contatti-orari', 'title' => 'Sedi, contatti e orari'],
            ['number' => '12', 'id' => 'servizi-documenti-collegati', 'title' => 'Servizi e documenti collegati'],
        ],
    ],
    ['number' => '06', 'id' => 'controllo-aggiornamento', 'title' => 'Controllo e aggiornamento'],
];
$previousGuide = ['title' => 'Documenti pubblici', 'href' => 'guida/documenti-pubblici.php'];
$nextGuide = ['title' => 'Servizi', 'href' => 'guida/servizi.php'];

require __DIR__ . '/../includes/header.php';
?>
<main id="main-content" class="guide-page">
    <div class="container">
        <?php require __DIR__ . '/../includes/guide-intro.php'; ?>

        <article class="guide-content" aria-label="Procedura per gestire uffici, persone e incarichi">
            <h2 class="guide-chapter-title" id="preparazione">Preparazione</h2>

            <section class="guide-section" aria-labelledby="ordine-lavoro">
                <?php ps_section_heading('01', 'ordine-lavoro', 'Ordine di lavoro consigliato'); ?>
                <p>Le tre tipologie sono collegate. Per trovare subito gli elementi da selezionare nei campi, procedi in questo ordine:</p>
                <p class="guide-path">Punti di contatto → Persone pubbliche → Incarichi → Uffici</p>
                <p>Se devi indicare anche una sede, crea o verifica prima la relativa scheda Luogo. L'ordine può cambiare in base ai dati già presenti, ma ogni elemento deve essere creato una sola volta.</p>
            </section>

            <section class="guide-section" aria-labelledby="verifica-contenuti">
                <?php ps_section_heading('02', 'verifica-contenuti', 'Verificare i contenuti esistenti'); ?>
                <p>Cerca la persona per nome e cognome, l'ufficio per denominazione e l'incarico per ruolo. Controlla anche eventuali varianti o abbreviazioni.</p>
                <aside class="callout"><?= ps_icon('sitemap') ?><p><strong>Se una scheda esiste ma è incompleta, aggiornala invece di crearne una nuova.</strong></p></aside>
                <p>Verifica che telefoni ed email siano destinati alla pubblicazione e che le denominazioni corrispondano all'organigramma approvato.</p>
            </section>

            <h2 class="guide-chapter-title" id="persone-pubbliche">Persone pubbliche</h2>

            <section class="guide-section" aria-labelledby="creare-persona">
                <?php ps_section_heading('03', 'creare-persona', 'Creare una persona pubblica'); ?>
                <p>Dal menu di amministrazione apri <strong>Persone pubbliche</strong>, consulta l'elenco e seleziona il comando per aggiungere una nuova persona.</p>
                <p>Inserisci nome e cognome nei campi corretti, una descrizione breve del ruolo e, quando disponibile, una fotografia istituzionale recente con testo alternativo.</p>
                <p>Non aggiungere titoli onorifici nel nome se non fanno parte della denominazione con cui la persona deve essere presentata.</p>
                <?php ps_screenshot_placeholder('Nuova persona pubblica', 'Schermata di inserimento con nome, cognome, descrizione breve e fotografia istituzionale.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="profilo-persona">
                <?php ps_section_heading('04', 'profilo-persona', 'Profilo, competenze e deleghe'); ?>
                <p>Descrivi in modo sintetico le competenze, le responsabilità e le eventuali deleghe. Utilizza i campi dedicati invece di concentrare tutte le informazioni nella biografia.</p>
                <p>Collega l'organizzazione di appartenenza, gli incarichi ricoperti e le unità di cui la persona è responsabile. Le date di inizio e fine devono essere coerenti con l'incarico.</p>
                <?php ps_screenshot_placeholder('Profilo e relazioni della persona', 'Campi dedicati a competenze, deleghe, organizzazione, incarichi e unità di cui la persona è responsabile.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="contatti-documenti-persona">
                <?php ps_section_heading('05', 'contatti-documenti-persona', 'Contatti e documenti'); ?>
                <p>Collega i punti di contatto istituzionali già presenti. Non pubblicare recapiti personali se non espressamente destinati all'uso pubblico.</p>
                <p>Quando richiesto, aggiungi curriculum, dichiarazioni e documenti di trasparenza usando file accessibili, aggiornati e chiaramente denominati.</p>
                <aside class="callout"><?= ps_icon('shield') ?><p><strong>Controlla sempre dati personali, firme e informazioni non necessarie prima di pubblicare un documento.</strong></p></aside>
            </section>

            <h2 class="guide-chapter-title" id="incarichi">Incarichi</h2>

            <section class="guide-section" aria-labelledby="creare-incarico">
                <?php ps_section_heading('06', 'creare-incarico', 'Creare un incarico'); ?>
                <p>Apri la sezione <strong>Incarichi</strong> e verifica che il ruolo non sia già presente per la stessa persona e lo stesso periodo.</p>
                <p>Inserisci una denominazione chiara e seleziona la tipologia di incarico prevista dal sito. L'incarico rappresenta il legame tra una persona e l'organizzazione, non una copia della scheda personale.</p>
                <?php ps_screenshot_placeholder('Nuovo incarico', 'Parte iniziale della scheda con denominazione e tipologia dell’incarico.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="collegare-incarico">
                <?php ps_section_heading('07', 'collegare-incarico', 'Collegare persona e organizzazione'); ?>
                <p>Seleziona la persona che ricopre l'incarico, l'unità organizzativa interessata e l'organizzazione responsabile. Utilizza le schede già esistenti.</p>
                <p>Controlla che il collegamento appaia sia nella pagina della persona sia nell'ufficio o nell'area amministrativa pertinente.</p>
                <?php ps_screenshot_placeholder('Collegamenti dell’incarico', 'Campi di selezione della persona, dell’unità organizzativa e dell’organizzazione responsabile.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="date-atti-incarico">
                <?php ps_section_heading('08', 'date-atti-incarico', 'Date, atto e informazioni economiche'); ?>
                <p>Inserisci le date di inizio e fine, l'atto di nomina e le ulteriori informazioni richieste. Quando previsti, compila compensi e importi di viaggi o missioni con dati verificati.</p>
                <p>Alla cessazione non eliminare automaticamente la scheda: indica la data di fine e verifica le regole di conservazione dei contenuti istituzionali.</p>
            </section>

            <h2 class="guide-chapter-title" id="uffici">Uffici e unità organizzative</h2>

            <section class="guide-section" aria-labelledby="creare-ufficio">
                <?php ps_section_heading('09', 'creare-ufficio', 'Creare un ufficio'); ?>
                <p>Apri <strong>Unità organizzative</strong> o la voce equivalente dedicata agli uffici. Inserisci la denominazione ufficiale, la tipologia e una descrizione breve che ne riassuma la funzione.</p>
                <p>Nel campo delle competenze spiega di cosa si occupa l'ufficio con parole comprensibili ai cittadini. Evita testi copiati dall'organigramma se composti solo da riferimenti normativi o sigle.</p>
                <?php ps_screenshot_placeholder('Nuovo ufficio o unità organizzativa', 'Schermata con denominazione, tipologia, descrizione breve e competenze dell’ufficio.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="organizzazione-responsabili">
                <?php ps_section_heading('10', 'organizzazione-responsabili', 'Organizzazione e responsabili'); ?>
                <p>Se l'ufficio dipende da un'area o da un'altra unità, seleziona l'unità superiore. Collega il responsabile, l'eventuale referente politico e le altre persone che lavorano nell'ufficio.</p>
                <p>Le relazioni devono riflettere l'organizzazione vigente. Quando una responsabilità cambia, aggiorna incarico, persona e ufficio in modo coordinato.</p>
            </section>

            <section class="guide-section" aria-labelledby="sedi-contatti-orari">
                <?php ps_section_heading('11', 'sedi-contatti-orari', 'Sedi, contatti e orari'); ?>
                <p>Collega la sede principale e le eventuali altre sedi scegliendo tra i Luoghi già pubblicati. Aggiungi i punti di contatto dell'ufficio e gli orari di apertura al pubblico.</p>
                <p>Distingui l'orario di apertura della sede dall'orario di ricevimento del singolo ufficio. Se l'accesso avviene su appuntamento, indica anche come prenotarlo.</p>
                <?php ps_screenshot_placeholder('Sedi, contatti e orari dell’ufficio', 'Sezione della scheda con il luogo principale, i punti di contatto e gli orari di ricevimento.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="servizi-documenti-collegati">
                <?php ps_section_heading('12', 'servizi-documenti-collegati', 'Servizi e documenti collegati'); ?>
                <p>Collega i servizi erogati o gestiti dall'ufficio e gli eventuali allegati informativi. I moduli e gli atti riutilizzabili devono essere pubblicati come Documenti pubblici e poi associati.</p>
                <p>Seleziona solamente relazioni utili: un lungo elenco non pertinente rende più difficile trovare le informazioni importanti.</p>
            </section>

            <section class="guide-section" aria-labelledby="controllo-aggiornamento">
                <?php ps_section_heading('13', 'controllo-aggiornamento', 'Controllo e aggiornamento'); ?>
                <?php ps_checklist(['Nessuna persona duplicata', 'Incarico con date corrette', 'Ufficio con denominazione ufficiale', 'Responsabili collegati', 'Sedi e contatti aggiornati', 'Servizi pertinenti', 'Documenti accessibili', 'Dati personali verificati']); ?>
                <p>Dopo la pubblicazione apri le pagine pubbliche di persona, incarico e ufficio e verifica che i collegamenti siano reciproci e comprensibili.</p>
                <p>Per una modifica cerca sempre la scheda esistente, aggiorna i campi interessati e controlla gli effetti sulle altre pagine collegate.</p>
                <?php ps_screenshot_placeholder('Ricerca e modifica delle schede', 'Elenco amministrativo con la ricerca e il comando “Modifica” per persona, incarico o ufficio.'); ?>
            </section>
        </article>

        <?php require __DIR__ . '/../includes/guide-navigation.php'; ?>
    </div>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
