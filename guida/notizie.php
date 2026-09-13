<?php

declare(strict_types=1);

$guideNumber = '02';
$guideTitle = 'Come pubblicare una notizia';
$pageTitle = $guideTitle;
$pageDescription = 'Guida Point Service per creare, compilare e pubblicare correttamente una notizia sul sito istituzionale del Comune.';
$currentPage = 'guide';
$breadcrumbCurrent = 'Notizie';
$guideIntroId = 'premessa-iniziale';
$guideIntroduction = [
    "Questa guida illustra come creare, pubblicare e aggiornare correttamente i contenuti della sezione Notizie del sito istituzionale del Comune.",
    'Prima di iniziare, consultare le informazioni preliminari per scegliere la tipologia di contenuto più adatta e verificare se sia necessario creare una nuova pubblicazione oppure aggiornarne una esistente.',
];
$toc = [
    ['number' => '01', 'id' => 'premessa-iniziale', 'title' => 'Premessa iniziale'],
    ['number' => '02', 'id' => 'informazioni-preliminari', 'title' => 'Informazioni preliminari'],
    ['number' => '03', 'id' => 'accesso', 'title' => "Accedere all'area riservata"],
    [
        'number' => '04',
        'id' => 'nuova-notizia',
        'title' => 'Nuova notizia',
        'children' => [
            ['number' => '03', 'id' => 'notizie', 'title' => 'Aprire la sezione Notizie'],
            ['number' => '04', 'id' => 'scheda-inserimento', 'title' => 'Scheda di inserimento'],
            ['number' => '05', 'id' => 'contenuti-opzionali', 'title' => 'Contenuti opzionali e multimedia'],
            ['number' => '06', 'id' => 'visibilita-homepage', 'title' => 'Visibilità nella homepage'],
            ['number' => '07', 'id' => 'controllo-finale', 'title' => 'Controllo finale e pubblicazione'],
        ],
    ],
    ['number' => '05', 'id' => 'modifica-notizia', 'title' => 'Modifica di una notizia'],
];
$previousGuide = ['title' => 'Struttura del sito', 'href' => 'guida/struttura-sito.php'];
$nextGuide = ['title' => 'Eventi', 'href' => 'guida/eventi.php'];

