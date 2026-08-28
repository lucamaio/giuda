<?php

declare(strict_types=1);

$guideNumber = '02';
$guideTitle = 'Come pubblicare un evento';
$pageTitle = $guideTitle;
$pageDescription = 'Guida Point Service per pubblicare eventi e iniziative indicando correttamente date, luoghi e informazioni per i cittadini.';
$currentPage = 'guide';
$breadcrumbCurrent = 'Eventi';
$guideIntroduction = [
    'La sezione Eventi permette di pubblicare manifestazioni, incontri, spettacoli, iniziative culturali, appuntamenti istituzionali e altre attività aperte al pubblico.',
    'Una scheda Evento correttamente compilata consente al cittadino di conoscere immediatamente cosa si svolge, quando, dove e come partecipare.',
];
$toc = [
    ['number' => '01', 'id' => 'accesso-eventi', 'title' => 'Accedere alla sezione Eventi'],
    ['number' => '02', 'id' => 'titolo', 'title' => 'Inserire il titolo'],
    ['number' => '03', 'id' => 'tipo-evento', 'title' => 'Selezionare il tipo di evento'],
    ['number' => '04', 'id' => 'date-orari', 'title' => 'Inserire data e orari'],
    ['number' => '05', 'id' => 'argomenti', 'title' => 'Selezionare gli argomenti'],
    ['number' => '06', 'id' => 'descrizione-breve', 'title' => 'Scrivere la descrizione breve'],
    ['number' => '07', 'id' => 'destinatari', 'title' => 'Indicare a chi è rivolto'],
    ['number' => '08', 'id' => 'descrizione-completa', 'title' => 'Scrivere la descrizione completa'],
    ['number' => '09', 'id' => 'luogo', 'title' => 'Collegare il luogo'],
    ['number' => '10', 'id' => 'evento-principale', 'title' => 'Collegare un eventuale evento principale'],
    ['number' => '11', 'id' => 'costi', 'title' => 'Inserire costi e modalità di partecipazione'],
    ['number' => '12', 'id' => 'organizzatori', 'title' => 'Organizzatori, patrocinio e contatti'],
    ['number' => '13', 'id' => 'immagini', 'title' => 'Immagini'],
    ['number' => '14', 'id' => 'video', 'title' => 'Video e trascrizioni'],
    ['number' => '15', 'id' => 'controllo-finale', 'title' => 'Controllo finale'],
];
$previousGuide = ['title' => 'Notizie', 'href' => 'guida/notizie.php'];
$nextGuide = ['title' => 'Luoghi', 'href' => 'guida/luoghi.php'];

