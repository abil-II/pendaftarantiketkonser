<?php

use App\Mail\RegistrationConfirmation;

it('includes the registrant and ticket details in the confirmation email', function () {
    $email = new RegistrationConfirmation(
        fullName: 'Nadia Putri',
        phone: '08123456789',
        quantity: 2,
        totalPrice: 500000,
    );

    $content = $email->render();

    expect($content)
        ->toContain('Nadia Putri')
        ->toContain('Senja di Kota')
        ->toContain('PENDAFTARAN BERHASIL')
        ->toContain('Ringkasan tiket')
        ->toContain('Sabtu, 28 November 2026')
        ->toContain('Lapangan Purnawira, Jakarta Selatan')
        ->toContain('Rp 500.000')
        ->toContain('08123456789')
        ->toContain('bukan bukti pembayaran atau tiket masuk');
});
