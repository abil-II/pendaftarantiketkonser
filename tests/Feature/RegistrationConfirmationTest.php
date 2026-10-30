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
        ->toContain('2')
        ->toContain('Rp 500.000')
        ->toContain('08123456789');
});
