<?php

declare(strict_types=1);

$guide = $guide ?? [];
$available = (bool) ($guide['available'] ?? false);
$coverImages = [
    'notizie' => 'assets/img/guide-covers/notizie.png',
    'eventi' => 'assets/img/guide-covers/eventi.png',
    'luoghi' => 'assets/img/guide-covers/luoghi.png',
];
$coverImage = $guide['image'] ?? ($coverImages[$guide['slug'] ?? ''] ?? null);
$searchText = implode(' ', [$guide['number'] ?? '', $guide['title'] ?? '', $guide['description'] ?? '', $guide['slug'] ?? '', $guide['keywords'] ?? '']);
?>
<article class="guide-card<?= $available ? '' : ' guide-card--upcoming' ?>" data-guide-card data-search-text="<?= ps_escape(ps_lower($searchText)) ?>">
    <?php if ($coverImage !== null): ?>
        <div class="guide-card__cover">
            <img src="<?= ps_escape(ps_url($coverImage)) ?>" alt="" width="1536" height="1024" loading="lazy" decoding="async">
        </div>
    <?php endif; ?>
    <div class="guide-card__topline">
        <span class="guide-card__number"><?= ps_escape($guide['number'] ?? '') ?></span>
        <span class="guide-card__icon"><?= ps_icon($guide['icon'] ?? 'document') ?></span>
    </div>
    <h3><?= ps_escape($guide['title'] ?? '') ?></h3>
    <?php if (($guide['description'] ?? '') !== ''): ?>
        <p><?= ps_escape($guide['description']) ?></p>
    <?php else: ?>
        <p class="guide-card__reserved">Contenuto in preparazione.</p>
    <?php endif; ?>
    <div class="guide-card__action">
        <?php if ($available): ?>
            <a href="<?= ps_escape(ps_url($guide['href'])) ?>" aria-label="Apri la guida <?= ps_escape($guide['title']) ?>">Apri la guida <?= ps_icon('arrow-right') ?></a>
        <?php else: ?>
            <span class="status-badge">Prossimamente</span>
        <?php endif; ?>
    </div>
</article>
