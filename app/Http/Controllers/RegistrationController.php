<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationConfirmation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    private const TICKET_PRICE = 250000;

    public function __invoke(Request $request): RedirectResponse
    {
        $registration = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'quantity' => ['required', 'integer', 'between:1,4'],
        ]);

        $quantity = (int) $registration['quantity'];

        Mail::to($registration['email'])->send(new RegistrationConfirmation(
            fullName: $registration['full_name'],
            phone: $registration['phone'],
            quantity: $quantity,
            totalPrice: $quantity * self::TICKET_PRICE,
        ));

        return redirect()
            ->route('home')
            ->with('success', 'Pendaftaran berhasil! Konfirmasi tiket telah dikirim ke email kamu.');
    }
}
