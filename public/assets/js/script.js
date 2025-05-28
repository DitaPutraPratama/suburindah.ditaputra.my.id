$(document).ready(function () {
    // Google reCAPTCHA
    function onSubmit(token) {
        $('#contactForm').submit()
    }

    // Define base URL
    const BASE_URL = window.location.origin + '/'
    // Set current year in footer
    $('#currentYear').text(new Date().getFullYear())

    // Navbar scroll effect
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.wa-button').addClass('visible')
            $('.navbar-toggler')
                .removeClass('navbar-toggler-white')
                .addClass('navbar-toggler-dark')
            $('#mainHeader').addClass('scrolled')
            $('#logo').attr('src', BASE_URL + 'assets/images/nav1.png')
            $('.navbar-brand')
                .removeClass('navbar-brand-color-white')
                .addClass('navbar-brand-color-dark')
            $('.nav-link')
                .removeClass('nav-link-white')
                .addClass('nav-link-dark')
        } else {
            $('.wa-button').removeClass('visible')
            $('.navbar-toggler')
                .removeClass('navbar-toggler-dark')
                .addClass('navbar-toggler-white')
            $('.navbar-brand')
                .removeClass('navbar-brand-color-dark')
                .addClass('navbar-brand-color-white')
            $('.nav-link')
                .removeClass('nav-link-dark')
                .addClass('nav-link-white')
            $('#logo').attr('src', BASE_URL + 'assets/images/nav2.png')
            $('#mainHeader').removeClass('scrolled')
        }

        // Back to top button visibility
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').addClass('active')
            $('.wa-button').addClass('visible')
        } else {
            $('.wa-button').removeClass('visible')
            $('.back-to-top').removeClass('active')
        }
    })

    // Smooth scrolling for anchor links
    $('.scroll-link').on('click', function (e) {
        e.preventDefault()

        // Close mobile menu if open
        $('.navbar-collapse').collapse('hide')

        // Get the target section
        const target = $(this).attr('href')

        // Calculate position with offset for fixed header
        const headerHeight = $('#mainHeader').outerHeight()
        const targetPosition = $(target).offset().top - headerHeight

        // Animate scroll
        $('html, body').animate(
            {
                scrollTop: targetPosition,
            },
            800,
            'swing'
        )
    })

    // Back to top button click
    $('.back-to-top').on('click', function (e) {
        e.preventDefault()
        $('html, body').animate(
            {
                scrollTop: 0,
            },
            800,
            'swing'
        )
    })

    // Contact form submission
    $('#contactForm').on('submit', function (e) {
        e.preventDefault()

        // Get form values
        const name = $('#name').val()
        const email = $('#email').val()
        const phone = $('#phone').val()
        const message = $('#message').val()

        // Disable submit button and show loading state
        $('#submitBtn')
            .prop('disabled', true)
            .html('Mengirim... <i class="bi bi-hourglass-split ms-2"></i>')

        // Simulate form submission with delay
        setTimeout(function () {
            // Reset form
            $('#contactForm')[0].reset()

            // Show success message
            $('#formSuccess').removeClass('d-none')

            // Reset button
            $('#submitBtn')
                .prop('disabled', false)
                .html('Kirim Pesan <i class="bi bi-send ms-2"></i>')

            // Hide success message after 5 seconds
            setTimeout(function () {
                $('#formSuccess').addClass('d-none')
            }, 5000)
        }, 1500)
    })

    // Initialize Bootstrap tooltips
    const tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    )
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    // Product carousel custom navigation for mobile
    $('#productCarousel').carousel({
        interval: 5000,
        touch: true,
    })

    // Prevent default behavior for empty links
    $('a[href="#"]').on('click', function (e) {
        e.preventDefault()
    })

    // aside menu
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper'
    const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
    }
    $(document).ready(function () {
        const $sidebarWrapper = $(SELECTOR_SIDEBAR_WRAPPER)
        if (
            $sidebarWrapper.length &&
            typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined'
        ) {
            OverlayScrollbarsGlobal.OverlayScrollbars($sidebarWrapper[0], {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },
            })
        }
    })
})
