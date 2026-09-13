<?php

declare(strict_types=1);

$guideNumber = $guideNumber ?? '';
$guideTitle = $guideTitle ?? '';
$guideIntroduction = $guideIntroduction ?? [];
$guideIntroId = $guideIntroId ?? null;
$toc = $toc ?? [];
$hasNestedToc = count(array_filter($toc, static fn (array $item): bool => !empty($item['children']))) > 0;
$breadcrumbCurrent = $breadcrumbCurrent ?? $guideTitle;
?>
<?php require __DIR__ . '/breadcrumb.php'; ?>
<header class="guide-hero"<?= $guideIntroId !== null ? ' id="' . ps_escape($guideIntroId) . '"' : '' ?>>
    <p class="eyebrow">Guida <?= ps_escape($guideNumber) ?></p>
    <h1><?= ps_escape($guideTitle) ?></h1>
    <div class="guide-hero__intro">
        <?php foreach ($guideIntroduction as $paragraph): ?>
            <p><?= ps_escape($paragraph) ?></p>
        <?php endforeach; ?>
    </div>
</header>
<nav class="guide-toc<?= $hasNestedToc ? ' guide-toc--nested' : '' ?>" aria-labelledby="toc-title">
    <div class="guide-toc__heading"><div><p class="eyebrow">Indice dei contenuti</p><h2 id="toc-title">In questa guida</h2></div><button class="guide-toc__toggle" type="button" aria-expanded="true" aria-controls="guide-toc-items" aria-label="Mostra o nascondi l’indice"><?= ps_icon('chevron-right') ?></button></div>
    <ol class="guide-toc__list" id="guide-toc-items">
        <?php foreach ($toc as $item): ?>
            <li>
                <a href="#<?= ps_escape($item['id']) ?>">
                    <?php if (($item['number'] ?? '') !== ''): ?><span><?= ps_escape($item['number']) ?></span><?php endif; ?>
                    <?= ps_escape($item['title']) ?>
                </a>
                <?php if (!empty($item['children'])): ?>
                    <ol class="guide-toc__sublist">
                        <?php foreach ($item['children'] as $child): ?>
                            <li><a href="#<?= ps_escape($child['id']) ?>"><span><?= ps_escape($child['number']) ?></span><?= ps_escape($child['title']) ?></a></li>
                        <?php endforeach; ?>
                    </ol>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ol>
</nav>

