<?php

declare(strict_types=1);

$guideNumber = '07';
$guideTitle = 'Come pubblicare un servizio';
$pageTitle = $guideTitle;
$pageDescription = 'Guida Point Service per descrivere e pubblicare correttamente i servizi comunali.';
$currentPage = 'guide';
$breadcrumbCurrent = 'Servizi';
$guideIntroId = 'premessa-iniziale';
$guideIntroduction = [
    "La scheda Servizio deve accompagnare il cittadino dalla comprensione di ciò che il Comune offre fino all'accesso alla procedura.",
    'Le informazioni devono essere complete, aggiornate e organizzate nei campi dedicati, così da rimanere leggibili anche su smartphone e nei risultati di ricerca.',
];
$toc = [
    ['number' => '01', 'id' => 'premessa-iniziale', 'title' => 'Premessa iniziale'],
    [
        'number' => '02',
        'id' => 'nuovo-servizio',
        'title' => 'Nuovo servizio',
        'children' => [
            ['number' => '01', 'id' => 'accesso-servizi', 'title' => 'Accedere alla sezione Servizi'],
            ['number' => '02', 'id' => 'titolo-stato', 'title' => 'Titolo, stato e validità'],
            ['number' => '03', 'id' => 'categoria-argomenti', 'title' => 'Categoria e argomenti'],
            ['number' => '04', 'id' => 'descrizione-destinatari', 'title' => 'Descrizione breve e destinatari'],
            ['number' => '05', 'id' => 'descrizione-copertura', 'title' => 'Descrizione e copertura geografica'],
            ['number' => '06', 'id' => 'come-fare', 'title' => 'Come fare'],
            ['number' => '07', 'id' => 'cosa-serve', 'title' => 'Cosa serve'],
            ['number' => '08', 'id' => 'cosa-si-ottiene', 'title' => 'Cosa si ottiene e fasi'],
            ['number' => '09', 'id' => 'tempi-scadenze', 'title' => 'Tempi e scadenze'],
            ['number' => '10', 'id' => 'costi-vincoli', 'title' => 'Costi, vincoli e casi particolari'],
            ['number' => '11', 'id' => 'accesso-digitale-fisico', 'title' => 'Accesso online e presso gli uffici'],
            ['number' => '12', 'id' => 'responsabile-contatti', 'title' => 'Responsabile e contatti'],
            ['number' => '13', 'id' => 'documenti-collegati', 'title' => 'Documenti e contenuti collegati'],
            ['number' => '14', 'id' => 'controllo-finale', 'title' => 'Controllo finale'],
        ],
    ],
    ['number' => '03', 'id' => 'modifica-servizio', 'title' => 'Modifica di un servizio'],
];
$previousGuide = ['title' => 'Uffici, persone e incarichi', 'href' => 'guida/uffici-persone-incarichi.php'];
$nextGuide = null;

