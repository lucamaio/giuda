/* Interazioni progressive: il contenuto resta leggibile senza JavaScript. */
(function () {
    'use strict';

    document.documentElement.classList.add('js');

    var navToggle = document.querySelector('.nav-toggle');
    var navigation = document.getElementById('primary-navigation');
    var guideMenu = document.querySelector('.site-nav__group');

    if (navToggle && navigation) {
        navToggle.addEventListener('click', function () {
            var isOpen = navToggle.getAttribute('aria-expanded') === 'true';
            navToggle.setAttribute('aria-expanded', String(!isOpen));
            navigation.classList.toggle('is-open', !isOpen);
            document.body.classList.toggle('nav-open', !isOpen);

            if (isOpen && guideMenu) {
                guideMenu.open = false;
            }
        });

        navigation.addEventListener('click', function (event) {
            if (event.target.closest('a')) {
                navToggle.setAttribute('aria-expanded', 'false');
                navigation.classList.remove('is-open');
                document.body.classList.remove('nav-open');
                if (guideMenu) {
                    guideMenu.open = false;
                }
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key !== 'Escape') {
                return;
            }

            if (guideMenu && guideMenu.open) {
                guideMenu.open = false;
                guideMenu.querySelector('summary').focus();
                return;
            }

            if (navigation.classList.contains('is-open')) {
                navToggle.setAttribute('aria-expanded', 'false');
                navigation.classList.remove('is-open');
                document.body.classList.remove('nav-open');
                navToggle.focus();
            }
        });
    }

    if (guideMenu) {
        document.addEventListener('click', function (event) {
            if (guideMenu.open && !guideMenu.contains(event.target)) {
                guideMenu.open = false;
            }
        });
    }

    var guideSearch = document.querySelector('[data-guide-search]');
    var guideCards = Array.prototype.slice.call(document.querySelectorAll('[data-guide-card]'));
    var emptyState = document.querySelector('[data-empty-state]');
    var searchStatus = document.querySelector('[data-search-status]');

    if (guideSearch && guideCards.length) {
        guideSearch.addEventListener('input', function () {
            var query = guideSearch.value.trim().toLocaleLowerCase('it');
            var visibleCount = 0;

            guideCards.forEach(function (card) {
                var matches = !query || (card.dataset.searchText || '').indexOf(query) !== -1;
                card.hidden = !matches;
                if (matches) {
                    visibleCount += 1;
                }
            });

            if (emptyState) {
                emptyState.hidden = visibleCount !== 0;
            }

            if (searchStatus) {
                searchStatus.textContent = query
                    ? visibleCount + (visibleCount === 1 ? ' guida trovata.' : ' guide trovate.')
                    : 'Sono visualizzate tutte le guide.';
            }
        });
    }

    var videoDialog = document.querySelector('[data-video-dialog]');

    if (videoDialog && typeof videoDialog.showModal === 'function') {
        var videoPlayer = videoDialog.querySelector('[data-video-player]');
        var videoTitle = videoDialog.querySelector('[data-video-title]');
        var videoDescription = videoDialog.querySelector('[data-video-description]');
        var videoDirectLink = videoDialog.querySelector('[data-video-direct-link]');
        var videoClose = videoDialog.querySelector('[data-video-close]');

        document.querySelectorAll('[data-video-open]').forEach(function (opener) {
            opener.addEventListener('click', function (event) {
                event.preventDefault();

                videoTitle.textContent = opener.dataset.videoTitle || '';
                videoDescription.textContent = opener.dataset.videoDescription || '';
                videoDirectLink.href = opener.href;
                videoPlayer.poster = opener.dataset.videoPoster || '';
                videoPlayer.src = opener.href;
                videoDialog.showModal();

                var playRequest = videoPlayer.play();
                if (playRequest) {
                    playRequest.catch(function () {});
                }
            });
        });

        var resetVideoPlayer = function () {
            videoPlayer.pause();
            videoPlayer.removeAttribute('src');
            videoPlayer.load();
        };

        videoClose.addEventListener('click', function () {
            videoDialog.close();
        });

        videoDialog.addEventListener('click', function (event) {
            if (event.target === videoDialog) {
                videoDialog.close();
            }
        });

        videoDialog.addEventListener('close', resetVideoPlayer);
    }

    var backToTop = document.querySelector('.back-to-top');
    var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

    if (backToTop) {
        var updateBackToTop = function () {
            backToTop.classList.toggle('is-visible', window.scrollY > 600);
        };

        window.addEventListener('scroll', updateBackToTop, { passive: true });
        updateBackToTop();

        backToTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: reducedMotion.matches ? 'auto' : 'smooth' });
        });
    }
})();