require __DIR__ . '/../includes/header.php';
?>
<main id="main-content" class="guide-page">
    <div class="container">
        <?php require __DIR__ . '/../includes/guide-intro.php'; ?>

        <article class="guide-content" aria-label="Procedura per pubblicare un evento">
            <section class="guide-section" aria-labelledby="accesso-eventi">
                <?php ps_section_heading('01', 'accesso-eventi', 'Accedere alla sezione Eventi'); ?>
                <p>Accedi all'area riservata del sito istituzionale con le credenziali che ti sono state assegnate.</p>
                <p>Dal menu laterale del pannello di amministrazione seleziona:</p>
                <p class="guide-path">Eventi → Tutti gli eventi</p>
                <p>Viene visualizzato l'elenco degli eventi già presenti. Prima di aggiungere una nuova scheda verifica che lo stesso evento non sia già stato pubblicato.</p>
                <p>Per iniziare seleziona “Aggiungi un evento”. Le funzioni disponibili possono variare in base alle autorizzazioni del tuo utente.</p>
                <?php ps_screenshot_placeholder('Pannello WordPress con la voce Eventi evidenziata'); ?>
            </section>

            <section class="guide-section" aria-labelledby="titolo">
                <?php ps_section_heading('02', 'titolo', 'Inserire il titolo'); ?>
                <p>Inserisci un titolo che permetta di riconoscere subito l'iniziativa. Indica il nome dell'evento e, quando utile, l'edizione o l'anno.</p>
                <div class="comparison" aria-label="Confronto fra un titolo da evitare e uno preferibile">
                    <div class="comparison__item comparison__item--avoid"><span class="comparison__label">Da evitare</span><strong>EVENTO ESTIVO</strong></div>
                    <div class="comparison__item comparison__item--prefer"><span class="comparison__label">Preferibile</span><strong>Festival della lettura 2026</strong></div>
                </div>
                <p>Evita titoli generici, interamente in maiuscolo o che contengono informazioni già previste negli altri campi della scheda.</p>
            </section>

            <section class="guide-section" aria-labelledby="tipo-evento">
                <?php ps_section_heading('03', 'tipo-evento', 'Selezionare il tipo di evento'); ?>
                <p>Seleziona la tipologia che descrive meglio la natura dell'iniziativa, scegliendo tra le opzioni disponibili nel sito.</p>
                <p>Il tipo di evento aiuta il cittadino a distinguere, ad esempio, un incontro, uno spettacolo, una manifestazione o una cerimonia.</p>
                <p>Utilizza una sola tipologia coerente con il contenuto e non confonderla con gli argomenti tematici.</p>
            </section>

            <section class="guide-section" aria-labelledby="date-orari">
                <?php ps_section_heading('04', 'date-orari', 'Inserire data e orari'); ?>
                <p>Compila con attenzione la data di inizio, la data di fine e gli orari dell'evento.</p>
                <p>Se l'iniziativa si svolge in una sola giornata, indica l'orario di apertura e quello di conclusione. Per eventi su più giornate verifica che l'intervallo inserito corrisponda al programma ufficiale.</p>
                <p>Quando gli orari cambiano da un giorno all'altro, descrivi chiaramente le variazioni nel testo completo.</p>
                <aside class="callout"><?= ps_icon('calendar') ?><p>Controlla che date e orari coincidano in tutti i punti della scheda e negli eventuali allegati.</p></aside>
                <?php ps_screenshot_placeholder('Campi data e orario dell’evento compilati correttamente'); ?>
            </section>

            <section class="guide-section" aria-labelledby="argomenti">
                <?php ps_section_heading('05', 'argomenti', 'Selezionare gli argomenti'); ?>
                <p>Associa l'evento solamente agli argomenti realmente trattati.</p>
                <p>Gli argomenti collegano l'iniziativa alle altre informazioni dello stesso ambito e facilitano la navigazione del cittadino.</p>
                <p>Evita di selezionare un numero eccessivo di argomenti con il solo scopo di dare maggiore visibilità alla scheda.</p>
            </section>

            <section class="guide-section" aria-labelledby="descrizione-breve">
                <?php ps_section_heading('06', 'descrizione-breve', 'Scrivere la descrizione breve'); ?>
                <p>La descrizione breve compare nelle anteprime e negli elenchi degli eventi. Deve spiegare in poche parole che cosa propone l'iniziativa senza ripetere il titolo.</p>
                <div class="example-box">
                    <div class="example-box__item"><span class="example-box__label">Titolo</span><strong>Festival della lettura 2026</strong></div>
                    <div class="example-box__item"><span class="example-box__label">Descrizione breve</span><p>Tre giornate di incontri con autori, laboratori per bambini e presentazioni nella biblioteca comunale.</p></div>
                </div>
            </section>

            <section class="guide-section" aria-labelledby="destinatari">
                <?php ps_section_heading('07', 'destinatari', 'Indicare a chi è rivolto'); ?>
                <p>Specifica i destinatari dell'evento, ad esempio cittadini, famiglie, giovani, associazioni o operatori di un determinato settore.</p>
                <p>Se la partecipazione è riservata a persone con requisiti specifici, riportali anche nella descrizione completa e nelle modalità di partecipazione.</p>
            </section>

            <section class="guide-section" aria-labelledby="descrizione-completa">
                <?php ps_section_heading('08', 'descrizione-completa', 'Scrivere la descrizione completa'); ?>
                <p>Presenta l'evento in modo chiaro e ordinato, includendo tutte le informazioni necessarie per partecipare.</p>
                <p>Il testo dovrebbe spiegare:</p>
                <ul>
                    <li>in cosa consiste l'iniziativa;</li>
                    <li>come si svolge e qual è il programma;</li>
                    <li>chi può partecipare;</li>
                    <li>se è necessaria la prenotazione;</li>
                    <li>eventuali scadenze o indicazioni pratiche;</li>
                    <li>come richiedere ulteriori informazioni.</li>
                </ul>
                <p>Per testi lunghi utilizza paragrafi, elenchi e sottotitoli descrittivi. Non copiare la descrizione breve nel testo completo.</p>
            </section>

            <section class="guide-section" aria-labelledby="luogo">
                <?php ps_section_heading('09', 'luogo', 'Collegare il luogo'); ?>
                <p>Seleziona il luogo in cui si svolge l'evento tra quelli già presenti nel sito.</p>
                <p>Il collegamento permette di mostrare al cittadino indirizzo, mappa, accessibilità, contatti e altre informazioni già registrate nella scheda del luogo.</p>
                <aside class="callout"><?= ps_icon('pin') ?><p><strong>Prima di creare un nuovo luogo verifica sempre che non sia già presente.</strong></p></aside>
                <p>Se l'evento si svolge in più sedi, indica con chiarezza l'associazione tra le attività e i rispettivi luoghi nella descrizione completa.</p>
            </section>

            <section class="guide-section" aria-labelledby="evento-principale">
                <?php ps_section_heading('10', 'evento-principale', 'Collegare un eventuale evento principale'); ?>
                <p>Quando l'appuntamento fa parte di una manifestazione più ampia, collega la scheda all'evento principale già pubblicato.</p>
                <p>Questo collegamento è utile per singoli incontri, spettacoli o giornate che compongono un programma generale.</p>
                <p>Non utilizzare il collegamento se i due eventi sono solamente simili ma indipendenti.</p>
            </section>

            <section class="guide-section" aria-labelledby="costi">
                <?php ps_section_heading('11', 'costi', 'Inserire costi e modalità di partecipazione'); ?>
                <p>Indica se l'evento è gratuito o a pagamento. In presenza di costi riporta gli importi, le eventuali riduzioni e le modalità di acquisto.</p>
                <p>Spiega se è necessaria la prenotazione, come effettuarla, entro quale data e se sono previsti limiti di posti.</p>
                <p>Le informazioni devono essere coerenti con i documenti, i moduli e le pagine esterne eventualmente collegate.</p>
            </section>

            <section class="guide-section" aria-labelledby="organizzatori">
                <?php ps_section_heading('12', 'organizzatori', 'Organizzatori, patrocinio e contatti'); ?>
                <p>Indica gli enti o le organizzazioni responsabili dell'iniziativa e specifica gli eventuali patrocini senza confonderli con l'organizzazione diretta.</p>
                <p>Collega, quando disponibili, i punti di contatto già presenti nel sito. Inserisci solamente recapiti destinati al pubblico e utili per ricevere informazioni sull'evento.</p>
                <p>Prima di creare un nuovo ufficio, un'organizzazione o un punto di contatto verifica che non sia già disponibile.</p>
            </section>

            <section class="guide-section" aria-labelledby="immagini">
                <?php ps_section_heading('13', 'immagini', 'Immagini'); ?>
                <p>Utilizza un'immagine principale pertinente, leggibile e di qualità adeguata.</p>
                <p>Evita locandine contenenti informazioni essenziali disponibili solamente come testo nell'immagine: date, orari, luogo e modalità di partecipazione devono essere riportati anche nei campi testuali della scheda.</p>
                <p>Compila il testo alternativo quando l'immagine trasmette informazioni utili. Se è puramente decorativa, segui le impostazioni previste dal sito.</p>
            </section>

            <section class="guide-section" aria-labelledby="video">
                <?php ps_section_heading('14', 'video', 'Video e trascrizioni'); ?>
                <p>Inserisci eventuali video utilizzando i campi dedicati della scheda.</p>
                <p>Quando l'audio contiene informazioni necessarie per comprendere l'evento, fornisci sottotitoli accurati o una trascrizione testuale.</p>
                <p>Verifica che il video sia pubblicamente accessibile e che il collegamento continui a funzionare.</p>
            </section>

            <section class="guide-section" aria-labelledby="controllo-finale">
                <?php ps_section_heading('15', 'controllo-finale', 'Controllo finale'); ?>
                <?php ps_checklist(['Titolo chiaro', 'Tipo di evento corretto', 'Date e orari verificati', 'Descrizioni complete', 'Destinatari indicati', 'Luogo corretto', 'Costi e prenotazioni', 'Contatti aggiornati', 'Immagini e video accessibili']); ?>
                <p>Dopo la pubblicazione apri l'evento sul sito pubblico e controlla il risultato finale, prestando particolare attenzione alle date, alla visualizzazione del luogo e ai collegamenti.</p>
            </section>
        </article>

        <?php require __DIR__ . '/../includes/guide-navigation.php'; ?>
    </div>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
