<?php

declare(strict_types=1);

$breadcrumbCurrent = $breadcrumbCurrent ?? $pageTitle;
?>
<nav class="breadcrumb" aria-label="Percorso di navigazione">
    <ol>
        <li><a href="<?= ps_escape(ps_url('index.php')) ?>">Home</a></li>
        <li><a href="<?= ps_escape(ps_url('index.php#guide-list')) ?>">Guide</a></li>
        <li aria-current="page"><?= ps_escape($breadcrumbCurrent) ?></li>
    </ol>
</nav>

