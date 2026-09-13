<?php

declare(strict_types=1);

$breadcrumbCurrent = $breadcrumbCurrent ?? $pageTitle;
$breadcrumbParents = $breadcrumbParents ?? [
    ['label' => 'Guide', 'href' => 'index.php#guide-list'],
];
?>
<nav class="breadcrumb" aria-label="Percorso di navigazione">
    <ol>
        <li><a href="<?= ps_escape(ps_url('index.php')) ?>">Home</a></li>
        <?php foreach ($breadcrumbParents as $breadcrumbParent): ?>
            <li><a href="<?= ps_escape(ps_url($breadcrumbParent['href'])) ?>"><?= ps_escape($breadcrumbParent['label']) ?></a></li>
        <?php endforeach; ?>
        <li aria-current="page"><?= ps_escape($breadcrumbCurrent) ?></li>
    </ol>
</nav>

