<?php

declare(strict_types=1);

function ps_icon(string $name, string $class = ''): string
{
    $paths = [
        'info' => '<circle cx="12" cy="12" r="9"/><path d="M12 11v6M12 7h.01"/>',
        'arrow-right' => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'calendar' => '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 10h18"/>',
        'check' => '<path d="m5 12 4 4L19 6"/>',
        'chevron-left' => '<path d="m15 18-6-6 6-6"/>',
        'chevron-right' => '<path d="m9 18 6-6-6-6"/>',
        'document' => '<path d="M6 2h8l4 4v16H6z"/><path d="M14 2v5h5M9 13h6M9 17h6"/>',
        'download' => '<path d="M12 3v12M7 10l5 5 5-5"/><path d="M5 21h14"/>',
        'external' => '<path d="M14 4h6v6M20 4l-9 9"/><path d="M18 13v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h6"/>',
        'gallery' => '<rect x="3" y="4" width="18" height="16" rx="2"/><circle cx="8.5" cy="9" r="1.5"/><path d="m4 17 5-5 4 4 2-2 5 4"/>',
        'image' => '<rect x="3" y="4" width="18" height="16" rx="2"/><circle cx="8.5" cy="9" r="1.5"/><path d="m4 17 5-5 4 4 2-2 5 4"/>',
        'institution' => '<path d="M3 21h18M5 10h14M6 10V8l6-5 6 5v2M7 14v4M12 14v4M17 14v4"/>',
        'menu' => '<path d="M4 7h16M4 12h16M4 17h16"/>',
        'mail' => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/>',
        'news' => '<path d="M5 4h14v16H5z"/><path d="M8 8h3v3H8zM14 8h2M14 11h2M8 15h8M8 18h8"/>',
        'people' => '<circle cx="9" cy="8" r="3"/><circle cx="17" cy="9" r="2"/><path d="M3 20c0-4 2.5-6 6-6s6 2 6 6M15 15c3 0 5 1.8 5 5"/>',
        'pin' => '<path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/>',
        'play' => '<circle cx="12" cy="12" r="9"/><path d="m10 8 6 4-6 4z"/>',
        'phone' => '<path d="M7 3h3l1.5 5-2 1.5a15 15 0 0 0 5 5L16 12.5l5 1.5v3c0 2-1 4-4 4C9.3 21 3 14.7 3 7c0-3 2-4 4-4Z"/>',
        'project' => '<path d="M4 4h6v6H4zM14 4h6v6h-6zM9 14h6v6H9zM7 10v2h5M17 10v2h-5"/>',
        'requests' => '<rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 14h5l2 3h4l2-3h5M8 8h8M8 11h5"/>',
        'search' => '<circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/>',
        'services' => '<path d="M12 3v18M3 12h18"/><circle cx="12" cy="12" r="8"/>',
        'shield' => '<path d="M12 3 20 6v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/><path d="m8.5 12 2.2 2.2 4.8-5"/>',
        'sitemap' => '<rect x="9" y="3" width="6" height="5" rx="1"/><rect x="3" y="16" width="6" height="5" rx="1"/><rect x="15" y="16" width="6" height="5" rx="1"/><path d="M12 8v4M6 16v-4h12v4"/>',
        'top' => '<path d="m6 14 6-6 6 6"/>',
    ];

    $path = $paths[$name] ?? $paths['document'];
    $classAttribute = $class !== '' ? ' ' . ps_escape($class) : '';
    return '<svg class="icon' . $classAttribute . '" viewBox="0 0 24 24" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">' . $path . '</svg>';
}

function ps_screenshot_placeholder(string $title, string $description): void
{
    ?>
    <figure class="guide-screenshot">
        <span class="guide-screenshot__icon"><?= ps_icon('image') ?></span>
        <figcaption>
            <span class="guide-screenshot__label">Immagine da inserire</span>
            <strong><?= ps_escape($title) ?></strong>
            <span><?= ps_escape($description) ?></span>
        </figcaption>
    </figure>
    <?php
}

function ps_section_heading(string $number, string $id, string $title): void
{
    ?>
    <header class="guide-section__heading">
        <span class="guide-section__number" aria-hidden="true"><?= ps_escape($number) ?></span>
        <h2 id="<?= ps_escape($id) ?>"><?= ps_escape($title) ?></h2>
    </header>
    <?php
}

function ps_checklist(array $items): void
{
    echo '<ul class="checklist" role="list">';
    foreach ($items as $item) {
        echo '<li>' . ps_icon('check') . '<span>' . ps_escape((string) $item) . '</span></li>';
    }
    echo '</ul>';
}
