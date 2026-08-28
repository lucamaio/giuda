<?php

declare(strict_types=1);

$guideNumber = '01';
$guideTitle = 'Come pubblicare una notizia';
$pageTitle = $guideTitle;
$pageDescription = 'Guida Point Service per creare, compilare e pubblicare correttamente una notizia sul sito istituzionale del Comune.';
$currentPage = 'guide';
$breadcrumbCurrent = 'Notizie';
$guideIntroduction = [
    "Questa guida illustra come creare e pubblicare correttamente una Notizia all'interno del sito istituzionale del Comune.",
    'La sezione Notizie permette di pubblicare avvisi, comunicazioni e aggiornamenti rivolti ai cittadini. Per garantire una comunicazione chiara e accessibile è importante compilare correttamente tutti i campi previsti, evitando duplicazioni e utilizzando titoli e descrizioni comprensibili.',
];
$toc = [
    ['number' => '01', 'id' => 'accesso', 'title' => "Accedere all'area riservata"],
    ['number' => '02', 'id' => 'notizie', 'title' => 'Aprire la sezione Notizie'],
    ['number' => '03', 'id' => 'titolo', 'title' => 'Inserire il titolo'],
    ['number' => '04', 'id' => 'argomenti', 'title' => 'Selezionare gli argomenti'],
    ['number' => '05', 'id' => 'tipo', 'title' => 'Indicare il tipo di notizia'],
    ['number' => '06', 'id' => 'ufficio', 'title' => "Indicare l'ufficio responsabile"],
    ['number' => '07', 'id' => 'descrizione-breve', 'title' => 'Descrizione breve'],
    ['number' => '08', 'id' => 'testo-completo', 'title' => 'Testo completo'],
    ['number' => '09', 'id' => 'date', 'title' => 'Date'],
    ['number' => '10', 'id' => 'contenuti-collegati', 'title' => 'Contenuti collegati'],
    ['number' => '11', 'id' => 'documenti', 'title' => 'Documenti e allegati'],
    ['number' => '12', 'id' => 'immagine', 'title' => 'Immagine principale'],
    ['number' => '13', 'id' => 'video', 'title' => 'Video'],
    ['number' => '14', 'id' => 'controllo-finale', 'title' => 'Controllo finale'],
];
$previousGuide = null;
$nextGuide = ['title' => 'Eventi', 'href' => 'guida/eventi.php'];