require __DIR__ . '/../includes/header.php';
?>
<main id="main-content" class="guide-page">
    <div class="container">
        <?php require __DIR__ . '/../includes/guide-intro.php'; ?>

        <article class="guide-content" aria-label="Procedura per pubblicare una notizia">
            <section class="guide-section" aria-labelledby="informazioni-preliminari">
                <?php ps_section_heading('01', 'informazioni-preliminari', 'Informazioni preliminari'); ?>

                <p>Una notizia è un contenuto informativo di interesse pubblico che racconta un fatto, un’iniziativa, un cambiamento o un’opportunità riguardante il Comune e la comunità. Può riguardare, ad esempio, l’apertura di un nuovo servizio, l’avvio di un progetto, un evento istituzionale, un finanziamento ottenuto, un intervento sul territorio o il risultato di un’attività amministrativa.</p>

                <p>La sezione può comprendere notizie, avvisi e comunicati. Questi contenuti hanno finalità diverse e devono essere classificati in base al messaggio che si desidera trasmettere, non soltanto in base all’argomento trattato.</p>

                <figure class="guide-screenshot guide-screenshot--ready">
                    <img src="<?= ps_escape(ps_url('assets/img/screenshots/notizie/00-avviso-notizia-comunicato.png')) ?>" alt="Confronto illustrato tra un avviso con scadenza, una notizia rivolta alla comunità e un comunicato ufficiale dell’Amministrazione." loading="lazy" decoding="async">
                    <figcaption>Avviso, notizia e comunicato rispondono a esigenze diverse: segnalare una scadenza o un’urgenza, raccontare un fatto di interesse pubblico oppure diffondere una posizione ufficiale dell’Amministrazione.</figcaption>
                </figure>

                <h3 class="guide-section__subtitle">Quando pubblicare un avviso</h3>
                <p>Pubblicare un avviso quando il cittadino deve conoscere una scadenza, rispettare un termine, presentare una domanda oppure modificare temporaneamente un comportamento. Sono avvisi, ad esempio, la chiusura di una strada, l’interruzione di un servizio, una variazione degli orari, un’allerta, la convocazione di una prova o la scadenza per richiedere un contributo. Il titolo deve rendere immediatamente riconoscibili l’azione richiesta e, quando presente, la data di scadenza.</p>

                <h3 class="guide-section__subtitle">Quando pubblicare una notizia</h3>
                <p>Pubblicare una notizia quando lo scopo principale è informare e raccontare un fatto di interesse per la comunità, senza richiedere necessariamente un’azione urgente al lettore. Alcuni esempi sono l’inaugurazione di uno spazio pubblico, l’avvio di un progetto, la presentazione di un’iniziativa culturale, il resoconto di un intervento concluso o l’attivazione di un nuovo servizio.</p>

                <h3 class="guide-section__subtitle">Quando pubblicare un comunicato</h3>
                <p>Pubblicare un comunicato quando l’Amministrazione deve diffondere una dichiarazione ufficiale, una presa di posizione, una precisazione o un aggiornamento istituzionale destinato anche agli organi di informazione. Un comunicato può riguardare, ad esempio, una dichiarazione del Sindaco, la risposta ufficiale a un’emergenza, la presentazione di una decisione dell’Amministrazione o una nota rivolta alla stampa.</p>

                <h3 class="guide-section__subtitle">Creare o aggiornare un contenuto</h3>
                <p>Prima della pubblicazione verificare che non esista già un contenuto sullo stesso argomento. Se si tratta dell’evoluzione di una comunicazione ancora valida, valutare l’aggiornamento della notizia esistente; creare invece un nuovo contenuto quando cambia la finalità del messaggio o quando è necessario conservarne separatamente la cronologia. In ogni caso utilizzare titoli specifici, testi comprensibili e informazioni verificabili.</p>
            </section>

            <section class="guide-section" aria-labelledby="accesso">
                <?php ps_section_heading('02', 'accesso', "Accedere all'area riservata"); ?>

                <p>Per pubblicare una nuova notizia o modificare un contenuto già presente è necessario accedere all'area riservata del sito istituzionale del Comune. L'accesso consente di utilizzare il pannello di amministrazione di WordPress e di visualizzare esclusivamente le funzioni associate al proprio profilo.</p>

                <p>Le credenziali sono personali e non devono essere condivise con altri utenti. Prima di iniziare, assicurarsi di avere a disposizione il proprio nome utente e la password e di trovarsi sul sito istituzionale corretto, verificando l'indirizzo mostrato nella barra del browser.</p>

                <p>Se non si dispone ancora di un account oppure il profilo non è abilitato alla pubblicazione delle notizie, è necessario inviare un'email a Point Service. La richiesta deve contenere:</p>

                <ul>
                    <li>il nome e il cognome della persona da abilitare;</li>
                    <li>un indirizzo email personale e attivo, al quale inviare le credenziali e le comunicazioni relative all'account;</li>
                    <li>le sezioni per le quali si richiede l'abilitazione alla pubblicazione, ad esempio <strong>Gestione sito</strong>, <strong>Amministrazione Trasparente</strong> o altre aree di competenza.</li>
                </ul>

                <p>È importante indicare con precisione le sezioni richieste, perché le funzioni disponibili nel pannello vengono assegnate in base al ruolo e alle attività che ciascun operatore è autorizzato a svolgere.</p>

                <p>La password ricevuta in seguito alla richiesta di abilitazione può essere modificata dopo il primo accesso attraverso le impostazioni del proprio profilo. Per proteggere l'account, si consiglia di scegliere una password personale, sicura e diversa da quelle utilizzate per altri servizi.</p>

                <h3 class="guide-section__subtitle">Accedere dalla homepage del sito</h3>

                <p>Per raggiungere il pannello di gestione, partire dalla homepage del sito istituzionale, scorrere fino alla parte inferiore della pagina e selezionare il collegamento <strong>“Area riservata”</strong>.</p>

                <figure class="guide-screenshot guide-screenshot--ready">
                    <img src="<?= ps_escape(ps_url('assets/img/screenshots/notizie/01-area-riservata.png')) ?>" alt="Parte inferiore della homepage con il collegamento “Area riservata” evidenziato." loading="lazy" decoding="async">
                    <figcaption>Il collegamento “Area riservata” nella parte inferiore della homepage.</figcaption>
                </figure>
                <p>Si aprirà la schermata di accesso. Inserire le proprie credenziali nei campi <strong>Nome utente</strong> e <strong>Password</strong>, prestando attenzione a eventuali lettere maiuscole, minuscole o caratteri speciali. Se il dispositivo è condiviso con altre persone, non memorizzare la password nel browser.</p>

                <p>Dopo aver compilato entrambi i campi, selezionare il pulsante <strong>“Accedi”</strong>. Se i dati inseriti non vengono riconosciuti, controllare che non siano presenti spazi prima o dopo il nome utente e ripetere l'inserimento. In caso di password dimenticata, utilizzare la funzione di recupero disponibile nella schermata oppure contattare Point Service.</p>
                
                <figure class="guide-screenshot guide-screenshot--ready">
                    <img src="<?= ps_escape(ps_url('assets/img/screenshots/notizie/02-login.png')) ?>" alt="Schermata di accesso con i campi nome utente e password e il pulsante “Accedi”." loading="lazy" decoding="async">
                    <figcaption>Schermata di accesso con i campi nome utente e password e il pulsante “Accedi”.</figcaption>
                </figure>

                <p>Una volta effettuato l'accesso, viene visualizzato il pannello di amministrazione di WordPress. Dal menu laterale è possibile raggiungere le sezioni abilitate, tra cui quella dedicata alle notizie.</p>
                <?php ps_screenshot_placeholder('Pannello WordPress.', 'Anteprima della struttura del pannello di amministrazione del sito web istituzionale.'); ?>
                
                <p>Le voci e le funzioni disponibili possono variare in base alle autorizzazioni assegnate a ciascun utente. Se una sezione indicata nella guida non è visibile, non creare un nuovo account e non utilizzare le credenziali di un collega: richiedere invece una verifica del proprio profilo a Point Service.</p>

                <p>Al termine del lavoro, soprattutto quando si utilizza un computer condiviso o accessibile al pubblico, ricordarsi di uscire dal pannello tramite la funzione <strong>“Esci”</strong> presente nel menu del proprio profilo.</p>
            </section>

            <h2 class="guide-chapter-title" id="nuova-notizia">Nuova notizia</h2>

            <section class="guide-section" aria-labelledby="notizie">
                <?php ps_section_heading('03', 'notizie', 'Aprire la sezione Notizie'); ?>
                <p>Dopo aver effettuato l'accesso al pannello di amministrazione del sito, individuare la voce <strong>Notizie</strong> nel menu laterale e selezionare <strong>Tutte le notizie</strong>. Se non è ancora stato effettuato l'accesso, seguire le indicazioni della sezione <a href="#accesso">Accedere all'area riservata</a>.</p>
                <p class="guide-path">Notizie → Tutte le notizie</p>
                <?php ps_screenshot_placeholder('La sezione Notizie nel pannello di gestione', 'Menu laterale di WordPress con la voce “Notizie” e il collegamento “Tutte le notizie” evidenziati.'); ?>

                <h3 class="guide-section__subtitle">Consultare l'elenco delle notizie</h3>
                <p>Si apre la schermata con l'elenco delle notizie presenti nel pannello di gestione. Da qui è possibile individuare una notizia da consultare o aggiornare, oppure avviare l'inserimento di un nuovo contenuto.</p>
                <aside class="guide-info" aria-labelledby="notizie-info-title">
                    <?= ps_icon('info', 'guide-info__icon') ?>
                    <div>
                        <h4 class="guide-info__title" id="notizie-info-title">Da sapere</h4>
                        <p>L'elenco non comprende necessariamente solo i contenuti già pubblicati: in base al filtro selezionato e alle autorizzazioni del proprio profilo, può mostrare anche bozze, contenuti in attesa di revisione o pubblicazioni programmate.</p>
                    </div>
                </aside>
                <p>Per ogni notizia, l'elenco riporta il <strong>titolo</strong>, l'<strong>autore</strong> e la <strong>data di pubblicazione o dell'ultima modifica</strong>, secondo quanto indicato nella colonna dedicata alla data. Queste informazioni permettono di riconoscere il contenuto, individuare chi lo ha inserito e verificarne il riferimento temporale prima di aprirlo.</p>
                <p>Il sito di prova utilizzato per questa guida contiene una sola notizia di esempio. Sul sito del proprio Comune l'elenco potrà essere più ampio e distribuito su più pagine.</p>
                <p>Prima di creare un nuovo contenuto, verificare se la notizia sia già presente utilizzando il campo di ricerca e gli eventuali filtri disponibili nel pannello di gestione, oppure consultando la pagina <strong>“Novità”</strong> del sito web del Comune. Controllare il titolo e aprire la scheda per assicurarsi che non contenga già le informazioni da inserire, evitando così duplicazioni.</p>
                <p>Da questa schermata è possibile aggiungere nuove notizie, aprire quelle esistenti per modificarle oppure spostarle nel cestino, se il proprio profilo dispone delle relative autorizzazioni. Per correggere o aggiornare un contenuto già presente, consultare la sezione <a href="#modifica-notizia">Modifica di una notizia</a>.</p>

                <h3 class="guide-section__subtitle">Creare una nuova notizia</h3>
                <p>Per iniziare, selezionare il pulsante <strong>“Aggiungi una notizia”</strong> nella parte superiore della schermata. </p>
                <?php ps_screenshot_placeholder('Aggiungere una nuova notizia', 'Elenco delle notizie nel pannello WordPress con il pulsante per aggiungere una nuova notizia evidenziato nella parte superiore della schermata.'); ?>
                <p>Si apre la scheda di inserimento, nella quale compilare il titolo, il testo e gli altri campi descritti nei passaggi successivi. L'apertura della scheda non pubblica automaticamente la notizia: prima di renderla visibile sul sito occorre completarla, verificarne l'anteprima e utilizzare il comando di pubblicazione disponibile per il proprio profilo.</p>
            </section>

            <section class="guide-section" aria-labelledby="scheda-inserimento">
                <?php ps_section_heading('04', 'scheda-inserimento', 'Scheda di inserimento'); ?>
                <p>La scheda di inserimento raccoglie i campi che descrivono la notizia. Compilarli seguendo le indicazioni riportate qui sotto e verificare quelli contrassegnati come obbligatori nel proprio pannello. Documenti, date di scadenza e immagini vanno inseriti quando pertinenti al contenuto e secondo quanto previsto dalla configurazione del sito.</p>
                <aside class="guide-info" aria-labelledby="regole-notizia-title">
                    <?= ps_icon('info', 'guide-info__icon') ?>
                    <div>
                        <h3 class="guide-info__title" id="regole-notizia-title">Regole di pubblicazione</h3>
                        <p>Per le indicazioni su scrittura, formattazione, accessibilità di documenti e immagini e trattamento dei dati personali, consultare la pagina <a href="<?= ps_escape(ps_url('regole-pubblicazione.php')) ?>">Regole di pubblicazione</a>.</p>
                    </div>
                </aside>

                <h3 class="guide-section__subtitle" id="titolo">Inserire il titolo</h3>
                <p>Il primo elemento da compilare è il titolo della notizia.</p>
                <p>Il titolo deve permettere al cittadino di comprendere immediatamente l'argomento della comunicazione.</p>
                <div class="comparison" aria-label="Confronto fra un titolo da evitare e uno preferibile">
                    <div class="comparison__item comparison__item--avoid"><span class="comparison__label">Da evitare</span><strong>AVVISO PUBBLICO</strong></div>
                    <div class="comparison__item comparison__item--prefer"><span class="comparison__label">Preferibile</span><strong>Contributo per il trasporto scolastico 2026/2027: domande entro il 30 settembre</strong></div>
                </div>
                <p>Non utilizzare l'intero titolo in lettere maiuscole, salvo sigle o denominazioni che lo richiedano.</p>

                <h3 class="guide-section__subtitle" id="argomenti">Selezionare gli argomenti</h3>
                <p>La sezione Argomenti permette di classificare la notizia in base alle tematiche trattate.</p>
                <p>Seleziona solamente gli argomenti realmente collegati al contenuto.</p>
                <p>Ad esempio, una comunicazione relativa al trasporto degli studenti potrebbe essere associata a un argomento riguardante la scuola o l'istruzione.</p>
                <p>Gli argomenti facilitano la navigazione del sito e permettono di collegare tra loro contenuti appartenenti alla stessa area tematica.</p>

                <h3 class="guide-section__subtitle" id="tipo">Indicare il tipo di notizia</h3>
                <p>Se disponibile, seleziona la tipologia di notizia più appropriata.</p>
                <p>La tipologia indica la natura del contenuto, ad esempio un avviso o un'altra categoria prevista dal sito.</p>
                <p>È importante non confondere il tipo di notizia, che identifica la natura del contenuto, con gli argomenti, che indicano invece gli ambiti tematici trattati.</p>

                <h3 class="guide-section__subtitle" id="ufficio">Indicare l'ufficio responsabile</h3>
                <p>Nel campo “A cura di” seleziona l'ufficio o l'unità organizzativa responsabile della notizia.</p>
                <p>Prima di creare un nuovo ufficio verifica sempre che non sia già presente.</p>
                <p>Il sito utilizza infatti contenuti collegati tra loro: lo stesso ufficio può essere associato a più notizie, servizi, documenti e altre schede.</p>

                <h3 class="guide-section__subtitle" id="descrizione-breve">Descrizione breve</h3>
                <p>La descrizione breve viene utilizzata nelle anteprime e negli elenchi delle notizie.</p>
                <p>Deve fornire una sintesi immediata del contenuto senza ripetere il titolo.</p>
                <div class="example-box">
                    <div class="example-box__item"><span class="example-box__label">Titolo</span><strong>Contributo per il trasporto scolastico 2026/2027: domande entro il 30 settembre</strong></div>
                    <div class="example-box__item"><span class="example-box__label">Descrizione breve</span><p>Aperte le domande per richiedere il contributo comunale destinato alle spese di trasporto scolastico per l'anno 2026/2027.</p></div>
                </div>

                <h3 class="guide-section__subtitle" id="testo-completo">Testo completo</h3>
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

                <h3 class="guide-section__subtitle" id="documenti">Documenti e allegati</h3>
                <p>Quando devi allegare un documento verifica innanzitutto che il nome del file sia chiaro e coerente con il contenuto.</p>
                <div class="comparison" aria-label="Confronto fra nomi file da evitare e preferibili">
                    <div class="comparison__item comparison__item--avoid"><span class="comparison__label">Da evitare</span><ul class="file-list"><li>documento.pdf</li><li>scan001.pdf</li><li>file-definitivo2.pdf</li></ul></div>
                    <div class="comparison__item comparison__item--prefer"><span class="comparison__label">Preferibile</span><strong>avviso-contributo-trasporto-scolastico-2026.pdf</strong></div>
                </div>
                <p>I documenti pubblicati devono inoltre essere, per quanto possibile, accessibili.</p>
                <p>È preferibile utilizzare documenti PDF generati direttamente dal file originale piuttosto che semplici scansioni.</p>
                <p>Il testo deve essere selezionabile e correttamente strutturato.</p>

                <h3 class="guide-section__subtitle" id="date">Date</h3>
                <p>Se la notizia prevede una data di pubblicazione o di scadenza, compila gli appositi campi.</p>
                <p>La data di scadenza è particolarmente importante per avvisi, iscrizioni, domande o comunicazioni valide solamente fino a una determinata data.</p>
                <p>Assicurati che la data inserita nella scheda corrisponda a quella riportata negli eventuali documenti allegati.</p>

                <h3 class="guide-section__subtitle" id="immagine">Immagine principale</h3>
                <p>Quando prevista, seleziona un'immagine pertinente al contenuto della notizia.</p>
                <p>Evita immagini generiche o puramente decorative quando non aggiungono informazioni utili.</p>
                <p>Compila inoltre il testo alternativo dell'immagine, quando disponibile.</p>
            </section>

            <section class="guide-section" aria-labelledby="contenuti-opzionali">
                <?php ps_section_heading('05', 'contenuti-opzionali', 'Contenuti opzionali e multimedia'); ?>
                <p>Completare queste parti quando aiutano il cittadino a comprendere la notizia o ad approfondirne il contenuto. Non è necessario aggiungere materiali a ogni pubblicazione: utilizzare soltanto quelli pertinenti. Le voci disponibili possono variare in base alla configurazione del portale.</p>

                <h3 class="guide-section__subtitle" id="contenuti-collegati">Contenuti collegati</h3>
                <p>La notizia può essere collegata ad altri contenuti già presenti nel sito, ad esempio persone, luoghi, documenti pubblici e uffici.</p>
                <p>Utilizza questi collegamenti quando sono realmente pertinenti.</p>
                <aside class="callout"><?= ps_icon('sitemap') ?><p><strong>Prima di creare un nuovo elemento verifica sempre che non sia già presente.</strong></p></aside>
                <h3 class="guide-section__subtitle" id="multimedia">Multimedia</h3>
                <p>La sezione <strong>Multimedia</strong> consente di arricchire la notizia con una galleria di immagini, video e audio, utilizzando i campi previsti nel pannello. Questi materiali accompagnano il testo della notizia e devono avere un contenuto coerente con le informazioni pubblicate.</p>

                <h4 class="guide-section__subtitle" id="galleria-immagini">Galleria di immagini</h4>
                <p>Utilizzare la galleria per mostrare più fotografie relative alla stessa notizia, ad esempio le fasi di un intervento o i momenti di un'iniziativa. Selezionare le immagini dalla libreria multimediale o caricarle tramite il comando disponibile, quindi verificarne l'ordine e compilare i testi alternativi e le eventuali didascalie. La galleria è distinta dall'immagine principale, usata per rappresentare la notizia nelle anteprime.</p>

                <h4 class="guide-section__subtitle" id="video">Video</h4>
                <p>Inserire un video quando è utile mostrare un'attività, un intervento o una presentazione. Utilizzare il campo dedicato per aggiungere il file o il collegamento, secondo le modalità previste dal portale. Controllare nell'anteprima che il video sia riproducibile e accompagnarlo con una breve descrizione.</p>

                <h4 class="guide-section__subtitle" id="audio">Audio</h4>
                <p>Utilizzare il campo audio per registrazioni pertinenti, come un'intervista o un approfondimento. Aggiungere il file o il collegamento con il comando disponibile, specificare il contenuto della registrazione e verificare che la riproduzione funzioni correttamente.</p>
                <p>Per i criteri di accessibilità, compresi testi alternativi, sottotitoli e trascrizioni, e per le indicazioni sull'uso dei materiali, fare riferimento alle <a href="<?= ps_escape(ps_url('regole-pubblicazione.php')) ?>">Regole di pubblicazione</a>.</p>
            </section>

            <section class="guide-section" aria-labelledby="visibilita-homepage">
                <?php ps_section_heading('06', 'visibilita-homepage', 'Visibilità nella homepage'); ?>
                <p>Prima di pubblicare, verificare le caselle <strong>“Evidenzia nella HomePage”</strong> ed <strong>“Escludi dalla homepage”</strong>, quando presenti nella scheda. Queste opzioni riguardano la presenza della notizia nella pagina iniziale del sito e sono distinte dal comando di pubblicazione.</p>

                <h3 class="guide-section__subtitle">Evidenzia nella HomePage</h3>
                <p>Selezionare questa casella quando si desidera dare maggiore risalto alla notizia nella homepage, ad esempio per un avviso importante, un'iniziativa di interesse generale o l'attivazione di un servizio. La posizione e la modalità di visualizzazione dipendono dall'organizzazione della homepage del proprio portale.</p>
                <p>Utilizzare l'evidenza per contenuti che meritano particolare attenzione e rimuoverla quando non sono più attuali, salvando la modifica alla scheda.</p>

                <h3 class="guide-section__subtitle">Escludi dalla homepage</h3>
                <p>Selezionare questa casella quando la notizia deve essere pubblicata ma non deve comparire nella homepage, ad esempio perché riguarda un pubblico specifico o non richiede visibilità nella pagina iniziale. L'esclusione dalla homepage non equivale a eliminare la notizia o a renderla riservata: se pubblicata, rimane consultabile nella sezione delle notizie e tramite il suo collegamento.</p>

                <aside class="guide-info" aria-labelledby="homepage-info-title">
                    <?= ps_icon('info', 'guide-info__icon') ?>
                    <div>
                        <h3 class="guide-info__title" id="homepage-info-title">Scegliere un'impostazione coerente</h3>
                        <p>Evitare di selezionare contemporaneamente entrambe le caselle, perché esprimono indicazioni opposte. Per una pubblicazione ordinaria, lasciare entrambe deselezionate: la presenza della notizia nella homepage seguirà i criteri previsti dal sito. Dopo il salvataggio, controllare il risultato nella pagina pubblica.</p>
                    </div>
                </aside>
                <?php ps_screenshot_placeholder('Opzioni di visibilità nella homepage', 'Scheda della notizia con le caselle “Evidenzia nella HomePage” ed “Escludi dalla homepage” evidenziate.'); ?>
            </section>

            <section class="guide-section" aria-labelledby="controllo-finale">
                <?php ps_section_heading('07', 'controllo-finale', 'Controllo finale e pubblicazione'); ?>
                <p>Prima di pubblicare, verificare la scheda e gli eventuali contenuti multimediali seguendo le <a href="<?= ps_escape(ps_url('regole-pubblicazione.php')) ?>">Regole di pubblicazione</a>.</p>
                <?php ps_checklist(['Titolo corretto', 'Descrizione breve', 'Testo comprensibile', 'Date corrette', 'Ufficio corretto', 'Collegamenti corretti', 'Documenti accessibili', 'Allegati corretti', 'Controllo dati personali']); ?>
                <h3 class="guide-section__subtitle">Pubblicare la notizia</h3>
                <p>Terminata la compilazione, utilizzare il comando <strong>“Anteprima”</strong>, se disponibile, per controllare la presentazione della notizia. Verificare anche le impostazioni di visibilità nella homepage e correggere eventuali errori prima di procedere.</p>
                <p>Quando il contenuto è completo e pronto per essere reso pubblico, selezionare il pulsante <strong>“Pubblica”</strong> nel pannello di gestione della notizia. Se viene richiesta un'ulteriore conferma, controllare le impostazioni mostrate e confermare la pubblicazione. Attendere il messaggio che indica il completamento dell'operazione.</p>
                <p>Il comando è disponibile per gli utenti abilitati alla pubblicazione. Se non compare, richiedere una verifica delle autorizzazioni del proprio profilo a Point Service.</p>
                <?php ps_screenshot_placeholder('Pubblicare la notizia', 'Pannello di gestione della notizia con il pulsante “Pubblica” evidenziato.'); ?>
                <p>Dopo la pubblicazione, aprire la notizia sul sito e controllare testo, immagini, collegamenti e allegati. Verificare anche la pagina <strong>“Novità”</strong> e la homepage, in base alle opzioni selezionate. Per successive correzioni, aprire la stessa scheda e utilizzare il comando <strong>“Aggiorna”</strong>.</p>
            </section>

            <section class="guide-section" aria-labelledby="modifica-notizia">
                <?php ps_section_heading('08', 'modifica-notizia', 'Modifica di una notizia'); ?>
                <p>Dal menu laterale seleziona <strong>Notizie</strong> e poi <strong>Tutte le notizie</strong>.</p>
                <p>Individua la notizia da aggiornare nell'elenco. Puoi utilizzare il campo di ricerca oppure filtrare i contenuti disponibili, quindi seleziona il titolo della notizia o il comando <strong>Modifica</strong>.</p>
                <p>Prima di intervenire verifica di avere aperto la scheda corretta e controlla lo stato del contenuto. Aggiorna solamente i campi necessari, mantenendo coerenti titolo, testo, date, collegamenti ed eventuali allegati.</p>
                <aside class="callout"><?= ps_icon('check') ?><p><strong>Non creare una nuova notizia se devi soltanto correggere o aggiornare un contenuto gi&agrave; pubblicato.</strong></p></aside>
                <p>Salva le modifiche con il comando disponibile nella schermata. Al termine apri la notizia sul sito pubblico e verifica che le informazioni aggiornate siano visualizzate correttamente.</p>
                <?php ps_screenshot_placeholder('Modifica di una notizia esistente', 'Elenco delle notizie con il titolo della scheda e il comando “Modifica” evidenziati.'); ?>
            </section>
        </article>

        <?php require __DIR__ . '/../includes/guide-navigation.php'; ?>
    </div>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