require __DIR__ . '/../includes/header.php';
?>
<main id="main-content" class="guide-page">
    <div class="container">
        <?php require __DIR__ . '/../includes/guide-intro.php'; ?>

        <article class="guide-content" aria-label="Procedura per pubblicare un servizio">
            <h2 class="guide-chapter-title" id="nuovo-servizio">Nuovo servizio</h2>

            <section class="guide-section" aria-labelledby="accesso-servizi">
                <?php ps_section_heading('01', 'accesso-servizi', 'Accedere alla sezione Servizi'); ?>
                <p>Accedi all'area riservata e dal menu laterale seleziona:</p>
                <p class="guide-path">Servizi → Tutti i servizi</p>
                <p>Cerca il servizio per titolo, categoria o ufficio responsabile. Se non è già presente, seleziona <strong>Aggiungi un servizio</strong>.</p>
                <?php ps_screenshot_placeholder('Menu Servizi nel pannello', 'Elenco dei servizi nel pannello WordPress con il comando per aggiungere un nuovo servizio evidenziato.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="titolo-stato">
                <?php ps_section_heading('02', 'titolo-stato', 'Titolo, stato e validità'); ?>
                <p>Utilizza il nome con cui il cittadino cercherebbe il servizio. Preferisci un titolo concreto e non inserire la denominazione dell'ufficio se esiste un campo dedicato.</p>
                <div class="comparison" aria-label="Confronto fra un titolo da evitare e uno preferibile">
                    <div class="comparison__item comparison__item--avoid"><span class="comparison__label">Da evitare</span><strong>UFFICIO ANAGRAFE</strong></div>
                    <div class="comparison__item comparison__item--prefer"><span class="comparison__label">Preferibile</span><strong>Richiedere la carta d'identità elettronica</strong></div>
                </div>
                <p>Seleziona lo stato del servizio e compila il periodo di validità quando l'accesso è disponibile soltanto in determinate date.</p>
                <?php ps_screenshot_placeholder('Titolo, stato e validità', 'Parte iniziale della scheda Servizio con titolo, stato e date di validità compilati.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="categoria-argomenti">
                <?php ps_section_heading('03', 'categoria-argomenti', 'Categoria e argomenti'); ?>
                <p>Associa il servizio alla categoria più appropriata e seleziona pochi argomenti realmente pertinenti.</p>
                <p>La categoria aiuta a navigare l'elenco dei servizi; gli argomenti collegano il servizio a contenuti di altre sezioni che trattano lo stesso tema.</p>
            </section>

            <section class="guide-section" aria-labelledby="descrizione-destinatari">
                <?php ps_section_heading('04', 'descrizione-destinatari', 'Descrizione breve e destinatari'); ?>
                <p>La descrizione breve deve spiegare in modo immediato la finalità del servizio senza ripetere il titolo. Indica poi a chi è rivolto e gli eventuali requisiti generali.</p>
                <div class="example-box">
                    <div class="example-box__item"><span class="example-box__label">Titolo</span><strong>Richiedere la carta d'identità elettronica</strong></div>
                    <div class="example-box__item"><span class="example-box__label">Descrizione breve</span><p>Servizio per ottenere o rinnovare il documento di riconoscimento elettronico presso il Comune.</p></div>
                </div>
            </section>

            <section class="guide-section" aria-labelledby="descrizione-copertura">
                <?php ps_section_heading('05', 'descrizione-copertura', 'Descrizione e copertura geografica'); ?>
                <p>Descrivi il servizio, i casi in cui può essere utilizzato e le informazioni necessarie per comprenderlo. Evita di anticipare in questo testo istruzioni già previste in <strong>Come fare</strong> e <strong>Cosa serve</strong>.</p>
                <p>Indica la copertura geografica quando il servizio è disponibile soltanto nel territorio comunale, in determinate zone o per specifiche località.</p>
            </section>

            <section class="guide-section" aria-labelledby="come-fare">
                <?php ps_section_heading('06', 'come-fare', 'Come fare'); ?>
                <p>Elenca in ordine le azioni che il cittadino deve compiere. Usa frasi brevi e verbi operativi.</p>
                <ul>
                    <li>come presentare la richiesta;</li>
                    <li>se occorre prenotare;</li>
                    <li>dove consegnare o inviare la domanda;</li>
                    <li>come seguire lo stato della pratica.</li>
                </ul>
                <p>Se la procedura è online, inserisci il collegamento nel campo dedicato all'accesso digitale.</p>
                <?php ps_screenshot_placeholder('Istruzioni Come fare', 'Editor del campo “Come fare” con i passaggi della procedura organizzati in modo ordinato.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="cosa-serve">
                <?php ps_section_heading('07', 'cosa-serve', 'Cosa serve'); ?>
                <p>Indica requisiti, documenti, dati e strumenti necessari prima di iniziare. Organizza ogni elemento separatamente quando il pannello consente di creare un elenco.</p>
                <p>Non scrivere soltanto “documentazione prevista”: specifica quali documenti devono essere preparati e in quale formato.</p>
            </section>

            <section class="guide-section" aria-labelledby="cosa-si-ottiene">
                <?php ps_section_heading('08', 'cosa-si-ottiene', 'Cosa si ottiene e fasi'); ?>
                <p>Spiega il risultato concreto della procedura, ad esempio un'autorizzazione, un certificato, un contributo o l'iscrizione a un servizio.</p>
                <p>Quando previste, descrivi le principali fasi successive alla domanda e come viene comunicato l'esito.</p>
            </section>

            <section class="guide-section" aria-labelledby="tempi-scadenze">
                <?php ps_section_heading('09', 'tempi-scadenze', 'Tempi e scadenze'); ?>
                <p>Indica i tempi di lavorazione e le scadenze che il cittadino deve rispettare. Distingui il termine per presentare la domanda dal tempo impiegato dall'ente per concludere il procedimento.</p>
                <p>Verifica la coerenza con avvisi, regolamenti e moduli collegati.</p>
            </section>

            <section class="guide-section" aria-labelledby="costi-vincoli">
                <?php ps_section_heading('10', 'costi-vincoli', 'Costi, vincoli e casi particolari'); ?>
                <p>Riporta importi, modalità di pagamento ed eventuali esenzioni. Se il servizio è gratuito, dichiaralo chiaramente.</p>
                <p>Utilizza i campi relativi a vincoli e casi particolari per condizioni eccezionali, ricorsi, impedimenti o situazioni che modificano la procedura ordinaria.</p>
            </section>

            <section class="guide-section" aria-labelledby="accesso-digitale-fisico">
                <?php ps_section_heading('11', 'accesso-digitale-fisico', 'Accesso online e presso gli uffici'); ?>
                <p>Per il canale digitale inserisci un'etichetta comprensibile e il collegamento diretto alla procedura, non alla homepage generica di un portale.</p>
                <p>Per l'accesso fisico collega l'ufficio competente e, tramite la sua scheda, sede, orari e contatti. Specifica se è necessario un appuntamento.</p>
                <?php ps_screenshot_placeholder('Canali di accesso al servizio', 'Campi per il collegamento alla procedura online e per la selezione dell’ufficio competente.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="responsabile-contatti">
                <?php ps_section_heading('12', 'responsabile-contatti', 'Responsabile e contatti'); ?>
                <p>Seleziona l'unità organizzativa responsabile e collega i punti di contatto già presenti. I recapiti devono essere pubblici, aggiornati e realmente utili per il servizio.</p>
                <aside class="callout"><?= ps_icon('sitemap') ?><p><strong>Non riscrivere indirizzo, telefono e orari nel testo se sono già disponibili nella scheda dell'ufficio.</strong></p></aside>
            </section>

            <section class="guide-section" aria-labelledby="documenti-collegati">
                <?php ps_section_heading('13', 'documenti-collegati', 'Documenti e contenuti collegati'); ?>
                <p>Collega moduli, regolamenti e atti pubblicati come Documenti pubblici. Associa eventuali eventi della vita o dell'attività di impresa e gli altri contenuti previsti dal sito.</p>
                <p>Prima di caricare un nuovo file verifica che non sia già disponibile e che la versione sia quella aggiornata.</p>
                <?php ps_screenshot_placeholder('Documenti collegati al servizio', 'Area della scheda in cui selezionare moduli, regolamenti e altri documenti già pubblicati.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="controllo-finale">
                <?php ps_section_heading('14', 'controllo-finale', 'Controllo finale'); ?>
                <?php ps_checklist(['Titolo orientato al cittadino', 'Stato e validità corretti', 'Destinatari e requisiti chiari', 'Procedura completa', 'Tempi e costi verificati', 'Accesso online funzionante', 'Ufficio e contatti aggiornati', 'Documenti accessibili']); ?>
                <p>Dopo la pubblicazione prova a seguire il servizio come un cittadino, verificando collegamenti, download e leggibilità da smartphone.</p>
            </section>

            <section class="guide-section" aria-labelledby="modifica-servizio">
                <?php ps_section_heading('15', 'modifica-servizio', 'Modifica di un servizio'); ?>
                <p>Apri <strong>Servizi → Tutti i servizi</strong>, cerca la scheda e seleziona <strong>Modifica</strong>. Aggiorna la scheda esistente quando cambiano procedura, costi, tempi, uffici o collegamenti.</p>
                <p>Se il servizio non è temporaneamente disponibile, usa lo stato previsto dal pannello invece di eliminare le informazioni. Controlla anche notizie e documenti collegati.</p>
                <p>Salva e verifica l'intero percorso di accesso dalla pagina pubblica.</p>
                <?php ps_screenshot_placeholder('Modifica di un servizio esistente', 'Elenco dei servizi con la scheda corretta e il comando “Modifica” evidenziati.'); ?>
            </section>
        </article>

        <?php require __DIR__ . '/../includes/guide-navigation.php'; ?>
    </div>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
