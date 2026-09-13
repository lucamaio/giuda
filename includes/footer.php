<?php

declare(strict_types=1);
?>
<footer class="site-footer">
    <div class="container site-footer__grid">
        <div class="site-footer__brand">
            <img src="<?= ps_escape(ps_url('assets/img/logo-point-service.png')) ?>" width="58" height="58" alt="">
            <div><strong>Point Service S.r.l.</strong><p>Guide operative per la gestione dei siti istituzionali</p></div>
        </div>
        <nav class="site-footer__nav" aria-label="Navigazione nel piè di pagina">
            <a href="<?= ps_escape(ps_url('index.php')) ?>">Home guide</a>
            <a href="<?= ps_escape(ps_url('index.php#guide-list')) ?>">Tutte le guide</a>
            <a href="<?= ps_escape(ps_url('regole-pubblicazione.php')) ?>">Regole di pubblicazione</a>
            <a href="<?= ps_escape(ps_url('video-guide.php')) ?>">Video guide</a>
            <a href="<?= ps_escape(ps_url('contatti.php')) ?>">Contatti</a>
        </nav>
        <div class="site-footer__meta"><span>Versione 2026</span><span>Copyright © <?= date('Y') ?> Point Service S.r.l.</span></div>
    </div>
</footer>
<button class="back-to-top" type="button" aria-label="Torna all'inizio della pagina"><?= ps_icon('top') ?></button>
</body>
</html>

