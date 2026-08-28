<?php

declare(strict_types=1);

$previousGuide = $previousGuide ?? null;
$nextGuide = $nextGuide ?? null;
?>
<nav class="guide-navigation" aria-label="Navigazione tra le guide">
    <div class="guide-navigation__side">
        <?php if ($previousGuide !== null): ?>
            <a href="<?= ps_escape(ps_url($previousGuide['href'])) ?>"><?= ps_icon('chevron-left') ?><span><small>Guida precedente</small><?= ps_escape($previousGuide['title']) ?></span></a>
        <?php endif; ?>
    </div>
    <a class="guide-navigation__all" href="<?= ps_escape(ps_url('index.php#guide-list')) ?>">Tutte le guide</a>
    <div class="guide-navigation__side guide-navigation__side--next">
        <?php if ($nextGuide !== null): ?>
            <a href="<?= ps_escape(ps_url($nextGuide['href'])) ?>"><span><small>Guida successiva</small><?= ps_escape($nextGuide['title']) ?></span><?= ps_icon('chevron-right') ?></a>
        <?php endif; ?>
    </div>
</nav>

