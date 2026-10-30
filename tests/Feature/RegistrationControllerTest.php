<?php

use App\Mail\RegistrationConfirmation;
use Illuminate\Support\Facades\Mail;

it('sends a confirmation email to a valid registrant', function () {
    Mail::fake();

    $response = $this->post(route('registrations.store'), [
        'full_name' => 'Nadia Putri',
        'email' => 'nadia@example.com',
        'phone' => '08123456789',
        'quantity' => '2',
    ]);

    $response->assertRedirect(route('home'));
    $response->assertSessionHas('success');

    Mail::assertSent(
        RegistrationConfirmation::class,
        fn (RegistrationConfirmation $mail): bool => $mail->hasTo('nadia@example.com')
            && $mail->fullName === 'Nadia Putri'
            && $mail->quantity === 2
            && $mail->totalPrice === 500000,
    );
});

it('does not send a confirmation email when registration data is invalid', function () {
    Mail::fake();

    $response = $this->post(route('registrations.store'), [
        'full_name' => 'Nadia Putri',
        'email' => 'not-an-email',
        'phone' => '08123456789',
        'quantity' => '5',
    ]);

    $response->assertSessionHasErrors(['email', 'quantity']);

    Mail::assertNothingSent();
});
