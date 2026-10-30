<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <title>Konfirmasi Pendaftaran Senja di Kota</title>
    </head>
    <body>
        <h1>Pendaftaran berhasil, {{ $fullName }}!</h1>
        <p>Terima kasih sudah mendaftar untuk konser Senja di Kota.</p>

        <h2>Detail pendaftaran</h2>
        <ul>
            <li>Acara: Senja di Kota</li>
            <li>Tanggal: Sabtu, 28 November 2026</li>
            <li>Jumlah tiket: {{ $quantity }}</li>
            <li>Nomor WhatsApp: {{ $phone }}</li>
            <li>Total pembayaran: Rp {{ number_format($totalPrice, 0, ',', '.') }}</li>
        </ul>

        <p>Simpan email ini sebagai konfirmasi pendaftaran tiketmu.</p>
    </body>
</html>
