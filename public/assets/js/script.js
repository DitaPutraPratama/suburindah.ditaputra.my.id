$(document).ready(function () {
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

    function sanitizeInput(str) {
        return String(str)
            .replace(/<[^>]*>?/gm, '') // hapus HTML tag
            .replace(/\s+/g, ' ') // ganti multiple whitespace dengan satu spasi
            .trim() // hapus spasi depan-belakang
    }

    $('#contactForm').on('submit', function (e) {
        e.preventDefault()

        // Get form values
        const name = sanitizeInput($('#name').val())
        const email = sanitizeInput($('#email').val())
        const phone = sanitizeInput($('#phone').val())
        const message = sanitizeInput($('#message').val())
        const csrfInput = $('input[type="hidden"][name^="csrf_"]')
        const captchaResponse = grecaptcha.getResponse()

        if (!captchaResponse) {
            alert('Silakan isi reCAPTCHA terlebih dahulu.')
            return
        }

        // Ambil name dan value-nya secara dinamis
        const csrfName = csrfInput.attr('name')
        const csrfHash = csrfInput.val()

        const formData = {
            name: name,
            email: email,
            phone: phone,
            message: message,
            'g-recaptcha-response': captchaResponse,
        }

        // Tambahkan CSRF ke dalam objek
        formData[csrfName] = csrfHash

        // Disable submit button and show loading state
        $('#submitBtn')
            .prop('disabled', true)
            .html('Mengirim... <i class="bi bi-hourglass-split ms-2"></i>')

        // Kirim data ke server via AJAX
        $.ajax({
            url: BASE_URL + 'sendMassage',
            method: 'POST',
            data: formData,
            success: function (response) {
                if (response.status === 'success') {
                    // Reset form
                    $('#contactForm')[0].reset()

                    // Show success message
                    $('#formSuccess')
                        .removeClass('d-none')
                        .text(response.message)

                    // Reset button
                    $('#submitBtn')
                        .prop('disabled', false)
                        .html('Kirim Pesan <i class="bi bi-send ms-2"></i>')

                    // Hide success message after 5 seconds
                    setTimeout(function () {
                        $('#formSuccess').addClass('d-none')
                    }, 5000)
                } else {
                    // Handle jika status bukan "success"
                    alert(
                        response.message || 'Terjadi kesalahan saat mengirim.'
                    )
                    $('#submitBtn')
                        .prop('disabled', false)
                        .html('Kirim Pesan <i class="bi bi-send ms-2"></i>')
                }
            },
            error: function (xhr, status, error) {
                let message = 'Terjadi kesalahan saat mengirim pesan.'

                if (
                    xhr.status === 401 &&
                    xhr.responseJSON &&
                    xhr.responseJSON.message
                ) {
                    message = xhr.responseJSON.message // Akses ditolak
                }

                alert(message)

                // Reset button
                $('#submitBtn')
                    .prop('disabled', false)
                    .html('Kirim Pesan <i class="bi bi-send ms-2"></i>')
            },
        })
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
