<?php

declare(strict_types=1);

$guideNumber = '04';
$guideTitle = 'Come creare e gestire un luogo';
$pageTitle = $guideTitle;
$pageDescription = 'Guida Point Service per creare e aggiornare le schede dei luoghi comunali con indirizzi, accessibilità, contatti e orari.';
$currentPage = 'guide';
$breadcrumbCurrent = 'Luoghi';
$guideIntroId = 'premessa-iniziale';
$guideIntroduction = [
    'La sezione Luoghi permette di creare le schede dedicate agli edifici, agli spazi e ai punti di interesse del territorio comunale.',
    'Un luogo può essere successivamente collegato a eventi, uffici e altri contenuti.',
    'È quindi importante non creare duplicati.',
    'Prima di aggiungere un nuovo luogo verifica sempre che non sia già presente nel sito.',
];
$toc = [
    ['number' => '01', 'id' => 'premessa-iniziale', 'title' => 'Premessa iniziale'],
    [
        'number' => '02',
        'id' => 'nuovo-luogo',
        'title' => 'Nuovo luogo',
        'children' => [
            ['number' => '01', 'id' => 'accesso-luoghi', 'title' => 'Accedere alla sezione Luoghi'],
            ['number' => '02', 'id' => 'nome', 'title' => 'Inserire il nome del luogo'],
            ['number' => '03', 'id' => 'immagine', 'title' => "Inserire l'immagine principale"],
            ['number' => '04', 'id' => 'descrizione-breve', 'title' => 'Scrivere la descrizione breve'],
            ['number' => '05', 'id' => 'descrizione-completa', 'title' => 'Inserire la descrizione completa'],
            ['number' => '06', 'id' => 'accessibilita', 'title' => 'Indicare le modalità di accesso'],
            ['number' => '07', 'id' => 'indirizzo', 'title' => "Inserire l'indirizzo"],
            ['number' => '08', 'id' => 'mappa', 'title' => 'Posizionare il luogo sulla mappa'],
            ['number' => '09', 'id' => 'orari', 'title' => 'Inserire gli orari'],
            ['number' => '10', 'id' => 'contatti', 'title' => 'Collegare i punti di contatto'],
            ['number' => '11', 'id' => 'ufficio-responsabile', 'title' => "Collegare l'ufficio responsabile"],
            ['number' => '12', 'id' => 'uffici-sede', 'title' => 'Indicare gli uffici presenti nella sede'],
            ['number' => '13', 'id' => 'duplicati', 'title' => 'Evitare la duplicazione dei luoghi'],
            ['number' => '14', 'id' => 'controllo-finale', 'title' => 'Controllo prima della pubblicazione'],
        ],
    ],
    ['number' => '03', 'id' => 'modifica-luogo', 'title' => 'Modifica di un luogo'],
];
$previousGuide = ['title' => 'Eventi', 'href' => 'guida/eventi.php'];
$nextGuide = ['title' => 'Documenti pubblici', 'href' => 'guida/documenti-pubblici.php'];

