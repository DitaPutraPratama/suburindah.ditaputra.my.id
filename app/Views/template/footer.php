<!-- Footer -->
<footer class="footer py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <h5 class="mb-3">Subur Indah</h5>
                <p class="footer-text">Menyediakan genteng tanah liat berkualitas tinggi untuk kebutuhan atap rumah Anda. Diproduksi dengan keahlian tradisional dan teknologi modern.</p>
                <div class="social-links mt-3">
                    <a href="#" class="me-2" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="me-2" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="me-2" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <div class="col-md-4">
                <h5 class="mb-3">Tautan Cepat</h5>
                <ul class="footer-links list-unstyled">
                    <li><a href="#about" class="scroll-link">Tentang Kami</a></li>
                    <li><a href="#products" class="scroll-link">Produk</a></li>
                    <li><a href="#contact" class="scroll-link">Kontak</a></li>
                    <!-- <li><a href="#">Galeri</a></li> -->
                    <!-- <li><a href="#">FAQ</a></li> -->
                </ul>
            </div>

            <div class="col-md-4">
                <h5 class="mb-3">Hubungi Kami</h5>
                <address class="footer-text">
                    <p>
                        Wonotoko, Nadi, Desa Talesan<br>
                        Kecamatan Purwantoro, Kabupaten Wonogiri<br>
                        Jawa Tengah, Indonesia 57695
                    </p>
                    <p><strong>Telepon 1:</strong> +62 823 2906 6361</p>
                    <p><strong>Telepon 2:</strong> +62 815 4815 5073</p>
                    <p><strong>Email:</strong> info@suburindah.biz.id</p>
                </address>
            </div>
        </div>

        <div class="footer-bottom text-center mt-4 pt-4 border-top">
            <p class="mb-0">&copy; <span id="currentYear"></span> Subur Indah. Hak Cipta Dilindungi.</p>
        </div>
    </div>
</footer>
<!-- <?php if ($popups->popup) : ?>
        <style>
            .modal-dialog {
                max-width: 90vw !important;
                /* maksimal lebar modal */
            }

            .modal-content {
                background-size: cover !important;
                background-position: center !important;
                width: 100% !important;
                max-width: 600px !important;
                margin: 0 auto !important;
                aspect-ratio: 16 / 9 !important;
                /* ganti dengan rasio gambar yang sesuai */
            }

            @media (max-width: 768px) {
                .modal-content {
                    max-width: 90% !important;
                    aspect-ratio: 4 / 3 !important;
                    /* rasio gambar untuk perangkat lebih kecil */
                }
            }

            @media (max-width: 480px) {
                .modal-content {
                    max-width: 100% !important;
                    aspect-ratio: 1 / 1 !important;
                    /* rasio gambar untuk perangkat sangat kecil */
                }
            }
        </style>
        <div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-image: url('<?= $popups->gambar ?>');">
                    <div class="modal-body text-center text-white">
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var popupModal = new bootstrap.Modal(document.getElementById('popupModal'));
                popupModal.show();
            });
        </script>
        <?php endif; ?> -->
<!-- Back to Top Button -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up"></i>
</a>
<!-- <a href="https://wa.me/+6282329066361" class="wa-button d-flex align-items-center justify-content-center" target="_blank"> -->
<a href="https://wa.me/+6282329066361?text=Halo,%20saya%20ingin%20memesan%20genteng" class="wa-button d-flex align-items-center justify-content-center" target="_blank">
    <i class="bi bi-whatsapp"></i>
</a>
<!-- <a href="https://wa.me/" target="_blank">
    <button class="">
        <i
            class=" text-white" style=""></i>
        </div>
    </button>
</a> -->

<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Custom JS -->
<script src="<?= base_url('assets/js/script.js') ?>?v=<?= time() ?>"></script>
</body>

</html>