<?php

declare(strict_types=1);

$guideNumber = $guideNumber ?? '';
$guideTitle = $guideTitle ?? '';
$guideIntroduction = $guideIntroduction ?? [];
$toc = $toc ?? [];
$breadcrumbCurrent = $breadcrumbCurrent ?? $guideTitle;
?>
<?php require __DIR__ . '/breadcrumb.php'; ?>
<header class="guide-hero">
    <p class="eyebrow">Guida <?= ps_escape($guideNumber) ?></p>
    <h1><?= ps_escape($guideTitle) ?></h1>
    <div class="guide-hero__intro">
        <?php foreach ($guideIntroduction as $paragraph): ?>
            <p><?= ps_escape($paragraph) ?></p>
        <?php endforeach; ?>
    </div>
</header>
<nav class="guide-toc" aria-labelledby="toc-title">
    <div class="guide-toc__heading"><p class="eyebrow">Indice</p><h2 id="toc-title">In questa guida</h2></div>
    <ol>
        <?php foreach ($toc as $item): ?>
            <li><a href="#<?= ps_escape($item['id']) ?>"><span><?= ps_escape($item['number']) ?></span><?= ps_escape($item['title']) ?></a></li>
        <?php endforeach; ?>
    </ol>
</nav>

