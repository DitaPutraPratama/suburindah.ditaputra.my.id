</main>
<footer class="app-footer">
    <!--begin::To the end-->
    <div class="float-end d-none d-sm-inline">Anything you want</div>
    <!--end::To the end-->
    <!--begin::Copyright-->
    <strong>
        Copyright &copy; 2014-2024&nbsp;
        <a href="<?= base_url() ?>" class="text-decoration-none">SUBURINDAH</a>.
    </strong>
    All rights reserved.
    <!--end::Copyright-->
</footer>
<!--end::Footer-->
</div>
<script
    src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
    integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
    crossorigin="anonymous"></script>
<!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
<!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
<script src="<?= base_url('assets/js/adminlte.js') ?>"></script>
<script>
    // Color Mode Toggler
    (() => {
        'use strict';

        const storedTheme = localStorage.getItem('theme');

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme;
            }

            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        };

        const setTheme = function(theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme);
            }
        };

        setTheme(getPreferredTheme());

        const showActiveTheme = (theme, focus = false) => {
            const themeSwitcher = document.querySelector('#bd-theme');

            if (!themeSwitcher) {
                return;
            }

            const themeSwitcherText = document.querySelector('#bd-theme-text');
            const activeThemeIcon = document.querySelector('.theme-icon-active i');
            const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`);
            const svgOfActiveBtn = btnToActive.querySelector('i').getAttribute('class');

            for (const element of document.querySelectorAll('[data-bs-theme-value]')) {
                element.classList.remove('active');
                element.setAttribute('aria-pressed', 'false');
            }

            btnToActive.classList.add('active');
            btnToActive.setAttribute('aria-pressed', 'true');
            activeThemeIcon.setAttribute('class', svgOfActiveBtn);
            const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
            themeSwitcher.setAttribute('aria-label', themeSwitcherLabel);

            if (focus) {
                themeSwitcher.focus();
            }
        };

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            if (storedTheme !== 'light' || storedTheme !== 'dark') {
                setTheme(getPreferredTheme());
            }
        });

        window.addEventListener('DOMContentLoaded', () => {
            showActiveTheme(getPreferredTheme());

            for (const toggle of document.querySelectorAll('[data-bs-theme-value]')) {
                toggle.addEventListener('click', () => {
                    const theme = toggle.getAttribute('data-bs-theme-value');
                    localStorage.setItem('theme', theme);
                    setTheme(theme);
                    showActiveTheme(theme, true);
                });
            }
        });
    })();
</script>
<!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
<!--end::OverlayScrollbars Configure-->
<!--end::Script-->
</body>
<!--end::Body-->

</html>