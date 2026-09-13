/* Interazioni progressive: il contenuto resta leggibile senza JavaScript. */
(function () {
    'use strict';

    document.documentElement.classList.add('js');

    var guideToc = document.querySelector('.guide-toc');
    if (guideToc) {
        var tocToggle = guideToc.querySelector('.guide-toc__toggle');
        var tocLinks = Array.prototype.slice.call(guideToc.querySelectorAll('a[href^="#"]'));
        var tocTargets = tocLinks.map(function (link) {
            return { link: link, section: document.getElementById(link.hash.slice(1)) };
        }).filter(function (item) { return item.section; });
        if (tocToggle) {
            guideToc.classList.add('is-collapsed');
            tocToggle.setAttribute('aria-expanded', 'false');
            tocToggle.addEventListener('click', function () {
                var collapsed = guideToc.classList.toggle('is-collapsed');
                tocToggle.setAttribute('aria-expanded', String(!collapsed));
            });
        }
        var updateToc = function () {
            var active = tocTargets[0];
            tocTargets.forEach(function (item) {
                if (item.section.getBoundingClientRect().top <= 160) { active = item; }
            });
            tocTargets.forEach(function (item) {
                if (item === active) { item.link.setAttribute('aria-current', 'location'); }
                else { item.link.removeAttribute('aria-current'); }
            });
        };
        var tocFramePending = false;
        window.addEventListener('scroll', function () {
            if (tocFramePending) { return; }
            tocFramePending = true;
            window.requestAnimationFrame(function () { updateToc(); tocFramePending = false; });
        }, { passive: true });
        updateToc();
    }

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

    var screenshots = document.querySelectorAll('.guide-screenshot--ready');

    if (screenshots.length && typeof HTMLDialogElement !== 'undefined') {
        var galleryDialog = document.createElement('dialog');
        galleryDialog.className = 'screenshot-gallery';
        galleryDialog.setAttribute('aria-label', 'Galleria immagini della guida');
        galleryDialog.innerHTML = '<div class="screenshot-gallery__stage"><button class="screenshot-gallery__control screenshot-gallery__close" type="button" aria-label="Chiudi immagine"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6l12 12M18 6 6 18"/></svg></button><button class="screenshot-gallery__control screenshot-gallery__previous" type="button" aria-label="Immagine precedente"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m15 18-6-6 6-6"/></svg></button><figure><img alt=""><figcaption><span class="screenshot-gallery__count"></span><strong class="screenshot-gallery__title"></strong><span class="screenshot-gallery__description"></span></figcaption></figure><button class="screenshot-gallery__control screenshot-gallery__next" type="button" aria-label="Immagine successiva"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg></button></div>';
        document.body.appendChild(galleryDialog);

        var galleryImage = galleryDialog.querySelector('img');
        var galleryCount = galleryDialog.querySelector('.screenshot-gallery__count');
        var galleryTitle = galleryDialog.querySelector('.screenshot-gallery__title');
        var galleryDescription = galleryDialog.querySelector('.screenshot-gallery__description');
        var previousButton = galleryDialog.querySelector('.screenshot-gallery__previous');
        var nextButton = galleryDialog.querySelector('.screenshot-gallery__next');
        var activeGroup = [];
        var activeIndex = 0;

        var showGalleryImage = function (index) {
            activeIndex = (index + activeGroup.length) % activeGroup.length;
            var activeFigure = activeGroup[activeIndex];
            var activeImage = activeFigure.querySelector('img');
            var sectionTitle = activeFigure.closest('.guide-section').querySelector('h2');
            var caption = activeFigure.querySelector('figcaption');

            galleryImage.src = activeImage.currentSrc || activeImage.src;
            galleryImage.alt = activeImage.alt;
            galleryCount.textContent = 'Immagine ' + (activeIndex + 1) + ' di ' + activeGroup.length;
            galleryTitle.textContent = sectionTitle ? sectionTitle.textContent : 'Immagine della guida';
            galleryDescription.textContent = caption ? caption.textContent.trim() : activeImage.alt;
            previousButton.hidden = activeGroup.length < 2;
            nextButton.hidden = activeGroup.length < 2;
        };

        screenshots.forEach(function (screenshot) {
            var image = screenshot.querySelector('img');
            var fullscreenButton = document.createElement('button');

            fullscreenButton.className = 'guide-screenshot__fullscreen';
            fullscreenButton.type = 'button';
            fullscreenButton.setAttribute('aria-label', 'Apri immagine nella galleria');
            fullscreenButton.title = 'Ingrandisci immagine';
            fullscreenButton.innerHTML = '<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M8 3H3v5M16 3h5v5M8 21H3v-5M16 21h5v-5"/></svg>';
            screenshot.insertBefore(fullscreenButton, image);

            fullscreenButton.addEventListener('click', function () {
                var section = screenshot.closest('.guide-section');
                activeGroup = Array.prototype.slice.call(section.querySelectorAll('.guide-screenshot--ready'));
                showGalleryImage(activeGroup.indexOf(screenshot));
                galleryDialog.showModal();
            });
        });

        previousButton.addEventListener('click', function () { showGalleryImage(activeIndex - 1); });
        nextButton.addEventListener('click', function () { showGalleryImage(activeIndex + 1); });
        galleryDialog.querySelector('.screenshot-gallery__close').addEventListener('click', function () { galleryDialog.close(); });
        galleryDialog.addEventListener('click', function (event) {
            if (event.target === galleryDialog || event.target.classList.contains('screenshot-gallery__stage')) {
                galleryDialog.close();
            }
        });
        galleryDialog.addEventListener('keydown', function (event) {
            if (event.key === 'ArrowLeft' && activeGroup.length > 1) { showGalleryImage(activeIndex - 1); }
            if (event.key === 'ArrowRight' && activeGroup.length > 1) { showGalleryImage(activeIndex + 1); }
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

