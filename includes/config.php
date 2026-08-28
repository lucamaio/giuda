<?php

declare(strict_types=1);

/**
 * Configurazione condivisa del mini-portale.
 * Nessun dato proviene da WordPress o da un database.
 */
$scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
$scriptDirectory = rtrim(str_replace('\\', '/', dirname($scriptName)), '/');
$basePath = basename($scriptDirectory) === 'guida'
    ? str_replace('\\', '/', dirname($scriptDirectory))
    : $scriptDirectory;

if ($basePath === '/' || $basePath === '.') {
    $basePath = '';
}

define('PS_BASE_URL', $basePath);

function ps_url(string $path = ''): string
{
    return PS_BASE_URL . ($path !== '' ? '/' . ltrim($path, '/') : '');
}

function ps_escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function ps_lower(string $value): string
{
    return function_exists('mb_strtolower')
        ? mb_strtolower($value, 'UTF-8')
        : strtolower($value);
}

$guides = [
    ['number' => '00', 'slug' => 'struttura-sito', 'title' => 'Struttura del sito', 'description' => 'Scopri come è organizzato il sito istituzionale e come sono collegati tra loro i principali contenuti.', 'icon' => 'sitemap', 'available' => false],
    ['number' => '01', 'slug' => 'notizie', 'title' => 'Notizie', 'description' => 'Come creare, compilare e pubblicare correttamente le notizie del sito istituzionale.', 'icon' => 'news', 'available' => true, 'href' => 'guida/notizie.php'],
    ['number' => '02', 'slug' => 'eventi', 'title' => 'Eventi', 'description' => 'Come pubblicare eventi e iniziative indicando correttamente date, luoghi e informazioni per i cittadini.', 'icon' => 'calendar', 'available' => true, 'href' => 'guida/eventi.php'],
    ['number' => '03', 'slug' => 'luoghi', 'title' => 'Luoghi', 'description' => 'Come creare e aggiornare le schede dei luoghi del Comune con indirizzi, accessibilità, contatti e orari.', 'icon' => 'pin', 'available' => true, 'href' => 'guida/luoghi.php'],
    ['number' => '04', 'slug' => 'documenti-pubblici', 'title' => 'Documenti pubblici', 'description' => 'Come pubblicare documenti, atti e modulistica con titoli chiari, file accessibili e informazioni complete.', 'icon' => 'document', 'available' => false],
    ['number' => '05', 'slug' => 'uffici-persone-incarichi', 'title' => 'Uffici, persone e incarichi', 'description' => 'Come organizzare uffici, persone pubbliche e incarichi, collegando correttamente ruoli, contatti e competenze.', 'icon' => 'people', 'available' => false],
    ['number' => '06', 'slug' => 'servizi', 'title' => 'Servizi', 'description' => 'Come descrivere i servizi comunali indicando destinatari, requisiti, modalità di accesso, costi e contatti utili.', 'icon' => 'services', 'available' => false],
    ['number' => '07', 'slug' => 'gallerie', 'title' => 'Gallerie', 'description' => 'Come creare raccolte di immagini ordinate, pertinenti e accessibili per raccontare attività e iniziative del Comune.', 'icon' => 'gallery', 'available' => false],
    ['number' => '08', 'slug' => 'progetti-pnrr', 'title' => 'Progetti PNRR', 'description' => 'Come pubblicare e aggiornare le schede dei progetti PNRR con obiettivi, interventi, importi e stato di avanzamento.', 'icon' => 'project', 'available' => false],
    ['number' => '09', 'slug' => 'consiglio-comunale', 'title' => 'Consiglio Comunale', 'description' => 'Come gestire le informazioni sul Consiglio Comunale, i componenti, le sedute e i contenuti istituzionali collegati.', 'icon' => 'institution', 'available' => false],
    ['number' => '10', 'slug' => 'amministrazione-trasparente', 'title' => 'Amministrazione Trasparente', 'description' => 'Come organizzare e pubblicare correttamente dati, documenti e informazioni nelle sezioni previste dalla trasparenza.', 'keywords' => 'trasparenza', 'icon' => 'shield', 'available' => false],
];