require __DIR__ . '/../includes/header.php';
?>
<main id="main-content" class="guide-page">
    <div class="container">
        <?php require __DIR__ . '/../includes/guide-intro.php'; ?>

        <article class="guide-content" aria-label="Procedura per creare e gestire un luogo">
            <h2 class="guide-chapter-title" id="nuovo-luogo">Nuovo luogo</h2>

            <section class="guide-section" aria-labelledby="accesso-luoghi">
                <?php ps_section_heading('01', 'accesso-luoghi', 'Accedere alla sezione Luoghi'); ?>
                <p>Accedi all'area riservata del sito istituzionale con le credenziali che ti sono state fornite.</p>
                <p>Dal menu laterale del pannello di amministrazione seleziona:</p>
                <p class="guide-path">Luoghi → Tutti i luoghi</p>
                <p>Consulta l'elenco e utilizza la ricerca per verificare se il luogo è già presente, anche con una denominazione leggermente diversa.</p>
                <p>Se non esiste, seleziona “Aggiungi un luogo”. Le operazioni disponibili dipendono dalle autorizzazioni assegnate al tuo utente.</p>
                <?php ps_screenshot_placeholder('Menu Luoghi nel pannello', 'Pannello WordPress con la voce “Luoghi” e il comando per aggiungere un nuovo luogo evidenziati.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="nome">
                <?php ps_section_heading('02', 'nome', 'Inserire il nome del luogo'); ?>
                <p>Utilizza la denominazione ufficiale o quella con cui il luogo è comunemente riconosciuto dai cittadini.</p>
                <p>Il nome deve identificare in modo univoco l'edificio, lo spazio o il punto di interesse. Evita titoli generici come “Sede comunale” quando esistono più sedi.</p>
                <div class="comparison" aria-label="Confronto fra un nome da evitare e uno preferibile">
                    <div class="comparison__item comparison__item--avoid"><span class="comparison__label">Da evitare</span><strong>SALA</strong></div>
                    <div class="comparison__item comparison__item--prefer"><span class="comparison__label">Preferibile</span><strong>Sala civica Giovanni Falcone</strong></div>
                </div>
                <p>Non inserire nel nome indirizzo, orari o altre informazioni che dispongono di campi dedicati.</p>
            </section>

            <section class="guide-section" aria-labelledby="immagine">
                <?php ps_section_heading('03', 'immagine', "Inserire l'immagine principale"); ?>
                <p>Seleziona una fotografia recente e riconoscibile del luogo, preferibilmente una vista dell'ingresso o dell'esterno che aiuti il cittadino a individuarlo.</p>
                <p>Evita immagini generiche, locandine e fotografie che non rappresentano chiaramente la sede.</p>
                <p>Compila il testo alternativo descrivendo in modo sintetico ciò che è utile riconoscere nell'immagine.</p>
                <?php ps_screenshot_placeholder('Immagine principale del luogo', 'Campo per selezionare la fotografia del luogo con il relativo testo alternativo.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="descrizione-breve">
                <?php ps_section_heading('04', 'descrizione-breve', 'Scrivere la descrizione breve'); ?>
                <p>La descrizione breve compare nelle anteprime e deve aiutare a capire immediatamente la funzione principale del luogo.</p>
                <p>Non ripetere il nome e non anticipare dettagli che saranno riportati nei campi relativi a indirizzo, contatti e orari.</p>
                <div class="example-box">
                    <div class="example-box__item"><span class="example-box__label">Nome</span><strong>Biblioteca comunale</strong></div>
                    <div class="example-box__item"><span class="example-box__label">Descrizione breve</span><p>Spazio pubblico per la consultazione e il prestito di libri, con sala studio e area ragazzi.</p></div>
                </div>
            </section>

            <section class="guide-section" aria-labelledby="descrizione-completa">
                <?php ps_section_heading('05', 'descrizione-completa', 'Inserire la descrizione completa'); ?>
                <p>Descrivi il luogo, la sua funzione e i servizi o le attività che vi si svolgono.</p>
                <p>Inserisci informazioni stabili e utili, organizzando i contenuti in paragrafi quando il testo è lungo. Puoi indicare, ad esempio:</p>
                <ul>
                    <li>la funzione dell'edificio o dello spazio;</li>
                    <li>gli ambienti e le dotazioni principali;</li>
                    <li>i servizi disponibili;</li>
                    <li>eventuali indicazioni pratiche per la visita.</li>
                </ul>
                <p>Non duplicare le informazioni già presenti nei campi dedicati a accesso, indirizzo, orari e contatti.</p>
            </section>

            <section class="guide-section" aria-labelledby="accessibilita">
                <?php ps_section_heading('06', 'accessibilita', 'Indicare le modalità di accesso'); ?>
                <p>Spiega come si accede al luogo e segnala le informazioni utili alle persone con disabilità o con esigenze specifiche.</p>
                <p>Indica, quando pertinenti, la presenza di ingresso senza gradini, rampe, ascensori, servizi igienici accessibili, parcheggi riservati o percorsi alternativi.</p>
                <p>Riporta solamente caratteristiche verificate e descrivile in modo concreto, evitando formule generiche come “completamente accessibile” se non supportate da informazioni precise.</p>
            </section>

            <section class="guide-section" aria-labelledby="indirizzo">
                <?php ps_section_heading('07', 'indirizzo', "Inserire l'indirizzo"); ?>
                <p>Compila tutti i dati disponibili: via o piazza, numero civico, codice postale, Comune ed eventuale località.</p>
                <p>Utilizza la forma ufficiale dell'indirizzo ed evita abbreviazioni poco chiare.</p>
                <p>Se il luogo non dispone di un numero civico, fornisci nella descrizione indicazioni utili per raggiungerlo senza inserire dati approssimativi nei campi strutturati.</p>
            </section>

            <section class="guide-section" aria-labelledby="mappa">
                <?php ps_section_heading('08', 'mappa', 'Posizionare il luogo sulla mappa'); ?>
                <p>Dopo aver inserito l'indirizzo, controlla il punto visualizzato sulla mappa.</p>
                <p>Il segnaposto deve indicare l'ingresso o la posizione effettiva del luogo, non il centro della via o del territorio comunale.</p>
                <p>Se necessario correggi manualmente la posizione e verifica nuovamente il risultato nella pagina pubblica.</p>
                <?php ps_screenshot_placeholder('Posizione del luogo sulla mappa', 'Mappa con il segnaposto posizionato sull’ingresso effettivo del luogo.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="orari">
                <?php ps_section_heading('09', 'orari', 'Inserire gli orari'); ?>
                <p>Inserisci gli orari di apertura al pubblico in modo ordinato, distinguendo i giorni della settimana e gli eventuali intervalli.</p>
                <p>Se l'accesso avviene solo su appuntamento, dichiaralo chiaramente e indica come richiederlo.</p>
                <p>Non utilizzare questo campo per orari temporanei legati a un singolo evento. Aggiorna invece la scheda quando cambiano stabilmente gli orari del luogo.</p>
            </section>

            <section class="guide-section" aria-labelledby="contatti">
                <?php ps_section_heading('10', 'contatti', 'Collegare i punti di contatto'); ?>
                <p>Collega i punti di contatto già presenti che il cittadino può utilizzare per ottenere informazioni sul luogo.</p>
                <p>Possono comprendere telefono, posta elettronica, posta elettronica certificata o altri canali previsti dalla scheda.</p>
                <p>Verifica che i recapiti siano aggiornati e destinati alla pubblicazione. Prima di creare un nuovo punto di contatto controlla che non esista già.</p>
                <?php ps_screenshot_placeholder('Punti di contatto del luogo', 'Campo di ricerca e selezione dei recapiti pubblici già presenti nel portale.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="ufficio-responsabile">
                <?php ps_section_heading('11', 'ufficio-responsabile', "Collegare l'ufficio responsabile"); ?>
                <p>Seleziona l'ufficio o l'unità organizzativa responsabile della gestione del luogo.</p>
                <p>Questo collegamento identifica chi cura la scheda e permette di riutilizzare le informazioni organizzative già pubblicate.</p>
                <p>Non creare un nuovo ufficio se quello corretto è già presente con la propria denominazione ufficiale.</p>
            </section>

            <section class="guide-section" aria-labelledby="uffici-sede">
                <?php ps_section_heading('12', 'uffici-sede', 'Indicare gli uffici presenti nella sede'); ?>
                <p>Collega gli uffici che si trovano fisicamente nel luogo, quando questa informazione è prevista dalla scheda.</p>
                <p>Distingui gli uffici presenti nella sede dall'ufficio responsabile della gestione dell'edificio: i due dati possono coincidere, ma hanno significati diversi.</p>
                <p>Aggiungi solamente collegamenti verificati, così il cittadino potrà passare dalla scheda del luogo alle informazioni dei singoli uffici.</p>
                <?php ps_screenshot_placeholder('Uffici presenti nella sede', 'Sezione della scheda in cui vengono selezionati gli uffici ospitati nel luogo.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="duplicati">
                <?php ps_section_heading('13', 'duplicati', 'Evitare la duplicazione dei luoghi'); ?>
                <p>Lo stesso luogo può essere collegato a eventi, uffici e altri contenuti. Una scheda duplicata frammenta queste relazioni e può mostrare informazioni differenti sullo stesso edificio.</p>
                <aside class="callout"><?= ps_icon('sitemap') ?><p><strong>Prima di aggiungere un luogo cerca per nome, indirizzo e possibili denominazioni alternative.</strong></p></aside>
                <p>Se trovi una scheda esistente ma incompleta, aggiornala invece di crearne una nuova. In caso di dubbio verifica con il responsabile del sito quale scheda deve essere mantenuta.</p>
            </section>

            <section class="guide-section" aria-labelledby="controllo-finale">
                <?php ps_section_heading('14', 'controllo-finale', 'Controllo prima della pubblicazione'); ?>
                <?php ps_checklist(['Nessun luogo duplicato', 'Nome ufficiale e chiaro', 'Immagine pertinente', 'Descrizioni non ripetitive', 'Accessibilità verificata', 'Indirizzo completo', 'Posizione corretta sulla mappa', 'Orari aggiornati', 'Contatti e uffici corretti']); ?>
                <p>Dopo la pubblicazione apri la scheda sul sito e controlla il risultato finale. Verifica in particolare la mappa, i collegamenti agli uffici e la leggibilità delle informazioni da smartphone.</p>
            </section>

            <section class="guide-section" aria-labelledby="modifica-luogo">
                <?php ps_section_heading('15', 'modifica-luogo', 'Modifica di un luogo'); ?>
                <p>Dal menu laterale seleziona <strong>Luoghi</strong> e poi <strong>Tutti i luoghi</strong>. Cerca la scheda tramite nome o indirizzo e aprila con il comando <strong>Modifica</strong>.</p>
                <p>Aggiorna i dati cambiati, prestando attenzione a indirizzo, posizione sulla mappa, accessibilità, orari, contatti e uffici collegati.</p>
                <aside class="callout"><?= ps_icon('check') ?><p><strong>Se il luogo esiste già, aggiorna la scheda corrente: non crearne una seconda.</strong></p></aside>
                <p>Salva le modifiche e controlla la pagina pubblica per verificare mappa e collegamenti.</p>
                <?php ps_screenshot_placeholder('Modifica di un luogo esistente', 'Elenco dei luoghi con la ricerca della scheda e il comando “Modifica” evidenziati.'); ?>
            </section>
        </article>

        <?php require __DIR__ . '/../includes/guide-navigation.php'; ?>
    </div>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