require __DIR__ . '/../includes/header.php';
?>
<main id="main-content" class="guide-page">
    <div class="container">
        <?php require __DIR__ . '/../includes/guide-intro.php'; ?>

        <article class="guide-content" aria-label="Procedura per pubblicare una notizia">
            <section class="guide-section" aria-labelledby="accesso">
                <?php ps_section_heading('01', 'accesso', "Accedere all'area riservata"); ?>
                <p>Dalla homepage del sito istituzionale scorri fino alla parte inferiore della pagina e seleziona il collegamento “Area riservata”.</p>
                <?php ps_screenshot_placeholder('Parte inferiore della homepage con evidenziato il collegamento “Area riservata”'); ?>
                <p>Nella schermata di accesso inserisci le credenziali che ti sono state fornite e seleziona “Accedi”.</p>
                <p>Una volta effettuato l'accesso viene visualizzato il pannello di amministrazione di WordPress.</p>
                <p>Le funzioni disponibili possono cambiare in base alle autorizzazioni assegnate al singolo utente.</p>
                <?php ps_screenshot_placeholder('Schermata di login WordPress'); ?>
            </section>

            <section class="guide-section" aria-labelledby="notizie">
                <?php ps_section_heading('02', 'notizie', 'Aprire la sezione Notizie'); ?>
                <p>Dal menu laterale seleziona:</p>
                <p class="guide-path">Notizie → Tutte le notizie</p>
                <p>Viene mostrato l'elenco delle notizie già presenti nel sito.</p>
                <p>Da questa schermata è possibile consultare, modificare o aggiungere nuovi contenuti, compatibilmente con i permessi assegnati.</p>
                <p>Per creare un nuovo contenuto seleziona “Aggiungi una notizia”.</p>
                <?php ps_screenshot_placeholder('Pannello WordPress con la voce Notizie evidenziata'); ?>
            </section>

            <section class="guide-section" aria-labelledby="titolo">
                <?php ps_section_heading('03', 'titolo', 'Inserire il titolo'); ?>
                <p>Il primo elemento da compilare è il titolo della notizia.</p>
                <p>Il titolo deve permettere al cittadino di comprendere immediatamente l'argomento della comunicazione.</p>
                <div class="comparison" aria-label="Confronto fra un titolo da evitare e uno preferibile">
                    <div class="comparison__item comparison__item--avoid"><span class="comparison__label">Da evitare</span><strong>AVVISO PUBBLICO</strong></div>
                    <div class="comparison__item comparison__item--prefer"><span class="comparison__label">Preferibile</span><strong>Contributo per il trasporto scolastico 2026/2027: domande entro il 30 settembre</strong></div>
                </div>
                <p>Non utilizzare l'intero titolo in lettere maiuscole, salvo sigle o denominazioni che lo richiedano.</p>
            </section>

            <section class="guide-section" aria-labelledby="argomenti">
                <?php ps_section_heading('04', 'argomenti', 'Selezionare gli argomenti'); ?>
                <p>La sezione Argomenti permette di classificare la notizia in base alle tematiche trattate.</p>
                <p>Seleziona solamente gli argomenti realmente collegati al contenuto.</p>
                <p>Ad esempio, una comunicazione relativa al trasporto degli studenti potrebbe essere associata a un argomento riguardante la scuola o l'istruzione.</p>
                <p>Gli argomenti facilitano la navigazione del sito e permettono di collegare tra loro contenuti appartenenti alla stessa area tematica.</p>
            </section>

            <section class="guide-section" aria-labelledby="tipo">
                <?php ps_section_heading('05', 'tipo', 'Indicare il tipo di notizia'); ?>
                <p>Se disponibile, seleziona la tipologia di notizia più appropriata.</p>
                <p>La tipologia indica la natura del contenuto, ad esempio un avviso o un'altra categoria prevista dal sito.</p>
                <p>È importante non confondere il tipo di notizia, che identifica la natura del contenuto, con gli argomenti, che indicano invece gli ambiti tematici trattati.</p>
            </section>

            <section class="guide-section" aria-labelledby="ufficio">
                <?php ps_section_heading('06', 'ufficio', "Indicare l'ufficio responsabile"); ?>
                <p>Nel campo “A cura di” seleziona l'ufficio o l'unità organizzativa responsabile della notizia.</p>
                <p>Prima di creare un nuovo ufficio verifica sempre che non sia già presente.</p>
                <p>Il sito utilizza infatti contenuti collegati tra loro: lo stesso ufficio può essere associato a più notizie, servizi, documenti e altre schede.</p>
            </section>

            <section class="guide-section" aria-labelledby="descrizione-breve">
                <?php ps_section_heading('07', 'descrizione-breve', 'Descrizione breve'); ?>
                <p>La descrizione breve viene utilizzata nelle anteprime e negli elenchi delle notizie.</p>
                <p>Deve fornire una sintesi immediata del contenuto senza ripetere il titolo.</p>
                <div class="example-box">
                    <div class="example-box__item"><span class="example-box__label">Titolo</span><strong>Contributo per il trasporto scolastico 2026/2027: domande entro il 30 settembre</strong></div>
                    <div class="example-box__item"><span class="example-box__label">Descrizione breve</span><p>Aperte le domande per richiedere il contributo comunale destinato alle spese di trasporto scolastico per l'anno 2026/2027.</p></div>
                </div>
            </section>

            <section class="guide-section" aria-labelledby="testo-completo">
                <?php ps_section_heading('08', 'testo-completo', 'Testo completo'); ?>
                <p>Nella sezione dedicata al testo completo inserisci tutte le informazioni necessarie al cittadino.</p>
                <p>Il contenuto dovrebbe spiegare chiaramente:</p>
                <ul>
                    <li>cosa viene comunicato;</li>
                    <li>a chi è rivolto;</li>
                    <li>cosa deve fare il cittadino;</li>
                    <li>eventuali requisiti;</li>
                    <li>eventuali date di scadenza;</li>
                    <li>dove ottenere ulteriori informazioni.</li>
                </ul>
                <p>Evita di copiare nella descrizione estesa lo stesso testo già utilizzato nel titolo o nella descrizione breve.</p>
                <p>Quando il contenuto è lungo, suddividilo in paragrafi e utilizza sottotitoli chiari.</p>
            </section>

            <section class="guide-section" aria-labelledby="date">
                <?php ps_section_heading('09', 'date', 'Date'); ?>
                <p>Se la notizia prevede una data di pubblicazione o di scadenza, compila gli appositi campi.</p>
                <p>La data di scadenza è particolarmente importante per avvisi, iscrizioni, domande o comunicazioni valide solamente fino a una determinata data.</p>
                <p>Assicurati che la data inserita nella scheda corrisponda a quella riportata negli eventuali documenti allegati.</p>
            </section>

            <section class="guide-section" aria-labelledby="contenuti-collegati">
                <?php ps_section_heading('10', 'contenuti-collegati', 'Contenuti collegati'); ?>
                <p>La notizia può essere collegata ad altri contenuti già presenti nel sito, ad esempio persone, luoghi, documenti pubblici e uffici.</p>
                <p>Utilizza questi collegamenti quando sono realmente pertinenti.</p>
                <aside class="callout"><?= ps_icon('sitemap') ?><p><strong>Prima di creare un nuovo elemento verifica sempre che non sia già presente.</strong></p></aside>
            </section>

            <section class="guide-section" aria-labelledby="documenti">
                <?php ps_section_heading('11', 'documenti', 'Documenti e allegati'); ?>
                <p>Quando devi allegare un documento verifica innanzitutto che il nome del file sia chiaro e coerente con il contenuto.</p>
                <div class="comparison" aria-label="Confronto fra nomi file da evitare e preferibili">
                    <div class="comparison__item comparison__item--avoid"><span class="comparison__label">Da evitare</span><ul class="file-list"><li>documento.pdf</li><li>scan001.pdf</li><li>file-definitivo2.pdf</li></ul></div>
                    <div class="comparison__item comparison__item--prefer"><span class="comparison__label">Preferibile</span><strong>avviso-contributo-trasporto-scolastico-2026.pdf</strong></div>
                </div>
                <p>I documenti pubblicati devono inoltre essere, per quanto possibile, accessibili.</p>
                <p>È preferibile utilizzare documenti PDF generati direttamente dal file originale piuttosto che semplici scansioni.</p>
                <p>Il testo deve essere selezionabile e correttamente strutturato.</p>
            </section>

            <section class="guide-section" aria-labelledby="immagine">
                <?php ps_section_heading('12', 'immagine', 'Immagine principale'); ?>
                <p>Quando prevista, seleziona un'immagine pertinente al contenuto della notizia.</p>
                <p>Evita immagini generiche o puramente decorative quando non aggiungono informazioni utili.</p>
                <p>Compila inoltre il testo alternativo dell'immagine, quando disponibile.</p>
            </section>

            <section class="guide-section" aria-labelledby="video">
                <?php ps_section_heading('13', 'video', 'Video'); ?>
                <p>Se nella notizia viene inserito un video, utilizza gli appositi campi della scheda.</p>
                <p>Quando il contenuto audio contiene informazioni importanti, prevedi sottotitoli o una trascrizione testuale.</p>
            </section>

            <section class="guide-section" aria-labelledby="controllo-finale">
                <?php ps_section_heading('14', 'controllo-finale', 'Controllo finale'); ?>
                <?php ps_checklist(['Titolo corretto', 'Descrizione breve', 'Testo comprensibile', 'Date corrette', 'Ufficio corretto', 'Collegamenti corretti', 'Documenti accessibili', 'Allegati corretti', 'Controllo dati personali']); ?>
                <p>Dopo la pubblicazione apri la notizia direttamente dal sito e controlla il risultato finale.</p>
            </section>
        </article>

        <?php require __DIR__ . '/../includes/guide-navigation.php'; ?>
    </div>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
