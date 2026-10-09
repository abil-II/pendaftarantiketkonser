<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#f7f6f2">
        <title>Daftar Tiket — Senja di Kota</title>
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="site-header">
            <a class="brand" href="/" aria-label="Nada, beranda">
                <span class="brand-mark" aria-hidden="true">n</span>
                <span>nada<span class="brand-period">.</span></span>
            </a>
            <a class="header-link" href="#daftar">Pesan tiket <span aria-hidden="true">↗</span></a>
        </header>

        <main class="page-shell">
            <div class="page-intro">
                <span class="eyebrow"><span class="live-dot"></span> PENDAFTARAN TELAH DIBUKA</span>
                <h1>Musik yang dekat,<br><span>cerita yang melekat.</span></h1>
                <p>Satu malam, banyak cerita. Amankan tempatmu di konser berikutnya.</p>
            </div>

            <div class="booking-layout">
                <section class="event-card" aria-labelledby="event-title">
                    <div class="event-art" aria-hidden="true">
                        <span class="art-sun"></span>
                        <span class="art-ring art-ring-one"></span>
                        <span class="art-ring art-ring-two"></span>
                        <span class="art-star art-star-one">✳</span>
                        <span class="art-star art-star-two">✳</span>
                        <span class="art-word">LIVE<br>TOGETHER</span>
                        <span class="art-index">N° 026</span>
                    </div>

                    <div class="event-content">
                        <span class="event-category">LIVE MUSIC · JAKARTA</span>
                        <h2 id="event-title">Senja<br>di Kota</h2>
                        <p class="event-description">Malam penuh musik dan momen yang ingin kamu ulang lagi.</p>

                        <div class="event-details">
                            <div class="detail-row">
                                <span class="detail-icon" aria-hidden="true">◷</span>
                                <span><strong>Sabtu, 28 November 2026</strong><small>17.00 WIB — selesai</small></span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-icon" aria-hidden="true">⌖</span>
                                <span><strong>Lapangan Purnawira</strong><small>Jakarta Selatan</small></span>
                            </div>
                        </div>

                        <div class="event-footer">
                            <span><span class="availability-dot"></span> Tiket masih tersedia</span>
                            <span>Usia 18+</span>
                        </div>
                    </div>
                </section>

                <section class="form-card" id="daftar" aria-labelledby="form-title">
                    <div class="form-heading">
                        <span class="step-label">SATU LANGKAH LAGI</span>
                        <h2 id="form-title">Amankan tiketmu</h2>
                        <p>Isi data diri dan kami siapkan pengalaman terbaikmu.</p>
                    </div>

                    <form id="registration-form">
                        <div class="field">
                            <label for="full-name">Nama lengkap</label>
                            <input id="full-name" name="full_name" type="text" placeholder="Nama sesuai identitas" autocomplete="name" required>
                        </div>

                        <div class="field">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" placeholder="nama@email.com" autocomplete="email" required>
                        </div>

                        <div class="field">
                            <label for="phone">Nomor WhatsApp</label>
                            <input id="phone" name="phone" type="tel" placeholder="08xx xxxx xxxx" autocomplete="tel" required>
                        </div>

                        <div class="field">
                            <label for="quantity">Jumlah tiket</label>
                            <div class="select-wrap">
                                <select id="quantity" name="quantity" aria-label="Jumlah tiket">
                                    <option value="1">1 tiket</option>
                                    <option value="2">2 tiket</option>
                                    <option value="3">3 tiket</option>
                                    <option value="4">4 tiket</option>
                                </select>
                                <span aria-hidden="true">⌄</span>
                            </div>
                        </div>

                        <div class="order-summary">
                            <div>
                                <span class="ticket-name">General Admission</span>
                                <span class="ticket-price">Rp 250.000 <span>/ tiket</span></span>
                            </div>
                            <div class="summary-total">
                                <span>Total pembayaran</span>
                                <strong id="total-price">Rp 250.000</strong>
                            </div>
                        </div>

                        <button class="submit-button" type="submit">Daftar sekarang <span aria-hidden="true">→</span></button>
                        <p class="form-note">Dengan mendaftar, kamu menyetujui syarat dan ketentuan acara.</p>
                        <p class="form-message" id="form-message" role="status" aria-live="polite" hidden></p>
                    </form>
                </section>
            </div>

            <footer class="page-footer">
                <span>© 2026 nada. Dibuat untuk momen yang berarti.</span>
                <a href="mailto:halo@nada.id">Butuh bantuan?</a>
            </footer>
        </main>
    </body>
</html>
